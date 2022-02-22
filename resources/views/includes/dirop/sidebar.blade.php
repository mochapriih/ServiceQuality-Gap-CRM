<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route ('dirop-dashboard')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BPR Bina Maju Usaha</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route ('dirop-dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-home"></i>
            <span>Landing Page</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list"></i>
            <span>Data Keluhan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Keluhan</h6>
                <a class="collapse-item" href="{{route ('keluhandirop.index')}}">Daftar Keluhan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNasabah"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Data Nasabah</span>
        </a>
        <div id="collapseNasabah" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Nasabah</h6>
                <a class="collapse-item" href="{{route ('datanasabah.index')}}">Data Nasabah</a>
                <a class="collapse-item" href="{{route ('nasabahdeposito.index')}}">Nasabah Deposito</a>
                <a class="collapse-item" href="{{route ('nasabahkredit.index')}}">Nasabah Kredit</a>
                <a class="collapse-item" href="{{route ('nasabahtabungan.index')}}">Nasabah Tabungan</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route ('datakaryawan.index')}}" aria-expanded="true">
            <i class="fas fa-users"></i>
            <span>Data Karyawan</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePromo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-atom"></i>
            <span>Data Promo</span>
        </a>
        <div id="collapsePromo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Promo</h6>
                <a class="collapse-item" href="{{route ('promo.index')}}">Data Promo</a>
                <a class="collapse-item" href="{{route ('promodeposito.index')}}">Promo Deposito</a>
                <a class="collapse-item" href="{{route ('promokredit.index')}}">Promo Kredit</a>
                <a class="collapse-item" href="{{route ('promotabungan.index')}}">Promo Tabungan</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
            <span>Data Pengguna</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Pengguna:</h6>
                <a class="collapse-item" href="{{route ('datausernasabah.index')}}">Data User Nasabah</a>

            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kuesioner
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Pertanyaan Kuesioner</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route ('kuesionercs.index')}}">Kuesioner CS</a>
                <a class="collapse-item" href="{{route ('kuesionerkredit.index')}}">Kuesioner Kredit</a>
                <a class="collapse-item" href="{{route ('kuesionerteller.index')}}">Kuesioner Teller</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJawaban"
            aria-expanded="true" aria-controls="collapseJawaban">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Hasil Kuesioner</span>
        </a>
        <div id="collapseJawaban" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route ('hasilkuesionercs.index')}}">Kuesioner CS</a>
                <a class="collapse-item" href="{{route ('hasilkuesionerkredit.index')}}">Kuesioner Kredit</a>
                <a class="collapse-item" href="{{route ('hasilkuesionerteller.index')}}">Kuesioner Teller</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->