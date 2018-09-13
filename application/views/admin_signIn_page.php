

<div >
    <?php if($this->session->flashdata('msg')){?>
        <div class="alert alert-primary" role="alert">

            <?php echo$this->session->flashdata('msg');?>
        </div>
    <?php } ?>

    <?php echo validation_errors(); ?>

<?php echo form_open('admin/signIn');?>

    <div class="limiter" >

        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Sign In
					</span>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                        <input class="input100" type="text" name="userName" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>



                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php echo form_close();?>
</div>




</body>
</html>