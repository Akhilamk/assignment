<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="2" width="50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Conatct</th>
            <th>Email</th>
            <th>Username<th>
        </tr>
        @foreach($data as $x)
        <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->name}}</td>
            <td>{{$x->contact}}</td>
            <td>{{$x->email}}</td>
            <td>{{$x->username}}</td>
            <td><a href="{{url('inact')}}"><button>Inactivate</button></a><td>
        </tr>
        @endforeach
           
    </table>
</body>
</html>