<?php
//-------------------------------------------------------------------------------------------------------------------
$user1 = ['dni' => "88-1316390",'username' => "Brooke", 'userlastname1' => "Malimoe",'correo'=> "o.breshe@upv.es",
    'userlastname2' => "Thomerson", 'password' => "1316390", 'rol' => "PAS"];
$pas1 = (object) $user1;

$user2 = ['dni' => "91-1970980",'username' => "Ondrea", 'userlastname1' => "Brezlaw",'correo'=> "b.maltho@upv.es",
    'userlastname2' => "Sherwill", 'password' => "1970980", 'rol' => "PAS"];
$pas2 = (object) $user2;

$user3 = ['dni' => "01-9218611",'username' => "Lief", 'userlastname1' => "Simants",'correo'=> "l.simdre@epsg.upv.es",
    'userlastname2' => "Dredge", 'password' => "9218611", 'rol' => "Alumno"];
$alumno1 = (object) $user3;

$user4 = ['dni' => "04-1320191",'username' => "Merline", 'userlastname1' => "Kirdsch",'correo'=> "m.kirkam@epsg.upv.es",
    'userlastname2' => "Kampshell", 'password' => "1320191", 'rol' => "Alumno"];
$alumno2 = (object) $user4;

$user5 = ['dni' => "60-4525956",'username' => "Kevan", 'userlastname1' => "Pounds",'correo'=> "m.kirkam@epsg.upv.es",
    'userlastname2' => "Kampshell", 'password' => "1320191", 'rol' => "Alumno"];
$profesor1 = (object) $user5;

$user6 = ['dni' => "64-6055365",'username' => "Luelle", 'userlastname1' => "Pridmore",'correo'=> "m.kirkam@epsg.upv.es",
    'userlastname2' => "Kampshell", 'password' => "1320191", 'rol' => "Alumno"];
$profesor2 = (object) $user6;

$todos_users = [$pas1, $pas2, $alumno1, $alumno2, $profesor1, $profesor2];
//-------------------------------------------------------------------------------------------------------------------
$thisUser = $todos_users[0]; //para entrar a diferentes usuarios, cambiar el numero de casilla.
//-------------------------------------------------------------------------------------------------------------------

?>