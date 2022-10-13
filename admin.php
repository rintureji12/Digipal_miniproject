
<?php 
            $result=mysqli_query($con,"SELECT count(*) as total from patient where age<18");
            $data=mysqli_fetch_assoc($result);
            // echo $data['total'];

            $res=mysqli_query($con,"SELECT count(*) as t from patient where age>=18 and age<50");
            $d=mysqli_fetch_assoc($res);

            $r=mysqli_query($con,"SELECT count(*) as temp from patient where age>50");
            $dtemp=mysqli_fetch_assoc($r);
            
        ?>
<script>
Chart.defaults.global.defaultFontColor = 'black';
var xValues = ["Below 18", "18-50", "50 above"];
// var yValues = [36,57,68];
var yValues=[<?= $data['total'];?>,<?= $d['t'];?>,<?= $dtemp['temp'];?>];
var barColors = [
  'rgb(0, 102, 0)','rgb(0, 102, 0)','rgb(0, 102, 0)'
];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
    }]
  },
  options: {
    legend: {display: false},
    title: {
        display: true,
        text: 'Patient age category',
        fontSize:20
    },
    
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          fontSize:16
        }
      }],
      xAxes: [{
        ticks: {
          fontSize:16

        }
      }],
    }
  }
});


var xValue = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValue = [55, 49, 44, 24, 15];
var barColor = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "brown",
  "#1e7145"
];

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValue,
    datasets: [{
      backgroundColor: barColor,
      data: yValue
    }]
  },
  options: {
    title: {
      display: true,
      text: "Donator's country",
      fontSize:20
    }
  }
});
</script>