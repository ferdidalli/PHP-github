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
            

            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-default">

                    <div class="panel-heading text-center">
                        Ürünleri Düzenle
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Ürün Adı</th>
                                        <th>Ürün Fiyatı</th>
                                        <th>Ürün İndirimli Fiyatı</th>
                                        <th>Ürün Açıklama</th>
                                        <th>Ürün Satan Kişi</th>
                                        <th>Ürün Teklif Saati</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    require_once('adminbaglan.php');
                                    $sonuc = mysqli_query($baglanti,"select * from urunler");

                                    if (mysqli_num_rows($sonuc)!=0) 
                                    {
                                        while ($row = mysqli_fetch_assoc($sonuc)) 
                                        {
                                            ?>
                                            <tr class="info">
                                                <td><?php echo $row['urun_adi']; ?></td>
                                                <td><?php echo $row['urun_indirimli_fiyat']; ?></td>
                                                <td><?php echo $row['urun_fiyat']; ?></td>
                                                <td><?php echo $row['urun_aciklama']; ?></td>
                                                <td><?php echo $row['urun_satan_kisi']; ?></td>
                                                <td><?php echo $row['urun_teklif_saati']; ?></td>

                                                <td>  <button type="submit" 
                                                    onClick="parent.location='UpdateUrun.php?id=<?php echo $row['urun_id'];?>'" class="btn btn-primary">
                                                    Düzenle
                                                </button> </td>
                                                <td>   <button type="submit" 
                                                    onClick = "parent.location='urun_islem.php?id=<?php echo $row['urun_id'];?>'"
                                                    class="btn btn-danger">
                                                    Sil
                                                </button> </td>
                                            </tr>
                                            <?php 
                                        }
                                    }
                                    ?>

                                </tbody>
                                <tr>
                                    <div class="col-md-4">
                                        <td>



                                        </td>
                                    </div>
                                    <td>

                                    </td>
                                    <td>
                                    </td>


                                    <td>
                                        <button type="submit" onClick = "parent.location='AddUrun.php'" class="btn btn-success"> Ürün Ekle</button>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->


<?php include 'footer.php';?>