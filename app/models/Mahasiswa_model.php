<?php

class Mahasiswa_model
{
    private $dbh; //database holder
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=mahasiswa';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

//private $mhs = [
    //     [
    //         "nama" => "Aulia",
    //         "nrp" => "183040065",
    //         "email" => "aulia@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Nada",
    //         "nrp" => "183040011",
    //         "email" => "nada@gmail.com",
    //         "jurusan" => "Manajemen"
    //     ],
    //     [
    //         "nama" => "Imel",
    //         "nrp" => "183040077",
    //         "email" => "imel@gmail.com",
    //         "jurusan" => "Bahasa Korea"
    //     ]
    // ];