<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
),
  '#traitMethodOverrides' => array (
  'controllers\\UsersController' => 
  array (
  ),
),
  'controllers\\UsersController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/api/v1/users"),
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\rest\\RestAnnotation', "resource"=>"models\Users")
  ),
  'controllers\\UsersController::getUSer' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/{userId}", "methods" => ["get"], "requirements"=>["userId"=>"\d+"]),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'int', 'name' => 'userId')
  ),
  'controllers\\UsersController::createUser' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "methods"=>["post"])
  ),
  'controllers\\UsersController::updateUser' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "methods"=>["patch"])
  ),
  'controllers\\UsersController::deleteUser' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "{userId}", "methods" => ["delete"], "requirements" => ["userId" => "\d+"]),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'int', 'name' => 'userId')
  ),
  'controllers\\UsersController::loginUser' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/connect", "methods" => ["post"])
  ),
);

