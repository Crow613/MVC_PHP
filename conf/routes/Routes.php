<?php

    namespace Conf\routes;

    class Routes
    {

       public function getConfig()
       {

          return [

                            'GET' => [

                                    'user' =>['user','login' ],
                                    'userregistration'=>['user','registration'],
                                    'user/admin' =>['user','upgrade']


                                      ],

                            'POST' => [

                                       'home' =>['test','index' ],
                                       'home/delete' =>['test','delete'],
                                       'home/update' =>['test','update'],
                                       'home/upgrade' =>['test','upgrade'],
                                       'home/data' =>['test','data']

                                      ],

                          'Delete' => [

                                        'home' =>['test','index' ],
                                        'home' =>['test','index' ],
                                        'home' =>['test','index' ],
                                        'home' =>['test','index' ],

                                      ]

                  ];

       }

}
