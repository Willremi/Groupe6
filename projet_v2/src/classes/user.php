<?php

class User {
    private $id;
    private $nom;
    private $prenom;
    private $pseudo;
    private $mail;
    private $mdp;
    private $numRue;
    private $adress;
    private $complementAdress;
    private $codePostal;
    private $ville;

    private $db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function create() {
        $sql = "INSERT INTO user (nomUser, prenomUser, pseudoUser, mailUser, mdpUser, numRue, nomRue1, nomRue2, cpVille, nomVille) VALUES (:insertNom, :insertPrenom, :insertPseudo, :insertMail, :insertMdp, :insertNumRue, :insertNomRue1, :insertNomRue2, :insertCp, :insertVille)";

        $reqInsertUser = $this->db->prepare($sql);
        $reqInsertUser->bindParam(':insertNom', $this->nom);
        $reqInsertUser->bindParam(':insertPrenom', $this->prenom);
        $reqInsertUser->bindParam(':insertPseudo', $this->pseudoInsert);
        $reqInsertUser->bindParam(':insertMail', $this->email);
        $reqInsertUser->bindParam(':insertMdp', $this->mdp);
        $reqInsertUser->bindParam(':insertNumRue', $this->numRue);
        $reqInsertUser->bindParam(':insertNomRue1', $this->adresse);
        $reqInsertUser->bindParam(':insertNomRue2', $this->adresseCompl);
        $reqInsertUser->bindParam(':insertCp', $this->cp);
        $reqInsertUser->bindParam(':insertVille', $this->ville);
        
        $reqInsertUser->execute();

    }

    public function update() {
        $sql = "UPDATE user 
          SET nomUser = :nomUserUp, 
              prenomUser = :prenomUserUp, 
              pseudoUser = :pseudoUserUp, 
              mailUser = :mailUserUp, 
              numRue = :numRueUp, 
              nomRue1 = :nomRueUp, 
              nomRue2 = :nomRueCompUp, 
              cpVille = :cpVilleUp, 
              nomVille = :nomVilleUp 
          WHERE idUser = :idUserUp LIMIT 1";
    }

    public function delete() {
        $sql = "DELETE FROM user WHERE idUser = :idUser LIMIT 1";
    }
    
    public function select() {
        $sql = "SELECT * FROM user";
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of numRue
     */ 
    public function getNumRue()
    {
        return $this->numRue;
    }

    /**
     * Set the value of numRue
     *
     * @return  self
     */ 
    public function setNumRue($numRue)
    {
        $this->numRue = $numRue;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of complementAdress
     */ 
    public function getComplementAdress()
    {
        return $this->complementAdress;
    }

    /**
     * Set the value of complementAdress
     *
     * @return  self
     */ 
    public function setComplementAdress($complementAdress)
    {
        $this->complementAdress = $complementAdress;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}