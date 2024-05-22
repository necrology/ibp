<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/depan_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function tentang()
    {
        $this->load->view('user/tentang_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function alur()
    {
        $this->load->view('user/alur_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function mitra()
    {
        $this->load->view('user/mitra_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function sepatah()
    {
        $this->load->view('user/sepatah_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function kinerja()
    {
        $this->load->view('user/kinerja_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function mengapa()
    {
        $this->load->view('user/mengapa_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function manpower()
    {
        $this->load->view('user/manpower_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function pengamanan()
    {
        $this->load->view('user/pengaman_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function offshore()
    {
        $this->load->view('user/off_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }

    public function telekomunikasi()
    {
        $this->load->view('user/telekomunikasi_view');
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    }
}