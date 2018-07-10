<?php 

class fiche {

    private $_nom_animal;
    private $_mail_client;
    private $_date_entre;
    private $_soin_applique;
    private $_com_mentaire;
    private $_date_sortie;
    private $_tarif_euro;
     
    function __construct($nom_animal, $mail_client, $date_entre, $soin_applique, $com_mentaire, $date_sortie, $tarif_euro) {
        $this->_nom_animal = $nom_animal;
        $this->_mail_client = $mail_client;
        $this->_date_entre = $date_entre;
        $this->_soin_applique = $soin_applique;
        $this->_com_mentaire = $com_mentaire;
        $this->_date_sortie = $date_sortie;
        $this->_tarif_euro = $tarif_euro;
        
    }
    
    public function set ($id, $value) 
    {
        $_id = "_".$id;
        $this->$_id;
    }
    public function get ($id)
    {
        $_id = "_".$id;
        return $this->$_id;
    }
    public function getAll()
    {
        echo '<p class="nomanim">Nom de l\'animal : ' .$this->_nom_animal.'<br /></p>';
        echo '<p class="mailpro">Mail du propriétaire : '.$this->_mail_client.'<br /></p>';
        echo '<p class="datent">Date d\'entrée : ' .$this->_date_entre.'<br /></p>';
        echo '<p class="soinsap">Soins appliqués : '.$this->_soin_applique.'<br /></p>';
        echo '<p class="com">Commentaires supplémentaires : '.$this->_com_mentaire.'<br /></p>';
        echo '<p class="dateso">Date de sortie : '.$this->_date_sortie.'<br /></p>';
        echo '<p class="tarifa">Tarif appliqué : '.$this->_tarif_euro.'<br /></p>';
    }
}

?>



