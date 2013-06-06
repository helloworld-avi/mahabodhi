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
                    
                    case 'new':
                        $this->newVideo();
                        break;
                    
                    case 'save':
                        $this->saveVideo();
                        break;
                            
                    case 'view-list':
                            $this->viewVideoList();
                            break;
                    
                    case 'edit':
                        $this->getVideoInfo();
                        break;
                    
                    case 'edit-save':
                        $this->editVideo();
                        break;
                    
                    case 'delete':
                        $this->deleteVideo();
                        break;
                    
                    case 'search':
                        $this->searchVideo();
                        break;
                    
                    case 'watch':
                        $this->watchVideo();
                        break;
                    
                    default:
                        echo "invalid mode applied";
                        break;
                }
            }
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
        
        private function viewVideoList(){
            $cat = $this->uri->rsegment(4);
            if(!$cat){
                $data['msg'] = "No category selected, Please select video category";
                $this->load->view('admin/message', $data);
            }
            else{
                $this->load->model('adminmodel');
                $data['videos'] = $this->adminmodel->getFeaturedVideoByCategory($cat);
                $this->load->view('admin/video/category-view-list', $data);
            }
        }
        
        private function getVideoInfo(){
            $id = $this->uri->rsegment(4);
            $this->load->model('adminmodel');
            $data['video'] = $this->adminmodel->getVideoInfo($id);
            $this->load->view('admin/video/edit-video', $data);
        }
        
        private function searchVideo(){
            $s = $this->input->post('search_text', TRUE);
            $this->load->model('adminmodel');
            //$s = explode(' ', $s);
            //print_r($s);
            $data['videos'] = $this->adminmodel->getSearchResult($s);
            //print_r($data['videos']);
            $this->load->view('admin/video/search-view-list', $data);
            
        }
        
        private function editVideo(){
            
            $data = array('title' => $this->input->post('item_title', TRUE),
                           'y_id' => $this->input->post('item_y_id', TRUE),
                           'category' => $this->input->post('item_category', TRUE),
                           'description' => $this->input->post('item_dex', TRUE)
                           );
            $id = $this->input->post('item_id', TRUE);
            $this->load->model('adminmodel');
            $this->adminmodel->updateVideo($id, $data);
        }
        
        private function searchUser(){
            
            
        }
        
        private function watchVideo($id){
        
        }
        
        private function viewUser($id){
            
        }
        
        private function deleteVideo(){
            $y_id = $this->uri->rsegment(4);
            
            $this->load->model('adminmodel');
            $this->adminmodel->deleteVideo($y_id);
            echo "trying deleting";
        }
        
        private function message($msg){
            $data['msg'] = $msg;
            $this->load->view('admin/message', $data);
        }
        
        public function gvideo(){
            $para = $this->uri->rsegment(3);
            if(!isset($para)){
                echo "no general video mode assigned";
            }
            else{
                switch($para){
                    case 'new':
                        $this->newGVideo();
                        break;
                    
                    case 'save':
                        $this->saveGVideo();
                        break;
                    
                    case 'show-all':
                        $this->showAllGVideo();
                        break;
                    
                    case 'edit':
                        $this->getGVideoInfo();
                        break;
                    
                    case 'edit-save':
                        $this->editGVideo();
                        break;
                    
                    case 'delete':
                        $this->deleteGVideo();
                        break;
                    
                    default:
                        echo "undefined mode";
                        break;
                }
            }
        }
        
        private function newGVideo(){
            $this->load->view('admin/gvideo/create');
        }
        
        private function saveGVideo(){
            $video = array('title' => $this->input->post('item_title', TRUE),
                           'y_id' => $this->input->post('item_id', TRUE),
                           'category' => $this->input->post('item_category', TRUE),
                           'description' => $this->input->post('item_dex', TRUE)
                           );
            $this->load->model('adminmodel');
            if(!$this->adminmodel->setGVideo($video)){
                $msg = "Oops something went wrong, Please make sure that you tube video id is not already present";
                $this->message($msg);
            }
            else{
                $msg = "Congratulation! Your video description has been successfully uploaded";
                $this->message($msg);
            }
        }
        private function showAllGVideo(){
            $this->load->model('adminmodel');
            $data['videos'] = $this->adminmodel->getAllGVideo();
            
            $this->load->view('admin/gvideo/view-list', $data);
        }
        
        private function getGVideoInfo(){
            $this->load->model('adminmodel');
            $data['video'] = $this->adminmodel->getGVideoInfo($this->uri->rsegment(4));
            $this->load->view('admin/gvideo/edit-video', $data);
        }
        
        private function editGVideo(){
            
            $data = array('title' => $this->input->post('item_title', TRUE),
                           'y_id' => $this->input->post('item_y_id', TRUE),
                           'category' => $this->input->post('item_category', TRUE),
                           'description' => $this->input->post('item_dex', TRUE)
                           );
            $id = $this->input->post('item_id', TRUE);
            $this->load->model('adminmodel');
            $this->adminmodel->updateGVideo($id, $data);
        }
        
        private function deleteGVideo(){
            $y_id = $this->uri->rsegment(4);
            
            $this->load->model('adminmodel');
            $this->adminmodel->deleteGVideo($y_id);
            echo "trying deleting";
        }
    }