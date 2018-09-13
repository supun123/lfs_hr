
<div class="col-lg-10" >
    <table id="example" class="display " >
        <thead>
        <tr>
            <th>Id(Primary key)</th>
            <th>User Id</th>
            <th>company name</th>
            <th>Country</th>
            <th>City</th>
            <th>company_website	</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($companies as $rec1)
            echo "<tr>"
                ."<td >".$rec1['id']."</td>"
                ."<td>".$rec1['header_id']."</td>"
                ."<td>".$rec1['company_name']."</td>"
                ."<td>".$rec1['country']."</td>"
                ."<td>".$rec1['city']."</td>"
                ."<td>".$rec1['company_website']."</td>"
                ."</tr> ";?>

        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Header Id</th>
            <th>company name</th>
            <th>Country</th>
            <th>City</th>
            <th>company_website	</th>
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
    } );
</script>
</body>
</html>
