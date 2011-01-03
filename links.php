<?

$uri = $_SERVER['REQUEST_URI'];
$furi = preg_replace('#^/l/#', '', $uri);

switch($furi) {
case 'merry_christmas_guitar528':
  $l = 'http://games.adultswim.com/robot-unicorn-attack-twitchy-online-game.html';
  break;
case 'happy_new_year_guitar528':
  $l = 'http://games.adultswim.com/robot-unicorn-attack-heavy-metal-twitchy-online-game.html';
  break;
default:
  $l = 'http://www.stevenxu.ca';  
}

header('Location: ' . $l);
