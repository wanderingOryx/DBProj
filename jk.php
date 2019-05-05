<!DOCTYPE html>
<?php include'header.html';
?>
<html>
<head>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<style>
.box{
width: 100%;    text-align:center;
}
</style>
<body>
<br/>
<center>
<h1 style="" >Find a Place</h1>
<input type="radio" name="target" value="Place" checked="checked"> Places
<input type="radio" name="target" value="Owner"> Owners
<input type="radio" name="target" value="Customer"> Clients
<br/>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
  <h2>PHP - Jquery Datatables Example</h2>
  <table id="my-example">
    <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Status</th>
      </tr>
    </thead>
  </table>
</div>

</body>

<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "pro.php",
        "aoColumns": [
              { mData: 'cID' } ,
              { mData: 'name' },
              { mData: 'status' }
            ]
      });  
  });
</script>
</html>
