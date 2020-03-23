<head>
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	
</head>
<a href="http://localhost/cl/">Back</a>
<br>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>skills</th>
                <th>address</th>
              
                
            </tr>
        </thead>
         <?php
 $query = $this->db->query('SELECT * FROM developers');

foreach ($query->result_array() as $row)
{
	?>
        
            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['Name'];?></td>
                <td><?= $row['skills'];?></td>
                <td><?= $row['address'];?></td>
                
            </tr>
            
            
       
        <?php       
}
      ?> 
      
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "http://localhost/cl/scripts/server_processing.php"
    } );
} );
</script>