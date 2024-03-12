<?php

class Post{
    //Properties
    private $id;
    private $title;
    private $content;

    //Methods: codata ...nstructor, settet/getter
    public function __construct($id, $title, $content){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }
}