<?php

namespace App\Controllers;

use App\Models\BurgerName;
use App\Models\StoryModel;
use App\Models\ContentModel;
use App\Models\PagesModel;
use App\Entities\ContentEntity;
use CodeIgniter\Shield\Models\UserModel;

class Admin extends BaseController {
    public function index() {
        $contentModel = new ContentModel;
        $pageModel = new PagesModel;
        $userModel = new UserModel;
         
        $totalContent = $contentModel->countAllResults();
        $totalPage = $pageModel->countAllResults();
        $totalUser = $userModel->countAllResults();
        $user  = $userModel->findAll();
        $user_active = $userModel->where("active","1")->countAllResults();
        $totalS_A = $contentModel->where("content_section","Section-A")->countAllResults();
        $totalS_B = $contentModel->where("content_section","Section-B")->countAllResults();
        $totalS_C = $contentModel->where("content_section","Section-C")->countAllResults();
        $totalS_D = $contentModel->where("content_section","Section-D")->countAllResults();
        $totalS_E = $contentModel->where("content_section","Section-E")->countAllResults();
        $data = [
            "totalContent"=> $totalContent,
            "totalPage"=>$totalPage,
            "totalUser" =>$totalUser,
            "user"=>$user,
            "user_active"=>$user_active,
            "totalS_A"=>$totalS_A,
            "totalS_B"=>$totalS_B,
            "totalS_C"=>$totalS_C,
            "totalS_D"=>$totalS_D,
            "totalS_E"=>$totalS_E
        ];

        if (auth()->user()->role === "User") {
            return redirect()->back();
        }
       
        return view('admin/dashboard',$data);
    }

    public function userDetails($Userid)
    {
        $userModel = new UserModel;
        $user = $userModel->find($Userid);
        return view("admin/show_user",["user"=>$user]);
    }
    public function new() {
        return view('admin/new');
    }
    public function create() 
    {
        $burgername = new BurgerName();
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');

        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price
          
        ];
        $id = $burgername->insert($data);
        return redirect()->back();
       
    }
    public function nstory() {
        return view('admin/newstory');
    }
    public function savestory(){
        $storymodel = new StoryModel();
        $pname = $this->request->getPost('pname');
        $content = $this->request->getPost('content');
        $address = $this->request->getPost('address');

        if (!empty($content)) {
            $data = [
                'pname' => $pname,
                'content' => $content,
                'address' => $address
            ];
            $id = $storymodel->insert($data);
           

        }
        
        return redirect()->back();   
    }
}

