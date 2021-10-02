<?php

	require('conn.php');
		
	$nom=$_POST['nom_matiere'];
	$nombre_heure_total=$_POST['nombre_heure_total'];
	$nombre_heure_tp=$_POST['nombre_heure_tp'];
	$nombre_heure_th=$_POST['nombre_heure_th'];
	$coef=$_POST['coef'];
	$choix=implode(',',$_POST['choix']);

	$requete_insert_matiere="INSERT INTO implode matiere VALUES(?,?,?,?,?,?,?)";
	$valeurs_insert_matiere=array(
                        NULL,
                        $nom,
                        $nombre_heure_total,
                        $nombre_heure_tp,
                        $nombre_heure_th,
                        $coef,
						$choix
					);
					
	$resultat_insert_matiere=$pdo->prepare($requete_insert_matiere);
	$resultat_insert_matiere->execute($valeurs_insert_matiere);
	
	//$msg= "Matiere ajoutée avec succès";
	//$url= "matieres/page_les_matieres.php";		
	header("location:page_add_matiere.php");
	
?>
