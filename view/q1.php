<div><h2 ng-repeat="input in questions">{{input.q1}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q1">
        <tbody>
            <tr>
                <td><input ng-model="valueData.gender" name="{{input.a}}" type="radio" value="{{input.a}}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.gender" name="{{input.b}}" type="radio" value="{{input.b}}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ng-show="valueData.gender == 'Male'" ui-sref="questions.q2a">Next</button>
    <button ng-show="valueData.gender == 'Female'" ui-sref="questions.q2b">Next</button>
<!--    <button ng-switch-default ui-sref="q2b">Next</button>-->
</div>