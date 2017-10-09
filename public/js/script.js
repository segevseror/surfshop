


String.prototype.permalink = function () {

    return this.toString().trim().toLocaleLowerCase().replace(/ /g, '-');
};
var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('myCtrl', ['$scope', '$http', 'orderByFilter', function ($scope, $http, orderBy) {




        console.log('im here')

        var spl = window.location.href.split('/');
        $http({
            method: "GET",
            url: BASE_URL + "shop/allproducts?segev=" + spl[6],
            dataType: 'json',
        }).then(function mySuccess(response) {
            $scope.products = response.data;
            $productsarr = response.data;
        }, function myError(response) {
            $scope.myWelcome = response.statusText;
        });
        $scope.sortorder = '+name';



        //all Cart ajax
        $http({
            method: "GET",
            url: BASE_URL + "shop/allcartajax",
            dataType: 'json',
        }).then(function mySuccess(responsee) {
            console.log('this is response')
            var carts = responsee.data;
            console.log(carts)

            $scope.carts = responsee.data;
        }, function myError(responsee) {
            $scope.myWelcome = responsee.statusText;
        });
        var i;
        $scope.checkCart = function (id) {



            for (i in $scope.carts) {
                if (id == i) {

                    return true;
                }
            }

        }

        $('#btn-maxmin').on('click', function () {

            var products = [];
            var minl = $('#min1').val();
            var maxl = $('#max1').val();

            for (var x = 0; x < $productsarr.length; x++) {
                if (parseInt($productsarr[x].price) >= minl && parseInt($productsarr[x].price) <= maxl) {

                    products.push($productsarr[x]);

                }
            }
            $scope.products = products;

        })
    }]);


$('.origin-field').on('focusout', function () {


    var str = $(this).val();
    $('.origin-target').val(str.permalink());
});


$('#sm').slideDown(2000).delay(3000).slideUp(1000);
$(document).on("click", ".panel-heading", function () {


})


$(document).on("click", ".add-to-cart", function () {

    var prid = '';
    //var prid = $(this)["0"].dataset.pi;
    if ($(this)["0"].dataset.id) {
        prid = $(this)["0"].dataset.id;
    } else if ($(this)["0"].attributes[2].value) {

        prid = $(this)["0"].attributes[2].value;
    } else {
    }
    ;
    if ($('btn-add-item' + prid).html() != 'In cart') {





        $.ajax({
            url: BASE_URL + 'shop/add-to-cart',
            type: 'GET',
            dataType: 'html',
            data: {'id': prid},
            success: function (request) {

                if (request) {
                    $request = request.split('|');
                    $('.total-cart').html($request['0']);
                    $('#btn-add-item' + prid).html('In cart');
                    $('#alert-item').slideDown().delay(2000).slideUp(1000).html("as <b>" + $request['1'] + '</b> added to cart');
                    $("#ajaxdi").load(location.href + " #ajaxdi")


                }
            }

        });
    }

});
$('.update-quantity').on('click', function () {

    var itemId = $(this).data('id');
    var move = $(this).data('move');
    $.ajax({
        url: BASE_URL + "shop/update-quantity",
        type: 'GET',
        dataType: 'html',
        data: {'itemId': itemId, 'move': move},
        success: function (request) {

            location.reload();
        }
    });
});
function btn_remove_item(idProduct) {


    var idp = idProduct;
    console.log(idProduct)
    if (confirm('are you shure you wont delet this item?')) {

        $.ajax({
            url: BASE_URL + "shop/remove-item",
            type: 'get',
            dataType: 'html',
            data: {'idp': idp},
            success: function (request) {

                $("#btn-group" + idp).load(location.href + " #btn-group" + idp)

                $("#targetajax").load(location.href + " #ajaxdi")


            }
        });
    }


}

$('#searchproduct').on('keyup', function () {

    $ser = $('#searchproduct').val().trim().toLocaleLowerCase();
    if ($ser.length > 2) {


        $.ajax({
            url: BASE_URL + "search",
            type: 'GET',
            dataType: 'json',
            data: {'sch': $ser},
            success: function (response) {


                if (response) {

                    var availableTags = [];
                    $.each(response, function (key, value) {
                        availableTags.push(value.title);
                    });
                    console.log(availableTags);
                    $('#searchproduct').autocomplete({
                        source: availableTags,
                        select: function (event, ui) {

                            $('#searchclick').click();
                        }

                    });
                }
            }
        });
    }
});

