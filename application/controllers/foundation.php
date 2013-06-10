<?php
    class Foundation extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function index(){
            
            $data['videos'] = $this->getVideos();
            $this->load->view('foundationvideo/index', $data);
        }
        public function teaching(){
            $data['teaching'] = $this->getTeachingVideos();
            $this->load->view('foundationvideo/teaching/index', $data);
        }
        public function biography(){
            $data['biography'] = $this->getBiographyVideos();
            $this->load->view('foundationvideo/biography/index', $data);
        }
        public function workshop(){
            $data['workshop'] = $this->getWorkshopVideos();
            $this->load->view('foundationvideo/workshop/index', $data);
        }
        public function documentry(){
            $data['documentry'] = $this->getDocumentryVideos();
            $this->load->view('foundationvideo/documentry/index', $data);
        }
        public function event(){
            $data['event'] = $this->getEventVideos();
            $this->load->view('foundationvideo/events/index', $data);
        }
        public function meditation(){
            $data['meditation'] = $this->getMeditationVideos();
            $this->load->view('foundationvideo/meditation/index', $data);
        }
        public function pilgrimage(){
            $data['pilgrimage'] = $this->getPilgrimageVideos();
            $this->load->view('foundationvideo/pilgrimage/index', $data);
        }
        public function other(){
            $data['other'] = $this->getOtherVideos();
            $this->load->view('foundationvideo/other/index', $data);
        }
        public function player(){
            $data['video'] = $this->getCategoryVideos();
            if($data['video'] != false)
                $this->load->view('foundationvideo/player/index', $data);
            else
                $this->index();
        }
        
        private function getCategoryVideos(){
            $arg = $this->uri->rsegment(3);
            if($arg != ''){
                switch($arg){
                    case 'teaching':
                        return $this->getTeachingVideos();
                        break;
                    case 'meditation':
                        return $this->getMeditationVideos();
                        break;
                    case 'pilgrimage':
                        return $this->getPilgrimageVideos();
                        break;
                    case 'workshop':
                        return $this->getWorkshopVideos();
                        break;
                    case 'event':
                        return $this->getEventVideos();
                        break;
                    case 'biography':
                        return $this->getBiographyVideos();
                        break;
                    case 'documentry':
                        return $this->getDocumentryVideos();
                        break;
                    case 'other':
                        return $this->getOtherVideos();
                        break;
                    default:
                        return false;
                }
            }
        }
        
        private function getVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareVideos();
        }
        
        private function getTeachingVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareTeachingVideos();
        }
        
        private function getBiographyVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareBiographyVideos();
        }
        
        private function getWorkshopVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareWorkshopVideos();
        }
        
        private function getDocumentryVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareDocumentryVideos();
        }
        
        private function getEventVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareEventVideos();
        }
        
        private function getMeditationVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareMeditationVideos();
        }
        
        private function getPilgrimageVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->preparePilgrimageVideos();
        }
        
        private function getOtherVideos(){
            $this->load->model('foundationmodel');
            return $this->foundationmodel->prepareOtherVideos();
        }
    }