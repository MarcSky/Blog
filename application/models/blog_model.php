<?php
/**
 * Created by PhpStorm.
 * User: Levan
 * Date: 13.05.15
 * Time: 23:25
 */

class blog_model extends dbentity_model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPosts(){
        $this->setTable('posts');
        return $this->getSelect();
    }

    public function getPost($id){
        $this->setTable('posts');
        return $this->getSelectWhere(array('id' => $id));
    }

    public function getSearch($text){
        $this->setTable('posts');
        return $this->getSelectWhereLike($text);
    }



}