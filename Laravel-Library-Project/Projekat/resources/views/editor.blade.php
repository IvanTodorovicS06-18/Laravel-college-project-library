@extends('layouts.app')



@section('content')

<div class="container">


    <h1>Grafikon</h1>
    <div id="container"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
{{-- <script type="text/javascript">
    var users =  <?php// echo json_encode($users) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'New User'
        },
        
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script> --}}
    

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var rent =  <?php echo json_encode($rent) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Izdavanje knjiga po mesecu'
        },
        
         xAxis: {
            categories: ['jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec']
        },
        yAxis: {
            title: {
                text: 'Broj knjiga'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Sve izdate knjige',
            data: rent
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>





</div>





@endsection