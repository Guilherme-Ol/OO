<?php

class Animal{
    public $espécie;
    public $patas;
    public $cor;
    public $pele;

    function emitirSom(){
        if($this->espécie == "Porco")
            return "Oink Oink";
        elseif($this->espécie == "Cachorro")
            return "Au Au";
        elseif($this->espécie == "Galinha")
            return "Pó pó";
        elseif($this->espécie == "Pássaro")
            return "Fiu fiu";
        elseif($this->espécie == "Tartaruga")
            return "Aawwwwoouuugh";
    }
    function movimento(){
        if($this->espécie == "Porco")
            return "anda no chão.";
        if($this->espécie == "Cachorro")
            return "anda no chão.";
        if($this->espécie == "Galinha")
            return "anda no chão.";
        if($this->espécie == "Pássaro")
            return "voa.";
        if($this->espécie == "Tartaruga")
            return "nada na água e anda no chão.";
    }

}

//Programa
//porco
$animal1 = new Animal();
$animal1->espécie = "Porco";
$animal1->patas = "4";
$animal1->cor = "rosinha";
$animal1->pele = "lisa";


//cachorro
$animal2 = new Animal();
$animal2->espécie = "Cachorro";
$animal2->patas = "4";
$animal2->cor = "marrom";
$animal2->pele = "Peluda";


//galinha
$animal3 = new Animal();
$animal3->espécie = "Galinha";
$animal3->patas = "2";
$animal3->cor = "branca";
$animal3->pele = "peluda";


//pássaro
$animal4 = new Animal();
$animal4->espécie = "Pássaro";
$animal4->patas = "2";
$animal4->cor = "amarelo";
$animal4->pele = "peluda";


//tartaruga
$animal5 = new Animal();
$animal5->espécie = "Tartaruga";
$animal5->patas = "4";
$animal5->cor = "verde";
$animal5->pele = "lisa";


echo "O animal 1 é um " . $animal1->espécie . ", tem " . $animal1->patas  . " patas, possui a cor " . $animal1->cor . ", tem a pele " . $animal1->pele . ", emite o som " . $animal1->emitirSom() . ", e " . $animal1->movimento() . "\n\n";

echo "O animal 2 é um " . $animal2->espécie . ", tem " . $animal2->patas  . " patas, possui a cor " . $animal2->cor . ", tem a pele " . $animal2->pele . ", emite o som " . $animal2->emitirSom() . ", e " . $animal2->movimento() . "\n\n";
echo "O animal 3 é um " . $animal3->espécie . ", tem " . $animal3->patas  . " patas, possui a cor " . $animal3->cor . ", tem a pele " . $animal3->pele . ", emite o som " . $animal3->emitirSom() . ", e " . $animal3->movimento() . "\n\n";
echo "O animal 4 é um " . $animal4->espécie . ", tem " . $animal4->patas  . " patas, possui a cor " . $animal4->cor . ", tem a pele " . $animal4->pele . ", emite o som " . $animal4->emitirSom() . ", e " . $animal4->movimento() . "\n\n";
echo "O animal 5 é um " . $animal5->espécie . ", tem " . $animal5->patas  . " patas, possui a cor " . $animal5->cor . ", tem a pele " . $animal5->pele . ", emite o som " . $animal5->emitirSom() . ", e " . $animal5->movimento() . "\n\n"; 

