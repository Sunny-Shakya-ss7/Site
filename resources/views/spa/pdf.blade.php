<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://kit.fontawesome.com/66fc271527.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<center><h2>SPA REPORT</h2></center>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Email:</th>
        <td>{{$spa->Leo_Club_Official_Email_Address}}</td>
      </tr>
      </thead>
      <tbody>
        <tr>
        <th>Club Name:</th>
        <td>{{$spa->Leo_Club_Name}}</td>
        </tr>
      </tbody>
        <thead>
        <tr>
        <th>Activity Name:</th>
        <td>{{$spa->Activity_Name}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Activity Level:</th>
        <td>{{$spa->Activity_Level}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Active Duration:</th>
        <td>{{$spa->Active_Duration}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Start Date:</th>
        <td>{{$spa->Start_Date}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Time:</th>
        <td>{{$spa->Time}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>End Date:</th>
        <td>{{$spa->End_Date}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Signature Activity:</th>
        <td>{{$spa->Signature_Activity}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Project Type:</th>
        <td>{{$spa->Project_Type}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Activity Details:</th>
        <td> <?=strip_tags($spa->Activity_Details);?></td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Leos Involved:</th>
        <td>{{$spa->Leos_Involved}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>People Benefited:</th>
        <td>{{$spa->People_Benefited}}</td>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Overall Points Received:</th>
        <td>{{$spa->Overall_Points_Received}}</td>
        </tr>
        </tbody>
        <thead>
        <tr>
        <th>Total Leo Hours:</th>
        <td>{{$spa->Total_Leo_Hours}}</td>
        </tr>
        </thead>
      </table>
      <br><br>
      <i>This report has been downloaded from LDC 325 A2 Official Website - <a href="https://ldc325a2.org.np">https://ldc325a2.org.np</a></i>
        </div>
  </body>
</html>