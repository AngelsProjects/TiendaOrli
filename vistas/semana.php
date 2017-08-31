<?php
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
?>

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

<div class="row">
    <div id="calendar" class="cal-context">
        <div class="cal-week-box">
            <?php
            $x = 1;
            while ($x < 7) {
                echo"<div class='cal-offset$x cal-column'></div>";
                $x++;
            }
            ?>
            <div class="cal-row-fluid cal-row-head">
                <?php
                $y = 0;
                $mess = idate('m');
                $messs = $mess - 1;

                $diasemana = idate('w');
                $diames = (idate('d')) - $diasemana;
                $anio = idate('Y');
                while ($y < 7) {


                    echo"<div class='cal-cell1";
                    if ($y == ($diasemana - 1)) {
                        echo' cal-day-today';
                    }
                    echo"' data-toggle='tooltip' title='' data-original-title=''>$days[$y]<br>
                    <span data-cal-date='$anio-$mess-$diames' data-cal-view='day'>$diames $months[$messs]</span>
                </div>";
                    $diames++;
                    $y++;
                }
                ?>
            </div>
        </div>
    </div> <!-- Aqui se mostrara nuestro calendario -->

</div>
<script src="../js/underscore-min.js"></script>
<script src="../js/calendar.js"></script>