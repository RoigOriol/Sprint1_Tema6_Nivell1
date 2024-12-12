<?php

/*Exercici 1
Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals. Enregistra a més, alguns d’aquests valors dins de variables de sessió.*/

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nomUsuari = $_POST['username'];
    $edatUsuari = $_POST['age'];
    
    $_SESSION['username'] = $nomUsuari;
    $_SESSION['age'] = $edatUsuari;

    echo "<h1>Dades del formulari:</h1>";
    echo "<p>Nom d'usuari: " . $nomUsuari . "</p>";
    echo "<p>Edat: " . $edatUsuari . "</p>";
    echo "<h2>Valors emmagatzemats:</h2>";
    echo "<p>Nom d'usuari:" . $_SESSION['username'] . "</p>";
    echo "<p>Edat: " . $_SESSION['age'] . "</p>";
} else {
   
    echo "<p>Error: No s'ha rebut cap dada.</p>";
}

/*Exercici 2
Fes un programa que faci servir almenys un parell de constants màgiques. */

define("SITE_ROOT", __DIR__);
define("CURRENT_FILE", __FILE__);

echo "Directori actual: " . SITE_ROOT . PHP_EOL;
echo "Fitxer actual: " . CURRENT_FILE . PHP_EOL;

function mostrarRuta() {
    echo "La ruta del directori actual és: " . __DIR__ . PHP_EOL;
    echo "Aquest script es troba al fitxer: " . __FILE__ . PHP_EOL;
}

mostrarRuta();


/*Exercici 3
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)*/

class Producte {
    private $preu;

    public function __construct($preu) {
        $this->preu = $preu;
    }

    public function __get($nom) {
        if ($nom === 'preuAmbDescompte') {
            return $this->preu * 0.9;
        } else {
            return "Propietat '$nom' no existent.";
        }
    }
}

$producte = new Producte(100);

echo "Preu amb descompte: " . $producte->preuAmbDescompte . PHP_EOL;
echo $producte->color . PHP_EOL;


?>
