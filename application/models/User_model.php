<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('string');

        $this->tableName = 'users';
        $this->primaryKey = 'id';
    }

    public function resolve_user_login($email, $password) {

        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('email', $email);
        $hash = $this->db->get()->row('password');

        return $this->verify_password_hash($password, $hash) ;

    }

    public function get_user_id_from_email($email) {

        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email', $email);

        return $this->db->get()->row('id');

    }

    public function create_user($user, $password) {
        $user['password'] = $this->hash_password($password);

        /*if ($this->db->insert('users', $user)){
            return $this->send_confirmation_email($user['email']);
        }*/
        if ($this->db->insert('users', $user)){
            return true;
        }

    }

    public function get_user($user_id) {

        $this->db->from('users');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();

    }

    public function get_slides()
    {
        $result = $this->db->get('tbl_slide');
        return $result->result();
    }

    public function get_user_by_detail($user_detail) {

        $this->db->from('users');
        $this->db->where('email', $user_detail);
//        $this->db->or_where('username', $user_detail);
        return $this->db->get()->row();

    }

    public function get_users() {

        $this->db->from('users');
        return $this->db->get()->result();

    }

    public function search($query){
        $this->db->from('journals');
        $this->db->select('title');
        $this->db->like('title', $query);
        $this->db->or_like('fulltitle', $query);

        return $this->db->get()->result();

    }

    public function send_password_reset_link($user_detail){
        $this->load->library('email');
        $this->email->from('csk@email.com', 'CSK');

        $user = $this->get_user_by_detail($user_detail);

        if (!empty($user)) {
            $this->email->to($user->email);
            $this->email->subject('CSK - Password Reset');
            $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';

            $message .= "You requested to change your password. <br><br>";
            $message .= "Please click the link below to reset your password <br><br>";

            $hash_val = random_string('alnum', 8);
            $hash = md5("reset#Csk" . $hash_val);
            $message .= "Click this link: <a target=\"_blank\" href=\"" . base_url() . "reset_password/" . $user->id . "/" . $hash . "\">Reset your password</a>";

            $message .= "<br><br>Please ignore this message if you didnt request the password change ";
            $message .= "</body></html>";
            $this->email->message($message);

            $update_data = array(
                'hash' => $hash_val,
            );

            if ($this->super_update($user->id, $update_data))
                return $this->email->send();
            }

        return false;
    }

    public function super_update($user_id, $update_data){
        if (!empty($user_id)){
            $this->db->where('id', $user_id);
            return $this->db->update('users', $update_data);
        }
        return false;
    }

    public function update($user_id, $update_data, $password){
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $hash = $this->db->get()->row('password');

        if ($this->verify_password_hash($password, $hash)){
            $this->db->where('id', $user_id);
            return $this->db->update('users', $update_data);
        }
        return false;
    }

    public function update_password($user_id, $password){
        $user = array(
            'password' => $this->hash_password($password),
        );
        $this->db->where('id', $user_id);
        return $this->db->update('users', $user);
    }


    private function hash_password($password) {

        return password_hash($password, PASSWORD_BCRYPT);

    }

    private function verify_password_hash($password, $hash) {

        return password_verify($password, $hash);

    }

    private function send_confirmation_email($email) {

        // load email library and url helper
        $this->load->library('email');
        $this->email->from('csk@email.com', 'CSK');

        $user = $this->get_user_by_detail($email);

        $this->email->to($user->email);
        $this->email->subject('NIGGS - Confirm your account');
        $message  = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
        $message .= "Hi " . $user->fullname . ",<br>";
        $message .= "Thanks for registering with us<br><br>";

        $hash_value = array(
            'hash' => random_string(alnum, 8),
        );
        $hash = md5("Csk#cOnfirm1" . $user->email . $hash_value['hash']);

        $this->super_update($user->id, $hash_value);

        $message .= "Please click the link below to activate your account <br><br>";
        $message .= "Click this link: <a target=\"_blank\" href=\"" . base_url() . "user/confirm_account/". $user->id . "/" . $hash . "\">Confirm your email and validate your account</a>";
        $message .= "<br><br>Please ignore this message if you didnt create the account ";
        $message .= "</body></html>";

        $this->email->message($message);

        return $this->email->send();

    }

    public function create_registry($data)
    {
        $this->db->insert('tbl_registry',$data);
        return true;
    }

    public function add_user($data)
    {
        $this->db->insert('users',$data);
        return true;
    }

    public function manage_user()
    {
        $users = $this->db->get('users');
        return $users->result();
    }


    public function edit_user($id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get('users');
        return $result->row();
    }

    public function update_user($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('users',$data);
        return true;
    }

    public function delete_user($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('users');
        return true;
    }

    public function checkUser($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'],'oauth_uid'=>$userData['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName,$userData,array('id'=>$prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else{
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName,$userData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }

}