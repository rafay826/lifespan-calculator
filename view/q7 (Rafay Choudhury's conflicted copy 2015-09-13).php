<div><h2 ng-repeat="input in questions">{{input.q7}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q7">
        <tbody>
            <tr>
                <td><input ng-model="valueData.history" type="checkbox" value="{{input.a}}" ></td>
                <td><label>{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.history" type="checkbox" value="{{input.b}}" ></td>
                <td><label>{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.history" type="checkbox" value="{{input.c}}" ></td>
                <td><label>{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.history" type="checkbox" value="{{input.d}}" ></td>
                <td><label>{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="valueData.history" type="checkbox" value="{{input.e}}" ></td>
                <td><label>{{input.e}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q8">Next</button>
<!--    <button ng-show="{{input.b}}" ui-sref="q2b">Next</button>-->
</div>
