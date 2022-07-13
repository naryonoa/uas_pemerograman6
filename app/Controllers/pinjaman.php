<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pinjam_model;

class Pinjam extends Controller
{
    public function index()
    {
        $model = new Pinjam_model;
        $data['title']     = 'Data Pinjam';
        $data['getPinjam'] = $model->getPinjam();
        echo view('header_view', $data);
        echo view('Pinjam_view', $data);
        echo view('footer_view', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Data Pinjam';
        echo view('header_view', $data);
        echo view('tambah_Pinjam', $data);
        echo view('footer_view', $data);
    }
    public function add()
    {
        $model = new Pinjam_model;
        $data = array(
            'nama_Pinjam' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telpon'),
            'status'  => $this->request->getPost('status'),
            
        );
        $model->savePinjam($data);
        echo '<script>
                alert("Sukses Tambah Data Pinjam");
                window.location="'.base_url('Pinjam').'"
            </script>';

    }public function edit($id)
    {
        $model = new Pinjam_model;
        $getPinjam = $model->getPinjam($id)->getRow();
        if(isset($getPinjam))
        {
            $data['Pinjam'] = $getPinjam;
            $data['title']  = 'Edit '.$getPinjam->nama_Pinjam;

            echo view('header_view', $data);
            echo view('Pinjam_edit', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Pinjam '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Pinjam').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Pinjam_model;
        $id = $this->request->getPost('id_Pinjam');
        $data = array(
            'nama_Pinjam' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telpon'),
            'status'  => $this->request->getPost('status'),
            
        );
        $model->editPinjam($data,$id);
        echo '<script>
                alert("Sukses Edit Data Pinjam");
                window.location="'.base_url('Pinjam').'"
            </script>';

    }
    public function hapus($id)
    {
        $model = new Pinjam_model;
        $getPinjam = $model->getPinjam($id)->getRow();
        if(isset($getPinjam))
        {
            $model->hapusPinjam($id);
            echo '<script>
                    alert("Hapus Data Pinjam Sukses");
                    window.location="'.base_url('Pinjam').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Pinjam '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Pinjam').'"
                </script>';
        }
    }

    
}