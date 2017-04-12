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
                <h1 class="page-head-line text-center">SİTE MARKA AYARLARI</h1>
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
                        Markaları Düzenle
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Marka ID</th>
                                        <th>Marka Adı</th>
                                        <th>Marka Resmi</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    require_once('adminbaglan.php');
                                    $sonuc = mysqli_query($baglanti,"select * from markalar");

                                    if (mysqli_num_rows($sonuc)!=0) 
                                    {
                                        while ($row = mysqli_fetch_assoc($sonuc)) 
                                        {
                                            ?>
                                            <tr class="info">
                                                <td><?php echo $row['marka_id']; ?></td>
                                                <td><?php echo $row['marka_adi']; ?></td>
                                                <td><?php echo $row['marka_yolu']; ?></td>

                                                <td>  <button type="submit" 
                                                    onClick="parent.location='UpdateMarka.php?id=<?php echo $row['marka_id'];?>'" class="btn btn-primary">
                                                    Düzenle
                                                </button> </td>
                                                <td>   <button type="submit" 
                                                    onClick = "parent.location='marka_islem.php?id=<?php echo $row['marka_id'];?>'"
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
                                        <button type="submit" onClick = "parent.location='AddMarka.php'" class="btn btn-success"> Marka Ekle</button>
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