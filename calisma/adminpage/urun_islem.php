<?php
include "adminbaglan.php";

$sil = $_GET['id'];
echo $sil;

$sorgu = mysqli_query($baglanti,"DELETE FROM urunler WHERE urun_id='$sil'");

if(mysqli_affected_rows($baglanti))
{
	header("Location:urun_listele.php?durum=ok");
}
else
{
	header("Location:urun_listele.php?durum=no");
}
