<?php
class Model_system extends CI_Model
{

    public function get_user()
    {
        $data = $this->db->get('tb_user');
        return $data->result();
    }

    public function count_user()
    {
        $data = $this->db->get('tb_user');
        return $data->num_rows();
    }


    // public function get_pengaduan()
    // {
    //     $data = $this->db->get('tb_pengaduan');
    //     return $data->result();
    // }

    // public function count_pengaduan()
    // {
    //     $data = $this->db->get('tb_pengaduan');
    //     return $data->num_rows();
    // }

    // function hapus_data_peng($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    //     header("Location:" . base_url('user/pengaduan'));
    // }

    // public function update_datauser($where, $data, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table, $data);
    //     header("Location:" . base_url('admin/index'));
    // }

    public function edit_datauser($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('tb_user');
        header("Location:" . base_url() . "admin/index");
        echo "<script type='text/javascript'>alert('data berhasil dihapus');</script>";
    }

    public function simpan_pengaduan()
    {
        $tanggal = $this->input->post('tanggal');
        $email = $this->input->post('email');
        $laporan = $this->input->post('laporan');

        $foto = $_FILES['foto']['name'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = FCPATH . "./assets/foto";
            $config['max_size'] = '2048';
            $config['allowed_types'] = "jpg|png|gif";

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                echo "gagal upload ";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
            $data = array(
                'id_pengaduan' => null,
                'tgl_pengaduan' => $tanggal,
                'email' => $email,
                'isi_laporan' => $laporan,
                'foto' => $foto
            );
            echo $data;
            $this->db->insert('tb_pengaduan', $data);
            header("Location:" . base_url() . "user/Tampilanweb");
            echo "<script type='text/javascript'>alert('data berhasil ditambah');</script>";
        }
    }
    public function get_pengaduan()
    {
        $data = $this->db->get('tb_pengaduan');
        return $data->result();
    }

    public function count_pengaduan()
    {
        $data = $this->db->get('tb_pengaduan');
        return $data->num_rows();
    }
    public function get_data_pengaduan()
    {
        $query = $this->db->query("SELECT * FROM `tb_pengaduan`
        ");
        return $query->result();
    }
    public function delete_data_peng($id)
    {
        $where = array('id_pengaduan' => $id);
        $this->db->where($where);
        $this->db->delete('tb_pengaduan');
        header("Location:" . base_url() . "admin/pengaduan");
        echo "<script type='text/javascript'>alert('data berhasil dihapus');</script>";
    }
    public function update_datauser($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        header("Location:" . base_url('admin/index'));
    }
}
