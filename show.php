<?php
include 'http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css';
include 'http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js';

$(document).ready( function () {
    $('#myTable').DataTable();
} );

?>


<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
