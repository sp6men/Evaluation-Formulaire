<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
	<title> Récapitulatif des informations </title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>

	<body>
<div class="stylisation">
        <?php
        
        include('fiche_soin.php');
       
        if(isset($_POST['form_fiche']))
        {
 
            $nom_animal = htmlspecialchars($_POST['nom_animal']); 
            $mail_client = htmlspecialchars($_POST['mail_client']);
            $date_entre = htmlspecialchars($_POST['date_entre']);
            $soin_applique = htmlspecialchars($_POST['soin_applique']);
            $com_mentaire = htmlspecialchars($_POST['com_mentaire']);
            $date_sortie = htmlspecialchars($_POST['date_sortie']);
            $tarif_euro = htmlspecialchars($_POST['tarif_euro']);
            
            $nouvelle_fiche = new fiche($nom_animal, $mail_client, $date_entre, $soin_applique, $com_mentaire, $date_sortie, $tarif_euro);
            $nouvelle_fiche->getAll();
        }
        
  
        
        ?>
        
        </div>

</body>
</html>
