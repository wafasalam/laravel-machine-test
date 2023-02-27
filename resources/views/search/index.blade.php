<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2><b>SEARCH</b></h2>
<input id="myInput" type="text" size="50" placeholder="Search name/department/designation">
<br><br>

<table>
  <tbody id="myTable">
  
  <tr>
  @foreach ($users as $use )
      <td>{{$use->Name}}</td>
  @endforeach
    </tr>

  <tr>
   @foreach ($users as $use )
      <td>{{$use->FK_department}}</td>
  @endforeach
   </tr>

  <tr>
  @foreach ($users as $use )
      <td>{{$use->FK_designation}}</td>
  @endforeach
     </tr>

  </tbody>
</table>
</body>
</html>































































{{-- <html>
<body>
<form action="{{urL('search-get')}}" method="get">
<div class="col-xl-12 col-lg-8">
<div class="form-group search-input-area input-icon-keywords">
<input placeholder="search name/designation/department" value="" name="user" size="50" type="text">

 <button type="submit" onclick="{{'search-get'}}"  class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</button>

</div>

</div>


</form>
</body>
</html> --}}
