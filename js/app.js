var surveyApp = new angular.module('surveyApp', ['ngAnimate', 'ui.router', 'ngRoute']);

surveyApp.config(function($stateProvider, $urlRouterProvider){
    $stateProvider
    .state('questions', {
        url: '/questions',
        templateUrl: 'view/questions.php',
        controller: 'questionController'
    })
    .state('questions.q1', {
        url: '/q1',
        templateUrl: 'view/q1.php'
    })
    .state('questions.q2a', {
        url: '/q2a',
        templateUrl: 'view/q2a.php'
    })
    .state('questions.q2b', {
        url: '/q2b',
        templateUrl: 'view/q2b.php'
    })
    .state('questions.q3', {
        url: '/q3',
        templateUrl: 'view/q3.php'
    })
    .state('questions.q4', {
        url: '/q4',
        templateUrl: 'view/q4.php'
    })
    .state('questions.q5', {
        url: '/q5',
        templateUrl: 'view/q5.php'
    })
    .state('questions.q6', {
        url: '/q6',
        templateUrl: 'view/q6.php'
    })
    .state('questions.q7', {
        url: '/q7',
        templateUrl: 'view/q7.php'
    })
    .state('questions.q8', {
        url: '/q8',
        templateUrl: 'view/q8.php'
    })
    .state('questions.q9', {
        url: '/q9',
        templateUrl: 'view/q9.php'
    })
    .state('questions.q10', {
        url: '/q10',
        templateUrl: 'view/q10.php'
    })
    .state('questions.q11', {
        url: '/q11',
        templateUrl: 'view/q11.php'
    })
    .state('questions.q12', {
        url: '/q12',
        templateUrl: 'view/q12.php'
    })
    .state('questions.q13', {
        url: '/q13',
        templateUrl: 'view/q13.php'
    })
    .state('questions.q14', {
        url: '/q14',
        templateUrl: 'view/q14.php'
    })
    .state('questions.q15', {
        url: '/q15',
        templateUrl: 'view/q15.php'
    })
    .state('questions.q16', {
        url: '/q16',
        templateUrl: 'view/q16.php'
    });
    
    $urlRouterProvider.otherwise('/questions/q1');
});