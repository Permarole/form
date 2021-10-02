<?php


$userInfos = $_POST;

echo "Merci $userInfos[user_firstname] $userInfos[user_name] de nous avoir contacté à propos de $userInfos[subject].

Un de nos conseiller vous contactera soit à l’adresse $userInfos[user_email] ou par téléphone au $userInfos[user_phone] dans les plus brefs délais pour traiter votre demande : 

$userInfos[user_message]";

