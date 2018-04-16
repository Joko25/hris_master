var app = angular.module("ninjaFrame", ['ngMaterial', 'ngRoute']);

app.config(['$locationProvider', function($locationProvider) {
  $locationProvider.hashPrefix('');
}]);