
<h1 id="age-result">{{ genderAge.result }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q13}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q13">
        <tbody>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) - 3 }}" ></td>
                <td><label for="exercise">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) }}" ></td>
                <td><label for="exercise">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) + 2 }}" ></td>
                <td><label for="exercise">{{input.c}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q14">Next</button>
</div>
