<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Official Monitor</title>
	<body id="body" style="scroll-behavior: smooth;">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Tokyo'); openBig(); otherTokyos();" id="default" style="font-family: SF2; font-size: 30px; color: white; font-weight: 400;" src="logo.png">Home</button>
            <button class="tablinks" onclick="openCity(event, 'London'); openSmall();" style="font-family: SF2; font-size: 30px; color: white; font-weight: 400;">News</button>
            <button class="tablinks" onclick="openCity(event, 'Paris'); openSmall();" style="font-family: SF2; font-size: 30px; color: white; font-weight: 400;">Laws</button>
            <button class="tablinks" onclick="openCity(event, 'Bucharest'); openSmall();" style="font-family: SF2; font-size: 30px; color: white; font-weight: 400;">Party Info</button>
        </div>
          
        <!-- Tab content -->
        <div id="Tokyo" class="tabcontent" style="opacity: 1; background-color: #ffffff; animation: none;" width=100%>
        <div id="tokyobox" style="max-width: 950px; margin-left: auto; margin-right: auto;">
            
            <!-- <p style="font-family: Md; font-size: 27px;">The Republic's Official Monitor</p> -->
			<img src="logo.png" style="height: 100px;"> 
            <p style="font-size: 50px;"></p>
            <p style="font-family: SF; font-size: 50px; text-decoration: underline; font-weight: bold;">About us</p>
            <p class="info">We are a discord political simulation server made of politics enthusiasts. You can find laws passed by Parliament in the laws section, those laws were passed after debating, voting, making up comitees, everything a real republic would host. We try to keep our simulation as fun and engaging as possible, to do this we divide people into parties with specific political views. No party suits you? Make your own, if you got enough support we'll make it happen</p>
            
			<p class="spacer">|</p>
            <p style="font-size: 40px;"> </p>
            <div class="container">
                <img src="justice.png" width=100% style="border-radius: 27px;">
                <div class=glass>
                <p style="font-family: SF; font-size: 20px;">Make an informed choice when voting. Find party info below.</p>
                </div>
                <button class="color-change" onclick="openCity(event, 'Bucharest'); openSmall()" style="font-family: SF2;">Party Info</button>

            </div>
            <p style="font-size: 40px;"> </p>
			<p class="spacer">|</p>
            <p class="infot">What country do we simulate?</p>
            <p class="info">Romania. We chose Romania because of it's interesting international relationships and geographical location as well as the many expansion opportunities in infrastructure allowing the simulation to progress.</p>
            <p class="info">Romania is a country located at the crossroads of Central, Eastern, and Southeastern Europe. It shares land borders with Bulgaria to the south, Ukraine to the north, Hungary to the west, Serbia to the southwest, and Moldova to the east and has its opening to the Black Sea. It has a predominantly temperate-continental climate. With a total area of 238,397 sq km (92,046 sq mi), Romania is the twelfth-largest country in Europe and the sixth-most populous member state of the European Union, having approximately 19.3 million inhabitants (as of 2020). Its capital and largest city is Bucharest. Other major urban areas include Cluj-Napoca, Timi??oara, Ia??i, Constan??a, Craiova, Bra??ov, and Gala??i.</p>
            <p style="font-size: 40px;"> </p>
        </div>
        </div>
        <div id="Tokyo2" class="tabcontent" style="opacity: 0; padding: 5px 10px; background-color: white; animation: none;">
            <p style="font-size: 350px;">test2</p>
        </div>
        <div id="Tokyo3" class="tabcontent" style="opacity: 1; background-color: #ffffff;" data-aos="zoom-in" width=100%>
        <div id="tokyobox2" style="max-width: 950px; margin-left: auto; margin-right: auto;">
            <p style="font-size: 40px;"> </p>
			<div data-aos="fade-left" class="card">
			<img class="cardlogo" src=ismy.jpg>
			<z>
            <p class="infot">Is my political ideology allowed?</p>
            <p class="info">Yes. We try to widen our political debates as much as possible and let as many perspectives and ideas in as possible. Just try not to be a dick and bring ideas to the table.</p>
			</div>
			<p class="spacer">|</p>
			<div data-aos="fade-right"class="card">
			<img class="cardlogo" src=polpar.jpg>
			<z>
            <p class="infot">How can I create a party?</p>
            <p class="info">To create a party, gather up 3 like-minded individuals, write up a manifesto paragraph containing your objectives, create a logo, and submit a chart of your party on the political compass.</p>
			</div>
			<p class="spacer">|</p>
			<div data-aos="fade-left" class="card">
			<img class="cardlogo" src=inclus.jpg>
			<z>
            <p class="infot">Everyone's welcome!</p>
            <p class="info">We try to be as inclusive as possible and thus we welcome everyone. While we do tolerate sensitive jokes we do NOT tolerate harrasement such as excessive bullying, discrimination based on identity, death threats or suicide pushing.</p>
			</div>
			<p class="spacer">|</p>
            <p style="font-size: 70px;"> </p>
            <div class="container" data-aos="fade-up" data-aos-delay="500">
                <img src="color.png" width=100% style="border-radius: 27px;">
                <div class=glass>
                <p style="font-family: SF; font-size: 27px;">Join our Discord server!</p>
                </div>
                <button class="color-change" onclick="discordGo();" style="font-family: SF2;">Join</button>

            </div>
            <p style="font-size: 70px;"> </p>

        </div>
        </div>
        <div id="London" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">The Republic</p>
            <p style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">Official news publication of The Republic political Discord Server</p>
            <p style="font-family: SF; font-size: 20px;">Disclaimer: Every document on this page is purely fictional and has no legal power in any country, any mention of a real country is purely coincidental and is in no way intended to reference a real entity.</p>
            <?php
                $files = glob('news/*');
                usort($files, function($a, $b) {
                    return filemtime($b) - filemtime($a);
                });
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<a style="font-family: SF; font-size: 20px; color: black; text-decoration: none;" href="'.$file.'">??? '.pathinfo($file, PATHINFO_FILENAME).'</a>';
                        echo'<p> </p>';
                    }
                }
            ?>
        </div>
          
        <div id="Paris" class="tabcontent" style="background-color: white;">
            <p style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">The Republic</p>
            <p style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">Official Monitor of Laws currently acting in the republic</p>
            <p style="font-family: SF; font-size: 20px;">Disclaimer: Every document on this page is purely fictional and has no legal power in any country, any mention of a real country is purely coincidental and is in no way intended to reference a real entity.</p>
            <?php
                $files = glob('laws/*');
                foreach($files as $file){
                    if($file != '.' and $file != '..'){
                        echo'<p id="'.$file.'" style="font-family: SF; font-size: 20px; color: black; text-decoration: none; cursor: pointer;">??? '.pathinfo($file, PATHINFO_FILENAME).'</p>';
                        echo'<p> </p>';
                    }
                }
            ?>
            <embed style="display: none; overflow: auto;" id="lawspdf" src="." height=1500px width=100% type="application/pdf"></iframe>
        </div>

		<div id="Bucharest" class="tabcontent" style="background-color: white;">
            <div id="partybox" style="margin-left: 150px; margin-right: 150px;">
            <img src=nla.png height=100px>
			<p class="infot" style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">National Libertarian Alliance</p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">The National Libertarian Alliance will
                pursue classical-liberal and libertarian 
                policy, based on individual
                freedoms, national identity and
                unity of the Romanian people.
            </p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">Ideology: Classical Liberalism, Right-Wing Progressivism, Economic Liberalism, Reformism, Libertarianism.</p>
            <a href="https://drive.google.com/file/d/1IM4vL-LRqBeSqDmvLwLk14is-WmX-tqJ/view?usp=sharing" class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400; color:black; text-decoration: none;">[Manifesto]</a>
			<p class=spacer>|</p>
			<img src=rcp.png height=100px>
			<p class="infot" style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">Romanian Conservative Party</p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">The Romanian Conservative Party will preserve our national identity whilst moving forward in the 21st century, it is based on our common cultural heritage and it will defend all of our citizen's interest.</p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">Ideology: Romanian Patriotism, National Conservatism, Corporatism, Cultural Conservatism</p>
            <a href="https://docs.google.com/document/d/1oqsSXpa2zYKr1XPJWMATtmR8zaYZYXnfvs9tdv5ESeA/edit?usp=sharing" class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400; color:black; text-decoration: none;">[Manifesto]</a>
			<p class=spacer>|</p>
			<img src=sdu.png height=100px>
			<p class="infot" style="font-family: SF; font-size: 50px; text-decoration: none; font-weight: bold;">Social Democratic Union</p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">The Social Democratic Union will fight for maintaining equality between classes and helping the poor as well as implementing social welfare and safety nets in our economy, a mixed economy is planned as a goal.</p>
            <p class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400;">Ideology: Social Democracy, Civil Libertarianism, Eurofederalism, Economic Liberalism, Environmentalism</p>
            <a href="https://drive.google.com/file/d/1ZN2ApswfU0nnAkcmsILnW8EiCxR4V7Z0/view" class="info" style="font-family: SF; font-size: 30px; margin-top: 0.5em; margin-bottom: 0em; font-weight: 400; color:black; text-decoration: none;">[Manifesto]</a>

            </div>
        </div>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  		<script>
			AOS.init({
				duration: 1000
			});
  		</script>
    </body>
    <script>
		if (navigator.userAgent.match(/Android/i) ||
		  navigator.userAgent.match(/webOS/i) ||
		  navigator.userAgent.match(/iPhone/i) ||
		  navigator.userAgent.match(/iPad/i) ||
		  navigator.userAgent.match(/iPod/i) ||
		  navigator.userAgent.match(/BlackBerry/) ||
		  navigator.userAgent.match(/Windows Phone/i) ||
		  navigator.userAgent.match(/ZuneWP7/i)
		) {
			document.getElementById("Tokyo2").style.display = none;		
		}
        console.log('website started');
        function discordGo(){
            window.location.href="https://discord.gg/Q5356NPfxd";
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
