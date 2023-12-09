google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChart);

let water_Level = 1;

function updateAlertMessage() {
            $.ajax({
                url: 'assets/check_alert.php',
                method: 'GET',
                success: function(data) {
                    if (data === '1') {
                        $('#alert-message').show().html("Alert: Very heavy rain or heavy thunderstorms are forecasted for tomorrow!");
                    } else {
                        $('#alert-message').empty().hide();
                    }
                }
            });
        }

        // Periodically check for updates every 10 seconds
setInterval(updateAlertMessage, 5000);

function updateWaterLevel() {
    $.ajax({
        url: 'assets/waterlevel.php',
        method: 'GET',
        success: function(water) {
            water_Level = water;
        }
    });
}

// Periodically check for updates every 10 seconds
setInterval(updateWaterLevel, 1000);



function drawChart() {



    console.log(water_Level);

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Meters', 1],
        ]);

        var options = {
          width: 400, height: 120,
		  greenFrom: 1, greenTo: 3,
          redFrom: 4, redTo: 5,
          yellowFrom:3, yellowTo: 4,
          minorTicks: 5,
		  min:1, max:5,
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
            data.setValue(0, 1, water_Level);
            chart.draw(data, options);
          }, 1000);
        
      }