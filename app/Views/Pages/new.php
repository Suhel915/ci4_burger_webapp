<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
    <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                            <h3 class="card-header "><b>Add Page</b></h3>
                                <div class="card-body">
                        <form method="post" action="<?= site_url("/createpage") ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="page_title" class="form-label"><b>Page Title</b></label>
                            <input name="page_title" type="text" class="form-control" id="page_title">
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </form>
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
