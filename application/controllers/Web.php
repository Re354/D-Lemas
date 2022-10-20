<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = "Aplikasi Sederhana Digital Learning Management System (Di-Lemas)";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function form()
    {
        $data['judul'] = "Form Input";
        $this->load->view('v_header', $data);
        $this->load->view('v_form', $data);
        $this->load->view('v_footer', $data);
    }
    public function cetak()
    {
        $data = [
            'judul' => "Tampil Data Mata Kuliah",
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('v_header', $data);
        $this->load->view('v_tampil', $data);
        $this->load->view('v_footer', $data);
    }
}
