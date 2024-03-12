<?php
class News{
    private $id;
    private $title;
    private $content;
    private $publishDate;
    private $authorId;
    private $categoryId;
    private $featureImageUrl;
    public function __construct($id, $title, $content, $publishDate, $authorId,$categoryId,$featureImageUrl){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->publishDate = $publishDate;
        $this->authorId = $authorId;
        $this->categoryId = $categoryId;
        $this->featureImageUrl = $featureImageUrl;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getPublishDate(){
        return $this->publishDate;
    }
    public function setPublishDate($publishDate){
        $this->publishDate = $publishDate;
    }
    public function getAuthorId(){
        return $this->authorId;
    }
    public function setAuthorId($authorId){
        $this->authorId = $authorId;
    }
    public function getCategoryId(){
        return $this->categoryId;
    }
    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }
    public function getFeatureImageUrl(){
        return $this->featureImageUrl;
    }
    public function setFeatureImageUrl($featureImageUrl){
        $this->featureImageUrl = $featureImageUrl;
    }
    
}