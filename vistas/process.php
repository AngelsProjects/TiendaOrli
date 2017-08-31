 <?php
    $value = $_POST['dropdown'];
    $html = "<select name = 'cars' id='cars'>";
     if ($value == 'tata') {
$html .= "<option value='vista'>vista</option><option value='nano'>nano</option><option value='aria'>aria</option><option value='manza'>manza</option>";
     } elseif($value == 'fiat') {
$html .= "<option value='linea'>linea</option><option value='punto'>punto</option>";
     } elseif($value == 'maruti') {
        $html .= "<option value='swift'>swift</option><option value='desire'>desire</option><option value='omni'>omni</option><option value='maruti 800'>maruti 800</option>";
     } elseif($value == 'hundai') {
$html .= "<option value='santro'>santro</option><option value='verna'>verna</option>";
     }
     $html .= "</select>";

     echo $html;
     exit;