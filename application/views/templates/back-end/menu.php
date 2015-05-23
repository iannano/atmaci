<div class="ui menu" id="main-menu">
    <a class="active purple item" href="<?php echo base_url();?>index.php/halaman_utama/">
        <i class="home icon"></i> Home
    </a>
    <div class="ui pointing dropdown link item">
        <i class="user icon"></i>
        <span class="text">Data Master</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="header">Primary</div>
            <a class="item" href="<?php echo base_url(); ?>index.php/sisfo/master_provinsi">Provinsi</a>
            <a class="item" href="<?php echo base_url(); ?>index.php/sisfo/master_kota">Kota</a>
            <a class="item" href="#">Jenis Member</a>
            <a class="item" href="#">Hak Akses</a>
            <div class="divider"></div>
            <div class="header">Secondary</div>
            <a class="item" href="#">Data Member Atma</a>
            <a class="item" href="#">Bank Soal Atma</a>
            <a class="item" href="#">Pegawai</a>
            <a class="item" href="#">Member</a>
            <a class="item" href="#">Siswa</a>
        </div>
    </div>
    <div class="ui pointing dropdown link item">
        <i class="book icon"></i>
        <span class="text">Transaksi</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="#">Pembayaran</a>
            <a class="item" href="#">Testimoni</a>
        </div>
    </div>
    <div class="ui pointing dropdown link item">
        <i class="book icon"></i>
        <span class="text">Laporan</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="#">Laporan Pembayaran</a>
        </div>
    </div>
    <div class="right menu">
        <a class="purple item" href="<?php echo base_url(); ?>index.php/halaman_utama/login">
            <i class="lock icon"></i> Logout
        </a>
    </div>
</div>