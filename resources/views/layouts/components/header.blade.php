<header class="header header-sticky mb-4">
    <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">

        <img src="img/menus.png"  />

    </button><a class="header-brand d-md-none" href="#">
    <svg width="118" height="46" alt="CoreUI Logo">
    <use xlink:href="assets/brand/coreui.svg#full"></use>
    </svg></a>
    <ul class="header-nav d-none d-md-flex">
    <li class="nav-item"><a class="nav-link" href="{{url('index')}}">Inicio</a></li>
    </ul>
    <nav class="header-nav ms-auto me-4">
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
    <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off" value="light" onchange="handleThemeChange(this)">
    <label class="btn btn-primary" for="btn-light-theme">

        <img src="img/light.png"  />

    </label>
    <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off" value="dark" onchange="handleThemeChange(this)">
    <label class="btn btn-primary" for="btn-dark-theme">

        <img src="img/dark.png"  />

    </label>
    </div>
    </nav>


    <ul class="header-nav me-3">

    <ul class="header-nav me-4">
    <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <div class="avatar avatar-md"><img class="avatar-img" src="img/usuario.png"  alt="user@email.com"></div>
    </a>
    <div class="dropdown-menu dropdown-menu-end pt-0">
    <div class="dropdown-header bg-light py-2">
    <div class="fw-semibold">Account</div>
    </div><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
    </svg> Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
    </svg> Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
    </svg> Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
    </svg> Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
    <div class="dropdown-header bg-light py-2">
    <div class="fw-semibold">Settings</div>
    </div><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
    </svg> Profile</a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
    </svg> Settings</a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
    </svg> Payments<span class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
    </svg> Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
    <svg class="icon me-2">
     <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
    </svg> Lock Account</a><a class="dropdown-item" href="#">
    <svg class="icon me-2">
    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
    </svg> Logout</a>
    </div>
    </li>
    </ul>
    </div>
    <div class="header-divider"></div>
    </header>
