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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <form action="<?php URLROOT; ?>/pages/user/editUser" method="POST">
                                <input type="text" hidden>
                                    <a class="btn btn-info"><i class="fas fa-edit"></i></a>
                                </form>
                                <form action="<?php URLROOT; ?>/pages/user/dltUser" method="POST">
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
                                                    <atype="button" class="btn btn-danger">Delete</atype=>
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
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



    <!-- content will end here.. -->

</div>
<?php require APPROOT . '/views/admin/inc/footer.php'; ?>