<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= 'Transoam | '.$title ?></title>
        <link rel="icon" type="image/png" href="assets/img/frontend/Transoam-01.png" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
        <?php
        if($title!='Accueil')
                echo '<link href="assets/css/AdminLTE.min.css" rel="stylesheet">';
                echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                     <!-- Ionicons -->
                     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">';
        ?>
    </head>
    <body id="accueil" class="fond-body">
        
<?php
$this->title = 'Mes réservations';
$dateTime = new DateTime();

?>

<!-- Content Header (Page header) -->
        <div >
            <!-- Main content -->
            <section class="content">

                <div class="row" id="section-espace-reservation">
                    <header id="header-pan-reserv">  
                            <div class="row">
                                <div class="col-sm-12 col-md-12" id="menu-membre">
                                    <div class="navbar-header pull-left">
                                        <div  id="logo">
                                            <a href="/">
                                                <span id="titre-transc">
                                                    <img src="assets/img/frontend/Transoam-02.png" alt="Logo Transoam" /> 
                                                </span>
                                            </a>

                                        </div> 
                                    </div>        
                                    <div id="before-header">        
                                    <a href="member-signin" class="btn pull-right btn-circle btn-seconnecter"><b>Se connecter</b></a>
                                    <nav class="panier pull-right">
                                        <a href="myreserv"> Mon panier de reservation</a>
                                    </nav>
                                    </div>
                                </div> 
                            </div> 
                        
                            <div class="row ">
                                 
                                 <div class="col-lg-12 pull-left" id="pan-reserv">
                                        <img src="assets/img/frontend/snap_reserv.png" alt="Image"  /> 
                                 </div> 
                                  
                            </div> 

                            <div class="row">
                                <div class="col-lg-12 " >
                                        <nav class="navbar" id="menu-acc-reserv">
                                            <ul class="nav navbar-nav ">
                                                <li><a href="/">Acceuil</a></li>
                                                <li><a href="/#noservices">Nos services</a></li>
                                                <li><a href="/#quisommenous">Qui sommes nous</a></li>
                                                <li><a href="/#nostarifs">Tarif</a></li>
                                                <li><a href="/#cgv">CGV</a></li>
                                                <li><a href="/#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                 </div>
                            </div>
                            <div class="row">
                                 
                                 <div class="col-lg-12">
                                        <div class="haut_page_titre titre-reservation">
                                         
                                            <h4>
                                            <?php if ($title=='Contenu de livraison') {
                                                    echo 'Détail de la livraison';
                                                }
                                                else echo $title;?>
                                                
                                            </h4>  

                                        </div> 
                                 </div> 
                                  
                            </div> 
                           
                            
                    </header> 

               <?php $identOrPaimt = false; ?>
                <div class="content-main" id="contenu-reservation">
                 <div class="container">
                            <div class="row " id="titre-date-heure">
                                 <div class="col-sm-12 col-md-12 col-lg-12">  
                                    <h4>Nous sommes le Lundi 11 Avril 2016  -  Il est 11:04:48</h4>
                                 </div>
                            </div> 
                            </div> 

                            <?php if ($title!='Réservation en ligne') {
                                # code...
                                include_once('includes/frontend/menu_reservation.php');
                            }?>
                               <!-- Eto iny-->
                                <div class="row">
                                
                                   <?php echo $content; ?>
                                 
                                </div>
                 </div> <!-- .content-main -->
                 <footer class="row" id="footer">
                                                                 <div class="col-sm-12 col-md-offset-3 col-md-6">        
                                    <div class="haut_page_titre" id="text-footer">
                                        <img src="assets/img/frontend/Transoam-01.png" alt="Transoam"/>&nbsp;|&nbsp;Copyright &copy;2016 développée par <strong>Team Maki </strong>
                                    </div> 
                                </div> 
                                 
                            </footer>  <!-- .row -->
            </section><!-- /.content -->

        </div>
        
        <script src="assets/js/jquery.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="assets/js/bootstrap.min.js"></script>

        <script>
    
    $(function(){
        $('#create-acount-collapse').click(function(){
            $('#span-for-cancel').html('<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo" id="btn-Annuler-CreationCompte">Annuler</button>');
            $('#btn-create-account').removeClass('hide');
            $('#create-acount-collapse').hide(100);
            $('#btn-Annuler-CreationCompte').click(function(){
           
            $('#btn-create-account').addClass('hide');
            $('#create-acount-collapse').show();
            $('#btn-Annuler-CreationCompte').hide(100);
        });

        });
        
    });
</script>
    </body>
</html>

