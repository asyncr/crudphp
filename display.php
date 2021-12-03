<?php
	include 'connect.php';
	if(isset($_POST['displaySend'])){
		$table = '<table class="table">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Email</th>
			<th scope="col">Telefono</th>
			<th scope="col">Puesto</th>
		  </tr>
		</thead>
		';

		$sql = "SELECT * FROM crud";
		$result=mysqli_query($con,$sql);

		while( $row = mysqli_fetch_assoc($result) ){
			// Obtener los datos de las columnas
			$id     = $row['id'];
			$nombre = $row['nombre'];
			$email  = $row['email'];
			$mobile = $row['mobile'];
			$place  = $row['place'];

			$table.= '<tr>
			<td scope="row"> '.$id.' </th>
			<td>'.$nombre.'</td>
			<td>'.$email.'</td>
			<td>'.$mobile.'</td>
			<td>'.$place.'</td>
		  </tr>
			';
		}
		$table.='</table';
		echo $table;

	}
?>