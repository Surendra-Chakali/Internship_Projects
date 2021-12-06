<?php

session_start();
include('db_connection.php');
error_reporting(0);

$id = $_GET['id'];

$sq = $conn->prepare("SELECT * FROM enquiry WHERE id = ?");
$sq->bind_param("i",$id);
$sq->execute();    
$res =$sq->get_result();
$row1 = $res->fetch_assoc();
$sid = $row1['StudentId'];
// echo "<script>alert($id);</script>";

if (isset($_POST['submit'])) {
  // $option = $_POST['option'];
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

  $sql = mysqli_query($conn, "INSERT INTO `enquiryresult` VALUES ('$sid', '$imageName','$desc','$keyword','$id')");
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
  	  input[type='text'],input[type='password'],select{
  	width: 100%;
  	border: none;
  	border-bottom: 1px solid lightgray;
  	outline: none;
  }

.model{
            box-shadow: 4px 3px 14px 7px lightgray;
            width: 400px;
            height: 370px;
            position: absolute;
            left: 60%;
            top: 50%;
            transform: translate(-50%, -50%);
       }
       form{
       	padding: 20px;
       }
       label{color: gray;}
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
		<div class="model">
			 <form action="" method="post" enctype="multipart/form-data">
				<div class="p-2">
					<input type="hidden" name="option" value="<?php echo($sid)?>">
					<input type="text" name="" value="<?php echo($sid)?>" disabled>
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
</section>
</body>
</html>