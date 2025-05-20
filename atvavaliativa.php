<?php

class pessoa{

    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    function getApresentacao(){
        return ("Olá mundo, sou $this->nome, resido no endereço $this->endereco, $this->cidade-$this->UF e possuo uma altura de $this->altura!\n");
    }

    


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of UF
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Set the value of UF
     */
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa1 = new pessoa();
$pessoa1->setNome("Guilherme");
$pessoa1->setEndereco("Rua Aquidauana");
$pessoa1-> setCidade("Foz do Iguaçu");
$pessoa1->setUF("PR");
$pessoa1->setAltura("1.70");

$pessoa2 = new pessoa();
$pessoa2->setNome("Gaybriel Minecraft");
$pessoa2->setEndereco("Rua de baixo da ponte");
$pessoa2-> setCidade("Foz do Iguaçu");
$pessoa2->setUF("PR");
$pessoa2->setAltura("1.77");

echo $pessoa1->getApresentacao();
echo $pessoa2->getApresentacao();