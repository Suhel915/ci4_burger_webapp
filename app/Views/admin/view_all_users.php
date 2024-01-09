<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
    <div class="container-fluid ">
            <div class="py-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                            <h3 class="card-header "><b>Users Details</b></h3>
                                <div class="card-body">
                          
                            <table class="table table-bordered table-hover mt-2">
                                <thead class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        
                                        <th>Role</th>
                                        <th>Admin</th>
                                        <th>Editor</th>
                                        <th>Users</th>
                                        <th>Created At</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                           
     
                                <tbody>
                                   <?php foreach($users as $user): ?>
                                        <tr>
                                           <td><a href=<?= base_url("/admin/userdetail/".$user->id) ?>><?= $user->id ?></a></td>
                                           <td><?= $user->username ?></td>
                                           <td><?= $user->email ?></td>
                                           
                                           <td><?php if($user->active) 
                                            {
                                                echo "active";
                                            }else{
                                                echo "deactive";
                                            }
                                           
                                           ?></td>
                                          
                                           <td><?= $user->role ?></td>
                                           <td>
                                                <a href="<?= site_url("update_role/{$user->id}/admin") ?>">Admin</a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("update_role/{$user->id}/editor") ?>">Editor</a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("update_role/{$user->id}/user") ?>">User</a>
                                            </td>
                                            <td><?= $user->created_at ?></td>
                                            <td>
                                                <a href="<?= site_url("delete_user/{$user->id}") ?>">Delete</a>
                                            </td>
      
                                        </tr>
                                   <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="pagination">
                                
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>