let alert_flag = 1;

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
setInterval(updateAlertMessage, 3000);