<?php 

class Photos extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('photo_model');
            // $this->load->helper('url_helper');
    }


    public function index()
    {
            $data['photos'] = $this->photo_model->get_photos();
            $data['title'] = 'Photo Album';

            $this->load->view('templates/header', $data);
            $this->load->view('photos/index', $data);
            $this->load->view('templates/footer');
    }

    public function view($tag = NULL)
    {
            $data['photos'] = $this->photo_model->get_photos($tag);

            if (empty($data['photos']))
            {
                    show_404();
            }

            $data['title'] = $tag == NULL? "Cute Animals" : "Photos Tagged: ".$tag;

            $this->load->view('templates/header', $data);
            $this->load->view('photos/index', $data);
            $this->load->view('templates/footer');
    }
}