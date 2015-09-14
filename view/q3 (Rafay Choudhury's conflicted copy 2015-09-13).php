<div><h2 ng-repeat="input in questions">{{input.q3}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q3">
        <tbody>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="exercise" type="radio" value="{{ $eval(lifeExpectancy.age) -3 }}" ></td>
                <td><label for="exercise">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="lifeExpectancy.age" name="exercise" type="radio" value="{{ lifeExpectancy.age == malea ? $eval(malea) + 3 : $eval(femalea) + 3 }}" ></td>
                <td><label for="exercise">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.exercise" name="exercise" type="radio" value="{{input.c}}" ></td>
                <td><label for="exercise">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.exercise" name="exercise" type="radio" value="{{input.d}}" ></td>
                <td><label for="exercise">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.exercise" name="exercise" type="radio" value="{{input.e}}" ></td>
                <td><label for="exercise">{{input.e}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q4">Next</button>
</div>
