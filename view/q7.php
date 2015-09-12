
<h1 id="age-result">{{ genderAge.a == true ? $eval(lifeExpectancy.age) - 3 : ""; }}</h1>
<h1 id="age-result">{{ genderAge.b == true ? $eval(lifeExpectancy.age) - 1 : ""; }}</h1>
<!--<h1 id="age-result">{{ genderAge.a && genderAge.b == true ? $eval(lifeExpectancy.age) -4 : ""; }}</h1>-->

<div><h2 ng-repeat="input in questions">{{input.q7}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q7">
        <tbody>
            <tr>
                <td><input ng-model="genderAge.a" name="q7" type="checkbox" value="{{ $eval(lifeExpectancy.age) - 3 }}" ></td>
                <td><label >{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="genderAge.b" name="q7" type="checkbox" value="{{ $eval(lifeExpectancy.age) - 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="genderAge.c" name="q7" type="checkbox" value="{{ lifeExpectancy.age }}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="genderAge.d" name="q7" type="checkbox" value="{{ $eval(lifeExpectancy.age) + 2 }}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input id="" ng-model="genderAge.e" name="q7" type="checkbox" value="{{ $eval(lifeExpectancy.age) + 3 }}" ></td>
                <td><label for="{{input.e}}">{{input.e}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.q8">Next</button>
</div>
