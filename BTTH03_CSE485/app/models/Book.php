<?php
class Book{
    //Properties
    private $id;
    private $tensach;
    private $namxuatban;
    private $idtacgia;
    
    //Methods
    public function __construct($id, $tensach, $namxuatban, $idtacgia)
    {
        $this->id = $id;
        $this->tensach = $tensach;
        $this->namxuatban = $namxuatban;
        $this->idtacgia = $idtacgia;
    }
  
    //Getters/Setter;
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTensach()
    {
        return $this->tensach;
    }

    public function setTensach($tensach)
    {
        $this->tensach = $tensach;
    }

    public function getNamxuatban()
    {
        return $this->namxuatban;
    }

    public function setNamxuatban($namxuatban)
    {
        $this->namxuatban = $namxuatban;
    }

    public function getIdtacgia()
    {
        return $this->idtacgia;
    }

    public function setIdtacgia($idtacgia)
    {
        $this->idtacgia = $idtacgia;
    }
}
?>