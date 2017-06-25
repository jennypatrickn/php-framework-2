<?php
$this->title = 'Mes factures';
?>
<div class="row">  
    <div class="col-sm-12 col-md-12" id="pan-member-listfacture">        
        <div class="btn_activer_enligne btn-padding">
            <a href="/member-connected"  class="btn btn-info pull-left "><i class="fa fa-arrow-left"></i><span> Retour au menu principal</span></a>  
        </div> </br>
        <h4 style="text-align: center;">Liste de vos factures</h4>
        <div class="box-body table-responsive no-padding">
            <table class="table">
                <tr id="titre-col-tab">
                    <th>Facture</th>
                    <th>N°</th>
                    <th>Date/Heure de facturation</th>
                    <th>Etat</th>
                    <th></th>
                    <th>Actions</th>
                    <th></th>
                </tr>
                <?php
                $nbFacture = 2;
                if ($nbFacture == 0)
                    echo '<tr><td></td><td></td><td><h4> Vous n\'avez aucune facture sauvegardée </h4></td>
                        </tr>';
                else {
                    for ($i = 1; $i < 10; $i++) {
                        echo '<tr>
                            <td>Reservation Chauffeur( 11-07-16 : 07:45)</td>
                            <td>1</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Approuvé</span></td>
                            <td>
                                   <button type="button"  class="btn btn-warning btn-xs"><i class="fa fa-show"></i><span>Voir détails</span></button>  
                            </td>
                            <td>
                                   <button type="button"  class="btn btn-primary btn-xs"><i class="fa "></i><span>	Payer</span></button>  
                            </td>
                            <td>
                                   <button type="button"  class="btn btn-success btn-xs"><i class="fa fa-print"></i><span> Imprimer</span></button>  
                            </td>          
                        </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div> 
</div> 

