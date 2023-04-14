<?php 
include 'core/conn.php';

$title = "Galeri";

$id = $_GET['id'];

$show = mysqli_query($conn, "SELECT * FROM galery WHERE id = $id");

$data = mysqli_fetch_assoc($show);

include 'partials/header.php'; ?>
<!-- Main Content -->
<div class="main-content">
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Gambar</h4>
                </div>
                <form action="func/galeryFunc.php" method="post" enctype="multipart/form-data" class="card-body">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="imageOld" value="<?= $data['image'] ?>">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="title" type="text" class="form-control" value="<?= $data['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Sumber</label>
                        <input name="source" type="text" class="form-control" value="<?=$data['source'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="image" type="file" class="form-control" accept="image/*">
                    </div>
                    <div class="card-footer text-right">
                        <a href="" class="btn btn-danger">Cancel</a>
                        <input name="btnUpdate" type="submit" class="btn btn-primary ml-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>