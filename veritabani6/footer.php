  <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/veritabani6/js/demo/chart-pie-demo.js"></script>
<script>
$('.bisikletduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/getbisiklet.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#basvuruid').val(html.e);
    $('#fname').val(html.a);
    $('#fiyat').val(html.z);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.tamirduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/gettamirolcaklar.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#kayitliid').val(html.e);
    $('#fname').val(html.a);
    $('#kname').val(html.z);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.bisikletolmayanduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/getbisikletolmayanlar.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#yaziliid').val(html.e);
    $('#fname').val(html.a);
    $('#pname').val(html.z);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.calisanduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/getcalisanlar.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#direksiyonid').val(html.e);
    $('#fname').val(html.a);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });
});

$('.odemeduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/getodeme.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#odemeid').val(html.e);
    $('#fname').val(html.a);
    $('#odemetoplam').val(html.z);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.calisandurumduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani6/getalldata/getcalisandurum.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#bdurum_ogrenci_id').val(html.e);
    $('#fname').val(html.a);
    $('#fdurum').val(html.z);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

//timer
var seconds_left = 3;
var x = document.getElementById("alert")
var myVar = setInterval(myTimer, 1000);
function myTimer() {
    if (seconds_left == 0)
    {
  document.getElementById('alert').style.display = 'none'
    }
    seconds_left-=1;
}

</script>