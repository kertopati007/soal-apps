        <div class="sidebar-area --bs-grey-10" id="sidebar-area">
            <div class="logo position-relative">
                <a href="{{ route('dashboard.index')}}" class="d-block text-decoration-none position-relative">
                    <img src={{asset("assets/images/logoBB.png")}} style="width:150px;" alt="logo-icon">
                </a>
            </div>

            <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
                <ul class="menu-inner">
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text ">MAIN</span>
                    </li>

                    @php
                    $user = Auth::user();
                    @endphp

                    @if($user && $user->role === 'admin')
                    <!-- <li class="menu-item open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle active">
                            <span class="material-symbols-outlined menu-icon">dashboard</span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li> -->

                    <li class="menu-item">
                        <a href="{{route('books.index')}}" class="menu-link active">
                            <span class="material-symbols-outlined menu-icon">newsstand</span>
                            <span class="title">Daftar Buku</span>
                        </a>
                    </li>

                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">Setting</span>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('user.index')}}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">person</span>
                            <span class="title">Setting Profile</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('logout') }}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">logout</span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                    @elseif($user && $user->role === 'user')
                    <li class="menu-item">
                        <a href="{{route('books.index')}}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">Book</span>
                            <span class="title">Daftar Buku</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('logout') }}" class="menu-link">
                            <span class="material-symbols-outlined menu-icon">logout</span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </aside>
        </div>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>