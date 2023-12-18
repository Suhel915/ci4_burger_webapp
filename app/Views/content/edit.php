<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-3">
                            <h3><b>Edit Content</b></h3>
                        <form method="post" action="<?= site_url("/content/update/".$content->content_id) ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                                    <label for="pages" class="form-label">Pages:</label>
                                    <select name="pages" class="form-control" id="pages">
                                        <option value="None">None</option>
                                        <option value="Menu" <?= ($content->pages == 'Menu') ? 'selected' : ''; ?>>Menu</option>
                                        <option value="Our-story" <?= ($content->pages == 'Our-story') ? 'selected' : ''; ?>>Our Story</option>
                                        <option value="Contact-us" <?= ($content->pages == 'Contact-us') ? 'selected' : ''; ?>>Contact Us</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="content_section" class="form-label">Content Section:</label>
                                    <select name="content_section" class="form-control" id="content_section" value="<?= $content->content_section; ?>">
                                        <option value="none">None</option>
                                        <option value="Section-A" <?= ($content->content_section == 'Section-A') ? 'selected' : ''; ?>>Section-A</option>
                                        <option value="Section-B" <?= ($content->content_section == 'Section-B') ? 'selected' : ''; ?>>Section-B</option>
                                        <option value="Section-C" <?= ($content->content_section == 'Section-C') ? 'selected' : ''; ?>>Section-C</option>
                                        <option value="Section-D" <?= ($content->content_section == 'Section-D') ? 'selected' : ''; ?>>Section-D</option>
                                        <option value="Section-E" <?= ($content->content_section == 'Section-E') ? 'selected' : ''; ?>>Section-E</option>
                                    </select>
                                </div>
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading:</label>
                        <input name="heading" value="<?= $content->heading; ?>" type="text" class="form-control" id="heading">
                    </div>
                    <div class="mb-3">
                        <label for="sub_heading" class="form-label">Sub-Heading:</label>
                        <input name="sub_heading" value="<?= $content->sub_heading; ?>" type="text" class="form-control" id="sub_heading">
                    </div>
                    
                    <div class="mb-3">
                        <label for="main_content" class="form-label">Main Content</label>
                        <textarea name="main_content" class="form-control" id="main_content" cols="30" rows="5"><?= $content->main_content; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="additional_content" class="form-label">Additional Content:</label>
                        <input name="additional_content" value="<?= $content->additional_content; ?>" type="text" class="form-control" id="additional_content">
                    </div>
                    <div class="mb-3">
                    <img src="<?= base_url('public/uploads/'.$content->content_image) ?>" alt=""style=" max-width: 100px; max-height: 100px;">
                        <label for="content_image" class="form-label">Content Image:</label>
                        <input type="file" value="<?= $content->content_image; ?>" name="content_image" class="form-control" id="content_image">
                    </div>

                   
                                <div class="mb-3">
                                    <label for="p_button" class="form-label">Blue-Button</label><br>
                                    <input type="radio" id="p_button_yes" name="p_button" value="yes" <?= ($content->p_button == 'yes') ? 'checked' : ''; ?> onclick="toggleVisibility()">
                                    <label for="p_button_yes">Yes</label>
                                    <input type="radio" id="p_button_no" name="p_button" value="no" <?= ($content->p_button == 'no') ? 'checked' : ''; ?> onclick="toggleVisibility()">
                                    <label for="p_button_no">No</label>
                                </div>
                                <div id="hidden-block-1" style="display: none;">
                                <input type="text" placeholder="URL Address">
                                </div>
                                <div class="mb-3">
                                    <label for="d_button" class="form-label">Red-Button</label><br>
                                    <input type="radio" id="d_button_yes" name="d_button" value="yes" <?= ($content->d_button == 'yes') ? 'checked' : ''; ?> onclick="toggleVisibility()">
                                    <label for="d_button_yes">Yes</label>
                                    <input type="radio" id="d_button_no" name="d_button" value="no" <?= ($content->d_button == 'no') ? 'checked' : ''; ?> onclick="toggleVisibility()">
                                    <label for="d_button_no">No</label>
                                </div>
                                <div id="hidden-block-2" style="display: none;">
                                <input type="text" placeholder="URL Address">
                                </div>
                    <div class="mb-3">
                    <img src="<?= base_url('public/uploads/'.$content->back_image) ?>" alt=""
                    style=" max-width: 100px; max-height: 100px;">
                    
                        <label for="back_image" class="form-label">Background Image:</label>
                        <input type="file" name="back_image" value="<?= $content->back_image; ?>" class="form-control" id="back_image">
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
<script>
    function toggleVisibility() {
        var blueYes = document.getElementById('p_button_yes');
        var hiddenBlock1 = document.getElementById('hidden-block-1');
        var redYes = document.getElementById('d_button_yes');
        var hiddenBlock2 = document.getElementById('hidden-block-2');

        if (blueYes.checked) {
            hiddenBlock1.style.display = 'block';
        } else {
            hiddenBlock1.style.display = 'none';
        }
        if (redYes.checked) {
            hiddenBlock2.style.display = 'block';
        } else {
            hiddenBlock2.style.display = 'none';
        }
    }
</script>