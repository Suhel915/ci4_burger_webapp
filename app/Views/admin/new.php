<?= $this->include("admin/adminlayout/header"); ?>
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
                                        <h3 style="color:red; text-align:center;">Add Burger</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="<?= site_url('/create') ?>"
                                            enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input name="name" type="name" class="form-control" id="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" id="description"
                                                    cols="30" rows="5"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input name="price" type="text" class="form-control" id="price">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>

                                            <button type="submit" class="btn btn-danger">Submit</button>
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