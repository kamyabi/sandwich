<?php
$con = new mysqli("localhost","root","","gkhalifeh");

if ($con -> connect_errno) {
  echo "Failed to connect to DATABASE: " . $con -> connect_error;
  exit();
}