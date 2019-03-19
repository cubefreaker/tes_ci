

<?php




class Mahasiswa_model extends CI_model{




    public function getAllMahasiswa(){


        return $this->db->get('mahasiswa')->result_array();


    }




    public function getAllMahasiswaById($id){


        $options=array('id'=>$id);


        $query = $this->db->get_where('mahasiswa',$options);


        $ret = $query->row();


        return $ret;


    }




    public function tambahMahasiswa(){


        $mhsdata = [


            'nim' => $this->input->post('nim', true),


            'nama' => $this->input->post('nama', true),


            'jurusan' => $this->input->post('jurusan')


        ];        


        $this->db->insert('mahasiswa', $mhsdata);


    }




    public function editMahasiswa(){


        $mhsdata = [


            'id' => $this->input->post('id', true),


            'nim' => $this->input->post('nim', true),


            'nama' => $this->input->post('nama', true),


            'jurusan' => $this->input->post('jurusan')


        ];        


        $this->db->where('id', $this->input->post('id', true));


        $this->db->update('mahasiswa', $mhsdata);


    }




    public function hapusMahasiswa($id){


        $this->db->where('id', $id);


        $this->db->delete('mahasiswa');


    }


}

