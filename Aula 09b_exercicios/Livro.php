<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
    }
    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }
    // GETTERS
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }
    // SETTERS
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avançarPag()
    {

        if ($this->pagAtual > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual++;
        }
    }

    public function voltarPag()
    {
        $this->pagAtual--;
    }
}
