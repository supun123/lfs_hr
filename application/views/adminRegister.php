<div class="container">
    <?php if($this->session->flashdata('msg')){?>
        <div class="alert alert-primary" role="alert">

            <?php echo$this->session->flashdata('msg');?>
        </div>
    <?php } ?>
    <?php echo validation_errors(); ?>
    <br><br>
    <div style="align-items: center;width:80%  ">
    <?php echo form_open('admin/register');?>
        <div class="form-group" >
            <label for="userName">User Name</label>
            <input type="text" class="form-control" name="userName" id="userName" aria-describedby="userName" placeholder="User Name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="conform_password">Conform password</label>
            <input type="password" class="form-control" id="conform_password" name="conform_password" placeholder="Conform password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close();?>
    </div>
</div>
</body>
</html>