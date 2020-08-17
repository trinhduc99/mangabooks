<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Mangement Book</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}"
                     class="img-circle elevation-2"
                     alt="User Image">
            </div>
            @php
                $id= auth()->id();
                $user= \App\User::find($id);
            @endphp
            <div class="info">

                <h2><a href="{{route('home')}}" class="d-block">{{$user->name}}</a></h2>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">
                            </i>
                            <span>Dashboard</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    @can('user-list')
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-cog">
                        </i>
                        <p>
                            <span>User Management</span>
                            <i class="right fa fa-fw fa-angle-left"></i>
                        </p>
                    </a>
                    @endcan
                    <ul class="nav nav-treeview">
                        @can('user-list')
                            <li class="nav-item">
                                <a href="{{route('users.index')}}" class="nav-link ">
                                    <i class="fa-fw fas fa-user">
                                    </i>
                                    <p>
                                        <span>Users</span>
                                    </p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Category Book
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Product Book
                        </p>
                    </a>
                </li>
                <li class="nav-item" >
                    <a href="" class="nav-link"
                       id="logout"
                      >
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">
                            </i>
                            <span>Log out</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

