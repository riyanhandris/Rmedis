<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{ request()->is('dashboard') ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="{{ request()->is(['dokter', 'dokter/addDokter']) ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/dokter">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dokter</span></a>
    </li>

    <li class="{{ request()->is(['pasien', 'pasien/addPasien', 'pasien/detail/{id}']) ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pasien</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>