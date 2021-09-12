<?php

include_once "Company.php";

$cesumar = new Company();
$cesumar->setId(48);
$cesumar->setNome("Unicesumar");
$cesumar->setCnpj ("49342304973204");
$cesumar->setEndereco ("Av. Guedes Ferreira");

echo "<br>";
echo "Minha ID = ".$cesumar->getId(). "<br>";
echo "Nome = ".$cesumar->getNome(). "<br>";
echo "CNPJ = ".$cesumar->getCnpj (). "<br>";
echo "Edereço = ".$cesumar->getEndereco (). "<br>" ;
echo "<br>";

?>