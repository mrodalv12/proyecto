<?php
//-------------------------------------------------------------------------------------------------------------------
$user1 = ['username' => "Quiannette", 'correo'=> "mjra150717@gmail.com", 'rol' => "pas"];
$pas = (object) $user1;
$user2 = ['username' => "Mario", 'correo'=> "supermariobros@gmail.com", 'rol' =>"alumno"];
$alumno = (object) $user2;
$user3 = ['username'=> "minerva", 'correo'=> "nervada@gmail.com", 'rol'=>"profesor"];
$profesor = (object) $user3;

$todos_users = [$pas, $alumno, $profesor];
//-------------------------------------------------------------------------------------------------------------------
$thisUser = $todos_users[1]; //para entrar a diferentes usuarios, cambiar el numero de casilla.
//-------------------------------------------------------------------------------------------------------------------

?>