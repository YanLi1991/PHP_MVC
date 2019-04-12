<?php
    class Pages extends Controller{
        public function __construct(){
        }

        // has to have an index function
        public function index(){
            if(isLoggedIn()){
                redirect('posts');
            }

            $data = [
                'title' => 'Yan\'s Post',
                'description' => 'Yan\'s website for collecting quotes from movies, books or famous people'
            ];

            
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title' => 'About Us',
                'description' => 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }