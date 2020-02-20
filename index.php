<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

 $string = "Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l'odore di treno che resta anche dopo che tutti i treni sono partiti, l'odore speciale delle stazioni dopo che è partito l'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d'averci passato una vita, entrando e uscendo da questo bar, passando dall'odore della pensilina all'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell'attesa, l'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.";

 $change = $_GET["change"];

 $author = $_GET["author"];

 $img = "https://www.dropbox.com/s/owh054xczqtxkm4/bs.gif?raw=1";

 $alt = "che sorpresa!"

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-badwords</title>
   </head>
   <body>
     <p>
       <!-- echo $variabile - stampare il contenuto della variabie -->
       <?php
       echo $string;
       ?>
     </p>
     <!-- Con l'inspector vedo il nome dell'autore messo nella URL -->
     <p data-author="<?php echo $author ?>">
       <!-- strlen(stringa) - ritorna la lunghezza di una stringa -->
       Length paragraph: <?php echo strlen($string); ?>characters
     </p>
     <img src=" <?php echo $img ?>" alt=" <?php $alt ?>">

     <p>
       <!-- str_replace(porzioneDaModificare, conCosa, stringa) -
       cambierà il valore di unaporzione della stringa in un altro -->

       <?php $secondstring = str_replace($change, "***", $string);
       echo $secondstring;
        ?>
     </p>
     <p>
       Length paragraph: <?php echo strlen($secondstring); ?> characters
     </p>
   </body>
 </html>
