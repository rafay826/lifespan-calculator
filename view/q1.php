<div><h2 ng-repeat="input in questions">{{input.q1}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q1">
        <tbody>
            <tr>
                <td><input type="radio" value="{{input.a}}" name="survey"></td>
                <td>{{input.a}}</td>
            </tr>
            <tr>
                <td><input type="radio" value="{{input.b}}" name="survey"></td>
                <td>{{input.b}}</td>
            </tr>
        </tbody>
    </table>
</form>