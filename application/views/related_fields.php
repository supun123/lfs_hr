<div class="col-md-10" >
    <table id="example" class="display " >
        <thead>
        <tr>
            <th>Id(Primary key)</th>
            <th>Field</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($related_field as $rec1)
            echo "<tr>"
                ."<td >".$rec1['id']."</td>"
                ."<td>".$rec1['field']."</td>"
                ."<td>".$rec1['description']."</td>"
                ."</tr> ";?>

        </tbody>
        <tfoot>
        <tr>
            <th>Id(Primary key)</th>
            <th>Field</th>
            <th>Description</th>
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