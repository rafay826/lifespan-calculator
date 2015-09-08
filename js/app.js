var surveyApp = new angular.module('surveyApp', ['ngRoute']);

surveyApp.config(function($routeProvider){
    $routeProvider
    .when('/', {
        templateUrl: 'view/q1.php',
        controller: 'questionController'
    })
    .when('/q2', {
        templateUrl: 'view/q2.php',
        controller: 'questionController'
    })
    .when('/q3', {
        templateUrl: 'view/q3.php',
        controller: 'questionController'
    })
    .otherwise('/', {
        templateUrl: 'view/q1.php',
        controller: 'questionController'
    })
});