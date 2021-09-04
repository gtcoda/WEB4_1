<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tab{
            border: 2px solid black;
            border-collapse: collapse;
            width: 500px;
        }

        .tab th {
            border: 2px solid black;
            background: #396;
        }

        .tab .days{
            border-right: 1px solid red;
            /*border-right-color: transparent;*/
        }


        .tab .hours{
            border-right: 1px solid red;
        }







        .day{   }

        .day td{
            border: 1px solid black;
        }

        .day_w{
            writing-mode: vertical-lr;
            align-content: center;
            text-align: center;
            background: #396;
            
        }
        .hour_w{
            background: #0C6;
        }

        .sp_w{
            background: #36F;
        }


    </style>
</head>
<body>
    
    <table class="tab" >
        <tr>
            <th colspan="2" class="days">Дни недели</th>
            <th class="hours">Час</th>
            <th>АССЗ-41</th>
        </tr>
		
<?php
$days = array(
"Понедельник",
"Вторник",
"Среда",
"Четверг",
"Пятница",
"Суббота"
);

$array = array(
"Программное обеспечение систем обработки звука",
"Разработка Web-приложений",
"Системный анализ и исследование операций",
"Программное обеспечение 3D-графики и анимация",
"Базы и банки данных",
"&nbsp;",
"&nbsp;",
"&nbsp;",
"Безопасность жизнедеятельности человека",
"Этика и эстетика",
"Математика",
"Физика",
);

$array_size = count($array);
$sp = 5; //Колличество спецпредметов

$time = array(
"12 <sup>25</sup>",
"14 <sup>20</sup>",
"15 <sup>55</sup>",
"17 <sup>30</sup>",
"19 <sup>00</sup>"
);

// 
for($i = 0; $i<6; $i++){
	echo "
	<tbody class='day'>
                    <tr>
                        <td rowspan='10' class = 'day_w'> ". $days[$i]." </td>
                        <td rowspan='10'class = 'day_w'>".($i+12).".05.21</td>
                        <td class= 'hour_w'> ". $time[0] ." </td>
                        ". pr(false) ." 
                        
                        </tr>";

    for($m = 1; $m<5; $m++){

        if (rand(0,9)<7){
            echo "
                <tr>
                    <td class= 'hour_w' rowspan='2'> ". $time[$m]." </td>
                    ". pr(false) ."
                </tr>
                
                <tr>
                ". pr(false) ."
                </tr>
            ";
        }
        else{
            echo "
            <tr>
                <td class= 'hour_w' rowspan='2'> ". $time[$m]." </td>
                ". pr(true) ."
            </tr>
            <tr></tr>
        ";

        }
    }                
                 

    echo "</tbody>
	";
}



function pr($row){
    $r = rand(0, $GLOBALS['array_size']-1);
    if($row){
       
        if($r < $GLOBALS['sp']){
            $val = "<td rowspan='2' class= 'sp_w'> ". $GLOBALS['array'][$r] ." </td>";
        }
        else{
            $val = "<td rowspan='2'> ". $GLOBALS['array'][$r] ." </td>";
        }
        
    }
    else{
        if($r < $GLOBALS['sp']){
            $val = "<td  class= 'sp_w'> ". $GLOBALS['array'][$r] ." </td>";
        }
        else{
            $val = "<td > ". $GLOBALS['array'][$r] ." </td>";
        }
    }
    
    return $val;
}

?>		
   

    </table>




</body>
</html>
