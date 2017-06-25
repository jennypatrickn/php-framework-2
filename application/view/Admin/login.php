<?php
$this->title = 'Login Admin';

?>
<div class="login-box-body">
        <p class="login-box-msg">Connexion vers l'espace Admin</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
          	<label>Adresse email ou pseudo ou telephone</label>
            <input type="email" class="form-control" >
             
          </div>
          <div class="form-group has-feedback">
            <label>Mot de passe</label>
            <input type="password" class="form-control" >
             
          </div>
          <div class="form-group has-feedback">
            
            <input type="password" class="form-control" >
            <div class="row">
            	<div class="col-xs-offset-1 col-xs-10" id="pan-code-acces">
              <div class="col-xs-8">
                <table id="code-acces" >
            <tr>
              <td><button type="button" class="btn btn-default ">7</button></td>
              <td><button type="button" class="btn btn-default ">2</button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td><button type="button" class="btn btn-default ">6</button></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-default ">4</button></td>
              <td><button type="button" class="btn btn-default ">1</button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td></td>
              <td class="btn-ac-300xX"><button type="button" class="btn btn-default " id="btn-ca-effacer" style="background-color: #bf1613;width: 90%">
              Effacer</br><i class="fa fa-remove"></i></button></td>    
            </tr>
            <tr>
              <td><button type="button" class="btn btn-default ">0</button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td><button type="button" class="btn btn-default ">3</button></td>
              <td></td>
              <td class="btn-ac-300xX"><button type="button" class="btn btn-default " id="btn-ca-corriger" style="background-color: #fbef07;width: 90%">
              Corriger</br><i class="fa fa-chevron-left"></i></button></td>
              
            </tr>
            <tr>
            <td><button type="button" class="btn btn-default ">5</button></td>
              <td><button type="button" class="btn btn-default ">9</button></td>
              <td><button type="button" class="btn btn-default ">8</button></td>
              <td><button type="button" class="btn btn-default "></button></td>
              <td></td>
              <td class="btn-ac-300xX"><button type="button" class="btn btn-default " id="btn-ca-valider"
              style="background-color: #97bb27;width: 90%">
              Valider</br><i class="fa fa-circle-o"></i></button></td>
              
            </tr>
            
          </table>
              </div>
              <div class="col-xs-12">
                <table>
                  <tr class="ecran300xX">
              <td><button type="button" class="btn btn-default " id="btn-ca-effacer" style="background-color: #bf1613;width: 90%">
              Effacer</br><i class="fa fa-remove"></i></button></td>  
              <td><button type="button" class="btn btn-default " id="btn-ca-corriger" style="background-color: #fbef07;width: 90%">
              Corriger</br><i class="fa fa-chevron-left"></i></button></td>
              <td><button type="button" class="btn btn-default " id="btn-ca-valider"
              style="background-color: #97bb27;width: 90%">
              Valider</br><i class="fa fa-circle-o"></i></button></td>
            </tr>
                </table>
              </div>
            		
         	
            	</div>
            </div>
         	
          </div>

          <div class="row">
            <div class="col-xs-8 ">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Se souvenir de moi
                </label>
              </div>
            </div><!-- /.col -->
             <div class="col-xs-12">
            <div class="social-auth-links" id="btn-secon-admin" >
          
          	<a href="#" class="btn btn-block btn-info btn-social" style="text-align: center;">
          		Se connecter
           		</i>
           </a>
          </div>
          </div>
        </div><!-- /.social-auth-links -->
            

        </form>
        <a href="#">Mot de passe oublié</a><br>
        
          

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->