
<?php
session_start();
error_reporting(0);
$userId = $_SESSION['id'];
$sql = mysqli_query($con, "select * from users where id = $userId");
$row = mysqli_fetch_array($sql);
$user_age = $row['age'];
include('includes/config.php');
if (isset($_POST['query'])) {
	# code...
	$output = '';
	$query = mysqli_query($con, "select * from products where productName like '%".$_POST['query']."%' ");
	$output = '<ul class="list-unstyled">';

	if (mysqli_num_rows($query) > 0) {
		# code...
		while ($row = mysqli_fetch_array($query)) {
			# code...
			$output .= '<li name="product">'.$row['productName'].'</li>'; 
		}
	}
	else
	{
		$output .= '<li>Product not found</li>'; 
	}
	$output .= '</ul>';
	echo "$output"; 
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>