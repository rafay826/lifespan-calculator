<div><h2 ng-repeat="input in questions">{{input.q2b}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q2">
        <tbody>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.a}}" type="radio" value="{{femalea}}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.b}}" type="radio" value="{{femaleb}}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.c}}" type="radio" value="{{femalec}}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.d}}" type="radio" value="{{femaled}}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.e}}" type="radio" value="{{femalee}}" ></td>
                <td><label for="{{input.e}}">{{input.e}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.f}}" type="radio" value="{{femalef}}" ></td>
                <td><label for="{{input.f}}">{{input.f}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="{{input.g}}" type="radio" value="{{femaleg}}" ></td>
                <td><label for="{{input.g}}">{{input.g}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q3">Next</button>
</div>
