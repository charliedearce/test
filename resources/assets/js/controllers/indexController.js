/**
 * Created by charliedearce on 10/24/2016.
 */
myApp.controller('indexController', ['$scope' , '$timeout', 'indexModel', '$location', function($scope, $timeout, indexModel, $location) {

    var a = randomNumber('val1');
    var b = randomNumber('val2');
    var c = randchar();
    var myasnwer = test(a,b,c);
    captcha()

    function randchar() {
        var sym = "";
        var str = '-+';
        for( var i=0; i < 1; i++ )
            sym += str.charAt(Math.floor(Math.random() * str.length));
        return sym;
    }
    function randomNumber($test1) {
        var value;
        if($test1 == 'val1'){
            value = Math.floor((Math.random()*50) + 15);
        } else if($test1 == 'val2') {
            value = Math.floor((Math.random()*10) + 1);
        }
        return value;
    }
    function captcha(){
        $scope.valone = a;
        $scope.valtwo = b;
        $scope.operator = c;
    }

    function test($val1, $val2, $sym) {
        var answer;
    if ($sym == '-') {
        answer =  $val1 - $val2;
    } else {
        answer = $val2 + $val1;
    }
    return answer;
    }

    angular.extend($scope, {
        newMessage: {},
        errorDiv: false,
        errorMessage: []
    });

    /*Functions*/
    angular.extend($scope,$timeout,$location, {
        sendMessage: function (sendForm) {

            if(sendForm.$valid) {
                if(myasnwer == $scope.newMessage.answer){
                    $scope.formSubmitted = false;
                   indexModel.saveMessage($scope.newMessage).success(function (response) {
                        $scope.showSuccess = true;
                        console.log(response);

                           $scope.captchaError = false;
                           a = randomNumber('val1');
                           b = randomNumber('val2');
                           c = randchar();
                           myasnwer = test(a,b,c);
                           captcha();

                        $scope.newMessage.messageto = '';
                        $scope.newMessage.messagetext = '';
                        $scope.newMessage.answer = '';

                       $timeout(function () {
                           $scope.showSuccess = false;
                       }, 5000);
                    })
                } else {
                    $scope.formSubmitted = true;
                    console.log('captcha error');
                    $scope.captchaError = true;
                }
            } else {
                $scope.formSubmitted = true;
                console.log('validation error');
            }
        }
    });
}]);