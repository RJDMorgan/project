<?php //model

require_once 'Manage.php';

class ManageCategorie extends Manage
{
    public function affichCategorie(int $id):object
    {
        $data = ['id'=> intval ($id)];
        return $this->getQuery("SELECT id, name FROM categorie WHERE id=:id", $data);
    }
}