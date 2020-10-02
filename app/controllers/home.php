<?php
class Home extends Controller{
public function index($name1 = '', $lastname1 = ''){
    $user = Controller::model('User');
    //echo "Estamos en el index. Hola ".$name. ' '.$lastname;
    $user ->name = $name1;
    $user ->lastname = $lastname1;
    //echo $user->name;
    //echo $user->lastname;
    Controller::view('home/index', ['name' => $user->name]);    
}
}