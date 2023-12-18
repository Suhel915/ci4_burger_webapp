<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\PagesModel;
use App\Entities\ContentEntity;


class Content extends BaseController
{
    public function index()
    {
        $pagemodel = new PagesModel;
        $pages = $pagemodel->findAll();
        return view("content/new",["pages"=> $pages]);
    }

    public function show(){
        $contentmodel = new ContentModel();
        $contents = $contentmodel->findAll();
        return view("content/show",['contents'=>$contents]);
    }
    public function create()
    {
        $contentmodel = new ContentModel();
        $data = $this->request->getPost(); 
   
        // $fieldsToExplode = ['heading', 'sub_heading', 'main_content', 'additional_content'];

       
        // foreach ($fieldsToExplode as $field) {
        //     if (isset($data[$field])) {
               
        //         $fieldValue = $data[$field];
    
               
        //         $explodedFieldValue = explode(",", $fieldValue);
    
               
        //         $data[$field] = $explodedFieldValue;
        //     }
        // }

        $content_image = $this->request->getFile('content_image'); 
        $imageName = ''; 
    
        if ($content_image && $content_image->isValid() && !$content_image->hasMoved()) {
            $newName = $content_image->getRandomName(); 
            $content_image->move('public/uploads/', $newName); 
            $imageName = $newName; 
        }

        $back_image = $this->request->getFile('back_image'); 
        $back_imageName = ''; 
        
        if ($back_image && $back_image->isValid() && !$back_image->hasMoved()) {
            $newBackImageName = $back_image->getRandomName(); 
            $back_image->move('public/uploads/', $newBackImageName); 
            $back_imageName = $newBackImageName; 
        }

        $data['content_image'] = $imageName;
        $data['back_image'] = $back_imageName;
        $contents = new ContentEntity($data);
  
        $contentmodel->insert($contents);
        return redirect()->back();
    }

    public function edit($content_id){
        $contentmodel = new ContentModel(); 
        $content = $contentmodel->find($content_id);
        return view('content/edit',['content'=>$content]);
    }

    public function update($content_id)
    {
        $contentmodel = new ContentModel();
        $contents = $contentmodel->find($content_id);
        $data = $this->request->getPost();

        if (empty($contents)) {
            return redirect()->to('/showcontent')->with('error', 'Content not found.');
        }
    
    
        $content_image = $this->request->getFile('content_image');
        if ($content_image && $content_image->isValid() && !$content_image->hasMoved()) {
            $newName = $content_image->getRandomName();
            $content_image->move('public/uploads/', $newName);
            $data['content_image'] = $newName;
        }
    
        $back_image = $this->request->getFile('back_image');
        if ($back_image && $back_image->isValid() && !$back_image->hasMoved()) {
            $newBackImageName = $back_image->getRandomName();
            $back_image->move('public/uploads/', $newBackImageName);
            $data['back_image'] = $newBackImageName;
        }
    
      
        if (!empty($data)) {
            $contents->fill($data);
            $contentmodel->save($contents);
            return redirect()->to('/showcontent')->with('success', 'Content updated successfully.');
        } else {
            return redirect()->to('/showcontent')->with('error', 'No data to update.');
        }
    }
    



    public function delete($content_id)
    {
        $contentmodel = new ContentModel();
        $contentmodel->delete($content_id);
        return redirect()->back();
    }
}