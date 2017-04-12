<?php
include "adminbaglan.php";

$sil = $_GET['id'];
echo $sil;

$sorgu = mysqli_query($baglanti,"DELETE FROM markalar WHERE marka_id='$sil'");

if(mysqli_affected_rows($baglanti))
{
	header("Location:marka_listele.php?durum=ok");
}
else
{
	header("Location:marka_listele.php?durum=no");
}
