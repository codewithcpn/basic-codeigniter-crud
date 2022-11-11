<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Custome_model');
        
    }	
	public function index()
	{

        $users = $this->Custome_model->select_data('users');    
		$this->load->view('insert', ['users'=>$users]);
    }

    public function insert_data()
    {
        $data = $this->input->post();
        unset($data['submit']);
        $resp = $this->Custome_model->insert_data('users', $data);
        if($data)
        {
            $this->session->set_flashdata('resp_message', 'Data Succefully Inserted');
            redirect(base_url('home'));
        }
        else
        {
            $this->session->set_flashdata('resp_message', 'Data not inserted ! Ple try Again');
            redirect(base_url('home'));
        }
    }
        public function get_information()
        {
            $resp = $this->Custome_model->get_data('users', 'id = 1 OR id = 2');
            echo "<pre>";
            print_r($resp);
        }

        public function delete_operation($id)
        {
            $this->Custome_model->delete_operation('users',array('id'=>$id));
            redirect(base_url('home'));
        }   
        
        public function update_operation($id)
        {
            $this->Custome_model->update_operation();
            $this->load->view("update");
        }

        public function update_record($id)
        {
             
           $user =  $this->Custome_model->get_single_record('users', array('id'=>$id));            
            $this->load->view('update', ['user'=>$user]);
        }

        public function save_update_record($id)
        {
         $data = $this->input->post();
        //  unset($data['submit']);
        $this->Custome_model->update_data('users', $data, array('id'=>$id));
        redirect(base_url('home'));
        }
}
