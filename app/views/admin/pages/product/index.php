<?php require APPROOT . '/views/admin/inc/header.php'; ?>

<div class="main-Content">
    <!-- content will start here.. -->

    <!-- /.card -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="product" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data['products'] as $product) : ?>
                        <?php $productID =  $product->id ?>
                        <tr>
                            <td> <?php echo ++$data['counter']; ?></td>
                            <td><?php echo $productID; ?>
                            <td><?php echo $product->product_id; ?>
                            </td>
                            <td><?php echo $product->title; ?>
                            </td>
                            <td><img style="width: 100%;max-width: 5rem;max-height: 5rem;" src="<?php echo $product->image; ?>" alt="no_image"></td>
                            <td><?php echo $product->price; ?></td>
                            <td> <?php echo $product->unit; ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <form action="<?php echo URLROOT; ?>/pages/editProductPage" method="POST">
                                        <input type="text" hidden name="id" value="<?php echo $productID; ?>">

                                        <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="<?php echo URLROOT; ?>/products_controller/dltProduct" method="POST">
                                        <input type="text" hidden name="idF" value="<?php echo $productID; ?>">
                                        <a type="button" data-toggle="modal" data-target="#dltUserModel_<?php echo $productID;; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        <!-- /.modal-Start -->
                                        <div class="modal fade" id="dltUserModel_<?php echo $productID;; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-light">
                                                    <div class="modal-body">
                                                        <p class="text-danger font-weight-bold">are you sure delete this user?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <a type="button" class="btn btn-info" data-dismiss="modal">Close</a>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>

                                        </div>
                                        <!-- /.modal-nd -->
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



    <!-- content will end here.. -->

</div>
<?php require APPROOT . '/views/admin/inc/footer.php'; ?>