<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar">
    <ul class="side-menu toggle-menu">
        <li><h3>Principal</h3></li>
        <li>
            <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fas fa-home"></i><span class="side-menu__label">Inicio</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fas fa-user-cog"></i><span class="side-menu__label">Admin</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="{{ Route('admin-index') }}"><span>Inicio</span></a></li>
                <li><a class="slide-item"  href="{{ Route('admin-create') }}"><span>Cadastro de mod</span></a></li>
                <li><a class="slide-item"  href="index.html"><span>Mods aprovados</span></a></li>
            </ul>
        </li>
        <li><h3>Categorias</h3></li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><img src="{{ mix('/images/gta5.png') }}" class="rounded-circle user_img mr-1" style="width: 30px; height: 30px;" ></i> <span class="side-menu__label">GTA 5</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="tables.html" class="slide-item">Default table</a></li>
                <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><img src="{{ mix('/images/gtasa.png') }}" class="rounded-circle user_img mr-1" style="width: 30px; height: 30px;" ></i> <span class="side-menu__label">GTA SA</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="tables.html" class="slide-item">Default table</a></li>
                <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><img src="{{ mix('/images/ets2.png') }}" class="rounded-circle user_img mr-1" style="width: 30px; height: 30px;" ></i> <span class="side-menu__label">Euro truck</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="tables.html" class="slide-item">Default table</a></li>
                <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><img src="{{ mix('/images/gta4.ico') }}" class="rounded-circle user_img mr-1" style="width: 30px; height: 30px;" ></i> <span class="side-menu__label">GTA 4</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="tables.html" class="slide-item">Default table</a></li>
                <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--sidemenu end-->