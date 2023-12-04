<?php
class Proprietaire{
    private $numproprietaire;
    private $nomproprietaire;
    private $prenomproprietaire;
    private $adresse1proprietaire;
    private $adresse2proprietaire;
    // private $codepostalproprietaire;
    // private $villeproprietaire;
    private $numtel1proprietaire;
    // private $numtel2proprietaire;
    // private $cacumuleproprietaire;
    private $emailproprietaire;

    
    public function __construct($numproprietaire,$nomproprietaire,$prenomproprietaire,$adresse1proprietaire,$adresse2proprietaire,$numtel1proprietaire,$emailproprietaire)
    {
        $this->numproprietaire = $numproprietaire;
        $this->nomproprietaire = $nomproprietaire;
        $this->prenomproprietaire = $prenomproprietaire;
        $this->adresse1proprietaire = $adresse1proprietaire;
        $this->adresse2proprietaire = $adresse2proprietaire;
        // $this->codepostalproprietaire = $codepostalproprietaire;
        // $this->villeproprietaire = $villeproprietaire;
        $this->numtel1proprietaire = $numtel1proprietaire;
        // $this->numtel2proprietaire = $numtel2proprietaire;
        // $this->cacumuleproprietaire = $cacumuleproprietaire;
        $this->emailproprietaire = $emailproprietaire;
    }
    public function enregistrerPropietaire()
    {
        global $db;
        $result = false;

        $numproprietaire = $this->numproprietaire;
        $nomproprietaire = $this->nomproprietaire;
        $prenomproprietaire = $this->prenomproprietaire;
        $adresse1proprietaire = $this->adresse1proprietaire;
        $adresse2proprietaire = $this->adresse2proprietaire;
        // $codepostalproprietaire = $this->codepostalproprietaire;
        // $villeproprietaire = $this->villeproprietaire;
        $numtel1proprietaire = $this->numtel1proprietaire;
        // $numtel2proprietaire = $this->numtel2proprietaire;
        // $cacumuleproprietaire = $this->cacumuleproprietaire;
        $emailproprietaire = $this->emailproprietaire;

        $requete = "INSERT INTO proprietaire (numproprietaire, nomproprietaire, prenomproprietaire, adresse1proprietaire, adresse2proprietaire, numtel1proprietaire, emailproprietaire) VALUES (:numproprietaire, :nomproprietaire, :prenomproprietaire, :adresse1proprietaire, :adresse2proprietaire, :numtel1proprietaire, :emailproprietaire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numproprietaire' => $numproprietaire,
                ':nomproprietaire' => $nomproprietaire,
                ':prenomproprietaire' => $prenomproprietaire,
                ':adresse1proprietaire' => $adresse1proprietaire,
                ':adresse2proprietaire' => $adresse2proprietaire,
                // ':codepostalproprietaire' => $codepostalproprietaire,
                // ':villeproprietaire' => $villeproprietaire,
                ':numtel1proprietaire' => $numtel1proprietaire,
                // ':numtel2proprietaire' => $numtel2proprietaire,
                // ':cacumuleproprietaire' => $cacumuleproprietaire,
                ':emailproprietaire' => $emailproprietaire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getProprietaire(){
        global $db;
        $requete = 'SELECT * FROM proprietaire WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $proprietaires = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $proprietaire = new Proprietaire ($data['numProprietaire'],$data['nomProprietaire'],$data['prenomProprietaire'],$data['adresse1Proprietaire'],$data['adresse2Proprietaire'],$data['numTel1Proprietaire'],$data['emailProprietaire']);
                array_push($proprietaires,$proprietaire);
            }
            return $proprietaires;
        }
        else return [];
    }


    /**
     * Get the value of numproprietaire
     */ 
    public function getNumproprietaire()
    {
        return $this->numproprietaire;
    }

    /**
     * Set the value of numproprietaire
     *
     * @return  self
     */ 
    public function setNumproprietaire($numproprietaire)
    {
        $this->numproprietaire = $numproprietaire;

        return $this;
    }

    /**
     * Get the value of nomproprietaire
     */ 
    public function getNomproprietaire()
    {
        return $this->nomproprietaire;
    }

    /**
     * Set the value of nomproprietaire
     *
     * @return  self
     */ 
    public function setNomproprietaire($nomproprietaire)
    {
        $this->nomproprietaire = $nomproprietaire;

        return $this;
    }

    /**
     * Get the value of prenomproprietaire
     */ 
    public function getPrenomproprietaire()
    {
        return $this->prenomproprietaire;
    }

    /**
     * Set the value of prenomproprietaire
     *
     * @return  self
     */ 
    public function setPrenomproprietaire($prenomproprietaire)
    {
        $this->prenomproprietaire = $prenomproprietaire;

        return $this;
    }

    /**
     * Get the value of adresse1proprietaire
     */ 
    public function getAdresse1proprietaire()
    {
        return $this->adresse1proprietaire;
    }

    /**
     * Set the value of adresse1proprietaire
     *
     * @return  self
     */ 
    public function setAdresse1proprietaire($adresse1proprietaire)
    {
        $this->adresse1proprietaire = $adresse1proprietaire;

        return $this;
    }

    /**
     * Get the value of adresse2proprietaire
     */ 
    public function getAdresse2proprietaire()
    {
        return $this->adresse2proprietaire;
    }

    /**
     * Set the value of adresse2proprietaire
     *
     * @return  self
     */ 
    public function setAdresse2proprietaire($adresse2proprietaire)
    {
        $this->adresse2proprietaire = $adresse2proprietaire;

        return $this;
    }

    /**
     * Get the value of codepostalproprietaire
     */ 
    // public function getCodepostalproprietaire()
    // {
    //     return $this->codepostalproprietaire;
    // }

    /**
     * Set the value of codepostalproprietaire
     *
     * @return  self
     */ 
    // public function setCodepostalproprietaire($codepostalproprietaire)
    // {
    //     $this->codepostalproprietaire = $codepostalproprietaire;

    //     return $this;
    // }

    /**
     * Get the value of villeproprietaire
     */ 
    // public function getVilleproprietaire()
    // {
    //     return $this->villeproprietaire;
    // }

    /**
     * Set the value of villeproprietaire
     *
     * @return  self
     */ 
    // public function setVilleproprietaire($villeproprietaire)
    // {
    //     $this->villeproprietaire = $villeproprietaire;

    //     return $this;
    // }

    /**
     * Get the value of numtel1proprietaire
     */ 
    public function getNumtel1proprietaire()
    {
        return $this->numtel1proprietaire;
    }

    /**
     * Set the value of numtel1proprietaire
     *
     * @return  self
     */ 
    public function setNumtel1proprietaire($numtel1proprietaire)
    {
        $this->numtel1proprietaire = $numtel1proprietaire;

        return $this;
    }

    /**
     * Get the value of numtel2proprietaire
     */ 
    // public function getNumtel2proprietaire()
    // {
    //     return $this->numtel2proprietaire;
    // }

    /**
     * Set the value of numtel2proprietaire
     *
     * @return  self
     */ 
    // public function setNumtel2proprietaire($numtel2proprietaire)
    // {
    //     $this->numtel2proprietaire = $numtel2proprietaire;

    //     return $this;
    // }

    /**
     * Get the value of cacumuleproprietaire
     */ 
    // public function getCacumuleproprietaire()
    // {
    //     return $this->cacumuleproprietaire;
    // }

    /**
     * Set the value of cacumuleproprietaire
     *
     * @return  self
     */ 
    // public function setCacumuleproprietaire($cacumuleproprietaire)
    // {
    //     $this->cacumuleproprietaire = $cacumuleproprietaire;

    //     return $this;
    // }

    /**
     * Get the value of emailproprietaire
     */ 
    public function getEmailproprietaire()
    {
        return $this->emailproprietaire;
    }

    /**
     * Set the value of emailproprietaire
     *
     * @return  self
     */ 
    public function setEmailproprietaire($emailproprietaire)
    {
        $this->emailproprietaire = $emailproprietaire;

        return $this;
    }
}
?>