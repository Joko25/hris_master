app.config(function($routeProvider){
	$routeProvider
	.when('/',{
		templateUrl : 'app/view/welcome.view.html'/*,
		controller : 'welcomeController'*/
	})
	.when('/menu',{
		templateUrl : 'app/view/menu/read_menu.view.html',
		controller : 'menuController'
	})
	.when('/login',{
		templateUrl : 'app/view/login/login.view.html',
		controller : 'loginController'
	})
	.otherwise({
		redirectTo : '/login'
	})
});