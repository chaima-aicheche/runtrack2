<?php
 $bool = true;
 $str = 'salut';
 $float = 4.5; 
 echo  'Hello';
 ?>

 <!Doctype html>
 <html lang='fr'>

 <head>
     <meta charest="UTF_8">
     <meta http-equiv="X-UA- Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Index</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <table>
    <thead>
        <tr>
            <th scope"col">Type</tr>
            <th scope"col">Nom</tr>
            <th scope"col">Valeur</tr>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <th>Entier</th>
            <th>int</th>
            <th><?php echo $bool ?></th>
        </tr>

        <tr>
            <th>Boolean</th>
            <th>Bool</th>
            <th><?php echo $str ?></th>
        </tr>

        <tr>
            <th>Float</th>
            <th>float</th>
            <th><?php echo $float ?></th>
        </tr>
    </tbody>
    </table>

 </html>
 </body>
