<?php include 'lgnhead.php'; ?>

    <?php 


if($_GET['giris']=="no")
{
    $msj="Hatalı giriş yaptınız..";
    $active_index = 'alert alert-danger';        
}

?>

        <!--/.INDEX ORTASI -->


        <div class="container">
            <div class="row text-center " style="padding-top:140px;">

            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                    <div class="panel-body">
                        <form action="islem.php" method="POST" role="form">

                            <h5>Kullanıcı Girişi</h5>
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" name="admin_kulad" class="form-control" required placeholder="Kullanıcı Adı " />
                                
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" name="admin_sifre" class="form-control" required placeholder="Şifre " />
                            </div>
                            <div class="<?php echo $active_index ?>">
                                <?php echo $msj; ?>
                            </div>
                            <button style="width:100%" type="submit" name="login" class="btn btn-primary">Giriş Yap</button>

                        </form>
                    </div>

                </div>


            </div>
        </div>



        <?php include'lgnfoot.php'; ?>