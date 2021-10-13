#include <Arduino.h>
#include <ESP8266WiFi.h>
#define LED D0
const char* ssid = "AndroidAPAF34";
const char* password = "thga9095";

#include <ESP8266HTTPClient.h>

void setup() {

  Serial.begin(9600);

  Serial.println(" ");
  Serial.println(" ");
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println(" ");
  Serial.println("WiFi connected");

  pinMode(LED, OUTPUT);
  digitalWrite(LED,0);
}

String payload;
void loop() {
  // wait for WiFi connection
  if (WiFi.status() == WL_CONNECTED) {

    HTTPClient http;
    http.begin("http://www.elinstechnologies.com/AKGECB1/SHI1.dat"); //HTTP POST
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");    
    int httpCode = http.GET();   //http.GET();
    if (httpCode == 200)
    {
      payload = http.getString(); //Get the response payload
      Serial.println(payload);
    }
    http.end();  //Close connection
    // id distance-> id=JUV21&distance=21&temp=32&hum=43
    //    String da = String(i); // da=  id=JUV21&cm=23
   
      int len = payload.length(); //getting length of string payload
      int i, L = 0; // here i is for loop and L is for storing string value in the form of integers
      for (i = 0; i <= (len - 1); i++)
      {
        L = (L * 10) + (int)(payload[i] - 48);
      }
      analogWrite(LED, L);
    
    delay(3000);
  }
}
