
<h1 id="age-result">{{ genderAge.result }}</h1>

<div><h2 ng-repeat="input in questions">{{input.q17}}</h2></div>

<form class="surveyForm">
    <table class="surveyTable" ng-repeat="input in answers[0].q17">
        <tbody>
            <tr>
                <td><input ng-model="health.result" name="{{input.a}}" type="radio" value="{{ $eval(health.rate) - 2 }}" ></td>
                <td><label for="{{input.a}}">{{input.a}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="{{input.b}}" type="radio" value="{{ $eval(health.rate) - 1 }}" ></td>
                <td><label for="{{input.b}}">{{input.b}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="{{input.c}}" type="radio" value="{{ health.rate }}" ></td>
                <td><label for="{{input.c}}">{{input.c}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="{{input.d}}" type="radio" value="{{ $eval(health.rate) - 1 }}" ></td>
                <td><label for="{{input.d}}">{{input.d}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="{{input.e}}" type="radio" value="{{ $eval(health.rate) - 1 }}" ></td>
                <td><label for="{{input.e}}">{{input.e}}</label></td>
            </tr>
            <tr>
                <td><input ng-model="health.result" name="{{input.f}}" type="radio" value="{{ $eval(health.rate) - 1 }}" ></td>
                <td><label for="{{input.f}}">{{input.f}}</label></td>
            </tr>
        </tbody>
    </table>
</form>

<div class="nxt-bttn">
    <button ui-sref="questions.answer">Next</button>
</div>
