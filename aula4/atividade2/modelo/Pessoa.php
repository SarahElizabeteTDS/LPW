<?php

class Pessoa
{
    protected string $nome;
    protected string $sobrenome;
    protected int $idade;

    public function __construct($n,$s,$i)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->idade = $i;
    }

    public function __toString()
    {
        return "Nome completo: ". $this->nome ."<sobrenome>". " " . $this->sobrenome . "<br>" ."Idade: ". $this->idade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}