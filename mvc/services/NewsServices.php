<?php 
require_once ROOT."/models/News.php";
class NewsService{
    public function getAllNews(){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=democsdl','root','');
            $stmt = $conn->query("SELECT * FROM news");
            $news = [];
            while($row =$stmt->fetch()){
                $new = new News($row['news_id'],$row['title'],$row['content'],$row['publish_date'],$row['author_id'],$row['category_id'],$row['feature_image_url']);
                $news[] = $new;
            }
            return $news;
        }
        catch(PDOException $e){
            return $news=[];
            //echo $e->getMessage();
        }

    }
}