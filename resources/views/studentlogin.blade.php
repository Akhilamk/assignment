<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
    <br>
    <form action="{{url('studdata')}}" method="post" align="center"  name="myform" onsubmit="return login()" style="border: 3px solid #665e5e; width: 70%;" >
        @csrf
        <h3><u style="color: blue;"> ๐ณ๐๐๐๐ ๐ฏ๐๐๐ </u></h3><br>
        <label for="">๐๐ด๐ฆ๐ณ๐๐ข๐ฎ๐ฆ</label>&nbsp;
        <input type="text"  name="n1" id="name" placeholder="๐๐๐๐๐๐๐๐" style="border-radius: 3px;"><br><br>
        <label for="">๐๐ข๐ด๐ด๐๐ฐ๐ณ๐ฅ</label>&nbsp;
        <input type="password" name="n2" id="pwd" placeholder="๐๐๐๐๐๐๐๐" style="border-radius: 3px;"><br><br>
        <button class="btn btn-success"  style="color: rgb(18, 18, 78);">๐๐จ๐ ๐ข๐ง </button>
        <p style="color: red">{{session('errmsg')}}</p>

    </form>
</body>
</html>
<script>
function login(){
       
    rt=true
    varย username = ย document.getElementById("name").value;
    if(username==""){
        alert("Enter the Username!")
        document.forms["myform"]["n1"].focus
        return false
        
    }
    varย password = ย document.getElementById("pwd").value;
    if(password==""){
        alert("Enter Your Password!")
        document.forms["myform"]["n2"].focus
        return false
    }
    else if(password.length < 6){
        alert("Password must be at least 6 characters long")
        return false

                                
    }
    return true
}

</script>
