<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-3">
                            <h1>List of Pages</h1>
                            <a href="<?= site_url("/newpage") ?>">Create New Page</a>
                            <table class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pages as $page): ?>
                                        <tr>
                                            <td>
                                                <?= $page->pages_id; ?>
                                            </td>
                                            <td>
                                                <?= $page->page_title; ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/page/edit/".$page->pages_id) ?>">Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/page/delete/".$page->pages_id) ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>