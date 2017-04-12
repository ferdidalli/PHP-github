<?php
$link=basename($_SERVER['PHP_SELF']);
$active_index = $active_menu = $active_marka = $active_admin = $active_urun ='';

    switch($link)
    {
        case 'index.php':
            $active_index = 'class="active-menu"';
            break;
        case 'menu_listele.php':
            $active_menu ='class="active-menu"';
            break;
        case 'UpdateMenu.php':
            $active_menu ='class="active-menu"';
            break;
        case 'marka_listele.php':
            $active_marka = 'class="active-menu"';
            break;
        case 'UpdateMarka.php':
            $active_marka = 'class="active-menu"';
            break;
        case 'Admin_listele.php':
            $active_admin = 'class="active-menu"';
            break;
        case 'UpdateAdmin.php':
            $active_admin = 'class="active-menu"';
            break;
        case 'urun_listele.php':
            $active_urun = 'class="active-menu"';
            break;
        case 'UpdateUrun.php':
            $active_urun = 'class="active-menu"';
            break;
        case 'Slide_listele.php':
            $active_slider = 'class="active-menu"';
            break;
        case 'UpdateSlider.php':
            $active_slider = 'class="active-menu"';
            break;
    }
?>


    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="assets/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            Hoşgeldin&nbsp;
                            <?php echo $_SESSION['admin_adi']; ?>
                                <br />
                                
                        </div>
                    </div>

                </li>


                
                <li>
                    <a <?php echo $active_index ?> href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                </li>
                <li>
                    <a <?php echo $active_admin ?> href="Admin_listele.php"><i class="fa fa-dashboard "></i>Adminler</a>
                </li>
                <li>
                    <a <?php echo $active_menu ?> href="menu_listele.php"><i class="fa fa-dashboard "></i>Menüler</a>
                </li>
                <li>
                    <a <?php echo $active_marka ?> href="marka_listele.php"><i class="fa fa-dashboard "></i>Markalar</a>
                </li>
                <li>
                    <a <?php echo $active_urun ?> href="urun_listele.php"><i class="fa fa-dashboard "></i>Ürünler</a>
                </li>
                <li>
                    <a <?php echo $active_slider ?> href="Slide_listele.php"><i class="fa fa-dashboard "></i>Slider</a>
                </li>
                

            </ul>

        </div>

    </nav>