<?php
$this->title = 'Mes réservations';

?>

	  <div class="col-sm-12 col-md-12" id="tableau-liste-reserv"> 
                                <div class="box-body table-responsive no-padding">
                    <table class="table">
                        <tr id="titre-col-tab">
                            <th>Nbre colis</th>
                            <th>Adresses</th>
                            <th>Prix en charge(HT)</th>
                            <th>Prix HT</th>
                            <th>Total HT</th>
                        </tr>
                        <?php 
                        	$nbReserv =1;
                        	if($nbReserv==0)
                        		echo '<tr><td></td><td></td><td><h4> Vous n\'avez aucune réservation sauvegardée </h4></td>
                        </tr>';
                        	else{
						 echo '<tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Approved</span></td>
                            <td>John Doe</td>
                        </tr>';
                         
                        }?>
                        
                    </table>
                </div>
                         </div>
