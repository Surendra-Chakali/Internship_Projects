
<?php
session_start();
error_reporting(0);
$room = $_SESSION['room'];

 $server='localhost';
   $dbuser='root';
   $dbpass='';
   $db='examseat';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
  if (isset($_POST['submit'])) {
  # code...
  $room = $_POST['room'];
  $_SESSION['room'] = $room;
  header('location:example.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam schedule</title>
  <link rel="stylesheet" href="bootstrap.css ">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="lecturehalldata.css">
  
</head>

<body>
  <center><img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center>
  <?php
  

$branchq="SELECT distinct department from trisub where classroom='$room'";//distinct department selection
$retvalbranch=mysqli_query($conn,$branchq);
$yearq="SELECT distinct year from trisub where classroom='$room'";//distinct year selection
$retvalyear=mysqli_query($conn,$yearq);
?>
<center><h2 class="table-header">Room_NO-<?php echo($room)?></h2></center>
  <div class="panel panel-default">
    <table class="table" >

    <tr>
      <td rowspan="6">
      <table class="table table-hover" border="2">
        <tr>
          <td><lable>Branch :<label></td>
          <td><?php 
                    $rowyear=mysqli_fetch_row($retvalyear);
                    // $branch1=$rowbranch[0];
                    $year1=$rowyear[0];
                    while ( $rowbranch=mysqli_fetch_assoc($retvalbranch)) {
                      # code...
                      $branch1 = $rowbranch['department'];
                      echo $year1." ".$branch1."<br>";
                    }
                  

               ?></td>
        </tr>
        <?php
        $subq1="SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='$room'";
        $retvalsub1=mysqli_query($conn,$subq1);
        while($rowall1=mysqli_fetch_assoc($retvalsub1)){?>
        <tr>
          <td><?php echo $rowall1['subject'];?><!--subject--></td>
          <td><?php echo $rowall1['examdate']." / ".$rowall1['starttime']." to ".$rowall1['endtime']." "; ?><!--date and time is display here--></td>
        </tr>
        <?php } ?>
      </table>
    </td>
    </tr>
    
  </table>
    <center><table class="TABLE  HEAD-table" border="2">
      <!--this table is also appear from database-->
      <?php
      $branchq1=mysqli_query($conn, "SELECT distinct department from trisub where classroom='$room'");
      $res = mysqli_fetch_assoc($branchq1);
      $brnh = $res['department'];
      $numq1="SELECT  enrollnumber,department from trisub where classroom='$room' AND department = '$brnh' ";
      $numq2="SELECT  enrollnumber,department from trisub where classroom='$room' And department != '$brnh'";
      
      // $numq2="SELECT distinct department from trisub where classroom='B23'";
      $retvalnum1=mysqli_query($conn,$numq1);
      $retvalnum2=mysqli_query($conn,$numq2);

      ?>

<tr><th><center>Column 1</center><th><center>Column 2</center><th><center>Column 3</center><th><center>Column 4</center></th>
<th><center>Column 5</center></th></tr>
<tr><?php $count=1;$count1=1; ?>
    <?php while(($count1%6)!=0) {$count=1;
      ?>
  <td rowspan="2">
  <table class="table" border="2">

    <?php
    $suri = -1;
     while(($count%4)!=0) {
      $suri = $suri + 1;
      $rownum1=mysqli_fetch_assoc($retvalnum1);//first branch  rollnumber selected here
      $rownum2=mysqli_fetch_assoc($retvalnum2);//second branch  rollnumber selected here
      $dept = $rownum1['department'];
     
      
    ?>
    <tr>
      <td><center><?php $no1=$rownum1['enrollnumber']; echo $no1;  ?></center><hr>
          <center><?php $no2=$rownum1['department']; echo $no2;  ?></center> </td>

          <!--first branch student seat here-->
    <!--second branch student seat here-->
    </tr>
     <tr>
      <td><center><?php $no1=$rownum2['enrollnumber']; echo $no1;  ?></center><hr>
          <center><?php $no2=$rownum2['department']; echo $no2;  ?></center> </td>

          <!--first branch student seat here-->
    <!--second branch student seat here-->
    </tr>
    
    <?php
    echo "$firt";
     $count=$count+1;} ?>
  </table>
</td>
<?php $count1=$count1+1;} ?>
</tr>
</table></center>
<center><button onclick="window.print()" class="btn btn-warning">print page</button></center>

<div align="left" class="container" style="padding: 3em;">
          <p>Check room</p>
      <form action="" method="post">
          <select name="room">
            
              <?php
                   

                $branchq=mysqli_query($conn, "SELECT distinct classroom from trisub");
                while($row =mysqli_fetch_assoc($branchq)) {
                  # code...
                  $classroom = $row['classroom'];
                   ?> 
                   <option value="<?php echo($classroom);?>"><?php echo($classroom);?></option>

            <?php
                }

?>
          </select>
          <input type="submit" name="submit" value="Send">
        </form>
        </div><br><br>

</div>
</body>