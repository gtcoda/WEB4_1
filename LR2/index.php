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
        }

        .tab th {
            border: 2px solid black;
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
"Этика и эстетика",
"Безопасность жизнедеятельности человека",
"Системный анализ и исследование операций",
"Программное обеспечение 3D-графики и анимация",
"Базы и банки данных"
);

for($i = 0; $i<6; $i++){
	echo "
	<tbody class='day'>
                    <tr>
                        <td rowspan='5' class = 'day_w'><p>". $days[$i]."</p></td>
                        <td rowspan='5'class = 'day_w'>12.05.21</td>
                        <td><p>12 <sup>25</sup></p></td>
                        <td><p>Программное обеспечение систем обработки звука</p></td>
                    </tr>

                    <tr>

                        <td><p>14 <sup>20</sup></p></td>
                        <td><p>" . $array[rand(0,6)] ."</p></td>
                    </tr>

                    <tr>

                        <td><p>15 <sup>55</sup></p></td>
                        <td><p>" . $array[rand(0,6)] ."</p></td>
                    </tr>

                    <tr>

                        <td><p>17 <sup>30</sup></p></td>
                        <td><p>" . $array[rand(0,6)] ."</p></td>
                    </tr>

                    <tr>
                        <td><p>19 <sup>00</sup></p></td>
                        <td><p>" . $array[rand(0,6)] ."</p></td>
                    </tr>

    </tbody>
	";
}



?>		
   

    </table>




</body>
</html>