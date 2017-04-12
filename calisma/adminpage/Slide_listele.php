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
                <h1 class="page-head-line text-center">SİTE SLİDER AYARLARI</h1>
                <h1 class="page-subhead-line text-center"><?php echo $ms; ?></h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="panel panel-default">

                    <div class="panel-heading text-center">
                        Slider Düzenle
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Slider Adı</th>
                                        <th>Slider Açıklama</th>
                                        <th>Slider Yolu</th>
                                        <th>Düzenle</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    require_once('adminbaglan.php');
                                    $sonuc = mysqli_query($baglanti,"select * from slider_resim");

                                    if (mysqli_num_rows($sonuc)!=0) 
                                    {
                                        while ($row = mysqli_fetch_assoc($sonuc)) 
                                        {
                                            ?>
                                            <tr class="info">
                                                <td><?php echo $row['Slide_adi']; ?></td>
                                                <td><?php echo $row['slider_aciklama']; ?></td>
                                                <td><?php echo $row['slider_yolu']; ?></td>

                                                <td>  <button type="submit" 
                                                    onClick="parent.location='UpdateSlider.php?id=<?php echo $row['slider_id'];?>'" class="btn btn-primary">
                                                    Düzenle
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