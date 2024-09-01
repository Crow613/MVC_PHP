<?php

namespace Core;

use Exception;

class Response
{
        public function sheer($object)
        {
                try {
                        echo $object;
                } catch (Exception $e) {
                        echo 'ERROR' . $e->getMessage();

                }

        }

}