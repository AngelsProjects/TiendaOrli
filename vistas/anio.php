<head>
    <meta charset="utf-8">
    <title>Calendario</title>
    <link rel="stylesheet" href="http://localhost/ControlInventario/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/calendario/css/calendar.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://localhost/calendario/js/es-ES.js"></script>
    <script src="http://localhost/calendario/js/jquery.min.js"></script>
    <script src="http://localhost/calendario/js/moment.js"></script>
    <script src="http://localhost/calendario/js/bootstrap.min.js"></script>
    <script src="http://localhost/calendario/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="http://localhost/calendario/css/bootstrap-datetimepicker.min.css">
    <script src="http://localhost/calendario/js/bootstrap-datetimepicker.es.js"></script>
</head>
<br>
<div class="cal-year-box">
<?php

function iniciar() {
    
}

function diaNombre() {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $days = array('', '', '', '', '', '', '');
    $months = array('', '', '', '', '', '', '', '', '', '', '', '');
    $week = '';
    $month = '';
    $year = '';
    $day = '';
    switch ($lang) {
        case 'es':
            $days = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
            $months = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
            $week = 'Semana';
            $month = 'Mes';
            $year = 'Año';
            $day = 'Dia';
            break;
        case 'en':
            $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
            $week = 'Week';
            $month = 'Month';
            $year = 'Year';
            $day = 'Day';
            break;
        case 'fr':
            break;
        case 'es':
            break;
    }
    return $days[idate('w')];
}
$z = 'non';
$num = 0;
for ($x = 0; $x < 3; $x++) {
    echo '<div class="row row-fluid cal-before-eventlist vertical-center">';

    for ($y = 0; $y < 4; $y++) {
        switch ($x) {
            case 0:
                $num = $y + 1;
                break;
            case 1:
                $num = $y + 5;
                break;
            case 2:
                $num = $y + 9;
                break;
        }
        $z = date('F', mktime(0, 0, 0, ($num)));
        echo"<div class='span3 col-md-3 cal-cell vertical-center' data-cal-row='-month$num' style='text-align: center;'>$z</div>";
    }
    echo'</div>';
}

?>
</div>
<script src="../js/underscore-min.js"></script>
<script src="../js/calendar.js"></script>