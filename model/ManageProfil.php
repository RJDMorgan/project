<?php

require_once 'Manage.php';

class ManageProfil extends Manage
{
    public function createProfil(string $pseudo, string $mail, string $password, string $city, string $cp):object
    {
        $data = 
        [
            'pseudo' => $pseudo,
            'mail' => $mail,
            'password' => $password,
            'city' => $city,
            'postal_code' => $cp
        ];
            
        return $this->getQuery("INSERT INTO users (pseudo, mail, password, city, postal_code, registration_date) VALUES (:pseudo, :mail, :password, :city, :postal_code, NOW())", $data);
        
    }
    
    public function connectProfil(string $pseudo):object
    {
        $data = ['pseudo' => $pseudo];
        
        return $this->getQuery("SELECT pseudo, password FROM users WHERE pseudo=:pseudo", $data);
    }
}