google.charts.load('current', {'packages':['gauge']});
google.charts.setOnLoadCallback(drawChartBatangan);
google.charts.setOnLoadCallback(drawChartLumbayao);

let water_Level_node_one = 0;
let water_Level_node_two = 0;

function updateAlertMessage() {
            $.ajax({
                url: 'assets/check_alert.php',
                method: 'GET',
                success: function(alert_flag) {
                    if (alert_flag === '1') {
                        $('#alert-message').show().html("Alert: Very heavy rain or heavy thunderstorms are forecasted for tomorrow!");
                        console.log("alert flag is 1");
                    } else {
                        $('#alert-message').empty().hide();
                    }
                }
            });
        }

        // Periodically check for updates every 10 seconds
setInterval(updateAlertMessage, 543);

function updateWaterLevelNodeOne() {
    $.ajax({
        url: 'assets/api/node1/waterlevel.php',
        method: 'GET',
        success: function(water) {
            water_Level_node_one = water;
            let max = 4.0;

            if (water_Level_node_one >= max) {
                $('#waterAlertBatangan').show().html("Danger Batangan Water Level!!!!!!!!!!!!!!!!");
                console.log("water level is higher than 4 meters:::" + water_Level_node_one);
            } else {
                $('#waterAlertBatangan').empty().hide();
            }
        }
    });
}

// Periodically check for updates every 10 seconds
setInterval(updateWaterLevelNodeOne, 543);

function updateWaterLevelNodeTwo() {
    $.ajax({
        url: 'assets/api/node2/waterlevel.php',
        method: 'GET',
        success: function(water) {
            water_Level_node_two = water;
            let max = 4.0;

            if (water_Level_node_two >= max) {
                $('#waterAlertLumbayao').show().html("Danger Lumbayao Water Level!!!!!!!!!!!!!!!!");
                console.log("water level is higher than 4 meters:::" + water_Level_node_two);
            } else {
                $('#waterAlertLumbayao').empty().hide();
            }
        }
    });
}

// Periodically check for updates every 10 seconds
setInterval(updateWaterLevelNodeTwo, 543);



function drawChartBatangan() {



    console.log(water_Level_node_one);

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Meters', 1],
        ]);

        var options = {
          width: 200, height: 200,
		  greenFrom: 1, greenTo: 3,
          redFrom: 4, redTo: 5,
          yellowFrom:3, yellowTo: 4,
          minorTicks: 5,
		  min:1, max:5,
            yellowColor: '#FFFF00',
        };

        var chart = new google.visualization.Gauge(document.getElementById('batangan_gauge'));

        chart.draw(data, options);

        setInterval(function() {
            data.setValue(0, 1, water_Level_node_one);
            chart.draw(data, options);
          }, 500);
        
}

function drawChartLumbayao() {



    console.log(water_Level_node_two);

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Meters', 1],
        ]);

        var options = {
          width: 200, height: 200,
		  greenFrom: 1, greenTo: 3,
          redFrom: 4, redTo: 5,
          yellowFrom:3, yellowTo: 4,
          minorTicks: 5,
		  min:1, max:5,
            yellowColor: '#FFFF00',
        };

        var chart = new google.visualization.Gauge(document.getElementById('lumbayao_gauge'));

        chart.draw(data, options);

        setInterval(function() {
            data.setValue(0, 1, water_Level_node_two);
            chart.draw(data, options);
          }, 500);
        
}

var ctxy = document.getElementById('BatanganChart').getContext('2d');
        var charty;

        function updateBatanganChart() {
            var BatangandateFilter = document.getElementById('BatangandateFilter').value;

            fetch('assets/api/node1/fetch_data.php?BatangandateFilter=' + BatangandateFilter)
                .then(response => response.json())
                .then(data => {
                    if (charty) {
                        charty.destroy();
                    }

                    charty = new Chart(ctxy, {
                        type: 'line',
                        data: {
                            labels: data.map(entry => entry.timestamp),
                            datasets: [{
                                label: 'Water Level',
                                data: data.map(entry => entry.distance),
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    max: 6,
                                    min: 0
                                  },
                                
                            },
                            plugins: {
                                zoom: {
                                    pan: {
                                        enabled: true,
                                        mode: 'x',
                                        modifierKey: 'ctrl'
                                    },
                                    zoom: {
                                        wheel: {
                                            enabled: true,
                                        },
                                        pinch: {
                                            enabled: true
                                        },
                                        mode: 'xy'
                                    }
                                }
                            }
                        }
                    });
                });
        }

var ctx = document.getElementById('LumbayaoChart').getContext('2d');
        var chart;

        function updateLumbayaoChart() {
            var LumbayaodateFilter = document.getElementById('LumbayaodateFilter').value;

            fetch('assets/api/node2/fetch_data.php?LumbayaodateFilter=' + LumbayaodateFilter)
                .then(response => response.json())
                .then(data => {
                    if (chart) {
                        chart.destroy();
                    }

                    chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.map(entry => entry.timestamp),
                            datasets: [{
                                label: 'Water Level',
                                data: data.map(entry => entry.distance),
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    max: 6,
                                    min: 0
                                  },
                                
                            },
                            plugins: {
                                zoom: {
                                    pan: {
                                        enabled: true,
                                        mode: 'x',
                                        modifierKey: 'ctrl'
                                    },
                                    zoom: {
                                        wheel: {
                                            enabled: true,
                                        },
                                        pinch: {
                                            enabled: true
                                        },
                                        mode: 'xy'
                                    }
                                }
                            }
                        }
                    });
                });
        }

        function updateChartPeriodically() {
            // Initial chart render
            updateBatanganChart(); 
            updateLumbayaoChart(); 

            // Update chart every 30 seconds
            setInterval(updateBatanganChart, 10000);
            setInterval(updateLumbayaoChart, 10000);
        }

        updateChartPeriodically();