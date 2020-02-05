<?php


$input = $_GET["pokemonToGet"];

$api_url = 'https://pokeapi.co/api/v2/pokemon/'.strtolower($input);

$species_url = 'https://pokeapi.co/api/v2/pokemon-species/'.$input;

$json_data = file_get_contents($api_url);

$pokemon_data = json_decode($json_data, JSON_OBJECT_AS_ARRAY);

$species_json = file_get_contents($species_url);

$species_data = json_decode($species_json, JSON_OBJECT_AS_ARRAY);

function randomNumber($theLength) {
    return rand(0, thelength);
}

$lengthArray = count($pokemon_data['moves']) - 1;

print_r($lengthArray);

/*if (isset($_GET['submit']))
{
    header('Location: challenge-pokemon-php.local');
}*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Pokedex</title>
</head>
<body>
<form method="get">
    <input type="text" name="pokemonToGet"/>
    <input type="submit">
</form>
<div id="pokedex">
    <div id="left">
        <div id="logo"></div>
        <div id="bg_curve1_left"></div>
        <div id="bg_curve2_left"></div>
        <div id="curve1_left">
            <div id="buttonGlass">
                <div id="reflect"> </div>
            </div>
            <div id="miniButtonGlass1"></div>
            <div id="miniButtonGlass2"></div>
            <div id="miniButtonGlass3"></div>
        </div>
        <div id="curve2_left">
            <div id="junction">
                <div id="junction1"></div>
                <div id="junction2"></div>
            </div>
        </div>
        <div id="screen">
            <div id="topPicture">
                <div id="buttontopPicture1"></div>
                <div id="buttontopPicture2"></div>
            </div>
            <!--            Where our sprites and evolved from will go-->
            <div id="picture">
                <img src="<?php
                echo $pokemon_data['sprites']['front_default'];
                ?>"/>
            </div>
            <div id="buttonbottomPicture"></div>
            <div id="speakers">
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
                <div class="sp"></div>
            </div>
        </div>
        <div id="bigbluebutton"></div>
        <div id="barbutton1"></div>
        <div id="barbutton2"></div>
        <div id="cross">
            <div id="leftcross">
                <div id="leftT"></div>
            </div>
            <div id="topcross">
                <div id="upT"></div>
            </div>
            <div id="rightcross">
                <div id="rightT"></div>
            </div>
            <div id="midcross">
                <div id="midCircle"></div>
            </div>
            <div id="botcross">
                <div id="downT"></div>
            </div>
        </div>
    </div>
    <div id="right">
        <!--        Where our stats will go-->
        <div id="stats">
            <strong>Name:</strong>
            <span id="pokeName">
                <?php
                echo ucfirst($pokemon_data['species']['name']);
                ?>
            </span><br/>
            <strong>ID:</strong>
            <span id="pokeId">
                <?php
                echo $pokemon_data['id'];
                ?>
            </span><br/>
            <span id="evolutionsInfo"></span><br/>
            <ul id="moves">
                <li id="move1"></li>
                <li id="move2"></li>
                <li id="move3"></li>
                <li id="move4"></li>
            </ul>
        </div>
        <div id="blueButtons1">
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
        </div>
        <div id="blueButtons2">
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
            <div class="blueButton"></div>
        </div>
        <div id="miniButtonGlass4"></div>
        <div id="miniButtonGlass5"></div>
        <div id="barbutton3"></div>
        <div id="barbutton4"></div>
        <div id="yellowBox1"></div>
        <div id="yellowBox2"></div>
        <div id="bg_curve1_right"></div>
        <div id="bg_curve2_right"></div>
        <div id="curve1_right"></div>
        <div id="curve2_right"></div>
    </div>
</div>
</body>
</html>


