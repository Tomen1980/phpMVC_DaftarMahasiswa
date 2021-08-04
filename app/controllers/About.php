<?php

class About extends Controller{
    public function index($nama="agung",$pekerjaan="nyantuy",$umur=18){
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $data["judul"] = "About Me";
        $this->view("templates/header.php",$data);
        $this->view("about/index.php",$data);
        $this->view("templates/footer.php");
    }
    
    public function page(){
        $data["judul"] = "Pages";
        $this->view("templates/header.php",$data);
        $this->view("about/page.php");
        $this->view("templates/footer.php");
    }
}