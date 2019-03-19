

<?php




class Mahasiswa extends CI_Controller{


    public function __construct(){


        parent::__construct();


        $this->load->model('Mahasiswa_model');


        $this->load->library('form_validation');


    }




    public function index(){        


        $data['title'] = 'Halaman Mahasiswa';


        $data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();


        $this->load->view('templates/header', $data);


        $this->load->view('mahasiswa/index', $data);


        $this->load->view('templates/footer');


    }




    public function tambah(){


        $data['title'] = 'Tambah Mahasiswa';


        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');


        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if( $this->form_validation->run() == FALSE ){


            $this->load->view('templates/header', $data);


            $this->load->view('mahasiswa/tambah');


            $this->load->view('templates/footer');


        }else{


            $this->Mahasiswa_model->tambahMahasiswa();


            $this->session->set_flashdata('msg', 'Ditambahkan');


            redirect('mahasiswa');


        }


    }




    public function edit($id){


        $data['title'] = 'Edit Data Mahasiswa';


        $data['mhs'] = $this->Mahasiswa_model->getAllMahasiswaById($id);


        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');


        $this->form_validation->set_rules('nama', 'Nama', 'required');


        if( $this->form_validation->run() == FALSE ){


            $this->load->view('templates/header', $data);


            $this->load->view('mahasiswa/edit', $data);


            $this->load->view('templates/footer');


        } else{


            $this->Mahasiswa_model->editMahasiswa();


            $this->session->set_flashdata('msg', 'Diubah');


            redirect('mahasiswa');


        }


    }




    public function detail($id){


        $data['title'] = 'Detail Data Mahasiswa';


        $data['mhs'] = $this->Mahasiswa_model->getAllMahasiswaById($id);


        $this->load->view('templates/header', $data);


        $this->load->view('mahasiswa/detail', $data);


        $this->load->view('templates/footer');


    }




    public function hapus($id){


        $this->Mahasiswa_model->hapusMahasiswa($id);


        $this->session->set_flashdata('msg', 'Dihapus');


        redirect('mahasiswa');


    }


}

