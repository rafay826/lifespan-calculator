<div><h2 ng-repeat="input in questions">{{input.q3}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q3">
        <tbody>
            <tr>
                <td><input type="radio" value="{{input.a}}" name="survey"></td>
                <td>{{input.a}}</td>
            </tr>
            <tr>
                <td><input type="radio" value="{{input.b}}" name="survey"></td>
                <td>{{input.b}}</td>
            </tr>
            <tr>
                <td><input type="radio" value="{{input.c}}" name="survey"></td>
                <td>{{input.c}}</td>
            </tr>
            <tr>
                <td><input type="radio" value="{{input.d}}" name="survey"></td>
                <td>{{input.d}}</td>
            </tr>
            <tr>
                <td><input type="radio" value="{{input.e}}" name="survey"></td>
                <td>{{input.e}}</td>
            </tr>
        </tbody>
    </table>
</form>