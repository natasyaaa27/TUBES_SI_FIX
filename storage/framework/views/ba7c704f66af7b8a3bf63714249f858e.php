<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>PT Gajah Tunggal Tbk | Dashboard</title>

    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(url('CSS/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('CSS/style.css')); ?>">
</head>

<body>
    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    PT Gajah Tunggal Tbk
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>">
                        <span class="material-icons-outlined">dashboard</span> Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('barang.index')); ?>">
                        <span class="material-icons-outlined">shopping_cart</span> Product
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('kategori_barang.index')); ?>">
                        <span class="material-icons-outlined">add_shopping_cart</span> Product Category
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('stok_barang.index')); ?>">
                        <span class="material-icons-outlined">shopping_cart_checkout</span> Product Stock
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('gudang.index')); ?>">
                        <span class="material-icons-outlined">inventory</span> Inventory
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('outlet.index')); ?>">
                        <span class="material-icons-outlined">store</span> Outlet
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('bahan_baku.index')); ?>">
                        <span class="material-icons-outlined">notification_important</span> Raw Material
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('tenaga_kerja.index')); ?>">
                        <span class="material-icons-outlined">group</span> Labor
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('produksi.index')); ?>">
                        <span class="material-icons-outlined">storefront</span> Production
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('biaya_produksi.index')); ?>">
                        <span class="material-icons-outlined">payments</span> Production Cost
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('stok_produksi.index')); ?>">
                        <span class="material-icons-outlined">inventory_2</span> Production Stock
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('pegawai.index')); ?>">
                        <span class="material-icons-outlined">supervisor_account</span> Employee
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('pembeli.index')); ?>">
                        <span class="material-icons-outlined">person</span> Client
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a class="nav-link" href="<?php echo e(route('pengguna.index')); ?>">
                        <span class="material-icons-outlined">person</span> User
                    </a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo e(url('JS/dashboard.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/template.blade.php ENDPATH**/ ?>