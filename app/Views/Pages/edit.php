<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
        <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                    <input type="hidden" name="page_id" value="<?= $page->pages_id; ?>">
                        <div class="col-md-10 mt-3">
                        <form method="post" action="<?= site_url("/page/update/".$page->pages_id) ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="page_title" class="form-label">Page Title</label>
                            <input name="page_title" value="<?= $page->page_title; ?>"type="text" class="form-control" id="page_title">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>
