<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_data'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Mahasiswa',
            'data_mahasiswa' => $this->model_data->get_all(),

        );

        $this->load->view('data_mahasiswa', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Mahasiswa'

        );

        $this->load->view('tambah_mahasiswa', $data);
    }

    public function simpan()
    {
        $data = array(

            'nim'       => $this->input->post("nim"),
            'nama'         => $this->input->post("nama"),
            'jk'    => $this->input->post("jk"),
            'alamat'         => $this->input->post("alamat"),

        );

        $this->model_data->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('mahasiswa/');

    }

    public function edit($nim)
    {
        $nim = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Mahasiswa',
            'data_mahasiswa' => $this->model_data->edit($nim)

        );

        $this->load->view('edit_mahasiswa', $data);
    }

    public function update()
    {
        $id['nim'] = $this->input->post("nim");
        $data = array(

            'nim'           => $this->input->post("nim"),
            'nama'         => $this->input->post("nama"),
            'jk'            => $this->input->post("jk"),
            'alamat'         => $this->input->post("alamat"),

        );

        $this->model_data->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('mahasiswa/');

    }

    public function hapus($nim)
    {
        $id['nim'] = $this->uri->segment(3);

        $this->model_data->hapus($id);

        //redirect
        redirect('mahasiswa/');

    }

}