<div><h2 ng-repeat="input in questions">{{input.q5}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q5">
        <tbody>
            <tr>
                <td><input ng-model="valueData.sleep" name="{{input.a}}" type="radio" value="{{input.a}}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.sleep" name="{{input.b}}" type="radio" value="{{input.b}}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.sleep" name="{{input.c}}" type="radio" value="{{input.c}}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.sleep" name="{{input.d}}" type="radio" value="{{input.d}}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q6">Next</button>
<!--    <button ng-show="{{input.b}}" ui-sref="q2b">Next</button>-->
</div>
