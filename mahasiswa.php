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
        $stmt = $this->mysqli->query("SELECT * FROM mahasiswa");
        return $stmt;
    }
}
