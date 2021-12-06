<?php

session_start();
include('db_connection.php');

if (isset($_POST['submit'])) {
  $option = $_POST['option'];
  $desc = $_POST['desc'];
  $keyword = $_POST['keyword'];
  // $pimage = $_POST['pimage'];

  if (isset($_FILES['pimage']['name'])) {
    $imageName = $_FILES['pimage']['name'];
    if ($imageName!="") {
      # code...
    
    $ext = end(explode('.', $imageName));
    $imageName = "image".rand(0000,9999).".".$ext;
    $sourcePath = $_FILES['pimage']['tmp_name'];
    $destinationPath = "images/".$imageName;

    $upload = move_uploaded_file($sourcePath,$destinationPath);

    if($upload == true)
    {
      echo "<script>Image inserted successfully</script>";
    }
  }
  }
    else
  	{
  		$imageName = "";
  	}

  $sql = mysqli_query($conn, "INSERT INTO `enquiryresult` VALUES ('$option', '$imageName','$desc','$keyword')");
  if($sql) echo "<script>alert('Enquiry completed');</script>";
  else echo "Error in submission";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Home Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css" >
  	.head{
  		height: 100px;
  	}
  	.head a{text-decoration: none;}
  </style>
</head>
<body>
<section class="container p-4 head">
	<div class="float-left">
		<h4><a href="main.php">Welcome Admin</a></h4>
	</div>
	<div class="float-right">
		<a href="#" class="btn btn-outline-danger">Logout</a>
	</div>
	<hr style="margin-top: 70px;">
</section>

<section class="container">
	<div class="row">
		<?php include('slider.php');?>
		<div class="col-lg-8 col-md-8 col-sm-8 col-12">
			<div class="table-responsive p-4">
				<div>
					<h5 style="color: gray;" class="p-3">User Enquiries</h5>
				</div>
				<table class="table table-hover table-borderless text-center">

					<thead>
						<tr>
							<th>Id</th>
							<th>Result</th>
							<th>Enquiry</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php


					$sql = $conn->prepare("SELECT * FROM enquiry");
					$sql->execute();
					$result = $sql->get_result();
					while ($row = $result->fetch_assoc()) {
						# code...
						$SID = $row['StudentId'];
						$ID = $row['id'];

					$sq = $conn->prepare("SELECT * FROM result WHERE id = ?");
					$sq->bind_param("i",$ID);
					$sq->execute();    
					$res =$sq->get_result();
					$row1 = $res->fetch_assoc();
						?>
						<tr>
							
							<td><?php echo "$SID";?></td>
							<td><?php echo $row1['Result'];;?></td>
							<td><?php echo $row['StudentEnquiry'];?></td>
							
							<td>
								<form action="">
									<input type="hidden" name="id" value="<?php echo($ID)?>">	
									<a href="updateenquiry.php?id=<?php echo($ID)?>" type="" name="">Reply</a>
								</form>
							</td>
						</tr>
						<?php
					}

					?>
					
				</table>
			</div>	
		</div>
	</div>

	<!--Enquiry model-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="student_login" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="mt-4 mb-3">
        	<h3 class="modal-title text-center text-success">Send Reply</h3>
        </div>
        <div class="modal-body">
         <form action="" method="post" enctype="multipart/form-data">
				<div class="p-2">

			

					<input type="text" name="" value="<?php echo($SID)?>" disabled>
					<input type="hidden" name="option" value="<?php echo($SID)?>">
				</div>
				<div class="p-2">
					<label for="image">Image</label>
					<input type="file" name="pimage" id="image" accept="image/*" required>
				</div>
				<div class="p-2">
					<label for="desc">Descripton</label>
					<input type="text" name="desc" id="desc" required>
				</div>
				<div class="p-2">
					<label for="keyword">Keywords</label>
					<input type="text" name="keyword" id="keyword" required>
				</div>
				<div class="p-2" align="center">
					<input type="submit" name="submit" required class="btn btn-outline-primary">
				</div>
				
			</form>
        </div>
      </div>
      
    </div>
  </div>
</div>

</section>
</body>
</html>