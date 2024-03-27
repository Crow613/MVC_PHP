<?php



function fileMethod($path,$files)
{

  foreach ($path as $key => $value) {

    if($value === $files.'.php'){
            $file = $files.'.php';
      return $file;

    }elseif($value === $files.'.html'){

        $file = $files.'.html';

      return $file;

    }
  }
  return $file;

}
