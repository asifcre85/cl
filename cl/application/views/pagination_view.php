<html>
<head>
<title> pagination</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
<div id="content">
<h3 id='form_head'> Pagination Example </h3><br/>
<hr>
<div id="form_input">
<?php

foreach ($results as $data) {
 echo $data->id;
echo $data->name;
echo $data->email;
echo $data->mobile_number;
echo $data->country;
}
?>
</div>
<div id="pagination">
<ul class="tsc_pagination">

<!-- Show pagination links -->
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} ?>

<br>
<a href="http://localhost/cl/">&nbsp;&nbsp;&nbsp;&nbsp;Back</a>
</div>
</div>
</div>

</body>
</html>