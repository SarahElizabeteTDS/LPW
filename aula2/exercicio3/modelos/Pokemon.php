<?php

class Pokemon
{
    //atributos
    protected string $nome;
    protected int $num;
    protected string $tipo;
    protected string $img;
    protected string $linkDados;

    //constructor
    public function __construct($n,$nu,$t,$i,$l)
    {
        $this->nome = $n;
        $this->num = $nu;
        $this->tipo = $t;
        $this->img = $i;
        $this->linkDados = $l;
    }

    //gets sets

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNum(): int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getImg(): string
    {
        return $this->img;
    }


    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getLinkDados(): string
    {
        return $this->linkDados;
    }

    public function setLinkDados(string $linkDados): self
    {
        $this->linkDados = $linkDados;

        return $this;
    }
}