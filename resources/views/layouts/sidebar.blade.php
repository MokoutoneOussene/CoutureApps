<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2"> Dressmakers </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('accueil')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fonctionnalite 1
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion_clients.create')}}">
            <i class="fas fa-users fa-chart-area"></i>
            <span>Gestion des clients</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-modeles.index')}}">
            <i class="fas fa-tshirt fa-chart-area"></i>
            <span>Gestion des modeles</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fonctionnalite 2
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-mesures.create')}}">
            <i class="fas fa-clipboard-list fa-chart-area"></i>
            <span>Gestion des mesures</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-payement.index')}}">
            <i class="fas fa-dollar-sign fa-chart-area"></i>
            <span>Gestion Payements</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-rdv.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Gestion Rendez-vous</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-depense.index')}}">
            <i class="fas fa-dollar-sign fa-dollar-sign"></i>
            <span>Gestion Depenses</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gestion-personnel.index')}}">
            <i class="fas fa-users fa-table"></i>
            <span>Gestion personnel</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <p class="text-center mb-2"><strong>Logiciel developpé par :</strong> </p>
        <p class="text-center mb-2"><strong>{{date('Y')}} Tout droit reservé</strong> </p>
        <img class="sidebar-card-illustration w-100 h-100 mb-2" src="{{asset('assets/img/logo-rate.jpeg')}}" alt="">
    </div>
</ul>
<!-- End of Sidebar -->
