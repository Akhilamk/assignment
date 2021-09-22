<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div >
    <form action="{{url('student')}}" method="post" name="studreg" onsubmit="return registration()" class="container" style="border: solid; width: 600px;background-color: rgb(231, 234, 238);">
    @csrf
        <h4 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" align="center"> <u>Student Registration Form</u></h4><br>
        <table cellpadding="5">
            <tr>
                <td style="width: 40%;">
                    <label for="first Name"> Name :</label>
                    <input type="text" name="n1" id="name" placeholder="Name" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name"> Contact :</label>
                    <input type="text" name="n2" id="cont" placeholder="Contact" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name"> Email :</label>
                    <input type="text" name="n3" id="mail" placeholder="Email" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name"> Username:</label>
                    <input type="text" name="n4" id="use" placeholder="Username" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name">Password:</label>
                    <input type="text" name="n5"  id="pwd" placeholder="Password" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
            <tr>
                <td style="width: 40%;">
                    <label for="first Name">Confirm Password:</label>
                    <input type="text" name="n6"  id="pwd" placeholder="Confirm Password" style="width: 40%;">
                    <p id="firsterror"></p>
                </td>
            </tr>
           
               
            <tr>
                <td><button id="register" class="btn btn-success">Register</button></td>
               
            </tr>
        </table>
        <p style="color: green">{{session('message')}}</p>
    </form>
    <script>
        function registration() {
               ////////////name validation/////////////
               rt = true;
                name = document.forms["studreg"]["n1"].value
               if (name=="") {
                   alert("Enter name")
                   document.forms["studreg"]["n1"].focus
                   return false;
       
               } else if (/[^a-z]/gi.test(name)) {
                   alert("Enter alphabets only!")
                   document.forms["studreg"]["n1"].focus
                    return false
               }
               //////contact////
               contact=document.forms["studreg"]["n2"].value
               if(contact==""){
                alert("Enter Contact")
                   document.forms["studreg"]["n2"].focus
                   return false;
               }else if (contact.length != 10) {
                alert("Incorrect Number")
                document.forms["studreg"]["n2"].focus
             return false
               }
               else if (isNaN(contact)) {
            alert("*Enter valid Mobile n2") 
            document.forms["studfreg"]["n2"].focus
            return false
               }
               //////email////
               var emailPat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
               var email = document.getElementById('mail').value;
               var matchArray = email.match(emailPat);
        if (email == "") {
            alert("*Enter the Email Id") 
            document.forms["studreg"]["n3"].focus
            return false
        } else if (matchArray == null) {
            alert("*Incorrect Email Id !Enter a valid Email Id")
            document.forms["studreg"]["n3"].focus
            return false
        }/////username ////
        user = document.forms["studreg"]["n4"].value
        if  (user  ==  null  ||  user  ==  "")  {
            alert("*Please Enter the Username!") 
            document.forms["studreg"]["n4"].focus
            return false
        } else if ((user.length < 5) || (user.length > 15)) {
            alert(" *Username must have 5-15 characters");
            document.forms["studreg"]["n4"].focus
            return false

        }/////password ///
        pass1 = document.forms["studreg"]["n5"].value
      
        if (pass1 == "") {
            alert("*Enter the Password")
            document.forms["studreg"]["n5"].focus
            return false
        } else if (pass1.length <= 5 || pass1.length >= 21) {
            document.getElementById('passerror').innerHTML = "*Must contain 6 to 20 characters"
            document.forms["studreg"]["n5"].focus
            return false
        
        }
               return true
           }
       
       </script>
</div>  
</body>
</html>
