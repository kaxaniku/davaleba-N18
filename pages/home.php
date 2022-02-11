<?php
class Home extends Page{
    function __construct() {
        $this->model = new HomeModel();
    }
    public function index()
    {
        $this->data["categories"] = $this->model->getHomeCategories();

        $this->load('views/home/index.php');
    }
}