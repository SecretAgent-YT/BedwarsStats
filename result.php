<?php
    $playername = $_GET["playername"];
    $key = "b3d57af4-84c7-4fa9-99f9-259c4358e257";
    $json = file_get_contents('https://api.hypixel.net/player?key='.$key.'&name='.$playername);
    $player = json_decode($json, true);
    function getLevel(float $exp) {
        $REVERSE_PQ_PREFIX = -3.5;
        $REVERSE_CONST = 12.25;
        $GROWTH_DIVIDES_2 = 0.0008;
        return $exp < 0 ? 1 : floor(1 + $REVERSE_PQ_PREFIX + sqrt($REVERSE_CONST + $GROWTH_DIVIDES_2 * $exp));
    }
    echo $playername;
    echo "<br>";
    echo '<img src="https://cravatar.eu/head/' . $playername . '"/>';
    echo "<br>";
    echo 'Hypixel Level: '.getLevel($player['player']['networkExp']);
    echo '<br>';
    echo 'Bedwars Level: '.$player['player']['achievements']['bedwars_level'];
    echo '<br>';
    echo 'Beds Broken: '.$player['player']['stats']['Bedwars']['beds_broken_bedwars'];
    echo '<br>';
    echo 'Beds Lost: '.$player['player']['stats']['Bedwars']['beds_lost_bedwars'];
    echo '<br>';
    echo 'Kills: '.$player['player']['stats']['Bedwars']['kills_bedwars'];
    echo '<br>';
    echo 'Deaths: '.$player['player']['stats']['Bedwars']['deaths_bedwars'];
    echo '<br>';
    echo 'Final Kills: '.$player['player']['stats']['Bedwars']['final_kills_bedwars'];
    echo '<br>';
    echo 'Final Deaths: '.$player['player']['stats']['Bedwars']['final_deaths_bedwars'];
    echo '<br>';
    echo 'Games Played: '.$player['player']['stats']['Bedwars']['games_played_bedwars'];
    echo '<br>';
    echo 'Wins: '.$player['player']['stats']['Bedwars']['wins_bedwars'];
    echo '<br>';
?>