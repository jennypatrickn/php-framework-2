 <div class="row">  
                                    <div class="col-sm-12 col-md-12">        
                                     <div class="row">
                                     <nav class="navbar" id="menu-reservation">
                                            <ul class="nav navbar-nav ">
                                                <li <?php if ($title=='Réservation en ligne') {
                                                    echo 'class="menu-liv-actif"';
                                                }?>><a href="reserv-online">Réserver en ligne</a></li>
                                                <li <?php if ($title=='Contenu de livraison') {
                                                    echo 'class="menu-liv-actif"';
                                                }?>><a href="livcontent">Contenu de livraison</a></li>
                                                <li <?php if ($title=='Mes réservations') {
                                                    echo 'class="menu-liv-actif"';
                                                }?>><a href="myreserv">Mes réservations</a></li>
                                                <li <?php if ($title=='Identification') {
                                                    echo 'class="menu-liv-actif"';
                                                } ?>><a <?php if ($identOrPaimt): echo 'href="#nostarifs"'; endif ?>>Identification</a></li>
                                                <li <?php if ($title=='Paiement sécurisé') {
                                                    echo 'class="menu-liv-actif"';
                                                } ?>><a <?php if ($identOrPaimt): echo 'href="#nostarifs"'; endif ?>>Paiement sécurisé</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                </div> 