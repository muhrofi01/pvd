<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModel extends Model
{
    protected $table = 'provinsi';
    protected $primaryKey = 'id';

    public function getProvinsiByName($name)
  {
    $query = "SELECT 
                id, nama
              FROM 
                provinsi
              WHERE 
                nama LIKE ? ";
    return $this->db->query($query, [$name])->getResultArray();
  }
}
?>