<?php

class Manage
{
    protected function db_connect()
    {
        $server = 'db.3wa.io';
        $login = 'romualddugast';
        $pwd = 'dec233f4582c63f91161cbf37b3ee0d9';
        $base = 'romualddugast_project';
        
        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
    }
        
    protected function getQuery($query,$data = [])
    {
        $db = $this->db_connect();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt;
    }
}