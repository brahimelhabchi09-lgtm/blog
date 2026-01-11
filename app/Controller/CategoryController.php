<?php

namespace App\Controller;

use App\Models\Category;
use Core\Base\Controller;
use Database\Database;

class CategoryController extends Controller {

    public function create(){
        return $this->view('admin.addCategory',layout: 'admin');
    }
    public function edit(){
        $id = $_GET['id'] ?? '';
        $stmt = Database::getConnection()->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch();
       
         $category = new Category($data['id'], $data['name'], $data['description']);
        return $this->view('admin.editCategory',compact('category'),layout: 'admin');
   
    }
    public function store(){
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        
        if(empty($name) || empty($description)){
            $_SESSION['error'] = "All fields are required.";
            header("Location: /admin/category/create");
            exit();
        }

        $stmt = Database::getConnection()->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
        if($stmt->execute([$name, $description])){
            $_SESSION['success'] = "Category created successfully.";
            header("Location: /admin/category");
            exit();
        } else {
            $_SESSION['error'] = "An error occurred while creating the category.";
            header("Location: /admin/category/create");
            exit(); 
        }


}
    public function update(){
            $id = $_POST['id'] ?? '';
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            if(empty($name) || empty($description)){
                $_SESSION['error'] = "All fields are required.";
                header("Location: /admin/category/edit?id=$id");
                exit();
            }

            $stmt = Database::getConnection()->prepare("UPDATE categories SET name = ?, description = ? WHERE id = ?");
            if($stmt->execute([$name, $description, $id])){
                $_SESSION['success'] = "Category updated successfully.";
                header("Location: /admin/category");
                exit();
            } else {
                $_SESSION['error'] = "An error occurred while updating the category.";
                header("Location: /admin/category/edit?id=$id");
                exit(); 
            }
        }
        public function delete(){
        $stmt = Database::getConnection()->prepare("DELETE FROM categories WHERE id = ?");
        $id = $_POST['id'] ?? '';
        if($stmt->execute([$id])){
            $_SESSION['success'] = "Category deleted successfully.";
            header("Location: /admin/category");
            exit();
        } else {
            $_SESSION['error'] = "An error occurred while deleting the category.";
            header("Location: /admin/category");
            exit();
        }
    }
}