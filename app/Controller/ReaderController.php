<?php

namespace App\Controller;

use Core\Base\Controller;

class ReaderController extends Controller {
    public function article(){
        return $this->view('reader.article');
    }
    public function articleDetail(){
        return $this->view('reader.articleDetail');
    }
    
}