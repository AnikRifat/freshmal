<?php require APPROOT . '/views/front/inc/header.php'; ?>
<section class="login__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 pl-30 pr-30">
                <div class="account__wrap text-center">
                    <div class="account__title">
                        <h3>Login</h3>
                        <?php if (isset($data['login_error'])) {
                            echo '<div class="alert alert-danger">
                                <strong>' . $data['login_error'] . '</strong>';
                        } else if (isset($data['register_success'])) {
                            echo '<div class="alert alert-success">
                                <strong>' . $data['register_success'] . '</strong>';
                        }

                        ?>
                    </div>

                    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                        <div class="input__field">
                            <input name="email" type="email" placeholder="Your Email" value="<?php echo $data['email']; ?>">
                        </div>
                        <div class="input__field">
                            <input name="password" type="password" placeholder="Password" value="">
                        </div>
                        <button type="submit" class="thm_btn w-100">Login Now</button>
                        <div class="login__action ul_li_between mt-30">
                            <span class="for-pas">
                                <a href="#!">Forget Password</a>
                            </span>
                            <span class="forgot__login">
                                <span>Don't have account?<a href="<?php echo URLROOT; ?>/users/register">Create Account</a></span>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/front/inc/footer.php'; ?>