<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
        <div class="container-fluid ">
            <div class="py-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-8">
                            <div class="card">
                                <h3 class="card-header "><b>User Details</b></h3>
                                <div class="card-body">
                                    
                                    <div class="row ">
                                        <dt class="col-6">User ID: </dt>
                                        <dd class="col-6"> <?= $user->id;?></dd>
                                    
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6"> Username:  </dt>
                                        <dd class="col-6"> <?= $user->username;?></dd>
                                    
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6">Email: </dt>
                                        <dd class="col-6"><?= $user->email;?></dd>
                                       
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6">Status:  </dt>
                                        <dd class="col-6"><?= $user->active;?></dd>
                                    
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6">Role:  </dt>
                                        <dd class="col-6"><?= $user->role;?></dd>
                                    
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6"> Created At:</dt>
                                        <dd class="col-6"><?= $user->created_at;?></dd>
                                     
                                    </div>
                                    
                                    <div class="row ">
                                    <dt class="col-6">Updated At: </dt>
                                        <dd class="col-6"><?= $user->updated_at;?></dd>
                                     
                                    </div>
                                   
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