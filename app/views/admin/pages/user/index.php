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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data['users'] as $user) : ?>
                        <tr>
                            <td> <?php echo ++$data['counter']; ?></td>
                            <td><?php echo $user->id; ?>
                            </td>
                            <td><?php echo $user->name; ?></td>
                            <td> <?php echo $user->email; ?></td>
                            <td> <?php echo $user->role; ?></td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <form action="<?php echo URLROOT; ?>/pages/editUserPage" method="POST">
                                        <input type="text" hidden name="id" value="<?php echo $user->id; ?>">

                                        <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="<?php echo URLROOT; ?>/users/dltUser" method="POST">
                                        <input type="text" hidden name="id" value="<?php echo $user->id; ?>">
                                        <a type="button" data-toggle="modal" data-target="#dltUserModel" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        <!-- /.modal-Start -->
                                        <div class="modal fade" id="dltUserModel">
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