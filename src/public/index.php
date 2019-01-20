<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

#declare API Methods

include 'privacy_policy.html';

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response) {

	$name = $request->getAttribute('name');
	$response->getBody()->write("Hello, Sr. $name");
	
	return $response;
});

$app->post('/citytracks-rt/chunks', function (Request $request, Response $response) {
    	
	$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	$bulk = new MongoDB\Driver\BulkWrite;
			
	$json = json_decode($request->getBody());
	$bulk->insert($json);
	$connection-> executeBulkWrite("citytracks-rt.chunks", $bulk);

	return $response->withStatus(201);	
});

$app->post('/citytracks-rt/locations', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-rt.locations", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/trips', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.trips", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/activity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.activity_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/accelerometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.accelerometer_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/barometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.barometer_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/battery-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.battery_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/bluetooth-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.bluetooth_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/gravity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.gravity_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/gyroscope-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.gyroscope_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/light-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.light_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/linear-accelerometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.linear_accelerometer_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/location-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.location_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/magnetometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.magnetometer_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/network-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.network_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/traffic-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.traffic_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/processor-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.processor_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/proximity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.proximity_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/screen-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.screen_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/temperature-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.temperature_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware/wifi-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.wifi_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware/rotation-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.rotation_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/trips', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.trips", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/activity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.activity_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/accelerometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.accelerometer_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/barometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.barometer_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/battery-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.battery_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/bluetooth-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.bluetooth_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/gravity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.gravity_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/gyroscope-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.gyroscope_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/light-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.light_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/linear-accelerometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.linear_accelerometer_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/location-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.location_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/magnetometer-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.magnetometer_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/network-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.network_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/traffic-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.traffic_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/processor-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.processor_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/proximity-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.proximity_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/screen-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.screen_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/temperature-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.temperature_readings", $bulk);

        return $response->withStatus(201);
});


$app->post('/citytracks-aware-test/wifi-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware.wifi_readings", $bulk);

        return $response->withStatus(201);
});

$app->post('/citytracks-aware-test/rotation-readings', function (Request $request, Response $response) {

        $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;

        $json = json_decode($request->getBody());
        $bulk->insert($json);
        $connection-> executeBulkWrite("citytracks-aware-test.rotation_readings", $bulk);

        return $response->withStatus(201);
});

$app->run();

?>

