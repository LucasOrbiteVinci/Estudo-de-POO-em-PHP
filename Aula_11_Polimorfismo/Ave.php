<?php
require_once 'Animal.php';


class Ave extends Animal
{
    private $corPena;

    // Metodos Especiais
    public function locomover()
    {
        echo "Voando";
    }
    public function alimentar()
    {
        echo "Come Frutas";
    }
    public function emitirSom()
    {
        echo "Som de Ave";
    }

    public function fazerNinho()
    {
        echo "contruiu um ninho";
    }
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
    public function getCorPena()
    {
        return $this->corPena;
    }
    // SETTERS
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
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }
}
