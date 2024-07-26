<!-- Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="assets/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama']; ?></div>
            <div class="email"><?php echo $_SESSION['email']; ?></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="index.php"><i class="material-icons">home</i><span>Home</span></a></li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">view_module</i><span>Data Master</span></a>
                <ul class="ml-menu">
                    <li><a href="?page=barang"><i class="material-icons">view_list</i><span>Barang</span></a></li>
                    <li><a href="?page=supplier"><i class="material-icons">supervisor_account</i><span>Supplier</span></a></li>
                    <li><a href="?page=konsumen"><i class="material-icons">person</i><span>Konsumen</span></a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">shopping_cart</i><span>Transaksi</span></a>
                <ul class="ml-menu">
                    <li><a href="?page=pembelian"><i class="material-icons">shopping_cart</i><span>Pembelian</span></a></li>
                    <li><a href="?page=penjualan&kodepj=<?php echo $kode; ?>"><i class="material-icons">shopping_cart</i><span>Penjualan</span></a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">assignment</i><span>Laporan</span></a>
                <ul class="ml-menu">
                    <li><a href="?page=laporan_pembelian"><i class="material-icons">picture_as_pdf</i><span>Laporan Pembelian</span></a></li>
                    <li><a href="?page=laporan_penjualan"><i class="material-icons">picture_as_pdf</i><span>Laporan Penjualan</span></a></li>
                </ul>
            </li>
            <li><a href="?page=user"><i class="material-icons">person</i><span>User</span></a></li>
            <li><a href="?page=about"><i class="material-icons">info</i><span>About</span></a></li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2024 <a href="javascript:void(0);">Your Company</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Sidebar -->