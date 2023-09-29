<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Injection | Home</title>
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
        .gg{
            font-size:18px;
            text-align: justify;
            padding:10px;
            line-height: 30px;
            color:#66FF00;
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
            <h1 class="q"><font color="#A52A2A">Rule:</font> <font color="#98FF98"> 
                Read Flag Under => ../flag.txt</font></h1>
            <br><br>
            <p class="t">Command Injection ဖြေပုံဖြေနည်းများအား ကျွမ်းကျင်မှုရရှိစေရန်အတွက်ဖြစ်ပါသည်။</p>
            <br><br>
            <div class="mar">
                <b class="p">
                <marquee behavior="alternate" scrollamount=10>
                    <font color="red">I'm </font>
                    <font color="green">Phyo </font>
                    <font color="blue">Myat </font>
                    <font color="cyan">Han </font>
                    <font color="yellow">[ </font>
                    <font color="red">Luki</font>
                    <font color="white">_</font>
                    <font color="lightgreen">Fox </font>
                    <font color="yellow">]</font>
                </marquee>
                </b>
            </div>
<br><br><br><br>
<h2>What is Command Injection</h2><br>
<div class="gg">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Command injection is an attack in which the goal is 
        execution of arbitrary commands on the host operating system via a vulnerable application. 
        Command injection attacks are possible when an application passes unsafe user supplied data 
        (forms, cookies, HTTP headers etc.) to a system shell. In this attack, the attacker-supplied 
        operating system commands are usually executed with the privileges of the vulnerable application. 
        Command injection attacks are possible largely due to insufficient input validation.
        This attack differs from Code Injection, in that code injection allows the attacker to add 
        their own code that is then executed by the application. In Command Injection, the attacker 
        extends the default functionality of the application, which execute system commands, without 
        the necessity of injecting code.</p>
</div>
            </div>
            <div id="data">
                <ul>
                <img src="assets/DancingBaby.gif" width="130" height="130" alt="trust me" class="logo">
                    <li><a href="lesson/easy.php">Challenge 1</a></li>
                    <li><a href="lesson/medium.php">Challenge 2</a></li>
                    <li><a href="lesson/lesson3.php">Challenge 3</a></li>
                    <li><a href="lesson/lesson4.php">Challenge 4</a></li>
                    <li><a href="lesson/lesson5.php">Challenge 5</a></li>
                    <li><a href="lesson/lesson6.php">Challenge 6</a></li>
                    <li><a href="lesson/lesson7.php">Challenge 7</a></li>
                    <li><a href="lesson/lesson8.php">Challenge 8</a></li>
                    <li><a href="about.php">About Command Injection</a></li>
                    <li><a href="lesson/read.php">Payloads</a></li><br>
                    <embed src="assets/song.mp3" loop="true" autostart="true" width="250" height="50">
                </ul>
            </div>
        </div>
        <div id="footer">Labs by Phyo Myat Han</div>
    </div>
</body>
</html>