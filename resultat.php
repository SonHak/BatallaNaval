 <html>
	 <style>
		td{
			border: 1px solid black;
			height: 20px;
			width: 20px;
		  }
		  
		 .pintado{
			background-color: green;
			 }
	 </style>
	 
	<body> 
	 <?php
		$filas = $_POST["filas"];
		$cols = $_POST["cols"];
		$abc = ["","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
		
		echo "<table>";
		//bucle para colocar los números en cada columna
			for($i=0;$i <= $cols;$i++){
				if($i == 0){
					echo "<th></th>";
					}
				else{
					echo "<th>$i</th>";
					}
			}
			echo "<tr></tr>";
			for($i=1;$i<=$filas;$i++){
				//coloco las letras al lado de cada fila
				echo "<th>$abc[$i]</th>\n";
				
				for($j=1;$j<=$cols+1;$j++){
						//en caso de que la variable J sea mayor al número de columnas, salta a la siguiente línea
						if($j > $cols){
							echo "<tr></tr>\n";				
						}
						//este else if sirve para pintar un cuadrado una si y una no
						else if (($i % 2 == 0 && $j % 2 == 0) | ($i % 2 != 0 && $j % 2 != 0)){
								echo "<td class='pintado'></td>\n";
						}
						//crea un cuadrado
						else{
							echo "<td></td>\n";
						}
					}	
				}
				
		echo "</table>";
	 
	 
	 ?>
   </body>
</html>
