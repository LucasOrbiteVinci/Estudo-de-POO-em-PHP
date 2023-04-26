<?php
require_once "Animal.php";

class Reptil extends Animal
{
    private $corEscama;

    // Metodos Especiais
    public function locomover()
    {
        echo "Rastejar";
    }
    public function alimentar()
    {
        echo "Comer Insetos";
    }
    public function emitirSom()
    {
        echo "Som de Reptil";
    }
    // GETTERS
    public function getPeso()
    {
        return $this->peso;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getMembros()
    {
        return $this->membros;
    }
    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setPeso($pe)
    {
        $this->peso = $pe;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function setMembros($me)
    {
        $this->membros = $me;
    }
    public function setCorEscama($ce)
    {
        $this->corEscama = $ce;
    }
}
