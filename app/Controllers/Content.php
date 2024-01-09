<?php

namespace App\Controllers;
use App\Models\ContentModel;
use App\Models\PagesModel;
use App\Entities\ContentEntity;
use CodeIgniter\Shield\Models\UserModel;


class Content extends BaseController
{
    public function index()
    {
        $pagemodel = new PagesModel;
        $pages = $pagemodel->findAll();
        return view("content/new",["pages"=> $pages]);
    }

    public function show()
    {
        $contentmodel = new ContentModel();
        $pagemodel = new PagesModel();
        $pages = $pagemodel->findAll();
        
       
        
        $pager = \Config\Services::pager();
        $perPage = 10;
        $search = $this->request->getVar('search');
   
        if (!empty($search)) {
            $contents = $contentmodel->searchContent($search, $perPage);
        } else {
            $contents = $contentmodel->paginate($perPage);
        }
        // $contents = $contentmodel->paginate($perPage);
    
        
        
        $data = [
            'contents' => $contents,
            'pager' => $contentmodel->pager,
            'pages' => $pages,
            'search'=>$search,
        ];
        
        return view("content/show", $data);
    }
    
    public function create()
    {
        $contentmodel = new ContentModel();
        $data = $this->request->getPost(); 
        $pageId = $this->request->getPost('page_id');
        
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
        $data['page_id'] = $pageId;
        $contents = new ContentEntity($data);
        $contentmodel->insert($contents);
        return redirect()->to('/showcontent');
    }

    public function edit($content_id){
        $contentmodel = new ContentModel(); 
        $pagemodel = new PagesModel();
        $pages = $pagemodel->findAll();
        $content = $contentmodel->find($content_id);
        return view('content/edit',['content'=>$content,'pages'=>$pages]);
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
    public function search()
    {
        $contentmodel = new ContentModel();
        $pagemodel = new PagesModel();
        $pages = $pagemodel->findAll();

        $searchQuery = $this->request->getGet('search_query');
        $contents = $contentmodel->like('heading', $searchQuery)
            ->orLike('sub_heading', $searchQuery)
            ->findAll();

        $data = [
            'contents' => $contents,
            'pages' => $pages
        ];

        return view("content/show", $data);
    }

    public function view_all_users(){

        $usermodel = new UserModel;
        $users = $usermodel->findAll();
        return view ("admin/view_all_users",['users' => $users]);
    }
    public function updateRoleToAdmin($userId)
    {
        $userModel = new UserModel(); 

        
        $data = [
            'role' => 'Admin'
        ];

        $userModel->update($userId, $data);

        return redirect()->back(); 
    }

    public function updateRoleToEditor($userId)
    {
        $userModel = new UserModel();

  
        $data = [
            'role' => 'Editor'
        ];

        $userModel->update($userId, $data);

        return redirect()->back(); 
    }

    public function updateRoleToUser($userId)
    {
        $userModel = new UserModel();

  
        $data = [
            'role' => 'User'
        ];

        $userModel->update($userId, $data);

        return redirect()->back(); 
    }

    public function deleteUser($userId)
    {
        $userModel = new UserModel(); 

       
        $userModel->delete($userId);

        return redirect()->back(); 
    }
    public function showcontent($id){
        $contentmodel = new ContentModel;
        
        $content = $contentmodel->find($id);
        return view("content/view_show",["content"=>$content]);
    }
}
