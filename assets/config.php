<?php
// Your API key and weather data endpoint
$api_key = '5bd755699b89f78d34ea4dc34fa29e03';
$city_name = 'NIA Valencia, PH';

// Calculate the date for tomorrow
$tomorrow_date = date('Y-m-d', strtotime('+1 day'));

// Define the API endpoint
$endpoint = "https://api.openweathermap.org/data/2.5/forecast?q=NIA Valencia, PH&appid=5bd755699b89f78d34ea4dc34fa29e03&units=metric";

// Make an HTTP request to the API
$response = file_get_contents($endpoint);

//$randomNumber = rand(1, 5);

// Check if the response is successful and decode JSON
if ($response) {
    $data = json_decode($response, true);

    // Initialize variables for weather data and alert flag
    $weather_data = [];
    $alert_flag = 0;

    if (isset($data['cod']) && $data['cod'] === '200') {
        $forecasts = $data['list'];

        foreach ($forecasts as $forecast) {
            $date_time = $forecast['dt_txt'];
            if (strpos($date_time, $tomorrow_date) === 0) {
                $temperature = $forecast['main']['temp'];
                $humidity = $forecast['main']['humidity'];
                $weather_data_text = $forecast['weather'][0]['description'];

                $weather_data[] = [
                    'date_time' => $date_time,
                    'temperature' => $temperature,
                    'humidity' => $humidity,
                    'weather' => $weather_data_text,
                ];

                if (stripos($weather_data_text, 'heavy thunderstorm') !== false || stripos($weather_data_text, 'thunderstorm') !== false || stripos($weather_data_text, 'heavy rain') !== false) {
                    $alert_flag = 1;
                   
                }
            } 
        }
    }
} else {
    // Handle API request error
    echo 'Failed to fetch weather data.';
}
?>
