<?php
// Tipos de usuario en la DB
$user_type = [
  "superadmin" => 1,
  "admin" => 2,
  "vendedor" => 3,
];
$user_type = json_decode(json_encode($user_type));

define('USER_TYPE', $user_type);

// Tipos de locales/locations
$locations = [
  "store" => 1,
  "warehouse" => 2,
];
$locations = json_decode(json_encode($locations));
define("LOCATION", $locations);

// Tipos de operaciones
$type_operation = [
  "output" => 1,
  "input" => 0,
];
$type_operation = json_decode(json_encode($type_operation));
define("OPERATION", $type_operation);

// Estados en el sistema
$state = [
  "active" => 1,
  "inactive" => 0,
];
$state = json_decode(json_encode($state));
define("STATE", $state);

// estados de un producto en inventario
$state_in = [
  "stock" => 1,
  "damaged" => 2,
  "sold" => 3,
];
$state_in = json_decode(json_encode($state_in));
define("STATE_IN", $state_in);

// estados de un producto en inventario
$type_proof = [
  "boleta" => 1,
  "factura" => 2,
];
$type_proof = json_decode(json_encode($type_proof));
define("TYPE_PROOF", $type_proof);

// addfor
$add_for = [
  "quantity" => 1,
  "serial_number" => 2,
];
$add_for = json_decode(json_encode($add_for));
define("ADD_FOR", $add_for);
// addfor
$discount_for = [
  "percentage" => 1,
  "absolute" => 2,
];
$discount_for = json_decode(json_encode($discount_for));
define("DISCOUNT", $discount_for);

// IGV
define("IGV", 18);

const MONTHS = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
