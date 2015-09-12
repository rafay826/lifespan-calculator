
<h1 id="age-result">{{ genderAge.result }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q3}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q3">
        <tbody>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) - 3 }}" ></td>
                <td><label for="exercise">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) - 1 }}" ></td>
                <td><label for="exercise">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ lifeExpectancy.age }}" ></td>
                <td><label for="exercise">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) + 2 }}" ></td>
                <td><label for="exercise">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="genderAge.result" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) + 3 }}" ></td>
                <td><label for="exercise">{{input.e}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q4">Next</button>
</div>
