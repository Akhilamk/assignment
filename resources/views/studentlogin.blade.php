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
        <h3><u style="color: blue;"> 𝑳𝒐𝒈𝒊𝒏 𝑯𝒆𝒓𝒆 </u></h3><br>
        <label for="">𝘜𝘴𝘦𝘳𝘕𝘢𝘮𝘦</label>&nbsp;
        <input type="text"  name="n1" id="name" placeholder="𝒖𝒔𝒆𝒓𝒏𝒂𝒎𝒆" style="border-radius: 3px;"><br><br>
        <label for="">𝘗𝘢𝘴𝘴𝘞𝘰𝘳𝘥</label>&nbsp;
        <input type="password" name="n2" id="pwd" placeholder="𝒑𝒂𝒔𝒔𝒘𝒐𝒓𝒅" style="border-radius: 3px;"><br><br>
        <button class="btn btn-success"  style="color: rgb(18, 18, 78);">𝐋𝐨𝐠𝐢𝐧 </button>
        <p style="color: red">{{session('errmsg')}}</p>

    </form>
</body>
</html>
<script>
function login(){
       
    rt=true
    var username =  document.getElementById("name").value;
    if(username==""){
        alert("Enter the Username!")
        document.forms["myform"]["n1"].focus
        return false
        
    }
    var password =  document.getElementById("pwd").value;
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
