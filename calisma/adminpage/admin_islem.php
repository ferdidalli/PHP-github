<?php
include "adminbaglan.php";

$sil = $_GET['id'];
echo $sil;

$sorgu = mysqli_query($baglanti,"DELETE FROM adminler WHERE admin_id='$sil'");

if(mysqli_affected_rows($baglanti))
{
	header("Location:Admin_listele.php?durum=ok");
}
else
{
	header("Location:Admin_listele.php?durum=no");
}
