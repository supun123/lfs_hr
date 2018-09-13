<?php include 'partials/header.php'?>
    <?php if($this->session->flashdata('msg')){?>
        <div class="alert alert-primary" role="alert">

        <?php echo$this->session->flashdata('msg');?>
        </div>
    <?php } ?>


<?php echo form_open('Welcome/register_volunteers');?>
<div class="container">
    <?php echo validation_errors(); ?>
    <h1>Personal Details</h1>
    <br>
    <div class="form-group">
        <label >Title</label>
        <select class="form-control" name="title">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Miss">Miss</option>
            <option value="Ms">Ms</option>
            <option value="Sir">Sir</option>
            <option value="Dr">Dr</option>
        </select>

    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="mobile1">Phone Number 1</label>
        <input type="number" name="mobile1" class="form-control" id="mobile1" aria-describedby="mobile1" placeholder="Enter mobile">
    </div>
    <div class="form-group">
        <label for="mobile2">Phone Number 2</label>
        <input type="number" name="mobile2" class="form-control" id="mobile2" aria-describedby="mobile2" placeholder="Enter mobile">
    </div>
    <hr>
    <h1>Professional Details</h1>
    <br>
    <div class="form-group">
        <label for="Linkedin">Linkedin Profile URL</label>
        <input type="text" name="linkedin" class="form-control" id="Linkedin" aria-describedby="Linkedin" placeholder="Enter Linkedin profile URL">
    </div>
    <div class="form-group">
        <label for="name">Blog</label>
        <input type="text" name="blog" class="form-control" id="Blog" aria-describedby="blog" placeholder="Blog URL">
    </div>

    <div class="form-group">
        <label >Job Title</label>
        <select class="form-control" name="job_title">
            <?php foreach($job_titel as $rec1)
                echo "<option value=".$rec1['id'].">".$rec1['titel']."</option>"
                ;?>

        </select>

    </div>
    <div class="form-group">
        <label >Preferred Area To Contribute</label>
        <select class="form-control" name="Prefe_Ar_To_Contri">
            <?php foreach($related_field as $rec1)
                echo "<option value=".$rec1['id'].">".$rec1['field']."</option>"
                ;?>
        </select>

    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description"  class="form-control" rows="5" id="comment" name="description"></textarea>
    </div>




    <hr>
    <h1>Experience</h1>
    <br>
    <section class="banner-sec">
            <div class="row">
                <div class="container">


                            <div id="items">
                                    <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" class="form-control" id="company_name" placeholder="Company Name" name='company_name[0]'>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="country">Country</label>
                                        <input type="Text" class="form-control" id="country" placeholder="Country" name='country[0]'>
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label for="city">City</label>
                                        <input type="Text" class="form-control" id="city" placeholder="City" name='city[0]'>
                                    </div>
                                </div>
                                    <div class="row">
                                    <div class="form-group col-lg-3">
                                        <label for="Company_Web_Site">Company Web Site</label>
                                        <input type="text" class="form-control" id="Company_Web_Site" placeholder="Company Web Site" name='Company_Web_Site[0]'>
                                    </div>
                                </div>
                                    <div  class="row">
                                        <div class="form-group col-lg-3">
                                            <label for="Start_date">Start Date</label>
                                            <input type="Date" class="form-control" id="Start_date" placeholder="Start Date" name='Start_date[0][0]'>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="End_date">End Date</label>
                                            <input type="Date" class="form-control" id="End_date" placeholder="End Date" name='End_date[0][0]'>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="job_status">Job Status</label>
                                            <input type="text" class="form-control" id="job_status" placeholder="Job Status" name='job_status[0][0]'>
                                        </div>
                                        <input id="j_value[0]" name="j_value[0]" type="hidden" value=0>
                                    </div>
                                <div id="" class="addExperiance0"></div>
                                <div class=" form-group col-xs-3">
                                    <input type="button" value="add experiance " onclick="addExperiance(0)" id="add_experiance[0]" class="btn btn-success"  >
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
        <button type="submit" class="btn btn-success btn-lg">submit</button>
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
    var i = 0;
    var j = 0;
    $(document).ready(function(){

        $("#add").click(function (e){
            j=0;
            i++;

            $('#items').append('<div id="zz"> <div class="row">\n' +
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




    });
    function addExperiance(x){
       // x--;
        j++;
       var str = '<div class="row"><div class="form-group col-lg-3">\n' +
            '<label for="Start_date">Start Date</label>\n' +
            '<input type="Date" class="form-control" id="Start_date" placeholder="Start Date" name=\'Start_date['+i+']['+j+']\'>\n' +
            '</div>\n' +
            '<div class="form-group col-lg-3">\n' +
            '<label for="End_date">End Date</label>\n' +
            '<input type="Date" class="form-control" id="End_date" placeholder="End Date" name=\'End_date['+i+']['+j+']\'>\n' +
            '</div>\n' +
            '<div class="form-group col-lg-3">\n' +
            '<label for="job_status">Job Status</label>\n' +
            '<input type="text" class="form-control" id="job_status" placeholder="Job Status" name=\'job_status['+i+']['+j+']\'>\n' +
            '</div>\n'+
            '<br>\n' +
           '' +
            '<button type="submit" class="btn-small btn-danger" id="delete" name="delete" value="Delete" style="margin-top: 37px;margin-bottom: 25px;">delete</button>\n' +
           '' +
            '</div>' ;
        $( ".addExperiance"+x ).append( str );


        document.getElementById('j_value['+(i)+']').value = j;
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
</script>