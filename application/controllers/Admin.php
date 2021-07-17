<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index(){
        $this->view('index');
    }

    public function view($page = 'index',$id = null)
    {
        $data['login'] = $this->session->userdata('login');

        $data['campaign'] = $this->data->getdata('campaign');
        $data['posts'] = $this->data->getdata('posts');
        $data['backers'] = $this->data->myquery("SELECT `user_id`, SUM(`payment`) as 'total' FROM `fund` GROUP BY `user_id` ORDER BY `total` DESC");
        $data['totalFunding'] = $this->data->myquery("SELECT  SUM(`payment`) as 'total' FROM `fund`");

        foreach($data['backers'] as $k=>$v){
            $data['backers'][$k]['userData'] = $this->data->getdata('users',array('id'=>$v['user_id']));
            $data['backers'][$k]['totalProjects'] = count($this->data->getdata('fund',array('user_id'=>$v['user_id'])));
        }

        foreach($data['posts'] as $k=>$v){
            $data['posts'][$k]['noOfLikes'] = count($this->data->getdata('postlikes',array('post_id'=>$v['id'])));
        }

        if($page == 'individual' and $id != null){
            $data['campaign'] = $this->data->getdata('campaign',array('id'=>$id));
        }

        foreach($data['campaign'] as $k=>$v){
            $data['campaign'][$k]['campaingUser'] = $this->data->getdata('users',array('id'=>$v['user_id']));
            $data['campaign'][$k]['raised'] = $this->data->getdata('fund',array('campaign_id'=>$v['id']));
        }


            $this->load->view('header',$data);
            $this->load->view($page);
            $this->load->view('footer');

    }

    public function login(){
        $this->load->view('login');
    }

    public function createPost()
    {
        $data['login'] = $this->session->userdata('login');
        if(!empty($data['login'])){
            $_POST['category'] = json_encode($_POST['category']); 
            $_POST['user_id'] = $data['login'][0]['id'];
            // var_dump($_POST);die;
            $this->data->insert('posts',$_POST);
            redirect('Admin/view/wishlist');
        }else{
            redirect('Admin/login');
        }
    }

    public function register()
    {
        if(!empty($_POST)){
            if($_POST['cpassword'] != $_POST['password']){
                $this->session->set_flashdata('cpass','Confirm Password does not match');
                redirect('Admin/login');
            }

            $user = $this->data->getdata('users',array('username'=>$_POST['username']));
            if(!empty($user)){
                
                $this->session->set_flashdata('username','Username already exist');
                redirect('Admin/login');
            }
            unset($_POST['cpassword']);
            $id = $this->data->get_last_id('users',$_POST);
            $_POST['id'] = $id;
            $token = md5($_POST['id']);
            $this->data->update(
                'users',
                array('token'=>$token),
                array('id'=>$_POST['id'])
            );


            $this->sendEmail('',$_POST['email'],"Welcome To Crowd Funding",
                "Hello ".$_POST['name'].",
                Welcome to the crowd funding
                Address details here.");

                $this->sendEmail('',$_POST['email'],"Verification Email",
                "Link : ".site_url('Admin/verfication/'.$token)
                );

            $this->session->set_flashdata('success','Account Created Successfully');
            $this->session->set_flashdata('verified','Verification Email Send to your Email Verified Your Account');
            // $this->session->set_userdata('login',$_POST);
            redirect('Admin/login');
        }else{
            redirect('Admin/login');
        }
    }

    public function verfication($token)
    {
        if(empty($token)){
            echo "Something Went Wrong";die;
        }
        $user = $this->data->getdata('users',array('token'=>$token));
        if(empty($user)){
            echo "Something Went Wrong";die;
        }
        $this->data->update('users',array('token'=>null,'verified'=>'true'),array('token'=>$token));
        redirect('Admin/login');
    }

    public function dologin()
    {
        if(!empty($_POST)){
            $user = $this->data->getdata('users',$_POST);
            if(!empty($user)){
                if($user[0]['verified'] == 'false'){
                    $this->session->set_flashdata('error','Your account is not verified');
                    redirect('Admin/login');
                }
                $this->session->set_userdata('login',$user);
                redirect('Admin/index');
            }else{
                $this->session->set_flashdata('success','Incorrect Email/Password');
                redirect('Admin/login');
            }
        }else{
            redirect('Admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        redirect('Admin/login');
    }


    public function do_upload($file)
    {
        $config['upload_path'] = './theme/uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file)) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }

    public function liker($id)
    {
        $data['login'] = $this->session->userdata('login');
        if(!empty($data['login'])){
            $x['liker_id'] = $data['login'][0]['id'];
            $x['post_id'] = $id;
            $resp = $this->data->getdata('postlikes',$x);
            if(empty($resp)){
                $this->data->insert('postlikes',$x);
            }
            $resp = $this->data->getdata('postlikes',array('post_id'=>$id));
            echo count($resp);
        }else{
            redirect('Admin/login');
        }
    }

    public function multipleUploads($input)
    {
        $data = [];
        for($i=0;$i<count($_FILES[$input]);$i++){

            if(!empty($_FILES[$input]['name'][$i])){

                // Define new $_FILES array - $_FILES['file']
                $_FILES['file']['name'] = $_FILES[$input]['name'][$i];
                $_FILES['file']['type'] = $_FILES[$input]['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES[$input]['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES[$input]['error'][$i];
                $_FILES['file']['size'] = $_FILES[$input]['size'][$i];

                // Set preference
                $config['upload_path'] = './theme/uploads/';
                $config['allowed_types'] = '*';
                $config['file_name'] = $_FILES[$input]['name'][$i];


                //Load upload library
                $this->load->library('upload',$config);

                // File upload
                if($this->upload->do_upload('file')){
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    // Initialize array
                    $data[] = $filename;
//                    var_dump($filename);
                }else{
                    $error = array('error' => $this->upload->display_errors());
                }
            }
        }
        return $data;
    }

    public function createCampaign()
    {
        $login = $this->session->userdata('login');
        if(!empty($login)){
            $images = [];
            if($_FILES['images']){
                $images = $this->multipleUploads('images');
            }
            $input = $_POST;
            $input['images'] = json_encode($images);
            $input['user_id'] = $login[0]['id'];

            if($input['duration'] == '1 Hour'){
                $input['seconds'] = 3600;
            }else if($input['duration'] == '30 Hours'){
                $input['seconds'] = 108000;                
            }else if($input['duration'] == '3 Days'){
                $input['seconds'] = 259200;
            }else if($input['duration'] == '1 Week'){
                $input['seconds'] = 604800;
            }else if($input['duration'] == '3 Weeks'){
                $input['seconds'] = 504 * 3600;
            }else if($input['duration'] == '30 Days'){
                $input['seconds'] = 720 * 3600;
            }else if($input['duration'] == '9 Weeks'){
                $input['seconds'] = 1512 *3600;
            }else if($input['duration'] == '90 Days'){
                $input['seconds'] = 2160 * 3600;
            }   

            $id = $this->data->get_last_id('campaign',$input);
            $this->session->set_flashdata('success','Add Campaigns Successfully');
            redirect('Admin/view/individual/'.$id);
        }else{
            redirect('Admin/login');
        }
    }


    public function add($table,$page)
    {
        if(!empty($_POST)){
            $login_id = $this->session->userdata('login');
            $login = $this->data->getdata('users',array('id'=>$login_id[0]['id']));

            $x = $this->input->post();

            $x['user_id'] = $this->user_id;

            if($table == 'campaings'){
                $x['schedule'] = json_encode($x['schedule']);
            }

            if($table == 'users'){

                unset($x['user_id']);
                $x['super'] = $this->user_id;
                $file = $this->do_upload('picture');
                if(!empty($file['upload_data'])):
                    $x['picture'] = $file['upload_data']['file_name'];
                endif;

            }

            if($table == 'task'){

                if($login[0]['super'] == 0){
                    $x['to'] = 0;
                }else{
                    $x['to'] = $login[0]['id'];
                }

            }


            $this->data->insert($table,$x);

            redirect('Admin/view/'.$page);

        }else{

            redirect($_SERVER['HTTP_REFERER']);

        }
    }

    public function edit($table,$page,$id)
    {
        if(!empty($_POST)){

            $x = $this->input->post();
                $x['user_id'] = $this->user_id;

            if($table == 'campaings'){
                $x['schedule'] = json_encode($x['schedule']);
            }

            $this->data->update($table,$x,array('id'=>$id,'user_id'=>$this->user_id));
        }
        if($table == 'leads'){
            redirect('Admin/view/'.$page.'/'.$id);
        }else{
            redirect('Admin/view/'.$page);
        }
    }

    public function delete($table,$id,$page)
    {
        $this->data->delete($table,array('id'=>$id));
        redirect('Admin/view/'.$page);
    }


    public function sendEmail($from,$to,$sub,$body,$cc = '',$bcc = '')
    {
        $this->load->library('email');

        $config['protocol'] = 'sendmail';
		$config['smtp_host'] = 'mail.webx24service.com';
		$config['smtp_user'] = 'shahab@webx24service.com';
		$config['smtp_pass'] = 'engineering_64';
		$config['smtp_port'] = 465;
		$config['mailtype'] = "html";
		$this->email->initialize($config);
		$this->email->from('shahab@webx24service.com', 'Wsa Studio');

        $this->email->to($to);
        if(!empty($cc)):
            $this->email->cc($cc);
        endif;
        if(!empty($bcc)):
            $this->email->bcc($bcc);
        endif;
        $this->email->subject($sub);
        $this->email->message($body);
        $this->email->send();
    }

    public function AskQuestion($id,$campaign_id)
    {
        $login = $this->session->userdata('login');
        if(!empty($login)) {
            if($id === 0) redirect('Admin');
            $user = $this->data->getdata('users',array('id'=>$id));
            $input = $_POST;
            $this->sendEmail($input['email'],$user[0]['email'],'Your Campaign Question',$input['question']);
            redirect('Admin/view/individual/'.$campaign_id);
        }else{
            redirect('Admin/login');
        }
    }

    public function fund($id)
    {
        $login = $this->session->userdata('login');
        if(!empty($login)) {
            if($id === 0) redirect('Admin');

            $input = $_POST;
            $input['user_id'] = $login[0]['id'];
            $input['campaign_id'] = $id;
            $this->data->insert('fund',$input);

            redirect('Admin/view/individual/'.$id);
        }else{
            redirect('Admin/login');
        }
    }

    public function setTime($id)
    {
        $login = $this->session->userdata('login');
        if(!empty($login)) {
            if($id === 0) redirect('Admin');
            $this->data->update('campaign',array('seconds'=>$_POST['seconds']),array('id'=>$id));
            echo 'success';
        }else{
            echo 'error';
        } 
    }




}






