<h1 id="age-result">{{ lifeExpectancy.age }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q15}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q15">
        <tbody>
            <tr>
                <td><input ng-model="health.rate" name="{{input.a}}" type="radio" value="{{ $eval(health.result) }}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.rate" name="{{input.b}}" type="radio" value="{{ $eval(health.result) - 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.rate" name="{{input.c}}" type="radio" value="{{ $eval(health.result) - 2 }}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q16">Next</button>
</div>
