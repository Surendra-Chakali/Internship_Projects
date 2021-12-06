<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam schedule</title>

  <link rel="stylesheet" href="stylesss.css">
  
</head>

<body>
      <a href="RoomNo-A31.html" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
      <center><img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center>
      <?php
      $server='localhost';
      $dbuser='root';
      $dbpass='';
      $db='examseat';
      $conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection

      $branchq="SELECT distinct department from trisub where classroom='B23'";//distinct department selection
      $retvalbranch=mysqli_query($conn,$branchq);
      $yearq="SELECT distinct year from trisub where classroom='B23'";//distinct year selection
      $retvalyear=mysqli_query($conn,$yearq);
      ?>
      <center><h2 class="table">Room-NO-A31</h2></center>
      <div>
        <center><table class="main-table">
            <tr class='main-row'>
              <td class="main-table-data"><lable>BRANCH :<label></td>
              <td class="main-table-data">
              <?php $rowbranch=mysqli_fetch_row($retvalbranch);
                        $rowyear=mysqli_fetch_row($retvalyear);
                        $branch1=$rowbranch[0];
                        $year1=$rowyear[0];
                      echo $year1." Year ".$branch1;

                  ?>
                </td>
            <?php
            $subq1="SELECT distinct subject,examdate,starttime,endtime from trisub where classroom='B23' AND year='$year1' AND department='$branch1'";
            $retvalsub1=mysqli_query($conn,$subq1);
            while($rowall1=mysqli_fetch_assoc($retvalsub1)){?>
            
              <td class="main-table-data"><label>SUBJECT :</td>
              <td class="main-table-data">
                 <?php echo $rowall1['subject'];?><!--subject--></td>
            </tr>
            <tr class='main-row'>
            <td class="main-table-data">
              <lable>Date :<label></td>
              <td class="main-table-data">
              <?php echo $rowall1['examdate'];?>
              <td class="main-table-data"><lable>Time :<label></td>
              <td class="main-table-data">
              <?php echo $rowall1['starttime']." to ".$rowall1['endtime']." "; ?><!--date and time is display here--></td>
            </tr>
            <?php } ?>
            <td class="main-table-data">
            <label>Faculty name:</label></td>
            <td class="main-table-data" colspan="3">
              <!-- enter faculty name from the data base-->
          </table></center>
      </div>
      <br/>
      <br/>
      <div>
        <table class="Room-table">
                  <?php
                $numq1="SELECT   enrollnumber,department from trisub where classroom='B23' AND year='$year1' AND department='$branch1'";
                //$numq2="SELECT distinct department from trisub where classroom='B23'";
                $retvalnum1=mysqli_query($conn,$numq1);
                //$retvalnum2=mysqli_query($conn,$numq2);
                ?>
                
              <tr class='main-row'>
                  <th><center>Row 1</center></th>
                  <th><center>Row 2</center></th>
                  <th><center>Row 3</center></th>
                  <th><center>Row 4</center></th>
                  <th><center>Row 5</center></th>
            </tr>
                  <tr class='main-row'><?php $count=1;$count1=1; ?>
                      <?php while(($count1%6)!=0) {$count=1;
                        ?>
                    <td>
                    <table class="Room-table">

                      <?php while(($count%7)!=0) {
                        $rownum1=mysqli_fetch_assoc($retvalnum1);//first branch  rollnumber selected here
                      //$rownum2=mysqli_fetch_assoc($retvalnum2);//second branch  rollnumber selected here
                      ?>
                      <tr class='main-row'>
                        <td height="100" class="main-data "><center><?php $no1=$rownum1['enrollnumber']; echo $no1;  ?></center><hr>
                            <center><?php $no2=$rownum1['department']; echo $no2;  ?></center> </td>
                            <!--first branch student seat here-->
                            <td height="100" class="main-data "></center><hr>
                            <center> </center> </td>
                      <!--second branch student seat here-->
                  
                      </tr>
                      <?php $count=$count+1;} ?>
                    </table>
                  </td>
                  <?php $count1=$count1+1;} ?>
                  </tr>
          </table>

    <center><button onclick="window.print()" class="btn  btn-sm">print page</button></center> 

</body>
</html>