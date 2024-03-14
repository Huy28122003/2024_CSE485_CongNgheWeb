<?php 
class NewsController{
    public function index(){
        // Lấy dữ liệu từ database
        require_once ROOT.'/services/NewsServices.php';
        $newsService = new NewsService();
        $news = $newsService->getAllNews();
        // Đẩy dữ liệu lên view
        include(ROOT.'/views/NewsView.php');
    }

}