@extends('layouts.default')
@section('title','BBCA Stock')
@section('bbca')
<script>    
//var url = 'https://www.bloomberg.com/markets2/api/history/BBCA%3AIJ/PX_LAST?timeframe=5_YEAR&period=weekly&volumePeriod=weekly';
  // Call the WebService by using the helper function.
        
        var data = <?php echo $response ?>; // Store the WebServices JSON data to the «data» variable.
        var len_data = data[0].price.length;
        var dates = [];
        var val = [];
        for(var i = 0; i < len_data; i++){
            var restime = data[0].price[i].dateTime;
            var resval = data[0].price[i].value;
            dates.push(restime);
            val.push(resval);
        }
        //----------------------------------------------------------------------
        
        var speedCanvas = document.getElementById("myChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var speedData = {
          labels: dates,
          datasets: [{
            label: "BBCA",
            data: val,
            borderColor: "#3e95cd",
            fill: false,
          }]
        };

        var lineChart = new Chart(speedCanvas, {
            type: 'line',
            data: speedData,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        barPercentage: 0.4,
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        barPercentage: 0.4,
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        });

</script>
@endsection
@section('content')

<section class="content-header">
    <h2>BBCA 5 Years</h2>
</section>

<section class="content">
    <div class="summary"></div>
    <div class="chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="myChart"></canvas>
    </div>
    
</section>

@endsection