<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table            = 'pages';
    protected $primaryKey       = 'pages_id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\Pages::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['page_title','slug'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function insertOrUpdatePage($data)
    {
        if (isset($data['page_title'])) {
            $data['slug'] = $this->createSlug($data['page_title']);
        }

        return $this->save($data);
    }

    private function createSlug($title)
    {
        return url_title($title, '-', true); 
    }
    public function findBySlug($slug)
    {
       
        return $this->where('slug', $slug)->first();
    }
    public function contents()
    {
        return $this->hasMany(ContentModel::class, 'page_id', 'pages_id');
    }
  
}
