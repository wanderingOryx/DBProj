<!DOCTYPE ht`ml>
<?php include'header.html';
    ?>
<html>
<head>
<style>
.box{
width: 100%;    text-align:center;
}
</style>
<body>
<br/>
<center>
<h1 id = "chang0" style="" >Find a Place</h1>
<input type="radio" name="target" value="Place" checked="unchecked" onclick="showPlace();"> Places
<input type="radio" name="target" value="Owner" onclick="showOwners();"> Owners
<input type="radio" name="target" value="Customer" onclick="showCustomer();"> Clients
<br/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
<h2>PHP - Jquery Datatables Example</h2>
<h3> Select User Type</h3>
<input type="radio" name="target" value="ShowUser" checked="unchecked" onclick="showUser();"> User
<input type="radio" name="target" value="ShowAdmin" onclick="showAdmin();"> Admin
<div id="showHide">

</div>
<table id="my-example">
<thead>
<tr>
<th id="id"> </th>
<th id="name">  </th>
<th id="status"> </th>
</tr>
</thead>
</table>
</div>

</body>
<script type="text/javascript">

 
 function showUser(){
 
 document.getElementById("showHide").innerHTML = "";
 
 }
 
 function showAdmin(){
     document.getElementById("showHide").innerHTML = '<input type="radio" name="target" value="Show Registers" checked="unchecked" onclick="showRegisters();"> Show Registers<input type="radio" name="target" value="Show Chooses" onclick="showChooses();"> Show Chooses <input type="radio" name="target" value="Show Consults" onclick="showConsult();"> Show Consults';
 }
function showConsult(){
    document.getElementById("chang0").innerHTML = "Showing Client Decision";
    document.getElementById("id").innerHTML = "Client ID";
    document.getElementById("name").innerHTML = "Owner ID";
    document.getElementById("status").innerHTML = "Owner ID(place holder)";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "con.php",
                                                 "aoColumns": [
                                                 { mData: 'cID' } ,
                                                 { mData: 'oID' },
                                                 { mData: 'oID'}
                                                 ]
                                                 });
                      });
}
function showChooses(){
    document.getElementById("chang0").innerHTML = "Showing Client Decision";
    document.getElementById("id").innerHTML = "Client ID";
    document.getElementById("name").innerHTML = "Place ID";
    document.getElementById("status").innerHTML = "Client Choice";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "cos.php",
                                                 "aoColumns": [
                                                 { mData: 'cID' } ,
                                                 { mData: 'pID' },
                                                 { mData: 'decision' }
                                                 ]
                                                 });
                      });
}
function showRegisters(){
    document.getElementById("chang0").innerHTML = "Showing Register List";
    document.getElementById("id").innerHTML = "Customer ID";
    document.getElementById("name").innerHTML = "Owner ID";
    document.getElementById("status").innerHTML = "Place ID";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "reg.php",
                                                 "aoColumns": [
                                                 { mData: 'cID' } ,
                                                 { mData: 'oID' },
                                                 { mData: 'pID' }
                                                 ]
                                                 });
                      });
}

function showPlace(){
    document.getElementById("chang0").innerHTML = "Showing Clients";
    document.getElementById("id").innerHTML = "Location";
    document.getElementById("name").innerHTML = "Accomodations";
    document.getElementById("status").innerHTML = "rating";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "place.php",
                                                 "aoColumns": [
                                                 { mData: 'location' } ,
                                                 { mData: 'accomodation' },
                                                 { mData: 'rating' }
                                                 ]
                                                 });
                      });
}
function showOwners(){
    document.getElementById("chang0").innerHTML = "Showing Owners";
    document.getElementById("id").innerHTML = "name";
    document.getElementById("name").innerHTML = "email";
    document.getElementById("status").innerHTML = "phone";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "own.php",
                                                 "aoColumns": [
                                                 { mData: 'name' } ,
                                                 { mData: 'email' },
                                                 { mData: 'phone' }
                                                 ]
                                                 });
                      });
}
function showCustomer(){
    document.getElementById("chang0").innerHTML = "Showing Clients";
    document.getElementById("id").innerHTML = "Name";
    document.getElementById("name").innerHTML = "Number of people";
    document.getElementById("status").innerHTML = "Phone";
    $(document).ready(function() {
                      $('#my-example').dataTable({
                                                 "destroy" : true,
                                                 "bProcessing": true,
                                                 "sAjaxSource": "cus.php",
                                                 "aoColumns": [
                                                 { mData: 'name' } ,
                                                 { mData: 'numPeople' },
                                                 { mData: 'phone' }
                                                 ]
                                                 });
                      });
}
</script>
</html>

