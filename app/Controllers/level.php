<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\level_model;

class level extends Controller
{
    public function index()
    {
        $model = new level_model;
        $data['title']     = 'Data user';
        $data['getuser'] = $model->getlevel();
        
    }
    public function add()
    {
        $model = new level_model;
        $data = array(
            'nama_level' => $this->request->getPost('nama'),
            
            
            
        );
        $model->savelevel($data);
        echo '<script>
                alert("Sukses Tambah Data level");
                window.location="'.base_url('user').'"
            </script>';

    }
}