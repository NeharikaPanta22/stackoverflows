<html>
<head></head>
<body>
<a href="{{url('/create')}}"><button>Create</button></a>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>DOB</th>
        <th>Image</th>
    </tr>
    @foreach($stackoverflows as $stackoverflow)
        <tr>
            <td>{{$stackoverflow->name}}</td>
            <td>{{$stackoverflow->address}}</td>
            <td>{{$stackoverflow->age}}</td>
            <td>{{$stackoverflow->DOB}}</td>
            <td>{{$stackoverflow->Image}}</td>
            <td><img src="{{asset('storage/image/' .$stackoverflow->image)}}"/></td>
            <td><a href="{{url('/edit.'.$stackoverflow->id)}}">Edit</a></td>;
        </tr>
    @endforeach
</table>
</body>
</html>
