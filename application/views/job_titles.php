
<div class="col-lg-10" >
    <table id="example" class="display " >
        <thead>
        <tr>
            <th>Id(Primary key)</th>
            <th>Titel</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($job_titel as $rec1)
            echo "<tr>"
                ."<td >".$rec1['id']."</td>"
                ."<td>".$rec1['titel']."</td>"
                ."</tr> ";?>

        </tbody>
        <tfoot>
        <tr>
            <th>Id(Primary key)</th>
            <th>Titel</th>
        </tr>
        </tfoot>
    </table>
</div>


<script type="text/javascript">

    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#example').DataTable();

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