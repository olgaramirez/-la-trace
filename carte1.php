<meta charset="utf">
<?php
	include("connection/ramirez_connection.php");
?>

    <?php
/**---------------------------------REQUETE---------------------------*/
			if(!empty($_POST['selection'])) {
            //var_dump($_POST['selection']);
    		foreach($_POST['selection'] as $check1) {
           		//echo $check1; 

                $anm = mysqli_real_escape_string($dbconnect, $check1);


                $rqt = "INSERT INTO animaux_vus_tb(`ID_animaux_vus`, `ID_animaux`, `largeur_x`, `hauteur_y`, `data_animaux_vus`) VALUES (NULL, '$anm','46.830'+rand()*0.05, '-71.227'-rand()*0.05, now())";
                $result = mysqli_query($dbconnect, $rqt);
                
                
                if (!$result)
                {
                    die(mysqli_error($dbconnect));
                }
            }
            
	
	//Retourne le nombre de rangées du jeu de données résultant.
	//$rowcount = mysqli_num_rows($result);
	//printf("<h3>Le jeu de données retourne <span class='nbre-rangee' style='color:#900; font-size:1.4em'>%d</span> rangées(s).</h3><br>", $rowcount);
	
	////Traverse la rangée de résultat (tableau associatif).
//	$row = mysqli_fetch_assoc($result);
//	
//	$nom_usage = $row['nom_membre'];
//	echo"<h2>$nom_usage</h2>"; 
		} else {}
			/*$requete = "SELECT * FROM animaux_tb, animaux_vus_tb where animaux_tb.ID_animaux = animaux_vus_tb.ID_animaux";			
			$result = mysqli_query($dbconnect, $requete);
			if (!$result)
			{
				die(mysqli_error($dbconnect));
			}
			
			//Retourne le nombre de rangées du jeu de données résultant.
			$rowcount = mysqli_num_rows($result);*/
		

	
	if(!empty($_POST['check_list'])) {
        $id_animaux = implode(",", $_POST["check_list"]);
    		/*foreach($_POST['check_list'] as $check2) {
                $id_animaux = $id_animaux . $check2 . ",";
			echo $check2;
			 } */ 
			$requete = "SELECT animaux_tb.ID_animaux, animaux_tb.nom_animaux, animaux_tb.icone_animaux, animaux_vus_tb.largeur_x, animaux_vus_tb.hauteur_y, animaux_vus_tb.data_animaux_vus FROM animaux_tb, animaux_vus_tb where animaux_tb.ID_animaux = animaux_vus_tb.ID_animaux and animaux_tb.ID_animaux in ($id_animaux)";			
   
	       $result = mysqli_query($dbconnect, $requete);
            if (!$result)
            {
                die(mysqli_error($dbconnect));
            }
	
            //Retourne le nombre de rangées du jeu de données résultant.
            $rowcount = mysqli_num_rows($result);
            //printf("<h3>Le jeu de données retourne <span class='nbre-rangee' style='color:#900; font-size:1.4em'>%d</span> rangées(s).</h3><br>", $rowcount);

            ////Traverse la rangée de résultat (tableau associatif).
        //	$row = mysqli_fetch_assoc($result);
        //	
        //	$nom_usage = $row['nom_membre'];
        //	echo"<h2>$nom_usage</h2>"; 
		} else {
			$requete = "SELECT * FROM animaux_tb, animaux_vus_tb where animaux_tb.ID_animaux = animaux_vus_tb.ID_animaux";			
			$result = mysqli_query($dbconnect, $requete);
			if (!$result)
			{
				die(mysqli_error($dbconnect));
			}
			
			//Retourne le nombre de rangées du jeu de données résultant.
			$rowcount = mysqli_num_rows($result);
		}
?>




        <?php

            ?>





            <!DOCTYPE html>
            <html lang="">

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <title>À la trace - Carte</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="apple-touch-icon" href="apple-touch-icon.png">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/main.css">
                <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>





            </head>

            <body>
                
                <div class="container" id="navigation">
                    <div class="row mn" id="navigation">
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-primary btn-circle btn-xl margin-top" data-target="#myModal" role="button" data-toggle="modal" data-backdrop="static"> <span class="glyphicon glyphicon-user"></span></<button>

                        </div>

                        <div class="col-xs-8">
                            <div class="btn-group">
                                <div>
                                    <button type="button" class="btn btn-primary margin-top" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parc national de Frontenac
                                         <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"> Parc national de Frontenac
</a></li>
                                    <li><a href="#"> Parc national de la Jacques-Cartier
</a></li>
                                    <li><a href="#"> Parc national des Grands-Jardins
</a></li>
                                    <li><a href="#">  Parc national de la Rivière-Malbaie
</a></li>
                                    <li><a href="#"> Parc national de la Gaspésie
</a></li>
                                    <li><a href="#">  Parc national du Bic
</a></li>
                                    <li><a href="#">  Parc national du Fjord-du-Saguenay

</a></li>
                                    <li><a href="#">   Parc national du Mont-Mégantic
</a></li>
                                </ul>
                              </div>
                            </div>

                        </div>

                      
                       
 </div>


                        <!--------------------------------- Modal Choix Animaux ------------------------------->
                        <div id="choixModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="choixModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="form">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center anm_chiox_titre" id="myModalLabel">À la trace</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--------------------------------- Form ------------------------------->
                                        <form class="form-horizontal choix" method="post" action="carte1.php">
                                            <fieldset>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-xs-12 control-label" for="selectbasic">Parc national</label>
                                                    <div class="col-xs-12">
                                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                                            <option value="Parc national de Frontenac">Parc national de Frontenac</option>
                                                            <option value="Parc national de la Jacques-Cartier">Parc national de la Jacques-Cartier</option>
                                                            <option value="Parc national des Grands-Jardins">Parc national des Grands-Jardins</option>
                                                            <option value="Parc national de la Rivière-Malbaie">Parc national de la Rivière-Malbaie</option>
                                                            <option value="Parc national de la Gaspésie">Parc national de la Gaspésie</option>
                                                            <option value="Parc national du Bic">Parc national du Bic</option>
                                                            <option value="Parc national du Fjord-du-Saguenay">Parc national du Fjord-du-Saguenay</option>
                                                            <option value="Parc national du Mont-Mégantic">Parc national du Mont-Mégantic</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <hr>
                                                <br>

                                                <!-- Multiple Checkboxes (inline) -->
                                                <div class="form-group">
                                                    <label class="col-xs-12 control-label" for="checkboxes">Animaux</label>
                                                    <div class="col-xs-12">
                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="1">
                                                                    <img src="img/icone_renard.png" alt="Renard">
                                                                    <br> Renard
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="1">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="2">
                                                                    <img src="img/icone_orignal.png" alt="Orignal">
                                                                    <br> Orignal
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="2">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="3">
                                                                    <img src="img/icone_ours.png" alt="Ours">
                                                                    <br> Ours
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="3">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="4">
                                                                    <img src="img/icone_castor.png" alt="Castor">
                                                                    <br> Castor
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="4">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="5">
                                                                    <img src="img/icone_ecureuil.png" alt="Écureuil">
                                                                    <br> Écureuil
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="5">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="6">
                                                                    <img src="img/icone_cerf.png" alt="Chevreuil">
                                                                    <br> Chevreuil
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="6">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="7">
                                                                    <img src="img/icone_phoque.png" alt="Phoque">
                                                                    <br>Phoque
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="7">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="8">
                                                                    <img src="img/icone_coyote.png" alt="Coyote">
                                                                    <br>Coyote
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="8">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="9">
                                                                    <img src="img/icone_marmotte.png" alt="Marmotte">
                                                                    <br> Marmotte
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="9">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="10">
                                                                    <img src="img/icone_lynx.png" alt="Lynx">
                                                                    <br> Lynx
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="10">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="11">
                                                                    <img src="img/icone_lievre.png" alt="Lièvre">
                                                                    <br> Lièvre
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="11">
                                                                </label>
                                                            </div>

                                                            <div class="col-xs-4">
                                                                <label class="checkbox-inline" for="13">
                                                                    <img src="img/icone_tortue.png" alt="Tortue">
                                                                    <br> Tortue
                                                                    <br>
                                                                    <input type="checkbox" name="check_list[]" value="13">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr>
                                                <br>



                                                <!-- Multiple Checkboxes (inline) -->
                                               

                                                <!-------------------------------------------- Statistique 10 jours ------------------------------------->

                                               
                                                <!-------------------------------------------- Statistique 10 jours ------------------------------------->

                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="trv_animal"></label>
                                                    <div class="col-md-4">
                                                        <button id="trv_animal" name="trv_animal" type="submit" class="btn btn-primary">Appliquer</button>
                                                    </div>
                                                </div>


                                            </fieldset>
                                        </form>

                                        <!--------------------------------- Form ------------------------------->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--------------------------------- Modal Choix Animaux ------------------------------->

                        <!-------------------------- Modal Compt d'utilisateur------------------------------->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="form">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center brn" id="myModalLabel2">À la trace</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal">
                                            <fieldset>

                                                <!-- Form Name -->
                                                <div class="text-center">
                                                    <img src="img/logo.png" alt="Lolo" height="60px" width="60px"></div>
                                                <br>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <div class="col-xs-12 center-block">
                                                        <input id="textinput" name="textinput" type="text" placeholder="Nom ou courriel" class="form-control input-md">
                                                    </div>
                                                </div>

                                                <!-- Password input-->
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input id="passwordinput" name="passwordinput" type="password" placeholder="Mot de passe" class="form-control input-md">

                                                    </div>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="brn">
                                                        <input type="checkbox"> Sauvegarder</label>
                                                </div>
                                                <br>

                                                <!-- Button -->
                                                <div class="form-group">

                                                    <div class="col-xs-12">
                                                        <button id="singlebutton2" name="singlebutton2" type="submit" class="btn btn-success btn-block btn-vrt">S'inscrire</button>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--------------------------------- Modal ------------------------------->


                    </div>



                    <!--------------------------------- Icône animaux ------------------------------->

                    <!--<div class="anm_v1" data-toggle="popover" title="Renard" data-content="2016/11/09 12:59">
          	<img src="img/icone_renard.png" alt="Renard">
          </div>
          
          <div class="anm_v2" data-toggle="popover" title="Orignal" data-content="2016/10/25 06:14">
          	<img src="img/icone_orignal.png" alt="Orignal">
          </div>
          
          <div class="anm_v3" data-toggle="popover" title="Castor" data-content="2016/11/03 17:37">
          	<img src="img/icone_castor.png" alt="Castor">
          </div>-->





                </div>





                <!--------------------------------- Icône animaux Fin---------------------------->

                      

                <div class="row btm ">
                   
                   
                    
                        <div class=" col-xs-offset-6 col-xs-3 text-center bouton-custom floating-panel">
                            <div type="button" class="btn btn-primary bouton-filtre btn-lg rnd" data-target="#choixModal" role="button" data-toggle="modal" data-backdrop="static"> <img src="img/icone-logo.png" height="25px" alt="icone"><div class="filtre">Filtrer</div></div>
                            
                        </div> 
                        
                         <div class="col-xs-offset-4 col-xs-2 floating-panel">
                            <a href="#" type="button" data-toggle="modal" data-target="#aideModal"><h5 class="ad">Aide</h5></a>
                         </div>

                    <div class=" col-xs-offset-7 col-xs-3 floating-panel">
                        <button class="btn btn-lg rnd" type="button" data-toggle="modal" data-target="#plusModal"><img src="img/plus_animal.png" alt="icone"></button>
                    </div>
                </div>
                    <!--------------------------------- Modal Aide------------------------------->
                    <div class="modal fade" id="aideModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel3">Aide</h4>
                                </div>
                                <div class="modal-body">
                                    <p> Si vous avez remarqué un animal vous pouvez l’indiquer sur la cart en cliquant sur le bouton rond qui se trouve dans le coin bas-droit. Dans la fenêtre modale choisissez l’espèce animal et appuyez sur le bouton “Appliquer”.</p>
                                    <p>Pour trouver l’espèce animal sur la carte appuyez sur le bouton carré avec icône de traces qui se trouve dans le coin haut-droit. Dans la fenêtre modale choisissez le parc national, les espèces animals et le temps et appuyez sur le bouton “Appliquer”.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!---------------------------------- Modal Aide------------------------------->

                    <!----------------------------- Modal Plus Animaux --------------------------->

                    <div id="plusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="choixModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="form">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center anm_chiox_titre" id="myModalLabel4">À la trace</h4>
                                </div>
                                <div class="modal-body">
                                    <!--------------------------------- Form ------------------------------->
                                    <form class="form-horizontal choix" method="post" action="carte1.php">
                                        <fieldset>

                                            <!-- Multiple Checkboxes (inline) -->
                                            <div class="form-group">
                                                <label class="col-xs-12 control-label" for="checkboxes">Animaux</label>
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="renard">
                                                                <img src="img/icone_renard.png" alt="Renard">
                                                                <br> Renard
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="1">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="orignal">
                                                                <img src="img/icone_orignal.png" alt="Orignal">
                                                                <br> Orignal
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="2">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="ours">
                                                                <img src="img/icone_ours.png" alt="ours">
                                                                <br> Ours
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="3">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="castor">
                                                                <img src="img/icone_castor.png" alt="Castor">
                                                                <br> Castor
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="4">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="ecureuil">
                                                                <img src="img/icone_ecureuil.png" alt="Écureuil">
                                                                <br> Écureuil
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="5">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="cerf">
                                                                <img src="img/icone_cerf.png" alt="Chevreuil">
                                                                <br> Chevreuil
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="6">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="phoque">
                                                                <img src="img/icone_phoque.png" alt="Phoque">
                                                                <br>Phoque
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="7">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="coyote">
                                                                <img src="img/icone_coyote.png" alt="Coyote">
                                                                <br>Coyote
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="8">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="marmotte">
                                                                <img src="img/icone_marmotte.png" alt="Marmotte">
                                                                <br> Marmotte
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="9">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="lynx">
                                                                <img src="img/icone_lynx.png" alt="Lynx">
                                                                <br> Lynx
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="10">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="lievre">
                                                                <img src="img/icone_lievre.png" alt="Lièvre">
                                                                <br> Lièvre
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="11">
                                                            </label>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label class="checkbox-inline" for="tortue">
                                                                <img src="img/icone_tortue.png" alt="Tortue">
                                                                <br> Tortue
                                                                <br>
                                                                <input type="checkbox" name="selection[]" value="13">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <br>

                                            <!-- Button -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="singlebutton"></label>
                                                <div class="col-md-4">
                                                    <button id="validate" name="submit" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">Appliquer</button>
                                                </div>
                                            </div>


                                        </fieldset>
                                    </form>

                                    <!--------------------------------- Form ------------------------------->

                                </div>
                            </div>
                        </div>
                    </div>


                    <!----------------------------- Modal Plus Animaux Fin--------------------------->



                    <!----------------------------- Modal Animal Ajouté ----------------------------->

                    <!----------------------------- Modal Animal Ajouté Fin-------------------------->







                </div>
                </div>


                <div id="map"> </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script>
                    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
                </script>
                <script src="../../dist/js/bootstrap.min.js"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
                <script src="assets/js/jquery.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="js/google.js"></script>


                <script>
                    $(function () {
                        $('[data-toggle="popover"]').popover({
                            placement: 'top',
                            delay: '500'
                        })
                    });



                    var map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 13,
                            center: new google.maps.LatLng(46.830394, -71.227172),
                            mapTypeId: 'roadmap'
                        });

                        var iconBase = 'img/';
                        var icons = {
                            1: {
                                icon: iconBase + 'icone_renard.png'
                            },
                            2: {
                                icon: iconBase + 'icone_orignal.png'
                            },
                            3: {
                                icon: iconBase + 'icone_ours.png'
                            },
                            4: {
                                icon: iconBase + 'icone_castor.png'
                            },
                            5: {
                                icon: iconBase + 'icone_ecureuil.png'
                            },
                            6: {
                                icon: iconBase + 'icone_cerf.png'
                            },

                            7: {
                                icon: iconBase + 'icone_phoque.png'
                            },
                            8: {
                                icon: iconBase + 'icone_coyote.png'
                            },
                            9: {
                                icon: iconBase + 'icone_marmotte.png'
                            },
                            10: {
                                icon: iconBase + 'icone_lynx.png'
                            },
                            11: {
                                icon: iconBase + 'icone_lievre.png'
                            },
                            13: {
                                icon: iconBase + 'icone_tortue.png'
                            }
                        };

                        function addMarker(feature) {
                            var marker = new google.maps.Marker({
                                position: feature.position,
                                icon: icons[feature.type].icon,
                                map: map
                            });
                            var contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">Animal</h1>' +
                                '<div id="bodyContent">' +
                                '<p></p>' +
                                '' +
                                '' +
                                '(Vue le 16 decembre 2016).</p>' +
                                '</div>' +
                                '</div>';
                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            marker.addListener('click', function () {
                                infowindow.open(map, marker);
                            });
                        }


                        var features = [


<?php	
    /*--------------------------EXTRACTION----------------------------*/
	
	if ($rowcount > 0){
		//Extraction des données pour chaque rangée.
		while( $row = mysqli_fetch_assoc($result) )
		{
            $id_animal = $row['ID_animaux'];
			//$nom_animal = $row['nom_animaux'];
			//$icone_animal = $row['icone_animaux'];
			$largeur_animal = $row['largeur_x'];
            $hauteur_animal = $row['hauteur_y'];
        
			//$data_animal = $row['data_animaux_vus'];
			
			echo "   {position: new google.maps.LatLng('$largeur_animal',  '$hauteur_animal'),
            type: $id_animal
          },";
		}
		
	}else{
	echo "Aucun resultats";
}
	
?>
//            position: new google.maps.LatLng(-33.91721, 151.22630),
//            type: 'info'
//         } // , {
//            position: new google.maps.LatLng(-33.91539, 151.22820),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91747, 151.22912),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91910, -33.91910),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91725, 151.23011),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91872, 151.23089),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91784, 151.23094),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91682, 151.23149),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91790, 151.23463),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91666, 151.23468),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.916988, 151.233640),
//            type: 'info'
//          }, {
//            position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
//            type: 'parking'
//          }, {
//            position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
//            type: 'library'
//          }
        ];

                        for (var i = 0, feature; feature = features[i]; i++) {
                            addMarker(feature);

                        }

                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZtKrOW22CWfGViDsR7DBQUPW1GRTKtSk&callback=initMap">
                </script>



            </body>

            </html>

            <?php
/**---------------------------------FERMETURE---------------------------*/
	//Libération.
    if(!result) {
        mysqli_free_result($result);
    }
	//Fermeture.
	$dbconnect->close();
?>