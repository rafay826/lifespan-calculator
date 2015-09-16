surveyApp.controller('questionController', ['$scope', '$http', function ( $scope, $http ) {
    $http.get("http://localhost:8888/lifespan-calculator/model.json")
         .success( function(data){ 
        $scope.questions = data.questions;
        $scope.answers = data.answers;
    });
    
    $scope.valueData = {};
    $scope.lifeExpectancy = {};
    $scope.health = {};
    $scope.genderAge = {};
    
    $scope.malea = 77;
    $scope.maleb = 78;
    $scope.malec = 79;
    $scope.maled = 81;
    $scope.malee = 84;
    $scope.malef = 88;
    $scope.maleg = 94;
    
    $scope.femalea = 81;
    $scope.femaleb = 82;
    $scope.femalec = 83;
    $scope.femaled = 84;
    $scope.femalee = 86;
    $scope.femalef = 89;
    $scope.femaleg = 94;
    
    $scope.hideBttn = function () {
        
        jQuery(".nxt-bttn button").hide();
        
    };
    
    $scope.showBttn = function () {
        
        jQuery(".nxt-bttn button").show();
        
    };
    
}]);
