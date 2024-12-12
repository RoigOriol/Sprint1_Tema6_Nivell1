# Sprint1_Tema6_Nivell1


📝 Descripció - Enunciat de l'exercici

Aquest projecte de PHP conté tres exercicis:

Gestor de formularis HTML: Un formulari HTML que envia dades a un fitxer PHP. Aquest fitxer mostra els valors dels camps rebuts utilitzant variables superglobals i emmagatzema algunes dades en variables de sessió.

Constants Màgiques: Utilització de constants màgiques com __DIR__ i __FILE__ per mostrar informació del fitxer i directori actuals.

Mètodes màgics: Sobreescriptura del mètode màgic __get per afegir una lògica personalitzada a una classe.

💻 Tecnologies Utilitzades

PHP 8.0+

HTML5

Sessions PHP

📊 Requisits

PHP instal·lat (v8.0 o superior)

Navegador web

Servidor local com XAMPP, WAMP o MAMP

🛠️ Instal·lació

Clona aquest repositori:

git clone <repositori>

Accedeix al directori del projecte:

cd php-formulari-constants-metodes

Assegura't que el servidor local està actiu i el directori del projecte es troba dins de la carpeta htdocs o equivalent.

▶️ Execució

Obre el servidor local (per exemple, XAMPP o WAMP).

Accedeix al formulari a través del navegador:

http://localhost/php-formulari-constants-metodes/index.html

Completa el formulari i envia les dades.

Veureu les dades mostrades i emmagatzemades a la sessió.

🌐 Desplegament

Prepara el servidor de producció amb suport per a PHP.

Puja els fitxers del projecte al servidor.

Assegura't que el servidor té les sessions activades i configurades correctament.

🤝 Contribucions

Les contribucions són benvingudes! Per favor, segueix els següents passos per contribuir:

Fes un fork del repositori.

Crea una nova branca:

git checkout -b feature/NovaFuncionalitat

Fes els teus canvis i commiteja'ls:

git commit -m "Afegeix Nova Funcionalitat"

Puja els canvis a la teva branca:

git push origin feature/NovaFuncionalitat

Fes un pull request.

✨ Exemple d'ús

Un cop executat l'exercici:

El formulari demana un nom d'usuari i una edat.

Les dades es mostren a la pantalla i s'emmagatzemen en variables de sessió.

Constants màgiques com __DIR__ i __FILE__ es mostren al navegador.

El mètode __get de la classe Producte aplica un descompte al preu del producte quan se sol·licita la propietat preuAmbDescompte.