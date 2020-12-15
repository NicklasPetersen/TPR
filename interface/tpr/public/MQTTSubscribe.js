'use strict'

const mqtt = require('mqtt');

function subscribe(topic) {

  var clientId = 'mqttjs_' + Math.random().toString(16).substr(2, 8)

  // Create a MQTT connection
  console.log('connecting mqtt client')
  var client  = mqtt.connect({host: '192.168.29.56', port: 1883});
  console.log('Connected');
  client.on('error', function (err) {
    console.log(err)
    client.end()
  })

  // Connect
  client.on('connect', function () {
    // Subscribe to a specific topic
    client.subscribe(topic, function (err) {
      if (!err) {

        client.publish('php-mqtt/testing', 'topic')
      }
    })
  })

  client.on('message', function (topic, message) {
    // message is Buffer
    console.log(message.toString())
    client.end()
    return message;
  })

  client.on('close', function () {
    console.log(clientId + ' disconnected')
  })

}


subscribe('mqtt/plc2hmi/alarm');
module.exports = subscribe;
