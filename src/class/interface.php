<div class="title">Interface</div>

<?php
interface Animal
{
    public function respirar();
}

interface Mamifero
{
    public function mamar();
}

interface Canino extends Animal, Mamifero
{
    public function latir(): string;
}

class Cachorro implements Canino
{
    public function respirar()
    {
        return "Respirando com oxigênio...<br>";
    }

    public function latir(): string
    {
        return "Au Au!<br>";
    }

    public function mamar()
    {
        return "Mamando...<br>";
    }
}

$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();
echo $animal->mamar();

echo "<br>";
var_dump($animal);

echo "<br>";
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
