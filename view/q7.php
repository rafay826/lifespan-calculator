<h1 id="age-result">{{ genderAge.result }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q7}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q7">
        <tbody>
            <tr>
                <td><input ng-model="genderAge.result" name="q7" type="radio" value="{{ $eval(lifeExpectancy.age) - 1 }}" ></td>
                <td><label >{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="genderAge.result" name="q7" type="radio" value="{{ $eval(lifeExpectancy.age) + 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q8">Next</button>
</div>
