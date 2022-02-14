<?php require APPROOT . '/views/admin/inc/header.php';
// die($user->name);
?>

<div class="main-Content">
    <!-- content will start here.. -->

    <form action="<?php echo URLROOT; ?>/products/addProduct" method="POST">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ADD Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label for="pid">product ID</label>
                    <input type="text" class="form-control" id="pid" name="pid" placeholder="Enter email" value="<?php echo $data['pid']; ?>">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Enter Unit">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Enter Image">
                </div>


            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</form>

<!-- content will end here.. -->

</div>
<?php require APPROOT . '/views/admin/inc/footer.php'; ?>