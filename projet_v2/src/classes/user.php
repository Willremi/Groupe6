<?php
class User {
    public $id;
    public $nom;
    public $prenom;
    public $pseudo;
    public $mail;
    public $mdp;
    public $numRue;
    public $adress;
    public $complementAdress;
    public $codePostal;
    public $ville;

    private $_db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function create() {
        $sql = "INSERT INTO user (nomUser, prenomUser, pseudoUser, mailUser, mdpUser, numRue, nomRue1, nomRue2, cpVille, nomVille) VALUES (:insertNom, :insertPrenom, :insertPseudo, :insertMail, :insertMdp, :insertNumRue, :insertNomRue1, :insertNomRue2, :insertCp, :insertVille)";
        

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
        $this->_db = $db;
    }
}