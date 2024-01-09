<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
    <div class="container-fluid ">
            <div class="py-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                            <h3 class="card-header "><b>List of Pages</b></h3>
                            <div class="card-body">
                            <div class="col-3 form-group">
                            <input type="text" name="search_query" class="form-control" placeholder="Search here">
                            <button type="submit" class="btn btn-outline-dark mt-2" >Search</button>
                            </div>
                            <a href="<?= site_url("/newpage") ?>">Create New Page</a>
                            <table class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Slug</th>
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
                                                <?= $page->slug; ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/page/edit/".$page->pages_id) ?>"><i class="fa fa-pencil-square fa-xl">Edit</i></a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/page/delete/".$page->pages_id) ?>"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;">Delete</i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>  
                                </tbody>
                            </table>
                            <div class="pagination">
                                <?= $pager->links() ?>
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