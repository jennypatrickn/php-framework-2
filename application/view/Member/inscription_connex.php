<?php
$this->title = 'Inscription/Connexion';

?>
<div class="col-lg-offset-1 col-lg-5 ">
                        <!-- Horizontal Form -->
                        <div class="box">
                            <div class="box-header with-border bg-box-form">
                                <h3 class="box-title">Connexion à votre compte</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="traiterconnexionmembre" method="POST"  name="form-connexion-user">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Adresse Webmail</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Adresse Webmail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="motDePasse" class="form-control" id="inputPassword3" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Se souvenir de moi
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-default">Annuler</button>
                                    <button type="submit" class="btn btn-primary pull-right">Se connecter</button>
                                </div><!-- /.box-footer -->
                            </form>
                        </div><!-- /.box -->
                        <!-- general form elements disabled -->

                    </div><!--/.col (right) -->
<div class=" col-lg-5">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border bg-box-form " >
                                <h3 class="box-title">Création de votre compte</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{path('user_create')}}" name="form-inscription-user" enctype="multipart/form-data" >
                                <div class="box-body collapse" id="demo">
                                    <div class="form-group">
                                        <label for="exampleInputName">Votre nom</label>
                                        <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Prénom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Télephone</label>
                                        <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" placeholder="Prénom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Votre adresse e-mail</label>
                                        <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Adresse e-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Votre mot-de-passe</label>
                                        <input type="password" name="motDePasse" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirmer votre mot-de-passe</label>
                                        <input type="password" name="motDePasseConfirme" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCGV">Acceptation CGV</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="conditionCGV"  required>Cochez la case ci-contre pour confirmer que vous avez lu et compris nos conditions générales de vente
                                            </label>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                	<span id="span-for-cancel"></span>
                                    
                                    <button type="submit" class="btn btn-primary pull-right hide" id="btn-create-account">Créer mon compte</button>
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo" id="create-acount-collapse">Créer mon compte</button>
                                </div><!-- /.box-footer -->
                            </form>
                        </div><!-- /.box -->







                    </div><!--/.col (left) -->
                    <!-- right column -->
                    