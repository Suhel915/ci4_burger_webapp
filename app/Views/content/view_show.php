<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
        <div class="container-fluid ">
            <div class="py-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <h3 class="card-header "><b>Content Details</b></h3>
                                 <div class="card-body">
                                 <div class="row ">
                                        <dt class="col-6"></dt>
                                        <dd class="col-6"></dd>
                                    
                                    </div>
                                    
                                    <div class="row">
                                    <dt class="col-6">Content ID:</dt>
                                        <dd class="col-6"><?= $content->content_id;?></dd>
                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Page ID:</dt>
                                        <dd class="col-6"><?= $content->page_id;?></dd>
                
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Content Heading:</dt>
                                        <dd class="col-6"><?= $content->content_heading;?></dd>
                                 
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Content Sub-Heading:</dt>
                                        <dd class="col-6"><?= $content->sub_heading;?></dd>
                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Main Content:</dt>
                                        <dd class="col-6"><?= $content->main_content;?></dd>
                                    
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Content Section:</dt>
                                        <dd class="col-6"><?= $content->content_section;?></dd>
                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Content Add_Section:</dt>
                                        <dd class="col-6"><?= $content->additional_content;?></dd>
                                  
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Content Image:</dt>
                                        <dd class="col-6"><?= $content->content_image;?></dd>
                                   
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <dt class="col-6">Back-Image:</dt>
                                        <dd class="col-6"><?= $content->back_image;?></dd>
                                 
                                    </div>
                                    <hr>
                                    <h1></h1>
                                    <button class="btn  btn-outline-primary"><a href="<?= site_url("/content/edit/".$content->content_id) ?>">Edit</a></button>
                                    <button class="btn  btn-outline-primary"><a href="<?= site_url("/content/delete/".$content->content_id) ?>">Delete</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>