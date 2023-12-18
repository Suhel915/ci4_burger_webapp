<?php

namespace App\Controllers;

use App\Models\BurgerName;
use App\Models\StoryModel;

class Admin extends BaseController {
    public function index() {


        return view('admin/dashboard');
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

