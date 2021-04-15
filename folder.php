<!DOCTYPE html>
<html>
    <title>Official Monitor</title>
    <style>
        @font-face {

        font-family: 'SF';
        src: url('/gidole.ttf');

        }
    </style>
    <body>
        <p style="text-decoration: underline; font-family: SF; font-size: 60px; color: black; text-decoration: none;">The Republic's Document Archive</p>
        <p style="font-size: 70px"> </p>
        <?php
                $files = scandir('./');
                foreach($files as $file){
                    if($file != '.' and $file != '..' and $file != 'index.html' and $file != 'index.php'){
                        echo'<a href="./'.$file.'" style="font-family: SF; font-size: 30px; color: black; text-decoration: none;">'.pathinfo($file, PATHINFO_FILENAME).'</a>';
                        echo'<p> </p>';
                    }
                }
            ?>
    </body>
</html>
