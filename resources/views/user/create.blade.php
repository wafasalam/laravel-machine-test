<!DOCTYPE html>
<head>
<body>
<form action="{{url('user/store')}}" method="post">{{csrf_field()}}
<fieldset>
<label>Name:</label>
<input type="text" name="name"><br>

<label>FK_department:</label>
<select name="dept">
<option>choose</option>
@foreach($department as $dp)
<option value="{{$dp->Name}}">{{$dp->Name}}</option>
 @endforeach
</select>


<label>FK_designation:</label>
<select name="desg">
<option>choose</option>
@foreach($designation as $ds)
<option value="{{$ds->Name}}">{{$ds->Name}}</option>
 @endforeach
</select>


<label>phone_number:</label>
<input type="text" name="number"><br><br>

<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
</fieldset>
</form>
</head>
</body>
</html>





