
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fire detection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="css/index.css" rel="stylesheet"/>

</head>
<body>
  
<div class="sidenav">
  <a href="#users">Users</a>
  <a href="#cases">Fire Cases</a>
  <a href="#locations">Locations</a>
  <a href="#contact">Contacts</a>
</div>
<div></div>


 <div class="main">
<div class="container " >

<h3>Dashboard: Fire Fighter's Portal</h3>

  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
   <div class="col">
       <a href="users.php" id="users"> 
    <div class="p-5 border bg-primary" > Total Users</div>
   </a></div>
    <div class="col">
    <a href="#" id="cases">
      <div class="p-5 border bg-danger">Fire Detected</div>
    </a></div>
    <div class="col">
    <a href="users.php" id="locations">
      <div class="p-5 border bg-success">Locations</div>
    </a></div>
    
    <div class="col">
    <a href="#" id="chats">
      <div class="p-5 border bg-secondary"> Chats</div>
    </div></a>
   
  
 
  </div>
<br>
<h3>Analytics: Number of Fire incidents per Months</h3>

<canvas id="myChart" style="width:100%;max-width:600px;  margin-top:5%;"></canvas>

</div>

</div>

<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,56,255,1.0)",
      borderColor: "rgba(35,255,255,255)",
      data: yValues
    }]
  },
  options: {
    legend: {display: true},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>