/**
 * Created by charliedearce on 10/24/2016.
 */
myApp.factory('indexModel', ['$http', function ($http) {
    return {
        saveMessage: function (newMessage) {
            return $http({
                headers: {
                    'Content-Type': 'application/json'
                },
                url: baseUrl + 'send',
                method: "POST",
                data: {
                    MessageTo:  newMessage.messageto,
                    MessageText: newMessage.messagetext
                }
            });
        }
    };
}])