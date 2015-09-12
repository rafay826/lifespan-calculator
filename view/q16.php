<h1 id="age-result">{{ lifeExpectancy.age }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q16}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q16">
        <tbody>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.a}}" type="radio" value="{{ $eval(genderAge.result) - 3 }}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.b}}" type="radio" value="{{ $eval(genderAge.result) - 5 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.c}}" type="radio" value="{{ $eval(genderAge.result) - 2 }}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.d}}" type="radio" value="{{ $eval(genderAge.result) - 6 }}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.e}}" type="radio" value="{{ $eval(genderAge.result) - 3 }}" ></td>
                <td><label for="{{input.e}}">{{input.e}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.e}}" type="radio" value="{{ $eval(genderAge.result) - 2 }}" ></td>
                <td><label for="{{input.f}}">{{input.f}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.e}}" type="radio" value="{{ $eval(genderAge.result) - 5 }}" ></td>
                <td><label for="{{input.g}}">{{input.g}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<h1>We predict you will live till {{ lifeExpectancy.age }}.</h1>
