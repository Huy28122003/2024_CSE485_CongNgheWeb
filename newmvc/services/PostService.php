<?php
include('models/Post.php');
class PostService{
    public function getAllPosts(){
        // 5 buoc tuong tac DB
        $posts = [
            ['id'=>'1', 'title'=>'Post 1', 'content'=>'Content 1'],
            ['id'=>'2', 'title'=>'Post 1', 'content'=>'Content 1'],
            ['id'=>'3', 'title'=>'Post 1', 'content'=>'Content 1']
        ];

        //Chuyen doi mang cua mang > mang cua doi tuong
        $obj_posts = [];
        foreach($posts as $post){
            $obj = new Post($post['id'], $post['title'], $post['content']);
            $obj_posts[] = $obj;
            // array_push($obj_posts, $obj);
        }
        return $obj_posts;

    }

    public function getPostById($id){

    }


    public function addNewPost($id, $title, $content){

    }
}