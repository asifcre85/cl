<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style>
		.a1{
			background-color: grey;
			color: white;
		}
	</style>
</head>
<body>

<input type="text" name="name" id="name">
<input type="button" name="b1" id="b1" value="ok">

<br>

<?php
 $query = $this->db->query('SELECT id,name FROM text1');

foreach ($query->result_array() as $row)
{
	?>

	<div style="padding-left: 20px;padding-top: 20px;">
<input type="text"  value="<?php echo $row['id'];?>" class="hi" hidden>
     <?php echo $row['id'];?>
        <?php echo $row['name'];?>
     <!--   <a href="http://localhost/cl/index.php/welcome/edit/<?php echo $row['id'];?>">edit</a> -->
     	<a href="http://localhost/cl/index.php/welcome/edit/<?php echo $row['id'];?>">Edit</a>
        <input type="button" name="b1" id="<?php echo $row['id'];?>" class="d" value="Del">

        <br>
    </div>
<?php       
}
      ?>
    
   <br>
<a href="http://localhost/cl/">Back</a>
</body>

<script>
    $(document).ready(function(){
    	 $("#b1").on("click",function(){
    	 	 var name = $('#name').val();
             $.ajax({
        type: 'POST',
        url: 'http://localhost/cl/index.php/welcome/c/',
         data: { name: name },
      
        success: function(data) {
        	//alert(name);
        	 location.reload();

        }

    	 });
    	});

    	 
    	  $(".d").on("click",function(){
    	  	 if (confirm("Are you sure!")) {
    	 	 var name = $(this).attr('id');
             $.ajax({
        type: 'POST',
        url: 'http://localhost/cl/index.php/welcome/d/',
         data: { name: name },
      
        success: function(data) {
        	//alert(name);
        	 location.reload();

        }

    	 });
         }
    	});


    	});
    </script>
</html>