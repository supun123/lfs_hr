<?php
if(!$this->session->userdata('loggedin')){
    redirect('/');
}
?>

<?php if($this->session->flashdata('msg')){?>
    <div class="alert alert-primary" role="alert">

        <?php echo$this->session->flashdata('msg');?>
    </div>
<?php } ?>
<div class="row" style="width: 100%">
    <div class="col-md-2" style="margin-top:50px">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class=" <?php if($this->session->flashdata('msg_admin_panel')=="user_details"){ echo "nav-link active"; } else{ echo "nav-link";}?>"  href="<?php echo base_url("/admin")?>">User Details</a>
            </li>
            <li class="nav-item">
                <a class="<?php if($this->session->flashdata('msg_admin_panel')=="companies"){echo "nav-link active";} else{ echo "nav-link";}?>" href="<?php echo base_url("/admin/Companies")?>">Companies</a>
            </li>
            <li class="nav-item">
                <a class="<?php if($this->session->flashdata('msg_admin_panel')=="experiences"){echo"nav-link active";} else{echo "nav-link";}?>" href="<?php echo base_url("/admin/experiences")?>">Experiences</a>
            </li>
            <li class="nav-item">
                <a class="<?php if($this->session->flashdata('msg_admin_panel')=="job_titles"){echo"nav-link active" ;} else{ echo "nav-link";}?>" href="<?php echo base_url("/admin/job_titles")?>">Job Titles</a>
            </li>
            <li class="nav-item">
                <a class="<?php if($this->session->flashdata('msg_admin_panel')=="admin_users"){echo "nav-link active";} else{ echo "nav-link";}?>" href="<?php echo base_url("/admin/admin_users")?>">Admin Users</a>
            </li>
            <li class="nav-item">
                <a class="<?php if($this->session->flashdata('msg_admin_panel')=="related_fields"){echo "nav-link active";} else{ echo"nav-link";}?>" href="<?php echo base_url("/admin/related_fields")?>">Related Fields</a>
            </li>

        </ul>
    </div>
