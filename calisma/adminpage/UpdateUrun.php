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
$sorgu = mysqli_query($baglanti,"SELECT * FROM urunler WHERE urun_id='$gelen'");
$kayitlar = mysqli_fetch_assoc($sorgu); 

?>

<!--/.INDEX ORTASI -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line text-center">SİTE ÜRÜN AYARLARI</h1>
                <h1 class="page-subhead-line text-center"><?php echo $ms; ?></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class = "panel-heading"></div>
            <div class = "col-md-12">
                <div class = "panel panel-default">
                <div class = "panel-heading text-center">Ürün Güncelleme Formu</div>
                    <div class="panel-body">

                        <form role="form" action = "islem.php" method = "post">

                        <div class="form-group">
                            <label>Ürün Adı</label>
                            <input class="form-control" value="<?php echo $kayitlar['urun_adi'];?>" type="text" name = "urun_adi" required>
                             <input type="hidden" name='idisi' value="<?php echo $kayitlar['urun_id']?>" />

            
                        </div>

                        <div class="form-group">
                            <label>Ürün Fiyatı</label>
                            <input class="form-control" value="<?php echo $kayitlar['urun_fiyat'];?>" type="text" name = "urun_fiyati" required>
            
                        </div>

                        <div class="form-group">
                            <label>Ürün İndirimli Fiyatı</label>
                            <input class="form-control" value="<?php echo $kayitlar['urun_indirimli_fiyat'];?>" type="text" name = "urun_indirimli_fiyati" required>
            
                        </div>


                        <div class="form-group">
                            <label>Ürün Açıklaması</label>
                            <textarea class="form-control"  rows="4" cols="50" name="urun_aciklama" required><?php echo $kayitlar['urun_aciklama'];?></textarea>

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(25x25)</label>
                            <input class="form-control" type="text" value="<?php echo $kayitlar['urun_bresim'];?>" name="urun_bresim">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="text" value="<?php echo $kayitlar['urun_kresim_1'];?>" name="urun_kresim_1">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="text" value="<?php echo $kayitlar['urun_kresim_2'];?>" name="urun_kresim_2">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="text" value="<?php echo $kayitlar['urun_kresim_3'];?>" name="urun_kresim_3">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control"  type="text" value="<?php echo $kayitlar['urun_kresim_4'];?>" name="urun_kresim_4">

                        </div>  
                        <div class="form-group">
                            <label>Ürün Satan Kişi</label>
                            <input class="form-control" value="<?php echo $kayitlar['urun_satan_kisi'];?>" type="text" name = "urun_satan_kisi" required>
            
                        </div>

                         <div class="form-group">
                            <label>Teklif Saati</label>
                            <input class="form-control" value="<?php echo $kayitlar['urun_teklif_saati'];?>" type="text" name="teklif_saati">
            
                        </div>  

                        <button type="submit" name="urun_guncelle" class="btn btn-primary">Güncelle </button>


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