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

    public function create() {
        $sql = "INSERT INTO user (nomUser, prenomUser, pseudoUser, mailUser, mdpUser, numRue, nomRue1, nomRue2, cpVille, nomVille) VALUES (:insertNom, :insertPrenom, :insertPseudo, :insertMail, :insertMdp, :insertNumRue, :insertNomRue1, :insertNomRue2, :insertCp, :insertVille)";
        
    }
    public function update() {

    }
    public function delete() {

    }
    public function select() {

    }
}