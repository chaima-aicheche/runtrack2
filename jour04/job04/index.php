<head>
     
     <style>
     table, th, th {
  border: 1px solid black; }
    </style>

 </head>
 <body>

 <form action="index.php" method="POST">

<label for="name"> Your name: </label>
<input type="text" name="name" >

<label for="name"> Your mail: </label>
<input type="text" name="mail" >

<input type="submit" value="Envoyer" >
</form>

     </br>

    <table>
        <thead>
        <tr>
            <th scope="col">Argument</th>
            <th scope="col">Valeur</th>
        </tr>  
        </thead> 
     <tbody>

        <tr>
            <th><?php echo 'Name';?></th>
            <th><?php echo $_POST['name'];?></th>    
        </tr>

        <tr>
            <th><?php echo 'Mail';?></th>
            <th><?php echo $_POST['mail'];?></th>  
           
        </tr>
     </body>
    </table>
 
 </body>