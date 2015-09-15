<h1 id="age-result">{{ health.rate }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q8}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q8">
        <tbody>
            <tr>
                <td><input ng-model="health.rate" name="q7" type="radio" value="{{ $eval(genderAge.result) - 1 }}" ></td>
                <td><label >{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="health.rate" name="q7" type="radio" value="{{ $eval(genderAge.result) + 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q9">Next</button>
</div>
