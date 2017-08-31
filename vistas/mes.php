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

<div class="row">
    <div id="calendar" class="cal-context" style="width: 100%;">
        <div class="cal-row-fluid cal-row-head">


            <?php
            $x = 0;
            $y = 0;
            $mess = idate('m');
            $messs = $mess - 1;
            $diasMesAnterior;
            $diasemana = idate('w');
            $diames = (idate('d'));
            $diamesact = $diames - $diasemana;
            $anio = idate('Y');
            $mestag;
            if ($mess == 1) {
                $diasMesAnterior = cal_days_in_month(CAL_GREGORIAN, 12, ($anio - 1));
            } else {
                $diasMesAnterior = cal_days_in_month(CAL_GREGORIAN, ($messs), $anio);
            }

            while ($x < 7) {
                echo"<div class='cal-cell1'>$days[$x]</div>";
                $x++;
            }
            ?>

        </div>
        <div class="cal-month-box">
            <?php
            $x = 0;
            while ($x < 5) {
                echo'<div class="cal-row-fluid cal-before-eventlist">';
                $y = 1;

                while ($y < 8) {
                    echo"<div class='cal-cell1 cal-cell' data-cal-row='-day$y'>";
                    echo'<div class="cal-month-day ';
                    if ($x == 0 && $y == 1) {
                        echo'cal-month-first-row ';
                    }
                    if ($y) {
                        //aqui veremos si esta fuera del mes
                    }
                    echo'">';
                    if ($mestag > $diasMesAnterior&&$ver==true) {
                        $mestag = 1;
                        
                    } else {
                        if($mestag>$diames) {
                           $mestag = 1; 
                        }else{
                            
                        }
                    }
                    echo"<span class='pull-right' data-cal-date='$aniotag-$mestag-$diatag' data-cal-view='day' data-toggle='tooltip' title='' data-original-title=''>$mestag</span>";
                    echo'</div>';
                    echo'</div>';
                    $mestag++;
                    $y++;
                }

                echo'</div>';
                $x++;
            }
            ?>
            <!--//hasta aqui
            -->
        </div>
    </div> <!-- Aqui se mostrara nuestro calendario -->

</div>
<script src="../js/underscore-min.js"></script>
<script src="../js/calendar.js"></script>