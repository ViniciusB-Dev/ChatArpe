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

    #wrapper{
        max-width:900px;
        min-height: 500px;
        display:flex;
        margin: auto;
        color: white;
    }


    #left_painnel{
        min-height: 500px;
        background-color: #27344b;
        flex: 1;
    }

    #right_painnel{
        min-height: 500px;
        flex: 4;
    }

    #header{
        background-color: #485b6c;
        height: 70px;
        font-size: 40px;
        text-align:center;
        font-family: headFont;
    }

    #inner_left_pannel{
        background-color: #383e48;
        flex: 1;
        min-height: 430px;
    }
    #inner_right_pannel{
        background-color: #f2f7f8;
        flex: 2;
        min-height: 430px;
    }

    </style>

 
</head>
<body>
    <div id="wrapper">
        
        <div id="left_painnel">

        </div>
        <div id="right_painnel">
            <div id="header">My Chat</div>
            <div id="container" style="display: flex;">

                <div id="inner_left_pannel"></div>
                <div id="inner_right_pannel"></div>

            </div>
        </div>
    </div>
</body>
</html>