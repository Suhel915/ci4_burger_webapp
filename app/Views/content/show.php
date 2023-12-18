<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mt-3">
                            <h1>List of Contents</h1>
                            <a href="<?= site_url("/newcontent") ?>">Create New Content</a>
                            <table class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Heading</th>
                                        <th>Sub-Heading</th>
                                        <th>Main Content</th>
                                        <th>Additional Content</th>
                                        <th>Content Image</th>
                                        <th>Content-Section</th>
                                        <th>Blue Button</th>
                                        <th>Red Button</th>
                                        <th>Background Image</th>
                                        <th>Pages</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($contents as $content): ?>
                                        <tr>
                                            <td>
                                                <?= $content->content_id; ?>
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
                                                <?= $content->content_image; ?>
                                            </td>
                                            <td>
                                                <?= $content->content_section; ?>
                                            </td>
                                            <td>
                                                <?= $content->p_button; ?>
                                            </td>
                                            <td>
                                            <?= $content->d_button; ?>
                                            </td>
                                            <td><?=
                                                $content->back_image;
                                                ?>
                                            </td>
                                            <td><?=
                                                $content->pages;
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/content/edit/".$content->content_id) ?>">Edit</a>
                                            </td>
                                            <td>
                                                <a href="<?= site_url("/content/delete/".$content->content_id) ?>">Delete</a>
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