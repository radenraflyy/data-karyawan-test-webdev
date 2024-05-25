<?php

namespace App\Http\Controllers;

use App\Exports\EmployeesExport;
use App\Models\employees;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use function PHPUnit\Framework\fileExists;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = employees::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btnEdit = '<button data-bs-toggle="modal" data-bs-target="#update' . $row->id . '"class="edit mr-6 btn btn-warning text-white m-sm-10" style="margin-right: 10px;"><i class="fa-solid fa-pen-to-square"></i></button>';
                    $btnDelete = '<button data-bs-toggle="modal" data-bs-target="#delete' . $row->id . '" class="edit btn btn-danger ml-3"><i class="fa-solid fa-trash"></i></button>';
                    $action = $btnEdit . $btnDelete;

                    // Modal UPDATE dan DELETE Start                    
                    $modalDelete = view('components.modal.data.delete', ['karyawan' => $row])->render();
                    $modalUpdate = view('components.modal.data.update', ['karyawan' => $row])->render();
                    // Modal UPDATE dan DELETE End                    

                    return $action . $modalDelete . $modalUpdate;
                })
                ->addColumn('foto', function ($row) {
                    return '<img src="' . (file_exists(public_path('foto/employees/' . $row->foto)) ? url('foto/employees/' . $row->foto) : $row->foto) . '" alt="Foto" height="200" width="200" class="m-auto"/>';
                })
                ->rawColumns(['action', 'foto'])
                ->make(true);
        }

        return view('pages.data.app');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_karyawan' => 'required|min:3|max:255',
            'ttl' => 'required',
            'alamat' => 'required|min:3|max:255',
            'status_pernikahan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048',
        ]);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('foto/employees'), $file_name);
        }

        $body = [
            'name_karyawan' => $request->name_karyawan,
            'tanggal_lahir' => $request->ttl,
            'alamat' => $request->alamat,
            'status_pernikahan' => $request->status_pernikahan,
            'foto' => $file_name,
        ];
        employees::create($body);
        return redirect()->back()->with('success', 'Berhasil Menambah Data Karyawan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_karyawan' => 'required|min:3|max:255',
            'ttl' => 'required',
            'alamat' => 'required|min:3|max:255',
            'status_pernikahan' => 'required',
        ]);

        $employee = employees::findOrFail($id);

        $file_name = $employee->foto;

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('foto/employees'), $file_name);

            if ($employee->foto && fileExists(public_path('foto/employees/' . $employee->foto))) {
                unlink(public_path('foto/employees/' . $employee->foto));
            }
        }

        $body = [
            'name_karyawan' => $request->name_karyawan,
            'tanggal_lahir' => $request->ttl,
            'alamat' => $request->alamat,
            'status_pernikahan' => $request->status_pernikahan,
            'foto' => $file_name,
        ];
        employees::where('id', $id)->update($body);
        return redirect()->back()->with('success', 'Berhasil update data ' . $employee->name_karyawan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = employees::findOrFail($id);
        if ($employee) {
            unlink(public_path('foto/employees/' . $employee->foto));
            $employee->delete();
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data ' . $employee->name_karyawan);
    }

    public function export()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

    public function print()
    {
        $data = employees::all();
        $pdf = Pdf::loadView('print.employees', [
            'data' => $data,
        ]);
        return $pdf->download('employees.pdf');
    }
}
