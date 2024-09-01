<?php
use Core\Controller;
use Core\Route;

function method($method)
{

      if (in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE'])) {
            return '<input type="hidden" name="_method" value="' . strtoupper($method) . '">';
      }
      return '';
}


function cURL($method, $path, $param)
{
      $ur = curl_init($path);
      curl_setopt($ur, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ur, CURLOPT_CUSTOMREQUEST, $method);
      curl_setopt($ur, CURLOPT_POSTFIELDS, http_build_query(['name' => 'exempal'], ));
      dd($ur);
      return file_chacker_route($path, $param);

}