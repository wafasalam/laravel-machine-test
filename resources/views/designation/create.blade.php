<!DOCTYPE html>
<head>
<body>
<form action="{{url('designation/store')}}" method="post">{{csrf_field()}}
<fieldset>
<label>Name:</label>
<input type="text" name="name"><br><br>
<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
</fieldset>
</form>
</head>
</body>
</html>