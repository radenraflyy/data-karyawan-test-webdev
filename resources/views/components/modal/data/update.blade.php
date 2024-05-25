<div class="modal fade text-left" id="update{{ $karyawan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="overflow-y-scroll modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update data Karyawan</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('employee.update', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="name_karyawan">Name Karyawan</label>
                    <div class="form-group">
                        <input name="name_karyawan" id="name_karyawan" value="{{ $karyawan->name_karyawan }}"
                            type="text" placeholder="Example: Raden Rafly" class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="ttl">Tanggal Lahir</label>
                    <div class="form-group">
                        <input name="ttl" id="ttl" type="date" value="{{ $karyawan->tanggal_lahir }}"
                            placeholder="Tanggal Lahir" class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                        <input name="alamat" id="alamat" type="text" placeholder="{{ $karyawan->alamat }}"
                            class="form-control" value="{{ $karyawan->alamat }}">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="foto">Foto</label>
                    <div class="form-group">
                        <input name="foto" id="foto" type="file" placeholder="Example: Rak Buku 1"
                            class="form-control" value="{{ $karyawan->foto }}">
                    </div>
                    <img height="100" width="100" class="mt-2"
                        src="{{ (file_exists(public_path('foto/employees/' . $karyawan->foto)) ? url('foto/employees/' . $karyawan->foto) : $karyawan->foto) }}" alt="...">
                </div>
                <div class="modal-body">
                    <label for="foto">Status Pernikahan</label>
                    <div class="form-control">
                        <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option hidden selected value="{{ $karyawan->status_pernikahan }}">
                                {{ $karyawan->status_pernikahan }}
                            </option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Update</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
