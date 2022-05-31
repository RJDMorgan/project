<?php

require_once 'Manage.php';

class ManageArticle extends Manage
{
    public function getListArticle(int $id=0):object
    {
        if($id)
        {
            // on récupe la liste d'article par catégorie
            $data = ['id'=> intval($id)];
            return $this->getQuery("SELECT id, title, DATE_FORMAT(date,'%e-%c-%Y') as date FROM article WHERE categorie_id=:id", $data);
        }
        else
        {
            return $this->getQuery("SELECT id, title, date FROM article");
        }
    }
    
    public function getInfosArticle(int $id):object
    {
        // on récupe les infos de chaque article de même catégorie
        $data = ['id'=> intval($id)];
        return $this->getQuery("SELECT id, title, date, categorie_id FROM article WHERE id=:id", $data);
    }
    
}