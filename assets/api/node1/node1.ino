#include <ESP8266WiFi.h>

#define TRIG_PIN 12
#define ECHO_PIN 14
const char* ssid     = "FAITH WiFi";
const char* password = "";
const char* host = "38.54.80.251";
const char* api = "node1";

// Function to convert centimeters to inches with one decimal place
float cm_to_inches(float cm) {
  // Define the initial values
  float initial_cm = 14.0;
  float initial_inches = 0.0;

  // Calculate the change in inches for every 1 cm decrease
  float inches_per_cm_change = 5.0 / (initial_cm - 2);

  // Calculate the corresponding inches for the given cm
  float inches = initial_inches + (initial_cm - cm) * inches_per_cm_change;

  return inches;
}

void setup() {
  Serial.begin(115200);
  pinMode(TRIG_PIN, OUTPUT);
  pinMode(ECHO_PIN, INPUT);

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  // Triggering the ultrasonic sensor
  digitalWrite(TRIG_PIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIG_PIN, HIGH);
  delayMicroseconds(10);
  digitalWrite(TRIG_PIN, LOW);

  // Reading the echo time
  long duration = pulseIn(ECHO_PIN, HIGH);

  // Calculating the distance in centimeters as a whole number
  int distance_cm_whole = static_cast<int>(duration * 0.034 / 2);

  // Convert distance from cm to inches with one decimal place
  float distance_inches = cm_to_inches(distance_cm_whole);

  // Displaying the distance in centimeters as a whole number and inches with one decimal place on the Serial Monitor
  Serial.print("Distance: ");
  Serial.print(distance_cm_whole);
  Serial.println(" cm");
  Serial.print("Distance in inches: ");
  Serial.print(distance_inches, 1);
  Serial.println(" inches");
  Serial.println(String(api));

  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }

  // This will send the request to the server
  client.print(String("GET http://faithvpn.site/pulangui/assets/api/" + String(api) + "/connect.php?") +
               ("&" + String(api) + "=") + String(distance_inches, 1) +
               " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 1000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }

  // // Read all the lines of the reply from the server and print them to Serial
  // while (client.available()) {
  //   String line = client.readStringUntil('\r');
  //   Serial.print(line);
  // }

  Serial.println();
  Serial.println("closing connection");

  delay(876); // You can adjust the delay based on your needs
}
