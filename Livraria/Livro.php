<?php
require_once './Pessoa.php';
require_once './Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes() {
        echo '---------------------------------<br>';
        echo 'Título: '. $this->getTitulo();
        echo '<br>';
        echo 'Autor: '. $this->getAutor();
        echo '<br>';
        echo 'Total de páginas: '. $this->getTotPaginas();
        echo '<br>';
        echo 'Página atual: '. $this->getPagAtual();
        echo '<br>';
        echo 'Sendo lido por '. $this->leitor->getNome();
        echo "<br>";
        echo '---------------------------------<br>';
        
    }
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    
     public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }   

    public function folhear($p) {
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

   

}
