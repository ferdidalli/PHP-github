<?php  include 'header.php';
include 'slidebar.php';
include 'kontrol.php'; 
?>


<?php

if($_GET['durum']=="ok")
{
    $ms="Kayıtlar başarıyla eklendi";
}
else if($_GET['durum']=="no")
{
    $ms="Kayıtlar eklenemedi";
}
else
{
    $ms="Sitenizin genel ayarlarını bu sayfadan düzenleyebilirsiniz. ";
}
 
?>

<!--/.INDEX ORTASI -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line text-center">SİTE Admin AYARLARI</h1>
                <h1 class="page-subhead-line text-center"><?php echo $ms; ?></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class = "panel-heading"></div>
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
                <div class = "panel panel-default">
                <div class = "panel-heading text-center">Admin Ekleme Formu</div>
                    <div class="panel-body">

                        <form role="form" action = "islem.php" method = "post">

                        <div class="form-group">
                            <label>Admin Ad Soyad</label>
                            <input class="form-control" value="" type="text" name = "admin_adsoyad" required>
                            

                        </div>

                        <div class="form-group">
                            <label>Admin Kullanıcı Adı</label>
                            <input class="form-control" value="" type="text" name = "admin_kulad" required>
                            

                        </div>

                        <div class="form-group">
                            <label>Admin Kullanıcı Şifre</label>
                            <input class="form-control" value="" type="text" name = "admin_sifre" required>
                        </div>     

                        <button type="submit" name="admin_ekle" class="btn btn-primary">Ekle </button>


                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->


<?php include 'footer.php';?>