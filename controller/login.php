<?php // controller

require './model/ManageProfil.php';

$profil = new ManageProfil();

if(isset($_POST['submit']))
{
    $pseudo = htmlspecialchars($_POST['pseudo'])??'';
    $mail = htmlspecialchars($_POST['mail'])??'';
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT))??'';
    $city = htmlspecialchars($_POST['city'])??'';
    $cp = htmlspecialchars($_POST['postal_code'])??'';
    $create = $profil->createProfil($pseudo, $mail, $password, $city, $cp);
    header('location:index.php?page=param');

};

if(isset($_POST['connexion']))
{
    if(!empty($_POST['pseudo']) && !empty($_POST['password']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        $connectMember = $profil->connectProfil($pseudo);
        $user = $connectMember->fetch(PDO::FETCH_ASSOC);
        
        if($user)
        {
            if(password_verify($password, $user['password']))
            {
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $user['id'];
                header('location:index.php?page=profil');
            }
            else
            {
                echo "Vos identifiants ne sont pas correctes !!";
            }
        }
    else
    {
        echo "Veillez à remplir tous les champs..";
    }
    }
};

$nav_site = 'nav_site';

$presentation = 'hidden';
$nav_home = 'hidden';
$nav_categ = 'hidden';
$login = 'hidden';

require './view/login.php';