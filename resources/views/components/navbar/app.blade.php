<div class="w-full shadow-md">
    <nav class="flex flex-wrap justify-center md:justify-between gap-3 items-center px-7 py-4">
        <div class="flex gap-3 items-center">
            <i class="fa-solid fa-user" style="color: rgb(28, 201, 201); font-size: 26px"></i>
            <h2 class="text-xl font-bold text-cyan-600 mb-0">Data Pegawai</h2>
        </div>
        <div>
            <div class="flex flex-wrap justify-center items-center gap-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah"
                    class="border-2 focus:outline-none hover:bg-cyan-600 text-cyan-700 hover:text-white focus:ring-4 focus:ring-cyan-100 font-medium rounded-md text-sm px-3 py-2.5 me-2 dark:border-cyan-600 dark:hover:border-cyan-600 dark:focus:ring-cyan-700"><i
                        class="fa-solid fa-plus"></i> Tambah</button>
                <form action="{{ route('employees.print') }}" method="GET">
                    @csrf
                    <button type="submit"
                        class="border-2 focus:outline-none hover:bg-yellow-400 text-yellow-400 hover:text-white focus:ring-4 focus:ring-yellow-100 font-medium rounded-md text-sm px-4 py-2.5 dark:border-yellow-400 dark:hover:border-yellow-400 dark:focus:ring-yellow-400"><i
                            class="fa-solid fa-print"></i> Cetak</button>
                </form>

                <form action="{{ route('employees.export') }}" method="GET">
                    @csrf
                    <button type="submit"
                        class="border-2 focus:outline-none hover:bg-green-600 text-green-600 hover:text-white focus:ring-4 focus:ring-green-100 font-medium rounded-md text-sm px-4 py-2.5 dark:border-green-600 dark:hover:border-green-600 dark:focus:ring-green-700"><i
                            class="fa-solid fa-file-arrow-down"></i> Export</button>
                </form>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Profile
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item cursor-pointer">{{ Auth::user()->username }}</a></li>
                        <li><a data-bs-toggle="modal" data-bs-target="#change-pw" class="dropdown-item"
                                href="#">Ganti Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('doLogout') }}" method="get">
                                @csrf
                                <button class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
@include('components.modal.data.create')
@include('components.modal.auth.change-password')
