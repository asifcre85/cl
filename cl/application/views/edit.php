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
	
</head>
<body>


<!-- <script>$idd= $('.ids').val();
</script> -->
<?php $ids=$this->uri->segment(3);?>
<input type="text" hidden name="ids" class="ids" value="<?php echo $ids;?>">
<?php
 $query = $this->db->query("SELECT id,name FROM text1 where id='$ids'");
$row = $query->row();
?>

<input type="text" value="<?php echo $row->id;?>" class="id1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value="<?php echo $row->name;?>" class="name1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="b1" id="e" value="ok">
<a href="http://localhost/cl/">back</a>
    

</body>

<script>
    $(document).ready(function(){
    	
    	 $("#e").on("click",function(){
    	 	 var name1 = $('.name1').val();
         var id1= $('.ids').val();
             $.ajax({
        type: 'POST',
        url: 'http://localhost/cl/index.php/welcome/u/',
         data: { name1: name1,id1: id1 },
      
        success: function(data) {
        	//alert(name);
        	 location.reload();

        }

    	 });
    	});

    	 

    	});
    </script>
</html>