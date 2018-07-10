<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
	<title> Vétérinaire pour félins </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
</head>

	<body>
        
        
        <form method="POST" action="rendu.php" class="formulaire">
    <div>
        <label for="name" id="nomanim">Nom de l'animal :</label>
        <input type="text" id="nomanim1" name="nom_animal">
    </div>
    <div>
        <label for="mail" id="mailclient">Votre e-mail :</label>
        <input type="email" id="mailclient1" name="mail_client">
    </div>
            <div>
        <label for="msg" id="datentr">Date d'entrée de l'animal :</label>
        <input type="date" id="datentr1" name="date_entre">
    </div>
    <div>
        
        <label for="msg" id="soinsapp">Soins appliqués :</label>
        <SELECT name="soin_applique" size="1">
            <OPTION>Radio </OPTION>
            <OPTION>Pose d'un plâtre</OPTION>
            <OPTION>Détartrage</OPTION>
            <OPTION>Toilettage</OPTION>
            <OPTION>Autre</OPTION>
        </SELECT>
        
     <!--   <label for="msg" id="soinsapp">Soins appliqués :</label>
        <textarea id="soinsapp1" name="user_message"></textarea> !-->
    </div>
            <div>
        <label for="msg" id="com">commentaires :</label>
        <textarea id="com1" name="com_mentaire"></textarea>
    </div>
            <div>
        <label for="msg" id="datesort">Date de sortie de l'animal :</label>
        <input type="date" id="datesort1" name="date_sortie">
    </div>
             <div>
        <label for="msg" id="tarif">Tarif appliqué :</label>
        <textarea id="tarif1" name="tarif_euro"></textarea>
    </div>
      <input type="submit" name="form_fiche" value="Création la feuille de soins" class="submit">
        
</form>
</body>
</html>
