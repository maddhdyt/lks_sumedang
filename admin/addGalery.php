<?php
include 'core/init.php';
$title = "Galeri";
include 'partials/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Gambar</h4>
                </div>
                <form action="func/galeryFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <div class="form-group">
                        <label>Sumber</label>
                        <input name="source" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="image" type="file" class="form-control" accept="image/*" required>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-danger" onclick="history.back()">Cancel</button>
                        <input name="btnSave" type="submit" class="btn btn-primary ml-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>