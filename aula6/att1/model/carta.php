<?php

class CartaFilme
{
    private string $nomeFilme;
    private string $diretor;
    private int $ano;
    private string $imagem;

    public function __construct($nf,$d,$a,$i)
    {
        $this->nomeFilme = $nf;
        $this->diretor = $d;
        $this->ano = $a;
        $this->imagem = $i;
    }

    public function __toString()
    {
        return "<div class=paicarta><div class=carta>". $this->nomeFilme . "<br>". $this->diretor . "<br>". $this->ano . "<br><img src='imagens/". $this->imagem . "' /><br></div></div>";
    }

    //metodos

    public function getNomeFilme(): string
    {
        return $this->nomeFilme;
    }

    public function setNomeFilme(string $nomeFilme): self
    {
        $this->nomeFilme = $nomeFilme;

        return $this;
    }

    public function getDiretor(): string
    {
        return $this->diretor;
    }

    public function setDiretor(string $diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }
}