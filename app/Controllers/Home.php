<?php

namespace App\Controllers;
use App\Models\BurgerName;
use App\Models\StoryModel;
use App\Models\PagesModel;
use App\Models\ContentModel;
use App\Entities\ContentEntity;

class Home extends BaseController
{
   private $pagemodel;
   private $contentmodel;
   private $burgername;
   private $storymodel; 
    public function __construct(){
        $this->pagemodel = new PagesModel();
        $this->contentmodel = new ContentModel();
        $this->burgername =  new BurgerName();
        $this->storymodel = new StoryModel();
    }
    public function index()
    {
 
        $contents = $this->contentmodel->findAll();
        $pages = $this->pagemodel->findAll();
        $page = $this->pagemodel->findAll(); 
        return view('homepage',['contents'=>$contents,'pages'=>$pages,'page'=>$page]);
    }

    public function homes()
    {
 
        $contents = $this->contentmodel->findAll();
        $pages = $this->pagemodel->findAll();
        $sectionAs = $this->contentmodel->getSectionA();
        $sectionBs = $this->contentmodel->getSectionB();
        $sectionCs = $this->contentmodel->getSectionC();
        $sectionDs = $this->contentmodel->getSectionD();
        $sectionEs = $this->contentmodel->getSectionE();
        return view('homes',['pages'=>$pages, "sectionAs"=>$sectionAs, "sectionBs"=>$sectionBs, "sectionCs"=>$sectionCs,"sectionDs"=>$sectionDs, "sectionEs"=>$sectionEs]);
    }

    public function menu()
    {
        $contents = $this->contentmodel->findAll();
        $burgers = $this->burgername->findAll();
        $pages = $this->pagemodel->findAll();
        $page = 'Menu';
        return view('menulist', ['contents'=>$contents,'burgers'=> $burgers,'pages'=>$pages,'page'=>$page]);
    }
    public function contactus()
    {
        $contents = $this->contentmodel->findAll();
        $pages = $this->pagemodel->findAll();
        $page = $this->pagemodel->findAll(); 
        return view('contact',['contents'=>$contents,'pages'=>$pages,'page'=>$page]);
    }
    public function ourstory()
    {
        $contents = $this->contentmodel->findAll();
        $storys = $this->storymodel->findAll();
        $pages = $this->pagemodel->findAll();
        $page = $this->pagemodel->findAll(); 
        return view('story',['contents'=>$contents,'storys'=>$storys,'pages'=>$pages,'page'=>$page]);
    }
}
