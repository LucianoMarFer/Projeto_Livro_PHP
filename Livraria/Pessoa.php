<?php

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
   
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    public function status() {
        echo '---------------------------------';
        echo '<br>';
        echo 'Nome: '. $this->getNome();
        echo '<br>';
        echo 'Idade: '. $this->getIdade();
        echo '<br>';
        echo 'Sexo: '. $this->getSexo();
        echo '<br>';
        echo '---------------------------------';
        
    }
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        
    }    
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }


    
}
