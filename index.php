<!DOCTYPE html>
<html>
    <style>
		body {
			background-image: url('0007.jpg');
			margin: 50px;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
		}
        .container {
        position: relative;
        text-align: center;
        color: white;
        }
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        .tab {
        overflow: hidden;
        background-color: #505050;
        }
        @font-face {

            font-family: 'SF';
            src: url('manrope.ttf');

        }
        @font-face {

        font-family: 'SF2';
        src: url('gidole.ttf');

        }
        @font-face {

        font-family: 'Md';
        src: url('carta.ttf');

        }
        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: none;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }
        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
		background-color: #000000;
        }

        /* Style the tab content */
        .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
		border-top: none;
		opacity: .8;
        }
        .tabcontent {
        animation: fadeEffect 2s; /* Fading effect takes 1 second */
        }
        .hometrt {
            animation: hometr 0.5s;
        }
        .lawstrt {
            animation: lawstr 0.5s;
        }
        .color-change {
        border-radius: 5px;
        font-size: 20px;
        padding: 14px 80px;
        cursor: pointer;
        color: #fff;
        background-color: #00A6FF;
        font-size: 1.5rem;
        font-family: 'Roboto';
        font-weight: 100;
        border: 1px solid #fff;
        box-shadow: 2px 2px 5px #AFE9FF;
        transition-duration: 0.5s;
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        .color-change:hover {
        color: #006398;
        border: 1px solid #006398;
        box-shadow: 2px 2px 20px #AFE9FF;
        }
        /* Go from zero to full opacity */
        @keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: .8;}
        }
        @keyframs hometr {
            from {margin: 30px;}
            to {margin: 0px;}
        }
        @keyframs lawstr {
            from {margin: 0px;}
            to {margin: 30px;}
        }
    </style>
    <title>Official Monitor</title>
	<body id="body">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Tokyo'); openBig(); otherTokyos();" id="default" style="font-family: SF; font-size: 30px; color: white; font-weight: 400;" src="logo.png">Home</button>
            <button class="tablinks" onclick="openCity(event, 'London'); openSmall();" style="font-family: SF; font-size: 30px; color: white; font-weight: 400;">News</button>
            <button class="tablinks" onclick="openCity(event, 'Paris'); openSmall();" style="font-family: SF; font-size: 30px; color: white; font-weight: 400;">Laws</button>
        </div>
          
        <!-- Tab content -->
        <div id="Tokyo" class="tabcontent" style="opacity: 1; background-color: white; animation: none;">
        <div id="tokyobox" style="margin-left: 350px; margin-right: 350px;">
            
            <img src="logo.png" style="height: 100px;"> <p style="font-family: Md; font-size: 25px;">The Republic's Official Monitor</p>
            <p style="font-size: 50px;"></p>
            <p style="font-family: SF; font-size: 50px; text-decoration: underline; font-weight: bold;">About us</p>
            <p style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">We are a discord political simulation server made of politics enthusiasts. You can find laws passed by parlament in the laws section, those laws were passed after debating, voting, making up comitees, everything a real republic would host. We try to keep our simulation as fun and engaging as possible, to do this we divide people into parties with specific political views. No party suits you? Make your own, if you got enough support we'll make it happen</p>
            
            <p style="font-size: 50px;"> </p>
            <div class="container">
                <img src="justice.png" width=100%>
                <p style="font-family: SF; font-size: 25px; background-color: black; color: white;" class="centered">Help fight corruption. Make an informed choice when voting. Find party info below.</p>
                <button class="color-change" onclick="openCity(event, 'Bucharest')" style="font-family: SF2;">Party Info</button>

            </div>
        </div>
        </div>
        <div id="Tokyo2" class="tabcontent" style="opacity: 0; padding: 5px 10px; background-color: white; animation: none;">
            <p>test2</p>
        </div>
        <div id="Tokyo3" class="tabcontent" style="opacity: 1; padding: 5px 10px; background-color: white; animation: none;">
            <p>test3</p>

            <p style="font-family: SF; font-size: 20px; color: maroon;">Disclaimer: Every document on this page is purely fictional and has no legal power in any country, any mention of a real country is purely coincidental and is in no way intended to reference a real country.</p>
        </div>
        <div id="London" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 45px;">The Republic</p>
            <p style="font-family: SF; font-size: 40px;">Official news publication of The Republic political Discord Server</p>
            
            <?php
                $files = glob('news/*');
                usort($files, function($a, $b) {
                    return filemtime($b) - filemtime($a);
                });
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<a style="font-family: SF; font-size: 20px; color: black; text-decoration: none;" href="'.$file.'">• '.pathinfo($file, PATHINFO_FILENAME).'</a>';
                        echo'<p> </p>';
                    }
                }
            ?>
        </div>
          
        <div id="Paris" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 45px;">The Republic</p>
            <p style="font-family: SF; font-size: 40px;">Official Monitor of Laws currently acting in the republic</p>
            <?php
                $files = glob('laws/*');
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<p id="'.$file.'" style="font-family: SF; font-size: 20px; color: black; text-decoration: none; cursor: pointer;">• '.pathinfo($file, PATHINFO_FILENAME).'</p>';
                        echo'<p> </p>';
                    }
                }
            ?>
            <embed style="display: none; overflow: auto;" id="lawspdf" src="." height=1500px width=100% type="application/pdf"></iframe>
        </div>
    </body>
    <script>
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
            document.getElementById("tokyobox").style.marginLeft = "0";
            document.getElementById("tokyobox").style.marginRight = "0";
        }
        function otherTokyos(){
            document.getElementById('Tokyo2').style.display = "block";
            document.getElementById('Tokyo3').style.display = "block";
        }
        function openSmall(){
            document.getElementById('body').style.animation = "lawstr 10s"
            document.getElementById('body').style.margin = "50px";
        }
        function openBig(){
            document.getElementById('body').style.animation = "hometr 10s"
            document.getElementById('body').style.margin = "0px";
        }
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
        document.getElementById("default").click();
        <?php
            $files = glob('laws/*');
            foreach($files as $file){
                if($file != '.' and $file != '..'){
                    echo'document.getElementById("'.$file.'").onclick = function(event){'."\n";
                    echo'  if(document.getElementById("lawspdf").src === "'.$file.'") document.getElementById("lawspdf").style.display = "none";'."\n";
                    echo'  document.getElementById("lawspdf").src = "'.$file.'#toolbar=0&scrollbar=0";'."\n";
                    echo'  document.getElementById("lawspdf").style.display = "block";'."\n";
                    #echo'  document.getElementById("lawspdf").style.height = "auto";'."\n";
                    echo'}'."\n";
                }
            }
        ?>
    </script>
</html>
