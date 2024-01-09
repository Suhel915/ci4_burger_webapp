<?php

namespace App\Controllers;

use App\Models\PagesModel;
use App\Models\ContentModel;
use App\Entities\Pages;
use App\Entities\ContentEntity;
use CodeIgniter\Shield\Models\UserModel;

class Page extends BaseController
{

    public function index()
   {
    return view("pages/new");    
   }

   public function show(){
    $pagemodel = new PagesModel();
    $pages = $pagemodel->findAll(); 
    $pager = \Config\Services::pager();
    $perPage = 10;
    $pages = $pagemodel->paginate($perPage);
    
    return view("pages/show", ['pages' => $pages,'pager' => $pagemodel->pager]);
   }
   public function shows($slug){
    $pagemodel = new PagesModel();

    $contentmodel = new ContentModel();
    $pages = $pagemodel->findAll(); 
    $page = $pagemodel->findBySlug($slug);
    if ($page && is_object($page)) {
 
    $sectionAs = $contentmodel->getSectionAByPage($page->pages_id);
    $sectionBs = $contentmodel->getSectionBByPage($page->pages_id);
    $sectionCs = $contentmodel->getSectionCByPage($page->pages_id);
    $sectionDs = $contentmodel->getSectionDByPage($page->pages_id);
    $sectionEs = $contentmodel->getSectionEByPage($page->pages_id);
    $sectionFs = $contentmodel->getSectionFByPage($page->pages_id);
    } else {
        $sectionAs = [];
        $sectionBs = [];
        $sectionCs = [];
        $sectionDs = [];
        $sectionEs = [];
        $sectionFs = [];
    }
    if($pages == $page){
        $contentmodel->findAll();
    }
    return view("pages/slugs", ['pages'=>$pages,'page'=>$page, "sectionAs"=>$sectionAs, "sectionBs"=>$sectionBs, "sectionCs"=>$sectionCs,"sectionDs"=>$sectionDs, "sectionEs"=>$sectionEs,"sectionFs"=>$sectionFs]);
   }

   public function create()
   {
    $pagemodel = new PagesModel();
    $page_title = $this->request->getPost('page_title');
    $slug = url_title($page_title, '-', true);
    $page = new Pages();
    $page->page_title = $page_title;
    $page->slug = $slug;
    $pagemodel->insert($page);
    return redirect()->to('/showpage'); 
   }

   public function edit($pages_id){
    $pagemodel = new PagesModel();
    $page = $pagemodel->find($pages_id);
    return view('pages/edit', ['page'=> $page]);
   }
    public function update($pages_id){
    $pagemodel = new PagesModel();
        $page_title = $this->request->getPost('page_title');
        $page = $pagemodel->find($pages_id);
        if ($page) {
            $slug = url_title($page_title, '-', true); 
            $page->page_title = $page_title;
            $page->slug = $slug;
            $pagemodel->save($page);
            return redirect()->to('/showpage');
        } else {
        return redirect()->back();
            }
    }

    public function delete($pages_id){
        $pagemodel = new PagesModel();
        $pagemodel->delete($pages_id);
        return redirect()->to('/showpage');
    }
    public function create_page()
    {
        $pagemodel = new PagesModel();
        
        $title = 'New Page Title';
        $content = 'Page Content'; 

     
        $slug = createSlug($title); 

     
        $data = [
            'page_title' => $title,
            'page_content' => $content,
            'slug' => $slug
          
        ];

        $pagemodel->insert($data); 

      
        return redirect()->to(base_url('/homes'));
    }



}