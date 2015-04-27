<?php
$to = "moukhadimat@hotmail.fr";
$subject = "stage";
$test_mes="voila le message tant attendu";
$message = "Nom et prenom: " . $_POST['name'] . "\r\n" . "Adresse mail: " . $_POST['email'] . "\r\n" ."Residence: " . $_POST['residence'] . "\r\n" . "\r\n" . "Message: " . $_POST['message'];
$from= "moukhadimat@hotmail.fr"; //$_POST['email'];
$headers = "From: $from" . "/r/n";
//mail($to,$subject,$message,$headers);
mail($to,$subject,$test_mes,$headers);
?>


<!DOCTYPE>
<html>
    <head>
        <title>CV - baye Moussa</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8" />

        <link href="bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="tuto.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="responsive_menu.css" media="screen and (max-width:1201px)">
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
    </head>
   <body>
    <div class="container">
      <div class="row">
        <div id="tete" class="col-lg-12">
            <nav id="nav_barre_page_telecharge" class="col-lg-offset-1 col-lg-10"> 
                    <ul id="nav_ul_barre_page">
                        <li id="nav_li_barre"><a href="index.html"> <span class="glyphicon glyphicon-user"></span> À propos de moi</a></li>
                        <li id="nav_li_barre"><a href="myformation.html"> <span class="glyphicon glyphicon-education"></span> Formation</a></li>
                        <li id="nav_li_barre"><a href="myexperience.html">  <span class="glyphicon glyphicon-briefcase"></span> Expérience</a></li>
                        <li id="nav_li_barre"><a href="mycompetence.html"> <span class="glyphicon glyphicon-level-up"></span> Compétences</a></li>
                        <li id="nav_li_barre"><a href="portefolio.html"> <span class="glyphicon glyphicon-tasks"></span> Portefolio</a></li>
                        <li id="nav_li_barre"><a href="contact.html"> <span class="glyphicon glyphicon-home"></span> Contact</a></li>
                        <li id="nav_li_barre"><a href="telecharger.html"> <span class="glyphicon glyphicon-download-alt"></span> Télécharger CV</a></li>
                    </ul>
                <div class="check_menu">
                    <div class="title_menu"> Menu</div>
                    <div class="header__icon" id="header__icon"></div>
                </div>
            </nav>
        </div>

        <div id="corps" class="col-lg-12">
            <div class="col-lg-6">
                <div  class="col-lg-12">
                    <div id="nom"> MOUSSA SOW :</div>
                    <div>
                       <p id= "ad_et_tel">20 rue eugene le roy <br>
                            33800 bordeaux, apt 22  <br>
                            Tél: +33 (0)6 26 92 00 08 <br>
                            Mail: mmoussasow@gmail.com<br>  
                        </p>
                    </div>
                </div>
                <div class="col-lg-12" id="carte"></div>
            </div>
            <div class=" col-lg-6"> 
                <div id="entete_form">Prenez Contact avec moi</div>
                <div class="col-lg-12" id="form_contact">
	 				<form class="form-horizontal col-lg-12">
					  <div class="form-group">
					    <legend>Veillez laisser votre message pour être recontacté!!!</legend>
					  </div>
					  <div class="row">
					    <div class="form-group">
					      <label for="text" class="col-lg-2 control-label">Nom : </label>
					      <div class="col-lg-4">
					        <input type="text" class="form-control" id="nom_form" placeholder="Saisissez votre nom et prénom"  required>
					      </div>
					    </div>
					  </div>
					  <div class="row">
					    <div class="form-group">
					      <label for="text" class="col-lg-2 control-label">Objet : </label>
					      <div class="col-lg-4">
					        <input type="text" class="form-control" id="objet" placeholder="Objet de demande" required>
					      </div>
					    </div>
					  </div>
					  <div class="row">
					    <div class="form-group">
					      <label for="text" class="col-lg-2 control-label">Mail : </label>
					      <div class="col-lg-4">
					        <input type="email" class="form-control" id="mail" placeholder="Votre mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$" required>
					      </div>
					    </div>
					  </div>
					  <div class="row">
					    <div class="form-group">
					      <label for="textarea" class="col-lg-2 control-label">Message : </label>
					      <div class="col-lg-4">
					        <input type="textarea" class="form-control" id="message" placeholder="Votre message">
					      </div>
					    </div>
					  </div>
					
					  <div class="form-group">
					    <button class="pull-center btn btn-default">Envoyer</button>
					  </div>
					</form>
	            </div>
            </div> 
        </div>
        <footer class="col-lg-12">
            <div id="pied" class="col-lg-12">
                <ul id="nav_ul_barre_page">
                    <li id="nav_li_barre"><a href="http://www.u-bordeaux.fr/Pied-de-page/Credits-et-mentions-legales" id="a_li_barre_page"> Crédit et mentions légales</a></li>
                    <li id="nav_li_barre"><a href="http://www.u-bordeaux1.fr/ufr/math-info/formation/informatique/masters/master-informatique/specialite-genie-logiciel.html" id="a_li_barre_page"> Université de Bordeaux</a></li>
                    <li id="nav_li_barre"><a href="" id="a_li_barre_page"> Copyright © 2014 Moussa SOW</a></li>
                </ul>
            </div>
        </footer>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    
    <script src="scripts.js"></script>
    <script type="text/javascript" src="js/carte.js"></script>
    <noscript>
            <p>Attention : </p>
            <p>Afin de pouvoir utiliser Google Maps, JavaScript doit être activé.</p>
            <p>Or, il semble que JavaScript est désactivé ou qu'il ne soit pas supporté par votre navigateur.</p>
            <p>Pour afficher Google Maps, activez JavaScript en modifiant les options de votre navigateur, puis essayez à nouveau.</p>
        </noscript>
  </body>
</html>















