<?php

class Presidente
{
    //atributos
    protected int $numero;
    protected string $nome;
    protected int $anoIni;
    protected int $anoFim;

    //constructor
    public function __construct($n,$nom,$anoI,$anoF)
    {
        $this->numero = $n;
        $this->nome = $nom;
        $this->anoIni = $anoI;
        $this->anoFim = $anoF;
    }

    //gets e sets

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getAnoIni()
    {
        return $this->anoIni;
    }

    public function setAnoIni($anoIni): self
    {
        $this->anoIni = $anoIni;

        return $this;
    }

    public function getAnoFim()
    {
        return $this->anoFim;
    }

    public function setAnoFim($anoFim): self
    {
        $this->anoFim = $anoFim;

        return $this;
    }
}