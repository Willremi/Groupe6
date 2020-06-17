<?php
namespace App\Models;

class Comments {
    private $id;
    private $auteur;
    private $comment;
    private $dateCreation;
    private $dateModif;
    private $serieId;

    private $db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDb($db)
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
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

   /**
    * Get the value of dateCreation
    */ 
   public function getDateCreation()
   {
      return $this->dateCreation;
   }

   /**
    * Set the value of dateCreation
    *
    * @return  self
    */ 
   public function setDateCreation($dateCreation)
   {
      $this->dateCreation = $dateCreation;

      return $this;
   }

    /**
     * Get the value of dateModif
     */ 
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set the value of dateModif
     *
     * @return  self
     */ 
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get the value of serieId
     */ 
    public function getSerieId()
    {
        return $this->serieId;
    }

    /**
     * Set the value of serieId
     *
     * @return  self
     */ 
    public function setSerieId($serieId)
    {
        $this->serieId = $serieId;

        return $this;
    }
}