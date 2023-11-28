<?php

function clearSlache($clear)
{

    return trim($clear, '/');

}

function reguliar($param)
{

    return '#^'.$param.'$#';

}

function str($string)
{

   return  ucfirst(strtolower($string));

}
