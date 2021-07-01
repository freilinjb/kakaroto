        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="views/assets/index3.html" class="brand-link">
                <img src="views/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Ventas - CRACKS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="home" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    MANTENIMIENTO
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/ventas_crack/index.php?route=adminEmpleado" <?php if ($_GET['route'] == "adminEmpleado") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. Empleados</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ventas_crack/index.php?route=clientes" <?php if ($_GET['route'] == "clientes") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ventas_crack/index.php?route=provedores" <?php if ($_GET['route'] == "provedores") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. Provedores</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="/ventas_crack/index.php?route=administracionProductos" <?php if ($_GET['route'] == "administracionProductos") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. Productos</p>
                                    </a>
                                </li> -->




                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-chart-pie"></i>
                                        <p>
                                            PRODUCTO
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/ventas_crack/index.php?route=adminEmpleado" <?php if ($_GET['route'] == "adminEmpleado") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p> Producto</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/ventas_crack/index.php?route=adminUnidad" <?php if ($_GET['route'] == "clientes") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p> Unidad</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/ventas_crack/index.php?route=categoria" <?php if ($_GET['route'] == "categoria") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p> Categoria</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/ventas_crack/index.php?route=administracionProductos" <?php if ($_GET['route'] == "administracionProductos") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p> Sub Categoria</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>















                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Admin Pedidos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="administracionUsuarios" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Adm. de usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="clientes" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar cliente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="employee" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. de empleados</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Admin Compras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/ventas_crack/index.php?route=adminCompra" <?php if ($_GET['route'] == "adminCompra") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin. Compra</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

            <div class="sidebar-custom">
                <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
                <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
            </div>
            <!-- /.sidebar-custom -->
        </aside>