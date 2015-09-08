surveyApp.controller('questionController', ['$scope', '$http', function ( $scope, $http ) {
    $http.get("http://localhost:8888/survey-form/model.json")
         .success( function(data){ 
        $scope.questions = data.questions;
        $scope.answers = data.answers;
    } );
}]);
