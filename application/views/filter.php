
    <div class="col-lg-10" >
            <table id="example" class="display " >
                <thead>
                <tr>
                    <th>id</th>
                    <th>Titel</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>related_field_id</th>
                    <th>linkedin</th>
                    <th>blog</th>
                    <th>Job Titel Id</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($user_details as $rec1){?>

                     <tr class='clickable-row' data-href='<?php echo base_url("/admin/get_volunteer_profile/".$rec1['id'])?>'>
                        <td><?php echo $rec1['id'];?></td>
                        <td><?php echo $rec1['title'];?></td>
                        <td><?php echo $rec1['name'];?></td>
                        <td><?php echo $rec1['email'];?></td>
                        <td><?php echo $rec1['phone_number1'];?></td>
                        <td><?php echo $rec1['phone_number2'];?></td>
                        <td><?php echo $rec1['related_field_id'];?></td>
                        <td><?php echo $rec1['linkedin'];?></td>
                        <td><?php echo $rec1['blog'];?></td>
                        <td><?php echo $rec1['job_titel_id'];?></td>

                     </tr>

                <?php }?>
                </tbody>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Titel</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>related_field_id</th>
                    <th>linkedin</th>
                    <th>blog</th>
                    <th>Job Titel Id</th>
                </tr>
                </tfoot>
            </table>
    </div>

</div>

<script type="text/javascript">

    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example').DataTable({
            "scrollX": true
        });

        // Apply the search
        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );

        $('#example tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');

            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                console.log( table.row( this ).data()[0] );
                var id={'id':table.row( this ).data()[0]};
               // send_id_as_http_post_request(id);
            }
        } );


    } );

    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>

</body>
</html>