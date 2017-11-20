<nav class="menu">
    <ul class="sidebar-menu metismenu" id="sidebar-menu">
        <li class="@yield('menu_customer','')">
            <a href="customer">
                <i class="fa fa-home"></i> Clientes </a>
        </li>
        <li class="@yield('menu_provider','')">
            <a href="provider">
                <i class="fa fa-th-large"></i> Proveedores
                <i class="fa arrow"></i>
            </a>

        </li>
        <li class="@yield('menu_article','')">
            <a href="article">
                <i class="fa fa-home"></i> Articulos  </a>
        </li>
        <li class="@yield('menu_sale','')">
            <a href="sale">
                <i class="fa fa-home"></i> Venta  </a>
        </li>
        <li class="@yield('menu_catalog','')">
            <a href="index.html">
                <i class="fa fa-home"></i> Catalogo  </a>
        </li>
        <li class="@yield('menu_warehouse','')">
            <a href="/warehouse">
                <i class="fa fa-th-large"></i> Almacenes
            </a>

        </li>

       
    </ul>
</nav>
