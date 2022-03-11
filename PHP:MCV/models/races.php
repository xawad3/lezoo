<?php
class Races {
    private $idRace;
    private $nom_race;

    //constructeur
    public function __construct(){
        $this->connect = new ConfigDb();
        $this->connect = $this->connect->getConnection();

    }

    // Getter
    public function getIdRace(){
        return $this ->idRace;
    }

    public function getNameRace(){
        return $this->nom_race;
    }

    // Setter
    public function setNameRace($nouvelleRace){
        $this->nom_race = $nouvelleRace;
    }

    public function setIdRace($nouvelleIdRace){
        $this->id_race = intval($nouvelleIdRace,10);
    }

    //fonctions CRUD
    public function readAll(){
        $myQuery = 'SELECT * FROM races';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }
    
    public function readSingle(){
        $myQuery = 'SELECT * FROM races WHERE id_race=:idRace';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_race', $this->idRace);
        $stmt->execute();
        return $stmt;
    }
    
    public function createOne(){
        $myQuery = 'INSERT INTO races 
                    SET 
                        nom_race = :nom_race,';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom_race', $this->nom_race);
            return $stmt->execute();
    }
    
    public function updateOne(){
        $myQuery = 'UPDATE animaux
            SET 
                nom_race = :nom_race,
            WHERE 
                id_race = id_race';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom_race', $this->nom_race);
            $stmt->bindParam(':id_race', $this->id_race);
            return $stmt->execute();
    }
    
    public function deleteOne(){
        $myQuery = 'DELETE FROM races
        WHERE 
            id_race = :idRace';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idRace', $this->idAnimal);
            return $stmt->execute();
    }
}
?>