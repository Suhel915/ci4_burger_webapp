<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table            = 'contents';
    protected $primaryKey       = 'content_id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\ContentEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['heading','sub_heading','main_content','additional_content','content_image','content_section','p_button','d_button','back_image','pages'];

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

public function getSectionA(){
    return $this->where("content_section", "Section-A")->findAll();
}
public function getSectionB(){
    return $this->where("content_section", "Section-B")->findAll();
}public function getSectionC(){
    return $this->where("content_section", "Section-C")->findAll();
}public function getSectionD(){
    return $this->where("content_section", "Section-D")->findAll();
}public function getSectionE(){
    return $this->where("content_section", "Section-E")->findAll();
}
}
