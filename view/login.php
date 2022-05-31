<?php //view

$title = 'LOG IN...';

?>

<div class="formulaire">
    <form class="inscript" action="" method="POST">
        <label for="pseudo">Pseudo : </label><br>
        <input type="text" name="pseudo" id="pseudo"/><br>
        
        <label for="mail">Mail : </label><br>
        <input type="text" name="mail" id="mail"/><br>
        
        <label for="password">Mot de Passe : </label><br>
        <input type="password" name="password" id="password"/><br>
        
        <label for="city">Ville : </label><br>
        <input type="text" name="city" id="city"/><br>
        
        <label for="postal_code">Code Postal : </label><br>
        <input type="text" name="postal_code" id="postal_code"/><br>
        <br>
        
        <input type="submit" name="submit" value="Inscription"/>
    </form>
    
    <form class="connex" action="" method="POST">
        <label for="pseudo">Pseudo : </label><br>
        <input type="text" name="pseudo" id="pseudo"/><br>
        
        <label for="password">Mot de Passe : </label><br>
        <input type="password" name="password" id="password"/><br>
        <br>
        
        <input type="submit" name="connexion" value="Connexion"/>
    </form>
</div>

<?php

$content = ob_get_clean();
require 'template.php';
