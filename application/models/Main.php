<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getNews(){
        $result = $this->db->row('SELECT title, description FROM news');
        // debug($result);
        return $result;
    }
}