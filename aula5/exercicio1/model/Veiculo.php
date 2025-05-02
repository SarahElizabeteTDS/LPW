<?php

class Veiculo
{
    private string $modelo;
    private string $marca;
    private string $tipoCombustivel;

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getTipoCombustivel(): string
    {
        if ($this->tipoCombustivel == "A")
        {
            return "Alcool";
        }
        elseif ($this->tipoCombustivel == "G") {
            return "Gasolina";
        }else
        {
            return "Flex";
        }
    }

    public function setTipoCombustivel(string $tipoCombustivel): self
    {
        $this->tipoCombustivel = $tipoCombustivel;

        return $this;
    }
}