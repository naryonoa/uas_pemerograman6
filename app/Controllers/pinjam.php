<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pelanggan_model;

class pinjam extends Controller
{
    public function index()
    {
        $model = new Pelanggan_model;
        $data['title']     = 'Data Pinjaman';
        $data['getPelanggan'] = $model->getPelanggan();
        echo view('header_view', $data);
        echo view('pelanggan_view', $data);
        echo view('footer_view', $data);
    }
    public function tambah()
    {
        $data['title']     = 'Tambah Data Pelanggan';
        echo view('header_view', $data);
        echo view('tambah_pelanggan', $data);
        echo view('footer_view', $data);
    }
    public function add()
    {
        $model = new Pelanggan_model;
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telpon'),
            'status'  => $this->request->getPost('status'),
            
        );
        $model->savePelanggan($data);
        echo '<script>
                alert("Sukses Tambah Data Pelanggan");
                window.location="'.base_url('Pelanggan').'"
            </script>';

    }public function edit($id)
    {
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if(isset($getPelanggan))
        {
            $data['pelanggan'] = $getPelanggan;
            $data['title']  = 'Edit '.$getPelanggan->nama_pelanggan;

            echo view('header_view', $data);
            echo view('pelanggan_edit', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Pelanggan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Pelanggan').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Pelanggan_model;
        $id = $this->request->getPost('id_pelanggan');
        $data = array(
            'nama_pelanggan' => $this->request->getPost('nama'),
            'no_telpon'         => $this->request->getPost('telpon'),
            'status'  => $this->request->getPost('status'),
            
        );
        $model->editPelanggan($data,$id);
        echo '<script>
                alert("Sukses Edit Data Pelanggan");
                window.location="'.base_url('pelanggan').'"
            </script>';

    }
    public function hapus($id)
    {
        $model = new Pelanggan_model;
        $getPelanggan = $model->getPelanggan($id)->getRow();
        if(isset($getPelanggan))
        {
            $model->hapusPelanggan($id);
            echo '<script>
                    alert("Hapus Data Pelanggan Sukses");
                    window.location="'.base_url('pelanggan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID pelanggan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('pelanggan').'"
                </script>';
        }
    }

    
}