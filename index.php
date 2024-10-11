<?php 
    $name = "Joshua";
    $isDev = true;
    $age = 15;

    $isOld = $age > 50;


    //constantes globales
    define('Logo_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

    //constantes locales
    const NOMBRE = 'Joshua';


    $output = "Hola $name"; //contraBarra para "escapar" simbolos especiales
    $output .= " , con una edad de $age"; //.= para interpolar cadenas  

    //condicion ternaria
    /*$outputAge = $isOld
    ? 'Eres viejo, lo siento' 
    : 'Eres joven, felicidades'*/

    //match <> switch
    $outputAge = match (true) {
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        default => "Eres viejo viejo, $name",
    };


    //arrays
    $bestLanguages = ["PHP", "JavaScript", "Python"];
    $bestLanguages[] = "Java";
    $bestLanguages[] = "C#";


    //dicionario
    $person = [
        "name" => "Joshua",
        "age" => 22,
        "isDev" => true,
        "languages" => ["Java", "Python", "PHP"]
    ];

    $person["name"] = "Neronoir";
    $person["languages"][] = "JavaScript";

?>

<ul>
    <?php foreach($bestLanguages as $key => $languages) : ?>
        <li><?= $key . " " . $languages ?></li>
    <?php endforeach; ?>
</ul>

<h2> <?= $outputAge ?></h2>


<?php if($isOld) : ?> //sintaxis alternativa al IF
    <h2>Eres viejo, lo siento</h2>
<?php elseif($isDev) : ?>
    <h2>No eres viejo, pero eres Dev</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>


<img src="<?= Logo_URL ?>" alt = "Logo PHP" width="200">

<h1>
    <?= $output;?>
</h1>


<style>
    :root{
        background-color: black;
    }

    body{
        display: grid;
        place-content: center;
        color: white;
    }
</style>