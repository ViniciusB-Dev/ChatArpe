<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Chat</title>

    <style type="text/css">

    @font-face{
        font-family: headFont;
        src: url(ui/fonts/Summer-Vibes-OTF.otf);
    }
    @font-face{
        font-family: myFont;
        src: url(ui/fonts/OpenSans-Regular.ttf);
    }

    #wrapper{
        max-width:900px;
        min-height: 500px;
        margin: auto;
        color: green;
        font-family: myFont;
        font-size: 13px;

    }

    form {
        margin: auto;
        padding: 10px;
        width: 100%;
        max-width: 400px;
    }

    input[type=text], input[type=password], input[type=submit]{
        padding: 10px;
        margin: 10px;
        width: 98%;
        border-radius: 5px;
        border: solid 1px grey;
    }

    input[type=submit]{
        width: 103%;
        cursor: pointer;
        background-color: #2b5488;
        color: white;

    }

    input[type=radio]{
        transform: scale(1.2);
        cursor: pointer;
    }

    #header{
        background-color: #485b6c;
        font-size: 40px;
        text-align:center;
        font-family: headFont;
        width: 100%;
        color: white;
    }
    </style>

 
</head>
<body>
    <div id="wrapper">

        <div id="header"> 
            My Chat
            <div style="font-size: 20px; font-family: myFont;">Login</div>
        </div>

        <form action="">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <div style="padding: 10px;">
                <br>Gender:<br>
                <input type="radio" name="gender"> Male<br>
                <input type="radio" name="gender"> Female<br>
            </div>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="text" name="password2" placeholder="Retype Password"><br>
            <input type="submit" value="Sign up" ><br>
        </form>
    </div>
</body>
</html>

<script type="text/javascript">

    function _(element){
        return document.getElementById(element)
    }

    var label = _("label_chat");
    label.addEventListener("click", function(){

        var inner_pannel = _("inner_left_pannel");
        
        var ajax = new XMLHttpRequest();
        ajax.onload = function(){

            if(ajax.status == 200 || ajax.readyState == 4){
                inner_pannel.innerHTML = ajax.responseText;
            }
        }

        ajax.open("POST", "file.php", true);
        ajax.send();
    })
</script>