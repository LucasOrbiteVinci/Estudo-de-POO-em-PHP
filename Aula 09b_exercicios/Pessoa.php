<?php

require_once 'Livro.php';

class Pessoa
{

    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniver()
    {
        $this->idade++;
    }

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    // GETTERS
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    // SETTERS
    public function setNome($no)
    {
        $this->nome = $no;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }
}
