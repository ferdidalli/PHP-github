<?php  
include 'header.php';
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
                <h1 class="page-head-line text-center">SİTE ÜRÜN AYARLARI</h1>
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
                <div class = "panel-heading text-center">Ürün Ekleme Formu</div>
                    <div class="panel-body">

                        <form role="form" action = "islem.php" method = "post">

                          <div class="form-group">
                            <label>Ürün Adı</label>
                            <input class="form-control" value="" type="text" name = "urun_adi" required>
            
                        </div>

                        <div class="form-group">
                            <label>Ürün Fiyatı</label>
                            <input class="form-control" value="" type="text" name = "urun_fiyati" required>
            
                        </div>

                        <div class="form-group">
                            <label>Ürün İndirimli Fiyatı</label>
                            <input class="form-control" value="" type="text" name = "urun_indirimli_fiyati" required>
            
                        </div>


                        <div class="form-group">
                            <label>Ürün Açıklaması</label>
                            <textarea class="form-control"  rows="4" cols="50" name="urun_aciklama" required> </textarea>

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(25x25)</label>
                            <input class="form-control" type="file"  name="urun_bresim">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="file"  name="urun_kresim_1">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="file"  name="urun_kresim_2">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control" type="file"  name="urun_kresim_3">

                        </div>
                        <div class="form-group">
                            <label>Ürünün Resmi(15x15)</label>
                            <input class="form-control"  type="file"  name="urun_kresim_4">

                        </div>   

                        <button type="submit" name="urun_ekle" class="btn btn-primary">Ekle </button>


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