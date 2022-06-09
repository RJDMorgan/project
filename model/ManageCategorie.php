<?php //model

require_once 'Manage.php';

class ManageCategorie extends Manage
{
    public function affichCategorie(int $id):object
    {
        $data = ['id'=> intval ($id)];
        return $this->getQuery("SELECT id, name FROM categorie WHERE id=:id", $data);
    }
    
    public function getCategMember(int $id):object
    {
        $data = ['id'=> intval ($id)];
        return $this->getQuery("SELECT id, name, user_id, article_id, podcast_id FROM categorie WHERE user_id=:id", $data);
    }
}