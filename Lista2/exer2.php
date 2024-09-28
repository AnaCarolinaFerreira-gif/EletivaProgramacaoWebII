<?php
 abstract class Funcionario{
    protected string $nome = "";
    protected string $codigo = "0";
    protected float $salario = 0.0;

    public function __construct(string $nome, string $codigo, float $salario){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salario = $salario;
    }


    public function setCodigo(string $codigo) : void {
        $this->codigo = $codigo;
    }
    
    public function getCogigo() : string{
        return $this->codigo;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome($nome) : void{
        $this->nome = $nome;
    }

    public function setSalario($salario) : void{
        $this -> salario = $salario;
    }

    public function getSalario() : float{
        return $this -> salario;
    }


 }