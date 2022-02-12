<?php require APPROOT . '/views/front/inc/header.php'; ?>
<section class="login__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 pl-30 pr-30">
                <div class="account__wrap text-center">
                    <div class="account__title">
                        <h3>Create your account</h3>
                        <?php if (isset($data['register_error'])) {
                            echo '<div class="alert alert-danger">
                                <strong>' . $data['register_error'] . '</strong>';
                        } ?>
                    </div>

                    <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                        <div class="input__field">
                            <input type="text" name="name" placeholder="Your Name" value="<?php echo $data['name']; ?>">

                        </div>
                        <div class="input__field">
                            <input type="email" name="email" placeholder="Your Email" value="<?php echo $data['email']; ?>">


                        </div>
                        <div class="input__field">
                            <input type="password" name="password" placeholder="Password" value="<?php echo $data['password']; ?>">
                        </div>
                        <div class="input__field">
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <button type="submit" class="thm_btn w-100">Create account</button>
                        <div class="login__action ul_li_between mt-30">

                            <span class="forgot__login">
                                <span>Already have an accout<a href="<?php echo URLROOT; ?>/users/login">Login</a></span>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/front/inc/footer.php'; ?>
