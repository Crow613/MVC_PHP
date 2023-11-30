<?php

    namespace Conf\routes;

    class Routes
    {

       public function getConfig()
       {

          return [

                    'GET' => [

                            'user/login' =>['user','login' ],
                            'user/registration'=>['user','registration']

                          ],

                    'POST' => [

                                'user/login' =>['user','login' ],
                                'user/registration'=>['user','registration'],
                                'user/admin' =>['user','admin'],
                                'product/calculator'=>['product','calculator']

                              ],

                    'Delete' => [

                                ]

                  ];

       }

}
