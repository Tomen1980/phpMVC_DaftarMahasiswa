<?php

class Home extends Controller{
    public function index(){
        $data["judul"] = "Home";
        $data["nama"] = $this->model("User_model")->getUser();
        $this->view("templates/header.php",$data);
        $this->view("home/index.php",$data);
        $this->view("templates/footer.php");
    }
}