<?php

//Kreirajte dvije klase
//jedna nasljeđuje drugu
//svaka klasa ima po dva stvojstva
// kreirati instancu pod klase i dodjeliti sva svojstva

class Zivotinja
{

    private $pripitomljenost;
    private $vrsta;

    /**
     * Get the value of pripitomljenost
     */ 
    public function getPripitomljenost()
    {
        return $this->pripitomljenost;
    }

    /**
     * Set the value of pripitomljenost
     *
     * @return  self
     */ 
    public function setPripitomljenost($pripitomljenost)
    {
        $this->pripitomljenost = $pripitomljenost;

        return $this;
    }

    /**
     * Get the value of vrsta
     */ 
    public function getVrsta()
    {
        return $this->vrsta;
    }

    /**
     * Set the value of vrsta
     *
     * @return  self
     */ 
    public function setVrsta($vrsta)
    {
        $this->vrsta = $vrsta;

        return $this;
    }
}

class Pas extends Zivotinja
{
    private $pasmina;
    private $vlasnik;

    /**
     * Get the value of pasmina
     */ 
    public function getPasmina()
    {
        return $this->pasmina;
    }

    /**
     * Set the value of pasmina
     *
     * @return  self
     */ 
    public function setPasmina($pasmina)
    {
        $this->pasmina = $pasmina;

        return $this;
    }

    /**
     * Get the value of vlasnik
     */ 
    public function getVlasnik()
    {
        return $this->vlasnik;
    }

    /**
     * Set the value of vlasnik
     *
     * @return  self
     */ 
    public function setVlasnik($vlasnik)
    {
        $this->vlasnik = $vlasnik;

        return $this;
    }
}

$buldog = new Pas();
