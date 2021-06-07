<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        {{--<img src="/img/crm.png" alt="Logo" class="brand-image img-circle elevation-3"--}}
             {{--style="opacity: .8">--}}
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="екгу">

                <li class="nav-item">
                    <a href="/info/homepage" class="nav-link {{ Request::is('info/homepage*')||Request::is('/') ? 'active' : '' }}">
                        <div class="nav-icon fas fa-home"></div>
                        <p>
                            Главная
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/products" class="nav-link  {{ Request::is('info/products*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Продукты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/companies" class="nav-link  {{ Request::is('info/companies*') ? 'active' : '' }}">
                        <i class="nav-icon fas  fa-user-tie"></i>
                        <p>
                            Поставщики
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/prices" class="nav-link  {{ Request::is('info/prices*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Цены на продукты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/secondary" class="nav-link  {{ Request::is('info/secondary*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            таблицы
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/brands" class="nav-link  {{ Request::is('info/brands*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Бренды
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/magazines" class="nav-link  {{ Request::is('info/magazines*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>
                            Интернет магазины
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/info/import" class="nav-link  {{ Request::is('info/import*') ? 'active' : '' }}">
                        <i class="nav-icon fas  fa-file-upload"></i>
                        <p>
                            Импорт
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/xls/{{rand(1,3)}}.xls" class="nav-link  {{ Request::is('info/export*') ? 'active' : '' }}">
                        <i class="nav-icon fas  fa-file-download"></i>
                        <p>
                            Экспорт
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>