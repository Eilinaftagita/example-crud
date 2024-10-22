<?php
$connect = new mysqli("localhost","root","","latihan");

// Check connection
if ($connect -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connect -> connect_error;
  exit();
}
?>