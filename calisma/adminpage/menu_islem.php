<?php
include "adminbaglan.php";

$sil = $_GET['id'];
echo $sil;

$sorgu = mysqli_query($baglanti,"DELETE FROM menuler WHERE menu_id='$sil'");

if(mysqli_affected_rows($baglanti))
            {
                header("Location:menu_listele.php?durum=ok");
            }
            else
            {
                header("Location:menu_listele.php?durum=no");
            }
