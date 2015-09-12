<div><h2 ng-repeat="input in questions">{{input.q2a}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q2">
        <tbody>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.a}}" type="radio" value="{{malea}}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.b}}" type="radio" value="{{maleb}}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.c}}" type="radio" value="{{malec}}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.d}}" type="radio" value="{{maled}}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.e}}" type="radio" value="{{malee}}" ></td>
                <td><label for="{{input.e}}">{{input.e}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.f}}" type="radio" value="{{malef}}" ></td>
                <td><label for="{{input.f}}">{{input.f}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.g}}" type="radio" value="{{maleg}}" ></td>
                <td><label for="{{input.g}}">{{input.g}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q3">Next</button>
</div>
