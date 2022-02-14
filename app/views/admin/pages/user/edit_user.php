<?php require APPROOT . '/views/admin/inc/header.php';
$user = $data['row'];
// die($user->name);
?>

<div class="main-Content">
    <!-- content will start here.. -->

    <form action="<?php echo URLROOT; ?>/users/editUser" method="POST">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            <input type="text" name="id" value="<?php echo $user->id; ?>" hidden>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">NAme</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter email" value="<?php echo $user->name; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" id="email" name="email" placeholder="Enter email" value="<?php echo $user->email; ?>">
                </div>
                <div class="form-group">
                    <label>Select Role</label>
                    <select class="form-control" name="role">
                        <option selected value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
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