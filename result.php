<?php
    $playername = $_GET["playername"];
    $key = "APIKEYHERE";
    $json = file_get_contents('https://api.hypixel.net/player?key='.$key.'&name='.$playername);
    $player = json_decode($json, true);
    $playeruuid = $player['player']['uuid'];
    function getLevel(float $exp) {
        $REVERSE_PQ_PREFIX = -3.5;
        $REVERSE_CONST = 12.25;
        $GROWTH_DIVIDES_2 = 0.0008;
        return $exp < 0 ? 1 : floor(1 + $REVERSE_PQ_PREFIX + sqrt($REVERSE_CONST + $GROWTH_DIVIDES_2 * $exp));
    }
    echo file_get_contents('css.html');
    echo '<title>'.$playername.' Bedwars Stats</title>';
    echo '<h1>'.$playername.'</h1>';
    echo "<br>";
    echo '<img src="https://cravatar.eu/head/' . $playername . '"/>';
    echo "<br>";
    echo 'Hypixel Level: '.getLevel($player['player']['networkExp']);
    echo '<br>';
    echo 'Bedwars Level: '.$player['player']['achievements']['bedwars_level'];
    echo '<br>';
    echo 'UUID: '.$playeruuid;
    echo '<br>';
    echo 'Karma: '.$player['player']['karma'];
    echo '<br>';
    echo 'Youtube: '.$player['player']['socialMedia']['links']['YOUTUBE'];
    echo '<br>';
    echo 'Discord: '.$player['player']['socialMedia']['links']['DISCORD'];
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
    echo 'Coins: '.$player['player']['stats']['Bedwars']['coins'];
    echo '<br>';
    echo 'Loot Chests: '.$player['player']['stats']['Bedwars']['bedwars_boxes'];
    echo '<br>';
    echo 'Resources Collected: '.$player['player']['stats']['Bedwars']['resources_collected_bedwars'];
    echo '<br>';
    echo 'Iron Collected: '.$player['player']['stats']['Bedwars']['iron_resources_collected_bedwars'];
    echo '<br>';
    echo 'Gold Collected: '.$player['player']['stats']['Bedwars']['gold_resources_collected_bedwars'];
    echo '<br>';
    echo 'Diamonds Collected: '.$player['player']['stats']['Bedwars']['diamond_resources_collected_bedwars'];
    echo '<br>'; 
    echo 'Emeralds Collected: '.$player['player']['stats']['Bedwars']['emerald_resources_collected_bedwars'];
    echo '<br>';
?>
