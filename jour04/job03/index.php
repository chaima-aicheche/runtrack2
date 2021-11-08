<?php

$_POST = ['name' , 'email'] ;

for($i= 0; isset($_POST[$i]);$i++){
   $var++;
}
echo 'Le nombre de variables est : '.$var;
?>

<body>

  <form action="index.php" method="post">

<label for="name"> Your name: </label>
<input type="text" name="name" >

<label for="name"> Your email: </label>
<input type="text" name="email" >

<input type="submit" value="Envoyer" >
</form>

</body>
