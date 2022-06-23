<?php

class Manage
{
    protected function db_connect()
    {
        try
        {
            $db = new PDO('mysql:host='.SERVER.';port=3306;dbname='.BASE.';charset=utf8', LOGIN, PWD);
        }
        catch (PDOException $e)
        {
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
    
    public function router(string $page):string
    {
        return realpath(in_array($page, array_keys(ROUTES))?CONTROLLER_FOLDER.ROUTES[$page]:CONTROLLER_FOLDER.DEFAULT_ROUTE);
    }
    
}