

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

                <link href="assets/css/AdminLTE.min.css" rel="stylesheet">';
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                     <!-- Ionicons -->
                     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">;
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php if ($title =='Login Admin' || $title =='Login Membre') {
  # code...
?>
  <body class="hold-transition login-page" id="login-page-admin">
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><img src="assets/img/frontend/Transoam-02.png"/></a>
      </div><!-- /.login-logo -->
      <?php 
        echo $content;
      ?>    
  </body>
  <?php
} else
{
?>
<body id="accueil">
 
        <div >
            <!-- Main content -->
            <section class="content">

                <div class="row" id="section-espacemembre">
                    <?php include_once('includes/general_layout/header.php'); ?>

<div class="content-main" id="contenu">
                   
                          <?php 
                            echo $content;   
                          ?>                                
                            </div> <!-- .content-main -->

               <?php include_once('includes/general_layout/footer.php'); ?>
                </div>   <!-- /.row -->

            </section><!-- /.content -->
        </div>

    </body>
    <?php }?>
</html>



