<?php
    class sendEmail{
        private $from;
        private $to;
        private $title;
        private $content;
        private $returnE;
        
        function __construct($from, $to, $title, $content){
            $this->set_content($content);
            $this->set_from($from);
            $this->set_title($title);
            $this->set_to($to);
            $this->sendE();           
        }
        
        private function get_from(){
            return $this->from;
        }
        private function get_to(){
            return $this->to;
        }
        private function get_title(){
            return $this->title;
        }
        private function get_content(){
            return $this->content;
        }
        public function get_returnE(){
            return $this->returnE;
        }
        
        private function set_from($from){
            $this->from = $from;
        }
        private function set_to($to){
            $this->to = $to;
        }
        private function set_title($title){
            $this->title = $title;
        }
        private function set_content($content){
            $this->content = $content;
        }
        private function set_returnE($r){
            $this->returnE = $r;
        }
        
        private function sendE(){
            
            $f = "From: ".$this->get_from();
            
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= $f;
            
            $sendE = mail($this->get_to(), $this->get_title(), $this->get_content(), $headers);
            
            if($sendE){
                $this->set_returnE(true);
            }else{
                $this->set_returnE(false);
            }
            
        }
        
    }
?>
