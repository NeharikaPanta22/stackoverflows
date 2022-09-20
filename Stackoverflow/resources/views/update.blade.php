<html>
<head>
    <title>Create</title>
</head>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}"
      enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$stackoverflow->id}}">
    <label>Name:</label>
    <input type="text" name="name" value="{{$stackoverflow->name}}" required>
    <label>Address:</label>
    <input type="text" name="address" value="{{$stackoverflow->address}}" required>
    <label>Age:</label>
    <input type="number" name="age" value="{{$stackoverflow->age}}"required>
    <label>DOB:</label>
    <input type="date" name="dob" value="{{$stackoverflow->dob}}"required>
    <label>Image:</label>
</form>

</body>
</html>
