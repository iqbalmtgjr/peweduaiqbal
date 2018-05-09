<!DOCTYPE html>
<html>
<head>
	<title>Belajar Array</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>Belajar Array</h1>

<?php 
	$mahasiswa = ["iqbal","faisal","misbahul","andi","lutfi"];

	$prodi = [	
				[	
				"id"=>1, 
				"nama"=>"Sisfo",
				"kuota"=>"58",
				"kaprodi"=>"Ilhamsyah"
				],
				[	
				"id"=>2, 
				"nama"=>"Kelautan",
				"kuota"=>"32",
				"kaprodi"=>"Nora"
				],
				[	
				"id"=>3, 
				"nama"=>"Kimia",
				"kuota"=>"40",
				"kaprodi"=>"Andi"
				],
				[	
				"id"=>4, 
				"nama"=>"Fisika",
				"kuota"=>"25",
				"kaprodi"=>"Nurhasanah"
				],
				[	
				"id"=>5, 
				"nama"=>"Biologi",
				"kuota"=>"40",
				"kaprodi"=>"Rizalinda"
				]
			]
 ?>

 <h2>
 	<?php 
 		echo $mahasiswa [1];
 		echo "<br>";	
 	 ?>
<br>
 	 <?php 
 	 	echo $prodi [4]["kaprodi"];
 	  ?>
 </h2>

 <h3>
 	<?php 
 		echo $prodi [1]['nama'];
  	 	?>
  </h3>

  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>No</th>
  			<th>Nama Prodi</th>
  			<th>Nama Kaprodi</th>
  		</tr>
  		<tbody>
  		<?php foreach ($prodi as $prd): ?>
  			<tr>
  				<td><?php echo $prd ['id']; ?></td>
  				<td><?php echo $prd ['nama']; ?></td>
  				<td><?php echo $prd ['kaprodi']; ?></td>
  			</tr>
  		<?php endforeach; ?>
  		</tbody>
  	</thead>
  </table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>