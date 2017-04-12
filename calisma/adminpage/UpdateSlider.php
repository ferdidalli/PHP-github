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
$sorgu = mysqli_query($baglanti,"SELECT * FROM slider_resim WHERE slider_id='$gelen'");
$kayitlar = mysqli_fetch_assoc($sorgu); 

?>

<!--/.INDEX ORTASI -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line text-center">SİTE SLİDER AYARLARI</h1>
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
                <div class = "panel-heading text-center">Slider Güncelleme Formu</div>
                    <div class="panel-body">

                        <form role="form" action = "islem.php" method = "post">

                           <div class="form-group">
                            <label>Slider Adı</label>
                            <input class="form-control" value="<?php echo $kayitlar['Slide_adi'];?>" type="text" name = "Slide_adi" required>
                            

                        </div>

                        <div class="form-group">
                            <label>Slider Açıklama</label>
                            <input class="form-control" value="<?php echo $kayitlar['slider_aciklama'];?>" type="text" name = "slider_aciklama" required>
                             <input type="hidden" name='idisi' value="<?php echo $kayitlar['slider_id']?>" />

                        </div>

                        <div class="form-group">
                            <label>Slider Yolu</label>
                            <input class="form-control" value="<?php echo $kayitlar['slider_yolu'];?>" type="text" name = "slider_yolu" required>
                             

                        </div>      

                        <button type="submit" name="slider_guncelle" class="btn btn-primary">Güncelle </button>


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