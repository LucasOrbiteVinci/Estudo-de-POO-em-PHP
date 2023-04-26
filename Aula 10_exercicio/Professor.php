<?php
require_once 'Pessoa.php';


class Professor extends Pessoa
{
    private $especialidade;
    private $salario;


    public function receberAumento()
    {
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function setEspecialidade($esp)
    {
        $this->especialidade = $esp;
    }
    public function setSalario($sa)
    {
        $this->salario = $sa;
    }
}
