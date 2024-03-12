<?php
include('services/PostService.php');
class HomeController{
    //action:index = method: index
    public function index(){
        //Co lay du lieu gi ko
        $postService = new PostService();
        $posts = $postService->getAllPosts();

        //Su dung du lieu do o dau
        include('views/home/index.php');
    }

    public function create(){
         //Co lay du lieu gi ko

         //Su dung du lieu do o dau
         include('views/home/add.php');
    }
}