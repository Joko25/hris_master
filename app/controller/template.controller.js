app.controller("sideController", function($scope, $timeout, $mdSidenav, $mdDialog){
	$scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      };
    }

    $scope.isOpen = false;

    $scope.demo = {
	    isOpen: false,
	    count: 0,
	    selectedDirection: 'left'
    };

    var originatorEv;

    $scope.openMenu = function($mdOpenMenu, ev) {
	    console.log(ev);
	    originatorEv = ev;
    	$mdOpenMenu(ev);
    };

    $scope.notificationsEnabled = true;
    $scope.toggleNotifications = function() {
    	$scope.notificationsEnabled = !$scope.notificationsEnabled;
    };

    $scope.showList = function(item){
        console.log($scope.list);
        if ($scope.list == true) {
            $scope.list = item;
        }else{
            $scope.list = item;
        }
    }
});