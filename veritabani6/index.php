<?php include('head.php')?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

                    <!-- Topbar Search -->
                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ana Sayfa</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bisikletler</h6>
                    </div>
                        <div class="card-body">
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/ekle.php"?>"> <p class="text-gray-100 p-3 bg-success m-0">Ekle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/duzen.php"?>"> <p class="text-gray-100 p-3 bg-danger m-0">Düzenle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletler/sil.php"?>"> <p class="text-gray-100 p-3 bg-warning m-0">Sil</p></a> 
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tamir Olacaklar</h6>
                    </div>
                        <div class="card-body">
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/ekle.php"?>"> <p class="text-gray-100 p-3 bg-success m-0">Ekle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/duzen.php"?>"> <p class="text-gray-100 p-3 bg-danger m-0">Düzenle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/tamirolcaklar/sil.php"?>"> <p class="text-gray-100 p-3 bg-warning m-0">Sil</p></a> 
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bisiklet Dışı İşlemler</h6>
                    </div>
                        <div class="card-body">
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/ekle.php"?>"> <p class="text-gray-100 p-3 bg-success m-0">Ekle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/duzen.php"?>"> <p class="text-gray-100 p-3 bg-danger m-0">Düzenle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/bisikletolmayanlar/sil.php"?>"> <p class="text-gray-100 p-3 bg-warning m-0">Sil</p></a> 
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Çalışanlar</h6>
                    </div>
                        <div class="card-body">
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/ekle.php"?>"> <p class="text-gray-100 p-3 bg-success m-0">Ekle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/duzen.php"?>"> <p class="text-gray-100 p-3 bg-danger m-0">Düzenle</p></a> 
                        <a href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/calisanlar/sil.php"?>"> <p class="text-gray-100 p-3 bg-warning m-0">Sil</p></a> 
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('footer.php')?>
</body>

</html>