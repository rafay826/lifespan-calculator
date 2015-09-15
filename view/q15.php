
<h1 id="age-result">{{ genderAge.result }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q15}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q15">
        <tbody>
            <tr>
                <td><input ng-model="health.result" name="exercise" type="radio" value="{{ $eval(health.rate) - 3 }}" ></td>
                <td><label for="exercise">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="exercise" type="radio" value="{{ $eval(health.rate) }}" ></td>
                <td><label for="exercise">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="exercise" type="radio" value="{{ $eval(health.rate) + 2 }}" ></td>
                <td><label for="exercise">{{input.c}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q16">Next</button>
</div>
