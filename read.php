<?php
require 'config.php';
$sql = "SELECT id, name, email, address FROM $table";
$query = $conn->prepare($sql);
$query->execute();
$employee = $query->fetchAll(PDO::FETCH_OBJ);

$conn = null;
?>

<?php require 'public/template/header.php';?>

<div class="w3-container">
	<h2>Employee</h2>
	<a href="public/create.php" class="w3-button w3-black">Add</a>
	<table width="100%" class="w3-table-all w3-centered w3-card-4">
		<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
		foreach($employee as $emp){
			echo "<tr>";
			echo "<td>".$emp->name."</td>";
			echo "<td>".$emp->email."</td>";
			echo "<td>".$emp->address."</td>";
			echo "<td class='w3-center'>";
			echo "<a class=\"w3-btn w3-round w3-green\" href='public/update.php?id=$emp->id'>Edit</a>";
			echo "</td>";
			echo "<td class='w3-center'>";
			echo "<a onclick=\"return confirm('Are you sure?')\" href='delete.php?id=$emp->id' class='w3-button w3-round w3-red'>Del</a>";
			echo "</td>";
			echo "</tr>";
		}
		?>
		</tbody>
	</table>
</div>

<?php include("public/template/footer.php"); ?>