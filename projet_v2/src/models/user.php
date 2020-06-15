<?php
namespace App\Models;

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

    public function setDb($db)
    {
        $this->db = $db;
    }

    // Requêtes SQL
    public function create() {
        $sql = "INSERT INTO user (nomUser, prenomUser, pseudoUser, mailUser, mdpUser, numRue, nomRue1, nomRue2, cpVille, nomVille) VALUES (:insertNom, :insertPrenom, :insertPseudo, :insertMail, :insertMdp, :insertNumRue, :insertNomRue1, :insertNomRue2, :insertCp, :insertVille)";

        $reqInsertUser = $this->db->prepare($sql);

        $reqInsertUser->bindParam(':insertNom', $this->nom);
        $reqInsertUser->bindParam(':insertPrenom', $this->prenom);
        $reqInsertUser->bindParam(':insertPseudo', $this->pseudo);
        $reqInsertUser->bindParam(':insertMail', $this->mail);
        $reqInsertUser->bindParam(':insertMdp', $this->mdp);
        $reqInsertUser->bindParam(':insertNumRue', $this->numRue);
        $reqInsertUser->bindParam(':insertNomRue1', $this->adress);
        $reqInsertUser->bindParam(':insertNomRue2', $this->complementAdress);
        $reqInsertUser->bindParam(':insertCp', $this->codePostal);
        $reqInsertUser->bindParam(':insertVille', $this->ville);
        
        $reqInsertUser->execute();

        $nbInsert = $reqInsertUser->rowCount();
        if($nbInsert == 1){
            // header('Location: /?add=sucess');
            echo '<meta http-equiv="refresh" content="0;URL=/?add=success">';
        }else{
            // header('Location: /?add=error');
            echo '<meta http-equiv="refresh" content="0;URL=/?add=error">';
}

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

        $reqUp = $this->db->prepare($sql);

        $reqUp->bindParam(':nomUserUp', $this->nom);
        $reqUp->bindParam(':prenomUserUp', $this->prenom);
        $reqUp->bindParam(':pseudoUserUp', $this->pseudo);
        $reqUp->bindParam(':mailUserUp', $this->mail);
        $reqUp->bindParam(':numRueUp', $this->numRue);
        $reqUp->bindParam(':nomRueUp', $this->adress);
        $reqUp->bindParam(':nomRueCompUp', $this->complementAdress);
        $reqUp->bindParam(':cpVilleUp', $this->codePostal);
        $reqUp->bindParam(':nomVilleUp', $this->ville);
        $reqUp->bindParam(':idUserUp', $this->id);

        $reqUp->execute();

        if($reqUp->rowCount() > 0) {
            // header('Location: compte?modif=OK');
            echo '<meta http-equiv="refresh" content="0;URL=/?modif=OK">';
            
        } else {
            echo 'non réussi';
        }
    }

    public function delete() {
        $sql = "UPDATE user 
                SET activate = 0
                WHERE idUser = :idUser LIMIT 1";
        
        $req = $this->db->prepare($sql);

        $req->bindParam(':idUser', $this->id);

        $req->execute();
    }
    
    // public function select() {
    //     $sql = "SELECT * FROM user";
    // }

    public function selectByPseudo() {
        $pseudoInput = $this->pseudo;
        $sqlSelUser = "SELECT idUser, 
                              nomUser AS Nom, 
                              prenomUser AS Prénom,
                              pseudoUser AS Pseudo, 
                              mailUser AS Email, 
                              mdpUser AS Mdp, 
                              numRue AS NumeroRue, 
                              nomRue1 AS Adresse, 
                              nomRue2 AS AdresseCompl, 
                              cpVille AS CodePostal, 
                              nomVille AS Ville, 
                              activate
                       FROM user 
                       WHERE pseudoUser = :inputPseudo AND activate = 1";
        $reqSelUser = $this->db->prepare($sqlSelUser);
        $reqSelUser->bindParam(':inputPseudo', $pseudoInput);
        $reqSelUser->execute();

        return $reqSelUser->fetchObject();
    
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
        $this->nom = htmlspecialchars(trim($nom));

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
        $this->prenom = htmlspecialchars(trim($prenom));

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
        $this->pseudo = htmlspecialchars(trim($pseudo));

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
        $this->mail = htmlspecialchars(trim($mail));

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
        $this->mdp = password_hash(htmlspecialchars(trim($mdp)), PASSWORD_BCRYPT);

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
        $this->numRue = htmlspecialchars(trim($numRue));

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
        $this->adress = htmlspecialchars(trim($adress));

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
        $this->complementAdress = htmlspecialchars(trim($complementAdress));

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
        $this->codePostal = htmlspecialchars(trim($codePostal));

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
        $this->ville = htmlspecialchars(trim($ville));

        return $this;
    }
}