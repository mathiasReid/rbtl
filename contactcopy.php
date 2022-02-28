<?php


if($_POST["message"]) {


mail("mathias.reidak@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html>
<head>

<style>

    .flexbody {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

        .header {
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
            height: auto;
            Padding-top: 50px;
            Padding-bottom: 50px;
        }

        .header-flex {
            max-width:55%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .header-horiz {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top:25px;
            height: 2vw;
        }

        .header-vert {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-link {
            font-family: 'Courier New', Courier, monospace;
            color: black;
            text-decoration: none;
            transition: 0.25s;
            font-size: 1.5vw;
        }

        .nav-link:hover {
            font-family: 'Courier New', Courier, monospace;
            color: rgb(54, 179, 211);
            text-decoration: none;
            transition: 0.25s;
            font-size: 1.7vw;
        }

        .nav-link-active {
            color: rgb(54, 179, 211);
            font-size: 1.7vw;
        }

        .header-text {
            margin-right: 2.5vw;
        }

        .logo {
            height: 75px;
            position: absolute;
            padding-bottom: 50px;
        }



</style>

</head>

<body>

<div class="header">

    <div class="header-flex">   

        <div class="header-vert">
    
        <a href="home.html"><img style="height:50px" src="https://github.com/mathiasReid/rbtl/blob/main/images/logo.png?raw=true"></img></a>  
    
        <div class="header-horiz">
             
            <a class="nav-link" href="home.html"><p class="header-text">Home</p></a>
            <a class="nav-link" href="photos.html"><p class="header-text">Photo</p></a>
            <a class="nav-link" href="videos.html"><p class="header-text">Video</p></a>
            <a class="nav-link" href="contact.html"><p class="header-text nav-link-active">Contact</p></a>
    
        </div>
    
        </div>
    </div> 
</div>

    <div class="flexbody">

        <form action=”mailto:contact@yourdomain.com”


method=”POST”


enctype=”multipart/form-data”


name=”EmailForm”>


Name:<br>


<input type=”text” size=”19″ name=”ContactName”><br><br>

Email:<br>

<input type=”text” size=”19″ name=”EmailAddress”><br><br>

Message:<br> <textarea name=”ContactCommentt” rows=”6″ cols=”20″>


</textarea><br><br> <input type=”submit” value=”Submit”> </form>

    </div>
</body>
</html>