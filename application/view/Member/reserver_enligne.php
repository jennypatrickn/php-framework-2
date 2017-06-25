<?php
$this->title = 'Réservation en ligne';

?>
<div class="col-lg-offset-2 col-lg-9 ">

  <div class="nav-tabs-custom" id="tab-pan-reservation-enligne">
                <ul class="nav nav-tabs">
                  
                  <li ><a href="#timeline" data-toggle="tab">Commander un chauffeur</a></li>
                  <li class="active"><a href="#settings" data-toggle="tab">Commander une course</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Heure du rendez-vous du chauffeur</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Catégorie véhicule</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Type de réservation</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" ></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Nombre de Km à parcourir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Adresse du rendez-vous</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" >
                        </div>
                      </div>
                      <div class="box">
                            <div class="box-header with-border bg-primary" >
                                <h3 class="box-title">Estimation de la course</h3>
                                <button type="button" class="btn btn-default pull-right"  >Actualiser l'estimation de ma réservation <i class="fa fa-refresh"></i>
                                </button>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="traiterconnexionmembre" method="POST"  name="form-connexion-user">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Distance</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    
                         			  <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Prise en charge (HT)</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Prix HT</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Total HT</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Total TTC</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                              
                            </form>
                        </div><!-- /.box -->
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5">
                          <button type="submit" class="btn btn-danger" id="btn-reserver-enligne">Réserver mon chauffeur <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                      </div>
                    </form>
                    
                  </div><!-- /.tab-pane -->

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Heure d'enlèvement</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Catégorie véhicule</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Adresse d'enlèvement</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" ></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Adresse de livraison</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" >
                        </div>
                      </div>
                      <div class="box">
                            <div class="box-header with-border bg-primary" >
                                <h3 class="box-title">Estimation de la course</h3>
                                <button type="button" class="btn btn-default pull-right"  >Actualiser l'estimation de ma course <i class="fa fa-refresh"></i> <!--fa-spin-->
                                </button>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="traiterconnexionmembre" method="POST"  name="form-connexion-user">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Distance</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    
                         			  <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Prise en charge (HT)</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Prix HT</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Total HT</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Total TTC</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="0 &euro;">
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                              
                            </form>
                        </div><!-- /.box -->
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5">
                          <button type="submit" class="btn btn-danger" id="btn-reserver-enligne">Réserver ma course <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
  </div>
