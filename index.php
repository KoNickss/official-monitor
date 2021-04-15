<!DOCTYPE html>
<html>
    <style>
		body {
			background-image: url('0007.jpg');
			margin: 20px;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  			background-size: cover;
		}
        .tab {
        overflow: hidden;
        border: 1px solid #222222;
        background-color: #505050;
        }
        @font-face {

            font-family: 'SF';
            src: url('/gidole.ttf');

        }
        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
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
        }
        .tabcontent {
        animation: fadeEffect 1s; /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
        from {opacity: 0;}
        to {opacity: 1;}
        }
    </style>
    <title>Official Monitor</title>
	<body>
		<p></p>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')" id="default" style="font-family: SF; font-size: 30px; color: white">News</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')" style="font-family: SF; font-size: 30px; color: white;">Laws</button>
        </div>
          
        <!-- Tab content -->
        <div id="London" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 45px;">The Republic of Romania</p>
            <p style="font-family: SF; font-size: 40px;">Official news publication of the Romanian Republic Discord Server</p>
            
            <?php
                $files = glob('news/*');
                usort($files, function($a, $b) {
                    return filemtime($b) - filemtime($a);
                });
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<a href="./'.$file.'" style="font-family: SF; font-size: 20px; color: black; text-decoration: none;">• '.pathinfo($file, PATHINFO_FILENAME).'</a>';
                        echo'<p> </p>';
                    }
                }
            ?>
        </div>
          
        <div id="Paris" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 45px;">The Republic of Romania</p>
            <p style="font-family: SF; font-size: 40px;">Official Monitor of Laws currently acting in the republic</p>
            <?php
                $files = glob('laws/*');
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<a href="./'.$file.'" style="font-family: SF; font-size: 20px; color: black; text-decoration: none;">• '.substr($file, 5).'</a>';
                        echo'<p> </p>';
                    }
                }
            ?>
        </div>
    </body>
    <script>
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
    </script>
</html>
