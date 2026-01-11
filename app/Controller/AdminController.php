<?php

namespace App\Controller;

use App\Models\Category;
use Core\Base\Controller;
use Database\Database;

class AdminController extends Controller {
    public function category(){
        
        $stmt= Database::getConnection()->prepare("SELECT * FROM categories");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $categories = [];
        foreach($data as $row){
           
            $categories[] = new Category($row['id'], $row['name'], $row['description']);
        }
        
        return $this->view('admin.category',compact('categories'),layout: 'admin');
    }
    public function members(){
        return $this->view('admin.members',layout: 'admin');
    }
    public function dashboard(){
        return $this->view('admin.dashboard',layout: 'admin');
    }
    
}