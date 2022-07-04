<?php

Namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Provider;
use APP\Model\Address;

if (empty($_POST)) {
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$providername = $_POST["providername"];
$providercnpj = $_POST["providercnpj"];
$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

$error = array();

if(!Validation::validateProvidercnpj($providercnpj))
{
    array_push($error, 'O número do cnpj deve obrigatoriamente 14 caracteres!');
}

if(!Validation::validateProviderName($providername))
{
    array_push($error, 'O nome do provedor deve conter no mínimo 3 caracteres!');
}

if(!Validation::validatepublicPlace($publicPlace))
{
    array_push($error, 'O nome deve conter no mínimo 3 caracteres!');
}

if(!Validation::validatestreetNumber($streetNumber))
{
    array_push($error, 'O número da rua deve conter no mínimo 1 caractere!');
}

if(!Validation::validateneighborhood($neighborhood))
{
    array_push($error, 'O nome do bairro deve conter pelo menos 4 caracteres!');
}

if(!Validation::validatecity($city))
{
    array_push($error, 'O nome da cidade deve conter no mínimo 3 caracteres!');
}

if(!Validation::validatepostalCode($postalCode))
{
    array_push($error, 'O código postal deve conter no mínimo 8 caracteres!');
}

if($error){ // Se o array NÃO estiver vazio
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $address = new Address(
        publicPlace: $publicPlace,
        streetNumber: $streetNumber,
        neighborhood: $neighborhood,
        city: $city,
        postalCode: $postalCode
    );

    $Provider = new Provider(
        providername: $providername,
        providercnpj: $providercnpj,
        address: $address
    );

    Redirect::redirect(
        message:'fornecedor cadastrado com sucesso.'
    );
}
?>