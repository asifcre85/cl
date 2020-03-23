<!DOCTYPE html>
<html lang="en">
<head>
<title>Asif</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/png" href="https://webdamn.com/wp-content/themes/v2/webdamn.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style type="text/css">
#pagination {
	display: inline-block;
	padding-left: 0;
	border-radius: 4px;
}	
#pagination>a, #pagination>strong {
	position: relative;
	float: left;
	padding: 6px 12px;
	margin-left: -1px;
	line-height: 1.42857143;
	color: #337ab7;
	text-decoration: none;
	background-color: #fff;
	border: 1px solid #ddd;
}
</style>

<style>

.tawk-chatbox {
    position:fixed;
    right:0;
    bottom:0;
  z-index:2000000000;
}

</style>
</head>

<!-- <li><a href="javascript:void(Tawk_API.popup())"><i class="fa fa-chat"></i>Live chat</a></li> -->
<div class="container">
	<!-- <input type="text" placeholder="search" id="search">
	<input type="button" value="search" id="search1"> -->
	<!-- <a href="http://localhost/cl/">Back</a> -->
<br>
<a href="http://localhost/cl/index.php/welcome/">Crud</a>&nbsp;&nbsp;&nbsp;
<a href="http://localhost/cl/index.php/upload/">Upload</a>&nbsp;&nbsp;&nbsp;
<a href="http://localhost/cl/index.php/welcome/datatable">Datatable</a>&nbsp;&nbsp;&nbsp;
<a href="http://localhost/cl/index.php/AddMoreController">Add/Remove</a>
<br>
	<div class="row ">
		<table id='employeeList' class="table table-bordered">
			<thead>
			<tr>
				<th>EmpId</th>
				<!-- <th>Name</th> -->
				<th>Age</th>
				<th>Skills</th>
				<th>Designation</th>
				<th>Address</th>
			</tr>
			</thead>
			<tbody></tbody>
		</table>

		<table id='employeeList1' class="table table-bordered" hidden="">

			<thead>
			<tr>
				<th>EmpId</th>
				<th>Name</th>
				<!-- <th>Age</th>
				<th>Skills</th>
				<th>Designation</th>
				<th>Address</th> -->
			</tr>
			</thead>
			<tbody>
				
					
					<!-- <?php
					//$variable = curPageURL();
$variable=$_GET['h1'];
				
$variable = mysql_real_escape_string($variable);
 $query = $this->db->query("SELECT * FROM developers WHERE name LIKE '%{$variable}%';");

foreach ($query->result_array() as $row)
{
	?>
				<tr>
					<td> <?php echo $row['id'];?></td>
					<td> <?php echo $row['name'];?></td>
					<input type="hidden" id="h1" name="h1">
				</tr>
			</tbody>
			<?php       
}
      ?> -->
		</table>
		<div id='pagination'></div>	
	</div>
</div>

<!-- <script type="text/JavaScript" src="http://campusabroad.co.in/nexshop/themes/grocery/js/state.js"></script> -->
	<!--Start of Tawk.to Script-->


<script type='text/javascript'>
$(document).ready(function() {
	createPagination(0);
	$('#pagination').on('click','a',function(e){
		e.preventDefault(); 
		var pageNum = $(this).attr('data-ci-pagination-page');
		createPagination(pageNum);
	});
	function createPagination(pageNum){
		$.ajax({
			url: 'http://localhost/cl/index.php/Employee/loadData/'+pageNum,
			type: 'get',
			dataType: 'json',
			success: function(responseData){
				$('#pagination').html(responseData.pagination);
				paginationData(responseData.empData);
			}
		});
	}
	function paginationData(data) {
		$('#employeeList tbody').empty();
		for(emp in data){
			var empRow = "<tr>";
			empRow += "<td>"+ data[emp].id +"</td>";
			//empRow += "<td>"+ data[emp].name +"</td>";
			empRow += "<td>"+ data[emp].age +"</td>"
			empRow += "<td>"+ data[emp].skills +"</td>"
			empRow += "<td>"+ data[emp].designation +"</td>"
			empRow += "<td>"+ data[emp].address +"</td>";
			empRow += "</tr>";
			$('#employeeList tbody').append(empRow);					
		}
	}
});

$( "#search1" ).click(function() {
	 var search = $('#search').val();
             $.ajax({
        type: 'POST',
        url: 'http://localhost/cl/index.php/Employee/loadData1/',
         data: { search: search },
      
        success: function(data) {
        	if(search!=''){
        	// $('#employeeList').hide();
        	// $('#employeeList1').show();
        	// $('#h1').val(search);
        }
        }

    	 });
 
});
</script>


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58dba609f7bbaa72709c30ab/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<script>

Tawk_API.onLoad = function(){

    var pageStatus = Tawk_API.getStatus();

    if(pageStatus === 'online'){

      $('body').append('<a href="javascript:void(Tawk_API.toggle())" class="tawk-chatbox hidden-xs hidden-sm" id="chati"><img src="http://campusabroad.co.in/nexshop/themes/grocery/images/campus_online.png" width:100%></a>');

    }else if(pageStatus === 'away'){

        //do something for away
		

    }else{

         $('body').append('<a href="javascript:void(Tawk_API.toggle())" class="tawk-chatbox hidden-xs hidden-sm" id="chati"><img src="http://campusabroad.co.in/nexshop/themes/grocery/images/campus-offline.png" width:100%></a>');
         
		  
    }
	

};

Tawk_API.onStatusChange = function(status){
    //place your code here
	var pageStatus = Tawk_API.getStatus();

    if(pageStatus === 'online'){

      $('body').append('<a href="javascript:void(Tawk_API.toggle())" class="tawk-chatbox hidden-xs hidden-sm" id="chati"><img src="http://campusabroad.co.in/nexshop/themes/grocery/images/campus_online.png" width:100%></a>');

    }else if(pageStatus === 'away'){

        //do something for away
		

    }else{

         $('body').append('<a href="javascript:void(Tawk_API.toggle())" class="tawk-chatbox hidden-xs hidden-sm" id="chati"><img src="http://campusabroad.co.in/nexshop/themes/grocery/images/campus-offline.png" width:100%></a>');
         
		  
    }
};

Tawk_API = Tawk_API || {};
	Tawk_API.onChatMaximized = function(){
    //place your code here
	
	$(".tawk-chatbox").css("z-index", "10000");
};
Tawk_API = Tawk_API || {};
Tawk_API.onChatMinimized = function(){
    $(".tawk-chatbox").css("z-index", "2000000000");
};
</script>