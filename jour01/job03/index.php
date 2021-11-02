<?php
 $bool = true;
 $float = 4.5; 
 ?>

 <!Doctype html>
 <html lang='fr'>

 <header>
     <meta charest="UTF_8">
     <title>Index</title>

     <style>
     table, th, td {
  border: 1px solid black; }
    </style>

 </header>
 <body>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>  

        <tr>
            <td>Entier</td>
            <td>int</td>
            <td><?php echo $bool ?></td>
        </tr>

        <tr>
            <td>Boolean</td>
            <td>Bool</td>
            <td><?php echo $str ?></td>
        </tr>

        <tr>
                <td>String</td>
                <td>str</td>
                <td><?php echo $str ?></td>
            </tr>
        <tr>
            <td>Float</td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>

    </table>
 </html>
 </body>
