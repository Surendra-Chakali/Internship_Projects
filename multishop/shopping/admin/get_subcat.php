<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM subcategory WHERE categoryid=$id");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
}

if(!empty($_POST["subcat_id"])) 
{
 $subid=intval($_POST['subcat_id']);
$query1=mysqli_query($con,"SELECT * FROM products WHERE subCategory=$subid");
?>
<option value="">Select Product</option>
<?php
 while($row1=mysqli_fetch_array($query1))
 {
  ?>
  <option value="<?php echo htmlentities($row1['id']); ?>"><?php echo htmlentities($row1['productName']); ?></option>
  <?php
 }
}

?>