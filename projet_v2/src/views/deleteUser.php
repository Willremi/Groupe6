<?php
$login = $_SESSION['login'];

$user->setPseudo($login);
$data = $user->selectByPseudo();

$idUser = $data->idUser;

$user->setId($idUser);
$user->delete();