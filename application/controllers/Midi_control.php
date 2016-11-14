<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midi_control extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
    
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->load->model('midi_control_model');
        $this->lang->load('auth');
    }
    
    public function index()
    {
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }
        else
        {
            $this->load->view('midi_control_view');
        }
    }
    
    public function login()
    {
        $this->load->view('login_view');
    }
    
    public function program_change()
    {
        $channel = $this->input->post('channel');
        $instrument = $this->input->post('instrument');
        if ($this->midi_control_model->changeProgram($channel, $instrument) == TRUE){
            header("HTTP/1.1 200 OK");
        }else{
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        }     
    }
    
    public function set_volume()
    {
        $volume = $this->input->post('volume');
        if ($this->midi_control_model->setVolume($volume) == TRUE){
            header("HTTP/1.1 200 OK");
        }else{
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        }
    }
}