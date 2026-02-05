<?php
use Illuminate\Support\Facades\Hash;
$contrasena = 'ironman27';
$hash = Hash::make($contrasena);
echo "La contraseña es: " . $hash . "<br>";