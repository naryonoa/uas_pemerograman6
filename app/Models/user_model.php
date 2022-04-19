<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class user_model extends Model
{
    protected $table = 'user';
     
    public function getuser($id = false)
    {
    	
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_user' => $id]);
        }   
    }
    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function edituser($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_user', $id);
        return $builder->update($data);
    }
    public function hapususer($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_user' => $id]);
    }
    public function getlevel($id = false)
    {
    	
      
    	 
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_level' => $id]);
        }   
    }
}
class level_model extends Model
{
    protected $table = 'level';
     
    public function getlevel($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_level' => $id]);
        }   
    }
    public function savelevel($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editlevel($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_level', $id);
        return $builder->update($data);
    }
    public function hapuslevel($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_level' => $id]);
    }
}
