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
            return $this->getQuery("SELECT id, title, DATE_FORMAT(date,'%d-%m-%Y') as date FROM article WHERE categorie_id=:id", $data);
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
    
    public function getArticle(int $id):object
    {
        $data = ['id'=> intval($id)];
        return $this->getQuery("SELECT id, title, DATE_FORMAT(date,'%d-%m-%Y') as date, content, user_id, categorie_id FROM article WHERE id=:id", $data);
    }
    
    public function getArtMember(int $id, int $categ):object
    {
        $data = ['id'=> $id,
                'categ'=> $categ];
        return $this->getQuery("SELECT id, title, DATE_FORMAT(date, '%d-%m-%Y') as date, categorie_id FROM article WHERE user_id=:id AND categorie_id=:categ", $data);
    }
}