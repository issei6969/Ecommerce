<?php


include "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <div class="box1">
        <!-- <p id="name" style="margin-top: 0px;padding-bottom: 70px;">FLIPMART</p> -->
        <div class="namecon" style="margin-top: 100px;">
        <h2><p style="text-shadow: 100px;">This project was developed by</p>
        <b><p>1)SHUBHAM SAWANT</p>
        <p>2)DEVENSH SHUKLA</p>
        <p>3)SAILEE ZODAPE</p>
        <p>4)SHIVAM SINGH</p><b></h2>
        <p style='color:black;'> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2>Students of Pillai College of Engineering</h2>
        </div>
    </div>
    <div class="box2">
        <h2 class="hed">Video Demonstartion</h2>
        <div class="video" >
            <video width="720" height="400" id="myVideo" controls disablePictureInPicture controlsList="nodownload">
              <source id="myVideo" src="videoplayback.mp4" type="video/mp4">
              <source id="myVideo" src="videoplayback.ogg" type="video/ogg">
              Your browser does not support the video tag.
            </video><br><br>
            <button onclick="playVid()" type="button">Play Video</button>
            <button style="margin-left:550px;" onclick="pauseVid()" type="button">Pause Video</button>
            <p style="margin-left: 300px;">Video Credits: <a target="_blank"
                href="https://youtu.be/ia7006AzOUY">Mansa Karimi</a></p>
        </div><br>
    </div>
    <div class="box3">
        <div class="fraud">
        <h1 style="text-align: center;padding-left: 100px;padding-top: 50px;">This is about Online Frauds regarding shopping</h1>
        <P style="margin-top: 110px;border:10px">1)Research retailers online to make sure they’re legitimate.<br>
            2)Make sure the website is secure.<br>
            3)Know your rights and the company’s returns policy.<br>
            4)Don’t use public Wi-Fi. Your standard data connection is more secure.<br>
            5)Be smart. If a deal looks too good to be true, it probably is.<br></P>
    </div>
    </div>

    <script>
        var x = document.getElementById("myVideo");
    
        var vid = document.getElementById("myVideo");
        window.onload(vid.controls = false);
    
        function playVid() {
          vid.play();
        }
    
        function pauseVid() {
          vid.pause();
        }
    
    
        function openFullscreen() {
          if (vid.requestFullscreen) {
            vid.requestFullscreen();
          } else if (vid.mozRequestFullScreen) {
            /* Firefox */
            vid.mozRequestFullScreen();
          } else if (vid.webkitRequestFullscreen) {
            /* Chrome, Safari & Opera */
            vid.webkitRequestFullscreen();
          } else if (vid.msRequestFullscreen) {
            /* IE/Edge */
            vid.msRequestFullscreen();
          }
        }
      </script>
</body>
<?php



include "footer.php";
?>
</html>


