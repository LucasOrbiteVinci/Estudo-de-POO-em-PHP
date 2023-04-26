<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    public function pagarMensalidade()
    {
        echo "<p> Pagando mensalidade do aluno <strong>$this->nome </p>";
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
    public function getCurso()
    {
        return $this->curso;
    }

    public function setMatricula($ma)
    {
        $this->matricula = $ma;
    }
    public function setCurso($cur)
    {
        $this->curso = $cur;
    }
}

final class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p> A sua bolsa <strong>$this->nome, foi renovada com sucesso! </p>";
    }
    public function pagarMensalidade()
    {
        echo "<p> $this->nome é bolsista, então possuí $this->bolsa de desconto! </p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bol)
    {
        $this->bolsa = $bol;
    }
}

final class Tecnico extends Aluno
{
    private $registroProfissional;

    public function praticar()
    {
    }

    public function getRegistroProf()
    {
        return $this->registroProfissional;
    }

    public function setRegistroProf($rp)
    {
        $this->registroProfissional = $rp;
    }
}
