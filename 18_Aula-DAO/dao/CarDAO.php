<?php

include_once("models/Car.php");

class CarDAO implements CarDAO

{
    private $conn;


    public function findAll()
    {
        $this->conn = $conn;
    }

    public function create(Car $car)
    {
        $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color");

        $stmt->bindParam(":brand, $car->getBrand");
    }
}
