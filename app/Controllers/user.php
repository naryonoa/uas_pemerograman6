<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\user_model;
use App\Models\level_model;

class user extends Controller
{
    public function index()
    {
        $model = new user_model;
        $data['title']     = 'Data user';
        $data['getuser'] = $model->getuser();
        $level = new level_model;
        $data['getlevel'] = $level->getlevel();
        echo view('header_view', $data);
        echo view('user_view', $data);
        echo view('footer_view', $data);
    }
    public function add()
    {
        $model = new user_model;
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'level_id'         => $this->request->getPost('level'),
            
            
        );
        $model->saveuser($data);
        echo '<script>
                alert("Sukses Tambah Data user");
                window.location="'.base_url('user').'"
            </script>';

    }
}
