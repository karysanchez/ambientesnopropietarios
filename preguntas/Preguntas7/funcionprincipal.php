<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $pais=country('p');

    $capital=cap('c');

   function Desplegar_tabla (){  
    echo '<table id="paises">';
    echo '<tr>';
	
    echo'<th>'.' Pais  '.'</th>'.'<th>'.' Capital '.'</th>';
        
    echo '</tr>';
	echo '<tr>';
		$celdas=$pais+$capital;
                
		for($i=1;$i<=42;$i++)
		{
			if($i==$pais)
			{
				$dia=1;
			}
			if($i<$pais|| $i>=$celdas)
			{
				echo "<td>&nbsp;</td>";
			}else{
				
				if($dia==$capital)
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