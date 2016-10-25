/**
 * Created by charliedearce on 10/24/2016.
 */
var myApp = angular.module('myApp', ['ngRoute', 'ngCookies', 'ngMessages', 'angular-loading-bar', 'ngAnimate']);

myApp.config(['$routeProvider', '$locationProvider',
    function ($routeProvider, $locationProvider) {
        $routeProvider.when('/', {
            templateUrl: 'templates/index.html',
            controller: 'indexController'
        });

        $routeProvider.otherwise('/');
    }
]);
//# sourceMappingURL=app.js.map
