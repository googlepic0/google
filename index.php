<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-color: blueviolet;

}
#form{
    background-color: white;
    width: 25%;
    margin:120px auto;
    padding: 50px;
    box-shadow: 10px 10px 5px rgb(82, 11, 77);
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
}
#btn{
    color: white;
    background-color: blueviolet;
    padding: 10px;
    font-size: large;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

@media screen and (max-width:700px;){
    #form{
        width: 65%;
        padding: 40px;
    }
}






    </style>
</head>
<body>
     <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="retrun isvalid()" method="POST">
            <label>Username:</label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password:</label>
            <input type="password" id="pass"  name="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
            </form>
     </div>

     <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length=="" $$ pass.length==""){
                alert("Username and password field is empty!!!");
                return false    
            }
            else{
                if(user.length==""){
                alert("Username is empty!!!");
                return false    
            }
            if(pass.length==""){
                alert("Password is empty!!!");
                return false    
            }
                 

        }

        }
    
    
     </script>
     
</body>
</html>

        