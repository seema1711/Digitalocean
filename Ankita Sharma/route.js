cov19app.config(function($stateProvider)
                          { 
                            $stateProvider.caseInsensitiveMatch=true;
                            $stateProvider
                             .state('home',{
                              url:'/',
                              templateUrl:'home.html',
                              controller:'homeCont'
                            })
                          $stateProvider
                             .state('about',{
                              url:'/about',
                              templateUrl:'about.html'
                              
                          })
                         $stateProvider
                             .state('precautions',{
                              url:'/precautions',
                              templateUrl:'precautions.html',
                              controller:'precautionsCont'
                               
                          })
                         $stateProvider
                             .state('india',{
                              url:'/india',
                              templateUrl:'india.html',
                              controller:'indiaCont'
                               
                          })
                           $stateProvider
                             .state('india-analytics',{
                              url:'/india-analytics',
                              templateUrl:'india-analytics.html',
                               controller:'india-analyticsCont'
                               
                          });
                           $stateProvider
                             .state('world-analytics',{
                              url:'/world-analytics',
                              templateUrl:'world-analytics.html'
                              
                               
                          });
                         });