 <html>
	 <style>
		td{
			border: 1px solid black;
			height: 40px;
			width: 18%;
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
			
			for($i=1;$i<=$filas;$i++){
				echo "<th>$abc[$i]</th>\n";
				
				for($j=1;$j<=$cols;$j++){
					
						if($j == $cols){
							echo "<td></td>\n";
							echo "<tr></tr>\n";				
						}
						else if ($i % 2 == 0){
							echo "<td class='pintado'></td>\n";
						}
						else{
							echo "<td></td>\n";
						}
					}	
				}
				
		echo "</table>";
	 
	 
	 ?>
   </body>
</html>
