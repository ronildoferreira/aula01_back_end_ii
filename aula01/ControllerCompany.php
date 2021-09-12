<?php

include_once "Company.php";

$cesumar = new Company();
$cesumar->setId(48);
$cesumar->setNome("Unicesumar");
$cesumar->setCnpj ("49342304973204");
$cesumar->setCidade ("Sussuapara");
$cesumar->setEndereco ("Av. Guedes Ferreira");

$cesumar->listar();

?>