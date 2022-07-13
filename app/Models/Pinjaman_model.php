<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Pinjam_model extends Model
{
    protected $table = 'Pinjam';
     
    public function getPinjam($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_Pinjam' => $id]);
        }   
    }
    public function savePinjam($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editPinjam($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_Pinjam', $id);
        return $builder->update($data);
    }
    public function hapusPinjam($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_Pinjam' => $id]);
    }
}