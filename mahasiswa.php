<?php
require_once("parent.php");

class mahasiswa extends orangtua
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMahasiswa()
    {
        $sql = "SELECT * FROM mahasiswa";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->execute();
    }
}