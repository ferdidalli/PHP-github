<?php
include "adminbaglan.php";

if(isset($_POST['login']))
{

    $admin_kulad=$_POST['admin_kulad'];
    $admin_sifre=$_POST['admin_sifre'];

    if($admin_kulad && $admin_sifre)
    {
        $sorgula=mysqli_query($baglanti,"SELECT * FROM adminler WHERE admin_kulad='$admin_kulad' AND admin_sifre='$admin_sifre'");
        $row = mysqli_fetch_assoc($sorgula);
        $verisayma=mysqli_num_rows($sorgula);
        if($verisayma>0)
        {
            $_SESSION['admin_kulad'] = $admin_kulad;
            $_SESSION['admin_adi']= $row['admin_adi'];

            header("Location:index.php");
        }
        else
        {
            header("Location:login.php?giris=no");
        }
    }
    
    
}



if(isset($_POST['menu_guncelle']))
{
    $menuadi=$_POST['menu_adi'];
    $menuurl=$_POST['menu_urlsi'];
    $gelenid=$_POST['idisi'];
    $sorgu = mysqli_query($baglanti,"UPDATE menuler SET menu_ad ='$menuadi', menu_url='$menuurl' WHERE menu_id = '$gelenid'");

    if(mysqli_affected_rows($baglanti))
    {
        header("Location:menu_listele.php?durum=ok");
    }
    else
    {
        header("Location:UpdateMenu.php?durum=no");
    }
}

if(isset($_POST['urun_guncelle']))
{
    $urunadi=$_POST['urun_adi'];
    $urunfiyati=$_POST['urun_fiyati'];
    $urunindirimlifiyati=$_POST['urun_indirimli_fiyati'];
    $urunaciklama=$_POST['urun_aciklama'];
    $urunbresim='img/'.$_POST['urun_bresim'];
    $urunkresim1='img/'.$_POST['urun_kresim_1'];
    $urunkresim2='img/'.$_POST['urun_kresim_2'];
    $urunkresim3='img/'.$_POST['urun_kresim_3'];
    $urunkresim4='img/'.$_POST['urun_kresim_4'];
    $urunsatankisi=$_POST['urun_satan_kisi'];
    $gelenid=$_POST['idisi'];



    $sorgu = mysqli_query($baglanti,"UPDATE urunler SET urun_adi ='$urunadi', urun_fiyat='$urunfiyati', urun_indirimli_fiyat='$urunindirimlifiyati', urun_aciklama='$urunaciklama', urun_bresim='$urunbresim', urun_kresim_1='$urunkresim1', urun_kresim_2='$urunkresim2', urun_kresim_3='$urunkresim3', urun_kresim_4='$urunkresim4' WHERE urun_id = '$gelenid'");

    if(mysqli_affected_rows($baglanti))
    {
        header("Location:urun_listele.php?durum=ok");
    }
    else
    {
        header("Location:UpdateUrun.php?durum=no");
    }



}

if(isset($_POST['admin_guncelle']))
{
    $adminadi=$_POST['admin_adi'];
    $adminkulad=$_POST['admin_kuladi'];
    $adminsifre=$_POST['admin_sifre'];
    $gelenid=$_POST['idisi'];
    $sorgu = mysqli_query($baglanti,"UPDATE adminler SET admin_adi ='$adminadi', admin_kulad='$adminkulad', admin_sifre='$adminsifre' WHERE admin_id = '$gelenid'");

    if(mysqli_affected_rows($baglanti))
    {
        header("Location:Admin_listele.php?durum=ok");
    }
    else
    {
        header("Location:UpdateAdmin.php?durum=no");
    }
}

if(isset($_POST['slider_guncelle']))
{
    $slideadi=$_POST['Slide_adi'];
    $slideraciklama=$_POST['slider_aciklama'];
    $slideryolu='img/'.$_POST['slider_yolu'];
    $gelenid=$_POST['idisi'];
    $sorgu = mysqli_query($baglanti,"UPDATE slider_resim SET Slide_adi ='$slideadi', slider_yolu='$slideryolu', slider_aciklama='$slideraciklama' WHERE slider_id = '$gelenid'");

    if(mysqli_affected_rows($baglanti))
    {
        header("Location:Slide_listele.php?durum=ok");
    }
    else
    {
        header("Location:UpdateSlider.php?durum=no");
    }
}


if(isset($_POST['marka_guncelle']))
{
    $markaadi=$_POST['marka_adi'];
    $markayolu='img/'.$_POST['marka_yolu'];
    $gelenid=$_POST['idisi'];
    $sorgu = mysqli_query($baglanti,"UPDATE markalar SET marka_adi ='$markaadi', marka_yolu='$markayolu' WHERE marka_id = '$gelenid'");

    if(mysqli_affected_rows($baglanti))
    {
        header("Location:marka_listele.php?durum=ok");
    }
    else
    {
        header("Location:UpdateMarka.php?durum=no");
    }


}


if(isset($_POST['menu_ekle']))
{
    $menuadi=$_POST['menu_adi'];
    $menuurl=$_POST['menu_urlsi'];
    $sorgu = mysqli_query($baglanti,"INSERT INTO menuler SET
        menu_ad='$menuadi',
        menu_url='$menuurl'");
    if(mysqli_affected_rows($baglanti))
    {
        header("Location:menu_listele.php?durum=ok");
    }
    else
    {
        header("Location:AddMenu.php?durum=no");
    }

}

if(isset($_POST['urun_ekle']))
{
    $urunadi=$_POST['urun_adi'];
    $urunfiyati=$_POST['urun_fiyati'];
    $urunindirimlifiyati=$_POST['urun_indirimli_fiyati'];
    $urunaciklama=$_POST['urun_aciklama'];
    $urunbresim='img/'.$_POST['urun_bresim'];
    $urunkresim1='img/'.$_POST['urun_kresim_1'];
    $urunkresim2='img/'.$_POST['urun_kresim_2'];
    $urunkresim3='img/'.$_POST['urun_kresim_3'];
    $urunkresim4='img/'.$_POST['urun_kresim_4'];
    

    $sorgu=mysqli_query($baglanti,"INSERT INTO urunler SET
        urun_adi='$urunadi',
        urun_fiyat='$urunfiyati',
        urun_indirimli_fiyat='$urunindirimlifiyati',
        urun_bresim='$urunbresim',
        urun_kresim_1='$urunkresim1',
        urun_kresim_2='$urunkresim2',
        urun_kresim_3='$urunkresim3',
        urun_kresim_4='$urunkresim4',
        urun_aciklama='$urunaciklama'");
    if(mysqli_affected_rows($baglanti))
    {
        header("Location:urun_listele.php?durum=ok");
    }
    else
    {
        header("Location:AddUrun.php?durum=no");
    }


}

if(isset($_POST['admin_ekle']))
{
    $adminadsoyad=$_POST['admin_adsoyad'];
    $adminkulad=$_POST['admin_kulad'];
    $adminsifre=$_POST['admin_sifre'];

    $sorgu = mysqli_query($baglanti,"INSERT INTO adminler SET
        admin_adi='$adminadsoyad',
        admin_kulad='$adminkulad',
        admin_sifre ='$adminsifre'");
    if(mysqli_affected_rows($baglanti))
    {
        header("Location:Admin_listele.php?durum=ok");
    }
    else
    {
        header("Location:AddAdmin.php?durum=no");
    }

}

if(isset($_POST['marka_ekle']))
{
    $markaadi=$_POST['marka_adi'];
    $markayolu='img/'.$_POST['marka_yolu'];
    $sorgu = mysqli_query($baglanti,"INSERT INTO markalar SET
        marka_adi='$markaadi',
        marka_yolu='$markayolu'");
    if(mysqli_affected_rows($baglanti))
    {
        header("Location:marka_listele.php?durum=ok");
    }
    else
    {
        header("Location:AddMarka.php?durum=no");
    }

}



?>