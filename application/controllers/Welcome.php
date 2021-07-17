<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
     public function index(){
         $this->view();
     }
     public function view($page="index"){
         $data['file'] = scandir("theme/charity/Newimages");
         $this->load->view("charity/header",$data);
         $this->load->view("charity/".$page);
         $this->load->view("charity/footer");
     }
     public function mail(){
         $name = $this->input->post("name");
         $email = $this->input->post("email");
         $message = $this->input->post("message");
         if(!empty($name) AND !empty($email) AND !empty($message)){

             $to = "usamaasif4190@gmail.com";
             $nam = $name;
             $from = $email;
             $cc = "usamaasif4190@gmail.com";
             $subject = "Charity Message";
             $mes = $message;


             $txt = nl2br("Name :".$nam."\nEmail :".$from."\nSubject :".$subject."\nMessage :".$mes);

             $ab = str_replace( "<br />", ' ', $txt );


             $headers = "From:".$from . "\r\n" .
                 "CC:".$cc;


             mail($to,$subject,$ab,$headers);
             redirect("welcome/index");
         }else{
             redirect("welcome/index?id=message not send");
         }
     }
}
