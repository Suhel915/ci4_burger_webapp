<?= $this->include("admin/adminlayout/header"); ?>
<div id="layoutSidenav_content">
    <main class="theme">
    <div class="container-fluid px-4">
            <div class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                            <h3 class="card-header "><b>Create Content</b></h3>
                                <div class="card-body">
                                <form method="post" action="<?= site_url("/createcontent") ?>"
                                enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="page_id" class="form-label"><b>Pages:</b></label>
                                    <select name="page_id" class="form-control" id="page_id">
                                        <option value="None">None</option>
                                        <?php foreach ($pages as $page): ?>
                                            <option value="<?= $page->pages_id; ?>" data-title="<?= $page->page_title; ?>">
                                                <?= $page->page_title; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- <div id="result"></div> -->
                                <div class="col-6 mb-3">
                                    <label for="content_section" class="form-label"><b>Content-Section:</b></label>
                                    <select name="content_section" class="form-control" id="content_section">
                       
                                        <option value="none">None</option>
                                        <option value="Section-A">Section-A</option>
                                        <option value="Section-B">Section-B</option>
                                        <option value="Section-C">Section-C</option>
                                        <option value="Section-D">Section-D</option>
                                        <option value="Section-E">Section-E</option>
                                        <option value="Section-F">Section-F</option>
                                    </select>
                                </div>
                                </div>
                                <div class="mb-3">
                                    <label for="heading" class="form-label"><b>Heading:</b></label>
                                    <input name="heading" type="text" class="form-control" id="heading">
                                </div>
                                <div class="mb-3">
                                    <label for="sub_heading" class="form-label"><b>Sub-Heading:</b></label>
                                    <input name="sub_heading" type="text" class="form-control" id="sub_heading">
                                </div>

                                <div class="mb-3">
                                    <label for="main_content" class="form-label"><b>Main Content</b></label>
                                    <textarea name="main_content" class="form-control" id="main_content" cols="30"
                                        rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="additional_content" class="form-label"><b>Additional Content:</b></label>
                                    <input name="additional_content" type="text" class="form-control"
                                        id="additional_content">
                                </div>
                                <div class="mb-3">
                                    <label for="content_image" class="form-label"><b>Content Image:</b></label>
                                    <input type="file" name="content_image" class="form-control" id="content_image">
                                </div>
                               
                                <!-- Primary-Button -->
                                <div class=" mb-3">
                                    <label for="p_button" class="form-label">Blue-Button</label><br>
                                    <input type="radio" id="blue-yes" name="p_button" value="yes"
                                        onclick="toggleVisibility()">
                                    <label for="blue-yes">Yes</label>
                                    <input type="radio" id="blue-no" name="p_button" value="no" checked
                                        onclick="toggleVisibility()">
                                    <label for="blue-no">No</label>
                                </div>
                                <!-- Hidden block -->
                                <div id="hidden-block-1" style="display: none;" class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Button-Name" id="blue-button-name">
                                    <input type="text"class="form-control" placeholder="URL Address" id="blue-button-url">
                                    
                                </div>
                           
                                <!-- Secondary-Button -->
                                <div class="mb-3">
                                    <label for="d_button" class="form-label">Red-Button</label><br>
                                    <input type="radio" id="red-yes" name="d_button" value="yes"
                                        onclick="toggleVisibility()">
                                    <label for="red-yes">Yes</label>
                                    <input type="radio" id="red-no" name="d_button" value="no" checked
                                        onclick="toggleVisibility()">
                                    <label for="red-no">No</label>
                                </div>
                                <!-- Hidden block -->
                                <div id="hidden-block-2" style="display: none;" class="col-md-6">
                                <input type="text" class="form-control" placeholder="Button-Name" id="red-button-name">
                                <input type="text" class="form-control" placeholder="URL Address" id="red-button-url">
                                </div>
                              

                                <div class="mb-3">
                                    <label for="back_image" class="form-label"><b>Background Image:</b></label>
                                    <input type="file" name="back_image" class="form-control" id="back_image">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
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
<script>
    function toggleVisibility() {
        var blueYes = document.getElementById('blue-yes');
        var hiddenBlock1 = document.getElementById('hidden-block-1');
        var redYes = document.getElementById('red-yes');
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

    document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var form = event.target;
    var formData = new FormData(form);

    fetch('store_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('result').innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>