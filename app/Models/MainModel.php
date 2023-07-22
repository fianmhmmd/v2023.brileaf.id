<?php

namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model{
    private $dbc;
    private $url_image;
    private $url_pdf;

    public function __construct()
    {
        parent::__construct();
        $this->dbc = \Config\Database::connect();
        // $this->url_image = 'https://cdn.bririns.or.id/';
        // $this->url_image = 'http://cdn.bririns.or.id/';
        // $this->url_image = 'http://cms.ppbri.or.id/uploads/library/';
        // $this->url_pdf = 'http://content.bririns.or.id/';
    }

    public function get_courses_all($id = '', $search = '', $categoriesId = '', $limit = '', $offset = '')
    {

        $return = array();
        $zaincode = new \App\Libraries\Zaincode();

         // Get Courses
         $builder = $this->dbc->table('master_pelatihan');
         $builder->join('master_category', 'mscatId = mpMscatId');
         $builder->orderBy('mpId', 'DESC');
         if (!empty($limit)) {
             $builder->limit($limit);
         }
         if (!empty($offset)) {
             $builder->offset($offset);
         }
 
         if (!empty($id)) {
             $builder->where(['mpId' => $id]);
         }
         if (!empty($categoriesId)) {
             $builder->where('mpMscatId', $categoriesId);
         }
         if (!empty($search)) {
             $builder->like('mpName', $search);
         }
         $query   = $builder->getWhere(['mpStatus' => 1]);
 
         foreach ($query->getResult() as $row) {
             $return[] = json_decode(json_encode($row), TRUE);
         }

         

         return $return;
    }

    public function get_count_courses($search, $categoriesId)
    {
        $return = [];
   

        // Get Categories
        $where = '';
        if (!empty($search)) {
            $where .= " AND mpName like '%$search%'";
        }
        if (!empty($categoriesId)) {
            $where .= " AND mpMscatId = $categoriesId";
        }
    
        $query = "SELECT count(*) as total FROM `master_pelatihan` where mpStatus = 1 $where";
        $query_result = $this->dbc->query($query);
        $return = $query_result->getResultArray();
    
        return $return;
    }
    

    public function get_categories_courses($id = '', $search = '', $limit = '', $offset = '')
    {
        {
            $return = [];
    
            // Get Categories
            $query = "SELECT * FROM `master_category` where mscatId IN (select master_pelatihan.mpMscatId from master_pelatihan where master_pelatihan.mpStatus = 1)";
            $query_result = $this->dbc->query($query);
            $return = $query_result->getResultArray();
    

            return $return;
        }
    }
}
 