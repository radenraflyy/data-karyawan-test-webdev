<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah data Karyawan</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('employee.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="name_karyawan">Name Karyawan</label>
                    <div class="form-group">
                        <input name="name_karyawan" id="name_karyawan" type="text" placeholder="Example: Raden Rafly"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="ttl">Tanggal Lahir</label>
                    <div class="form-group">
                        <input name="ttl" id="ttl" type="date" placeholder="Example: Rak Buku 1"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" type="text" placeholder="Example: Jl.Raya"
                            class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-body">
                    <label for="foto">Foto</label>
                    <div class="form-group">
                        <input name="foto" id="foto" type="file" placeholder="Example: Rak Buku 1"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="foto">Status Pernikahan</label>
                    <div class="form-control">
                        <select class="form-control" name="status_pernikahan" id="status_pernikahan">
                            <option hidden>Pilih Status Pernikahan</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Keluar</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
