<div class="modal fade text-left" id="change-pw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Ganti Password</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('change.password') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="old_pw">Password Aktif</label>
                    <div class="form-group">
                        <input name="old_pw" id="old_pw" type="password" placeholder="******" class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="password">Password Baru</label>
                    <div class="form-group">
                        <input name="password" id="password" type="password" placeholder="******" class="form-control">
                    </div>
                </div>
                <div class="modal-body">
                    <label for="confirm_password">Konfirmasi Password Baru</label>
                    <div class="form-group">
                        <input name="confirm_password" id="confirm_password" type="password" placeholder="******"
                            class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Konfirmasi</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
