<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Mostrar_Mes(){
$mes=date('n');
$ano=date('Y');
$ActualDay=date('j');
 
$diase=date('w',mktime(0,0,0,$mes,1,$ano))+7;
$ultimdi=date('d',(mktime(0,0,0,$mes+1,1,$ano)-1));

$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    echo '<h1><center>'.$meses[$mes]." ".$ano.'</center></h1>';
    echo '<br>';
    
    echo '<table id="calendar">';
    echo '<tr>';
	echo'<th>'.' Lun  '.'</th>'.'<th>'.' Mar  '.'</th>'.'<th>'.' Mie   '.'</th>';
        echo'<th>'.' Jue   '.'</th>'.'<th>'.' Vie   '.'</th>'.'<th>'.' Sab  '.'</th>';
        echo'<th>'.' Dom    '.'</th>';
    echo '</tr>';
	echo '<tr>';
		$celdas=$diase+$ultimdi;
		for($i=1;$i<=42;$i++)
		{
			if($i==$diase)
			{
				$dia=1;
			}
			if($i<$diase|| $i>=$celdas)
			{
				echo "<td>&nbsp;</td>";
			}else{
				
				if($dia==$ActualDay)
					echo "<td class='diaact'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}
			
			if($i%7==0)
			{
				echo '</tr>';
			}
		}
echo'</table>';
}
?>