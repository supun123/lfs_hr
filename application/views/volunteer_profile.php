
<br>
<input style="margin-left:90%;padding-right:50px;padding-left: 50px; :" id="edit_btn" type="button" onclick="edit()" class="btn btn-primary" value="Edit" ></input>

<div class="container">
            <h1>Personal Details </h1>
    <?php echo validation_errors(); ?>

    <?php echo form_open('admin/update_user_data');?>
    <br>
    <div class="form-group">
        <label >Title</label>
        <select id="title" class="form-control" name="title">
            <option <?php if($user_details_given_id[0]['title']=='Mr') {echo'selected';}?> value="Mr">Mr</option>
            <option <?php if($user_details_given_id[0]['title']=='Mrs') {echo'selected';}?> value="Mrs">Mrs</option>
            <option <?php if($user_details_given_id[0]['title']=='Miss') {echo'selected';}?> value="Miss">Miss</option>
            <option <?php if($user_details_given_id[0]['title']=='Ms') {echo'selected';}?> value="Ms">Ms</option>
            <option <?php if($user_details_given_id[0]['title']=='Sir') {echo'selected';}?> value="Sir">Sir</option>
            <option <?php if($user_details_given_id[0]['title']=='Dr') {echo'selected';}?> value="Dr">Dr</option>
        </select>

    </div>
    <input type="hidden" value="<?php echo $user_details_given_id[0]['id'];?>" name="id"  >
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="<?php echo $user_details_given_id[0]['name'];?>" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" value="<?php echo $user_details_given_id[0]['email'];?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="mobile1">Phone Number 1</label>
        <input type="number" value="<?php echo $user_details_given_id[0]['phone_number1'];?>" name="mobile1" class="form-control" id="mobile1" aria-describedby="mobile1" placeholder="Enter mobile">
    </div>
    <div class="form-group">
        <label for="mobile2">Phone Number 2</label>
        <input type="number" value="<?php echo $user_details_given_id[0]['phone_number2'];?>" name="mobile2" class="form-control" id="mobile2" aria-describedby="mobile2" placeholder="Enter mobile">
    </div>
    <hr>
    <h1>Professional Details</h1>
    <br>
    <div class="form-group">
        <label for="Linkedin">Linkedin Profile URL</label>
        <input type="text" name="linkedin" value="<?php echo $user_details_given_id[0]['linkedin'];?>" class="form-control" id="Linkedin" aria-describedby="Linkedin" placeholder="Enter Linkedin profile URL">
    </div>
    <div class="form-group">
        <label for="name">Blog</label>
        <input type="text" name="blog" value="<?php echo $user_details_given_id[0]['blog'];?>" class="form-control" id="Blog" aria-describedby="blog" placeholder="Blog URL">
    </div>

    <div class="form-group">
        <label >Job Title</label>
        <select id="job_title" class="form-control" name="job_title">
            <?php foreach($job_titel as $rec1){?>
            <option <?php if($user_details_given_id[0]['job_titel_id']==$rec1['id']) {echo'selected';}?>  value="<?php echo $rec1['id']; ?>" > <?php echo $rec1['titel'];?> </option>
                <?php } ?>

        </select>

    </div>
    <div class="form-group">
        <label >Preferred Area To Contribute</label>
        <select id="Prefe_Ar_To_Contri" class="form-control" name="Prefe_Ar_To_Contri">
            <?php foreach($related_field as $rec1){?>
            <option <?php if($user_details_given_id[0]['related_field_id']==$rec1['id']) {echo'selected';}?>  value="<?php echo $rec1['id']; ?>" > <?php echo $rec1['field'];?> </option>
            <?php }?>
        </select>

    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description"   class="form-control" rows="5" id="comment" name="description"><?php echo $user_details_given_id[0]['description'];?></textarea>
    </div>




    <hr>
    <h1>Experience</h1>
    <br>
    <section class="banner-sec">
        <div class="row">
            <div class="container">


                <div id="items">
                    <div class="row">
                        <input type="hidden" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][0]['id']; ?>" name='company_id[0]'  >
                        <div class="form-group col-lg-3">
                            <label for="company_name">Company Name</label>
                            <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][0]['company_name']; ?>" class="form-control" id="company_name" placeholder="Company Name" name='company_name[0]'>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="country">Country</label>
                            <input type="Text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][0]['country']; ?>" class="form-control" id="country" placeholder="Country" name='country[0]'>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="city">City</label>
                            <input type="Text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][0]['city']; ?>" class="form-control" id="city" placeholder="City" name='city[0]'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="Company_Web_Site">Company Web Site</label>
                            <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][0]['company_website']; ?>" class="form-control" id="Company_Web_Site" placeholder="Company Web Site" name='Company_Web_Site[0]'>
                        </div>
                    </div>
                    <div  class="row">
                        <input type="hidden" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][0][0]['id'] ;?>" name="id_experience[0][0]"  >
                        <div class="form-group col-lg-3">
                            <label for="Start_date">Start Date</label>
                            <input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][0][0]['start_date'] ;?>" class="form-control" id="Start_date" placeholder="Start Date" name='Start_date[0][0]'>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="End_date">End Date</label>
                            <input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][0][0]['end_date'] ;?>" class="form-control" id="End_date" placeholder="End Date" name='End_date[0][0]'>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="job_status">Job Status</label>
                            <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][0][0]['description'];?>" class="form-control" id="job_status" placeholder="Job Status" name='job_status[0][0]'>
                        </div>
                        <input id="j_value[0]" name="j_value[0]" type="hidden" value=0>
                    </div>
                    <div id="" class="addExperiance0"></div>
                    <div class=" form-group col-xs-3">
                        <input type="button" value="add experiance " onclick="addExperiance(0)" id="add_experiance0" class="btn btn-success"  >
                    </div>
                </div>

                <br><br><br><hr>

                <div class="">
                    <div class="form-group col-xs-4">
                        <input type="button" value=" Add Company  " id="add" class="btn btn-success">
                    </div>
                </div>



            </div>

        </div>

    </section>
    <input id="i_value" name="i_value" type="hidden" value="0" >

    <div class="form-group">
        <button type="submit"   id="update" class="btn btn-success btn-lg">Update</button>
    </div>
</div>
<?php echo form_close();?>


<script
        src="https://code.jquery.com/jquery-1.7.1.min.js"
        integrity="sha256-iBcUE/x23aI6syuqF7EeT/+JFBxjPs5zeFJEXxumwb0="
        crossorigin="anonymous"></script>


</body>

</html>







<script>
    var edit_state=false;
    var i = 0;
    var j = 0;
    //-----------------
    <?php for($i=0;$i<sizeof($companies_experience_given_id['companies_experience']['companies']);$i++){?>
        <?php if($i!=0){?>
            j=0;
            i++;
            $('#items').append('<div id="zz"> <div class="row">\n'+
                '                                    <input type="hidden" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['id']; ?>" name="company_id[<?php echo $i;?>]">'+
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="company_name">Company Name</label>\n' +
                '                                        <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['company_name']; ?>" class="form-control" id="company_name" placeholder="Company Name" name=\'company_name['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="country">Country</label>\n' +
                '                                        <input type="Text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['country']; ?>" class="form-control" id="country" placeholder="Country" name=\'country['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="city">City</label>\n' +
                '                                        <input type="Text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['city']; ?>" class="form-control" id="city" placeholder="City" name=\'city['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                                    <div class="row">\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="Company_Web_Site">Company Web Site</label>\n' +
                '                                        <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['company_website']; ?>" class="form-control" id="Company_Web_Site" placeholder="Company Web Site" name=\'Company_Web_Site['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                                    <div  class="row">\n' +
                '                                        <input type="hidden" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][0]['id'] ;?>" name="id_experience[<?php echo $i;?>][0]" >'+
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="Start_date">Start Date</label>\n' +
                '                                            <input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][0]['start_date'] ;?>" class="form-control" id="Start_date" placeholder="Start Date" name=\'Start_date['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="End_date">End Date</label>\n' +
                '                                            <input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][0]['end_date'];?>" class="form-control" id="End_date" placeholder="End Date" name=\'End_date['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="job_status">Job Status</label>\n' +
                '                                            <input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][0]['description'];?>" class="form-control" id="job_status" placeholder="Job Status" name=\'job_status['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <input id="j_value['+i+']" name="j_value['+i+']" type="hidden" value=0>\n' +
                '                                    </div>\n' +
                '                                <div  id="" class="addExperiance'+i+'"></div>\n' +
                '                              ' +
                '                                    <div class=" form-group col-xs-3">\n' +
                '                                    <input type="button" value="add experiance " onclick="addExperiance(i)" id="add_experiance'+i+'" class="btn btn-success"  >\n' +
                '                                    </div>' +
                '                              ' +
                '<input type="button" onclick="delete_company(<?php echo $companies_experience_given_id['companies_experience']['companies'][$i]['id']; ?>)" value="Delete Company "  id="delete_Company" class="btn btn-danger" </div> '

            );


            document.getElementById("i_value").value = i;
        <?php }?>
        <?php for($x=1;$x<sizeof($companies_experience_given_id['companies_experience']['experience'][$i]);$x++){ ?>
            //addExperiance_auto();
            //-------------------
            j++;
            var str = '<div class="row"><div class="form-group col-lg-3">\n'+
                '<input type="hidden" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][$x]['id'] ;?>" name="id_experience[<?php echo $i;?>][<?php echo $x;?>]"  >'+
                '<label for="Start_date">Start Date</label>\n' +
                '<input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][$x]['start_date'] ;?>" class="form-control" id="Start_date" placeholder="Start Date" name=\'Start_date['+i+']['+j+']\'>\n' +
                '</div>\n' +
                '<div class="form-group col-lg-3">\n' +
                '<label for="End_date">End Date</label>\n' +
                '<input type="Date" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][$x]['end_date'] ;?>" class="form-control" id="End_date" placeholder="End Date" name=\'End_date['+i+']['+j+']\'>\n' +
                '</div>\n' +
                '<div class="form-group col-lg-3">\n' +
                '<label for="job_status">Job Status</label>\n' +
                '<input type="text" value="<?php echo $companies_experience_given_id['companies_experience']['experience'][$i][$x]['description'];?>" class="form-control" id="job_status" placeholder="Job Status" name=\'job_status['+i+']['+j+']\'>\n' +
                '</div>\n'+
                '<br>\n' +
                '' +
                '<button type="submit" onclick="delete_experiance(<?php echo $i;?>,<?php echo $x ;?>)"  class="btn-small btn-danger" id="delete" name="delete" value="Delete" style="margin-top: 37px;margin-bottom: 25px;">delete</button>\n' +
                '' +
                '</div>' ;
            $( ".addExperiance"+<?php echo$i;?> ).append( str );
            document.getElementById('j_value['+(i)+']').value = j;
            //------
        <?php }?>

    <?php } ?>
    //----------------
    $(document).ready(function(){

        $("#add").click(function (e){
            j=0;
            i++;

            $('#items').append('<div id="zz"> <div class="row">\n'+
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="company_name">Company Name</label>\n' +
                '                                        <input type="text" class="form-control" id="company_name" placeholder="Company Name" name=\'company_name['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="country">Country</label>\n' +
                '                                        <input type="Text" class="form-control" id="country" placeholder="Country" name=\'country['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="city">City</label>\n' +
                '                                        <input type="Text" class="form-control" id="city" placeholder="City" name=\'city['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                                    <div class="row">\n' +
                '                                    <div class="form-group col-lg-3">\n' +
                '                                        <label for="Company_Web_Site">Company Web Site</label>\n' +
                '                                        <input type="text" class="form-control" id="Company_Web_Site" placeholder="Company Web Site" name=\'Company_Web_Site['+i+']\'>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                                    <div  class="row">\n' +
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="Start_date">Start Date</label>\n' +
                '                                            <input type="Date" class="form-control" id="Start_date" placeholder="Start Date" name=\'Start_date['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="End_date">End Date</label>\n' +
                '                                            <input type="Date" class="form-control" id="End_date" placeholder="End Date" name=\'End_date['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group col-lg-3">\n' +
                '                                            <label for="job_status">Job Status</label>\n' +
                '                                            <input type="text" class="form-control" id="job_status" placeholder="Job Status" name=\'job_status['+i+']['+j+']\'>\n' +
                '                                        </div>\n' +
                '                                        <input id="j_value['+i+']" name="j_value['+i+']" type="hidden" value=0>\n' +
                '                                    </div>\n' +
                '                                <div  id="" class="addExperiance'+i+'"></div>\n' +
                '                              ' +
                '                                    <div class=" form-group col-xs-3">\n' +
                '                                    <input type="button" value="add experiance " onclick="addExperiance(i)" id="" class="btn btn-success"  >\n' +
                '                                    </div>' +
                '                              ' +
                '<input type="button" value="Delete Company "  id="delete_Company" class="btn btn-danger" </div> '

            );


            document.getElementById("i_value").value = i;

        });

//when load the page. Use to hide button and  set input to read only state
        $(':input').attr('readonly','readonly');
        $(".btn-danger").hide();
        $('#add').hide();
        $('#title').prop('disabled',true);
        $('#job_title').prop('disabled',true);
        $('#Prefe_Ar_To_Contri').prop('disabled',true);
        $('#update').hide();

        <?php for($i=0;$i<sizeof($companies_experience_given_id['companies_experience']['companies']);$i++){?>
            $('#add_experiance<?php echo $i;?>').hide();
        <?php }?>

    });

//function run to add experience manually
    function addExperiance(x){

        j++;
        document.getElementById('j_value['+x+']').value = j;
        var str = '<div class="row"><div class="form-group col-lg-3">\n' +
            '<label for="Start_date">Start Date</label>\n' +
            '<input type="Date" class="form-control" id="Start_date" placeholder="Start Date" name=\'Start_date['+x+']['+document.getElementById('j_value['+x+']').value+']\'>\n' +
            '</div>\n' +
            '<div class="form-group col-lg-3">\n' +
            '<label for="End_date">End Date</label>\n' +
            '<input type="Date" class="form-control" id="End_date" placeholder="End Date" name=\'End_date['+x+']['+document.getElementById('j_value['+x+']').value+']\'>\n' +
            '</div>\n' +
            '<div class="form-group col-lg-3">\n' +
            '<label for="job_status">Job Status</label>\n' +
            '<input type="text" class="form-control" id="job_status" placeholder="Job Status" name=\'job_status['+x+']['+document.getElementById('j_value['+x+']').value+']\'>\n' +
            '</div>\n'+
            '<br>\n' +
            '' +
            '<button type="submit" class="btn-small btn-danger" id="delete" name="delete"  value="Delete" style="margin-top: 37px;margin-bottom: 25px;">delete</button>\n' +
            '' +
            '</div>' ;
        $( ".addExperiance"+x ).append( str );


    }
    $('body').on('click','#delete',function (e){


        $(this).parent('div').remove();
        j--;
        document.getElementById('j_value['+(i)+']').value=j;


    });
    $('body').on('click','#delete_Company',function (e){

        $(this).parent('div').remove();
        i--;
        document.getElementById('i_value').value=i;
    });
    function delete_experiance(i,j) {

        $.post("<?php echo base_url('/admin/delete_experiance')?>", {id:document.getElementsByName('id_experience['+i+']['+j+']')[0].value}, function(result){
            console.log(result);
        });
    }
    function delete_company(company_id) {
        $.post("<?php echo base_url('/admin/delete_company')?>", {id:company_id}, function(result){
            console.log(result);
        });
    }
//page able to edit when run this funtion
    function edit() {
        //if is use to change text in the button and use to go only view sate
        if(!edit_state) {
            edit_state=true;
            $(':input').attr('readonly', false);
            $(".btn-danger").show();
            $('#add').show();
            $('#title').prop('disabled', false);
            $('#job_title').prop('disabled', false);
            $('#Prefe_Ar_To_Contri').prop('disabled', false);
            $('#update').show();
            $("#edit_btn").prop('value', 'Hide');
            <?php for($i = 0;$i < sizeof($companies_experience_given_id['companies_experience']['companies']);$i++){?>
            $('#add_experiance<?php echo $i;?>').show();
            <?php }?>
        }else{
            edit_state=false;
            $("#edit_btn").prop('value', 'Edit');
            $(':input').attr('readonly','readonly');
            $(".btn-danger").hide();
            $('#add').hide();
            $('#title').prop('disabled',true);
            $('#job_title').prop('disabled',true);
            $('#Prefe_Ar_To_Contri').prop('disabled',true);
            $('#update').hide();
            <?php for($i=0;$i<sizeof($companies_experience_given_id['companies_experience']['companies']);$i++){?>
            $('#add_experiance<?php echo $i;?>').hide();
            <?php }?>
        }
    }




</script>