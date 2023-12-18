<?php

namespace App\Controllers;
use App\Models\PagesModel;
use App\Entities\Pages;

class Page extends BaseController
{
    public function index()
   {
    return view("pages/new");    
   }

   public function show(){
    $pagemodel = new PagesModel();
    $pages = $pagemodel->findAll(); 
    return view("pages/show", ['pages' => $pages]);
   }

   public function create()
   {
    $pagemodel = new PagesModel();
    $page_title = $this->request->getPost('page_title');
    $page = new Pages();
    $page->page_title = $page_title;
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
            $page->page_title = $page_title;
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
}