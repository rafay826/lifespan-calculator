<h1>We predict you will live till {{ genderAge.result }}.</h1>
<h1 ng-show="health.result <= 70">Based on your answers, your health is in poor condition</h1>
<h1 ng-show="health.result >= 70 && health.result <=80">Based on your answers, your health is below average</h1>
<h1 ng-show="health.result >= 80">Based on your answers, your health is average</h1>