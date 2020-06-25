<?php
namespace App\Models;
class Series {
    private $id;
    private $apiSerieId;
    private $nomSerie;

    private $db; // Instance de PDO

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDb($db)
    {
        $this->db = $db;
    }

    public function create() {
        $sql = "INSERT INTO serie (apiSerieId, nomSerie) 
                VALUES (:insertSerieId, :insertNomSerie)";

        $req = $this->db->prepare($sql);

        $req->bindParam(':insertSerieId', $this->apiSerieId);
        $req->bindParam(':insertNomSerie', $this->nomSerie);

        $req->execute();
    }

    public function selectByApiId() {
        $sql = "SELECT id, 
                       apiSerieId, 
                       nomSerie 
                FROM serie 
                WHERE apiSerieId = :apiSerieId";
        
        $req = $this->db->prepare($sql);
        $req->bindParam(':apiSerieId', $this->apiSerieId);
        $req->execute();

        return $req->fetchObject();
    }

    public function selectById() {
        $sql = "SELECT * 
                FROM serie 
                WHERE id = :id";
        
        $req = $this->db->prepare($sql);
        $req->bindParam(':id', $this->id);
        $req->execute();

        return $req->fetchObject();
        $req->debugDumpParams();
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
     * Get the value of apiSerieId
     */ 
    public function getApiSerieId()
    {
        return $this->apiSerieId;
    }

    /**
     * Set the value of apiSerieId
     *
     * @return  self
     */ 
    public function setApiSerieId($apiSerieId)
    {
        $this->apiSerieId = $apiSerieId;

        return $this;
    }

    /**
     * Get the value of nomSerie
     */ 
    public function getNomSerie()
    {
        return $this->nomSerie;
    }

    /**
     * Set the value of nomSerie
     *
     * @return  self
     */ 
    public function setNomSerie($nomSerie)
    {
        $this->nomSerie = $nomSerie;

        return $this;
    }
}