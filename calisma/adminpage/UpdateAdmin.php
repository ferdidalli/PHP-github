<?php  
include 'header.php'; 
include 'slidebar.php';
include 'kontrol.php';
?>


<?php

if($_GET['durum']=="ok")
{
    $ms="Kayıtlar başarıyla güncellendi";
}
else if($_GET['durum']=="no")
{
    $ms="Kayıtlar güncellenemedi";
}
else
{
    $ms="Sitenizin genel ayarlarını bu sayfadan düzenleyebilirsiniz. ";
}


require_once('adminbaglan.php');

//UPDATE SORGUSUNUN YAPILMASI
$gelen = $_GET['id'];
$sorgu = mysqli_query($baglanti,"SELECT * FROM adminler WHERE admin_id='$gelen'");
$kayitlar = mysqli_fetch_assoc($sorgu); 

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
                <div class = "panel-heading text-center">Admin Güncelleme Formu</div>
                    <div class="panel-body">

                        <form role="form" action = "islem.php" method = "post">

                           <div class="form-group">
                            <label>Admin Adı</label>
                            <input class="form-control" value="<?php echo $kayitlar['admin_adi'];?>" type="text" name = "admin_adi" required>
                            

                        </div>

                        <div class="form-group">
                            <label>Admin Kullanici Adı</label>
                            <input class="form-control" value="<?php echo $kayitlar['admin_kulad'];?>" type="text" name = "admin_kuladi" required>
                             <input type="hidden" name='idisi' value="<?php echo $kayitlar['admin_id']?>" />

                        </div>

                        <div class="form-group">
                            <label>Admin Kullanici Şifre</label>
                            <input class="form-control" value="<?php echo $kayitlar['admin_sifre'];?>" type="text" name = "admin_sifre" required>
                             

                        </div>      

                        <button type="submit" name="admin_guncelle" class="btn btn-primary">Güncelle </button>


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