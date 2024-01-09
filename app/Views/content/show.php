<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
    <div class="container-fluid ">
            <div class="py-4">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                            <h3 class="card-header "><b>List of Content</b></h3>
                                <div class="card-body">
                            <form action="<?= site_url('/showcontent') ?>" method="get" class="form-inline">
                            <div class="input-group col-3">
                                <input type="text" name="search" class="form-control" placeholder="Search here" value="<?= $search ?>">
                            </div>
                            <button type="submit"class= "mt-2 btn btn-outline-primary">Search</button>
                            </form>
                            <a href="<?= site_url("/newcontent") ?>">Create New Content</a>
                            <table class="table table-bordered table-hover mt-2">
                                <thead class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Heading</th>
                                        <th>Sub-Heading</th>
                                        <th>Main Content</th>
                                        <th>Additional Content</th>
                                        <th>Content Image</th>
                                        <th>Content-Section</th>
                                        <!-- <th>Blue Button</th>
                                        <th>Red Button</th> -->
                                        <th>Background Image</th>
                                        <th>Pages</th>
                                        <th>Page ID</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contents as $content): ?>
                                        <tr>
                                            <td >
                                                <b><a href="<?= base_url("/showcontent/".$content->content_id) ?>"><?= $content->content_id; ?></a></b>
                                            </td>
                                            <td>
                                                <?= $content->heading; ?>
                                            </td>
                                            <td>
                                                <?= $content->sub_heading; ?>
                                            </td>
                                            <td>
                                                <?= (strlen($content->main_content) > 50) ? substr($content->main_content, 0, 50) . '...' : $content->main_content; ?>
                                            </td>
                                            <td>
                                                <?= $content->additional_content; ?>
                                            </td>
                                            <td>
                                            <?= (strlen( $content->content_image) > 10) ? substr( $content->content_image, 0, 10) . '...' :  $content->content_image ?>
                                               
                                            </td>
                                            <td>
                                                <?= $content->content_section; ?>
                                            </td>
                                      
                                            <td>
                                               <?= (strlen(  $content->back_image) > 10) ? substr(  $content->back_image, 0, 10) . '...' :   $content->back_image ?>
                                               
                                            </td>
                                            <td><?=
                                                $content->pages;
                                            ?>
                                            </td>
                                            <td>
                                                <?=
                                                $content->page_id;
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/content/edit/".$content->content_id) ?>"><i class="fa fa-pencil-square fa-xl">Edit</i></a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/content/delete/".$content->content_id) ?>"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;">Delete</i></a>
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
    </main>
    <?= $this->include("admin/adminlayout/footer") ?>
</div>