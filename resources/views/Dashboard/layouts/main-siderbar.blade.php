 
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  " id="sidenav-main" style="background-color:#264653;">

    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2  text-xs text-white font-weight-bolder opacity-8">Dashboards</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="/dash">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="/home">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i>
                    </div>
                
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

        @can('Profile')
            <li class="nav-item">
                <a class="nav-link text-white" href="/Profile/index">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_circle</i> 
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        @endcan


        @can('Admin_Books')
            <li class="nav-item">
                <a class="nav-link text-white" href="/Dashboard/Books">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">menu_book</i>
                    </div>
                    <span class="nav-link-text ms-1">Books</span> 
                </a>
            </li>
        @endcan

        @can('User_Books')
            <li class="nav-item">
                <a class="nav-link text-white" href="/UserBorrowed">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">menu_book</i>
                    </div>
                    <span class="nav-link-text ms-1">Books</span> 
                </a>
            </li>
        @endcan


        @can('Users')
            <li class="nav-item">
                <a class="nav-link text-white " href="/Dashboard/Users">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
        @endcan

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">User Settings</h6>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Log out</span>
                    
                    
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </li>
  
        </ul>
    </div>

</aside>