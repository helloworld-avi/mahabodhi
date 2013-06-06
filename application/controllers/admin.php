<?php

    class Admin extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index($args=null){
            $this->load->view('admin/home/home');
        }
        
        public function login(){
            //$id = $this->security->xss_clean(strtolower(trim($this->input->post('admin_id'))));
            //$pwd = $this->security->xss_clean(strtolower(trim($this->input->post('admin_pwd'))));
            $this->load->view('admin/login');
        }
        
        public function video(){
            $para = $this->uri->rsegment(3);
            if(!isset($para)){
                echo "no video mode assigned";
            }
            else{
                switch($para){
                    case 'search':
                        $this->searchVideo($this->uri->rsegment(4));
                        break;
                    
                    case 'watch':
                        $this->watchVideo();
                        break;
                            
                    case 'view-list':
                            $this->viewVideoList($this->uri->rsegment(4));
                            break;
                    
                    case 'new':
                        $this->newVideo();
                        break;
                    
                    case 'save':
                        $this->saveVideo();
                        break;
                    
                    case 'edit':
                        $this->getVideoInfo($this->uri->rsegment(4));
                        break;
                    
                    case 'delete':
                        $this->deleteVideo();
                        break;
                    
                    default:
                        echo "invalid mode applied";
                        break;
                }
            }
        }
        
        private function searchVideo($id){
            $s = $this->input-post( $this->input->post("search_text", TRUE) );
            $this->load->model();
            
        }
        
        private function searchUser($id){
            
        }
        
        private function watchVideo($id){
        
        }
        
        private function viewVideoList($cat){
            if(!$cat){
                $data['msg'] = "No category selected, Please select video category";
                $this->load->view('admin/message', $data);
            }
            else{
                $this->load->model('adminmodel');
                $data['videos'] = $this->adminmodel->getFeaturedVideoByCategory($cat);
                $this->load->view('admin/video/category-view-list', $data);
                /*
                $data['msg'] = "video list of ".$id." is displaying";
                $this->load->view('admin/video/category-view-list', $data);
                */
            }
        }
        
        private function viewUser($id){
            
        }
        
        private function newVideo(){
            $this->load->view('admin/video/create');
        }
        
        private function saveVideo(){
            $video = array('title' => $this->input->post('item_title', TRUE),
                           'y_id' => $this->input->post('item_id', TRUE),
                           'category' => $this->input->post('item_category', TRUE),
                           'description' => $this->input->post('item_dex', TRUE)
                           );
            $this->load->model('adminmodel');
            if(!$this->adminmodel->setVideo($video)){
                $msg = "Oops something went wrong, Please make sure that you tube video id is not already present";
                $this->message($msg);
            }
            else{
                $msg = "Congratulation! Your video description has been successfully uploaded";
                $this->message($msg);
            }
        }
        
        private function getVideoInfo($id){
            $this->load->model('adminmodel');
            $data['video'] = $this->adminmodel->getVideoInfo($id);
            $this->load->view('admin/video/edit-video', $data);
        }
        
        private function deleteVideo(){
            echo "video is deleted";
        }
        
        private function message($msg){
            $data['msg'] = $msg;
            $this->load->view('admin/message', $data);
        }
    }