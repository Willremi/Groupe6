<?php

function showListPays($nomContinent) {
    //API pour récupérer la liste des pays par continent
    $url = file_get_contents('https://restcountries.eu/rest/v2/region/'.$nomContinent.'?fields=name;translations');

    $tab = json_decode($url);
}