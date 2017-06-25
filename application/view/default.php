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
    <body id="accueil">
        <?php 
            if($title!='Accueil' && $title!='Espace Membre'){ 
                    include_once('includes/frontend/header.php');
                    //echo '<div class="container" id="conteneur-principale">';
                    echo $content;
                   //echo '</div><!-- /.container -->';
                    include_once('includes/frontend/footer.php');
                    
                } 
                else if($title=='Accueil')
                { 
                     echo $content; 
                     include_once('includes/frontend/footer.php');
                } 
                else if($title=='Espace Membre'){
                    echo $content; 
                    
                }
                else{
                    echo 'Page d\' Erreur';
                }
            ?>
    </body>
</html>

