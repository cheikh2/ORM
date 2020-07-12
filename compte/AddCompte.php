<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../bootstrap.php';

$compte = new Compte;

$compte->setNumAgence("numOrmAgence");
$compte->setNumCompte("numOrmCompte");
$compte->setRib("ribOrm");
$compte->setMontant(2000000);
$compte->setDateDebut(date("Y-m-d", strtotime("2020-12-11")));
$compte->setDateFin(date("Y-m-d", strtotime("2025-12-11")));

$entityManager->persist($compte);
$entityManager->flush();

echo $compte->getId();