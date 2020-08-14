<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #343434 10%, #00ff55 100% ) !important;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-bicycle"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Bisikletçim Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/index.php"?>">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Anasayfa</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Bisikletler</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bisikletler:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Bisikleti Tamir Olacaklar</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bisikleti Tamir Olacaklar :</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Bisiklet Dışı İşlemler</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bisiklet Dışı İşlemler:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/duzen.php"?>>Düzenle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Çalışanlar</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Çalışanlar:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/duzen.php"?>>Düzenle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Ödeme Bilgileri</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ödeme Bilgileriı:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/odeme/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/odeme/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/odeme/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İade" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Çalışan Başarı Durumları</span>
    </a>
    <div id="İade" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Çalışan Başarı Durumları:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/calisandurum/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/calisandurum/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/calisandurum/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani6/cari.php"?>"  aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i> 
        <span>CARİ</span>
        </a>
</li>
<!-- Divider -->



</ul>