<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Pelanggan_model extends Model
{
    protected $table = 'pelanggan';
     
    public function getPelanggan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_pelanggan' => $id]);
        }   
    }
    public function savePelanggan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editPelanggan($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_pelanggan', $id);
        return $builder->update($data);
    }
    public function hapusPelanggan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_pelanggan' => $id]);
    }
}