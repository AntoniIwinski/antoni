<?php
require_once 'car.php';
    class Database{
        private PDO $pdo;
        public function __construct(string $host, string $dbname, string $user, string $password){
            $this->pdo = new PDO("mysql:hist=$host;dbname=$dbname", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,POD::ERRMODE_EXCEPTION);
        }
        public function __destruct(){
            $this->pdo = null;
        }
        public function getCars(): array{
            $sql = "SELECT * FROM car";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,"Car");

            return $stmt->fetchAll();
        }
        public function getCar(int $id) ?Car{
            $sql = "SELECT * FROM car WHERE id = :id";
            $stmt = $this->pdo->
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS,"Car");

            return $stmt->fetchAll();
        }
    }
?>