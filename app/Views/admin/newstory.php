<?= $this->include("admin/adminlayout/header") ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-3">
                <div class="card  ">
                <article>
                    <div class="card-header">
               <h3 style="color:red; text-align:center;">New Story</h3>
               </div>
               <div class="card-body">
               <form method="post" action="<?= site_url('/savestory') ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="pname" class="form-label">User Name</label>
                        <input name="pname" type="pname" class="form-control" id="pname">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    </div>
					<div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" type="text" class="form-control" id="address" cols="30" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <button type="submit" class="btn btn-danger">Post</button>
                </form>
                </div>
                </article>
                
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>