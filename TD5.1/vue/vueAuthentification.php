<?php

    


class VueAuthentification{



public function genereVueAuthentification(){
?>
<!doctype html>
<html>
<body>    
<h1>Bienvenue sur ZIKMU le Site d'Achat de Musique En Ligne</h1>
<br/><br/>
<h2> Authentifiez vous !!! </h2>
<br/><br/>
 <form action="index.php" method="GET">
  <fieldset>
    <legend>Personal information:</legend>
    Entrer votre Login
    <input type="text" name="login" value="">
    <br>
    Entrer votre mot de passe:
    <input type="password" name="password" value="">
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form> 
</body>
</html>

<?php
}
}
?>
