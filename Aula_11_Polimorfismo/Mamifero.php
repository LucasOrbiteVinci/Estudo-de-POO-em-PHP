<?php
require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPelo;

    // Metodos Especiais
    public function locomover()
    {
        echo "Correndo.";
    }
    public function alimentar()
    {
        echo "Mamando";
    }
    public function emitirSom()
    {
        echo "Som de Mamifero";
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
    public function getCorPelo()
    {
        return $this->corPelo;
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
    public function setCorPelo($cp)
    {
        $this->corPelo = $cp;
    }
}
