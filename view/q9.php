<div><h2 ng-repeat="input in questions">{{input.q9}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q9">
        <tbody>
            <tr>
                <td><input ng-model="health.result" name="q7" type="radio" value="{{ $eval(health.rate) - 1 }}" ></td>
                <td><label >{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="health.result" name="q7" type="radio" value="{{ $eval(health.rate) + 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q10">Next</button>
</div>
