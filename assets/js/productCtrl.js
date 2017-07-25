var listApp = angular.module('listpp', []);

/* variable listApp is  a variable which used to control the array values to show the data to show in view  using the module name 'listApp' with arguments as an array */

/* Initialize the controller by name 'PhoneListCtrl' holds the information of phone in form of array with keys name, snipper, price , quantity */

/* $scope argument passed in function is a key arguments should be passed with exactly the same name */

listApp.controller('productCtrl', function ($scope,$http) {
    $scope.filteredItems =  [];
    $scope.groupedItems  =  [];
    $scope.itemsPerPage  =  3;
    $scope.pagedItems    =  [];
    $scope.currentPage   =  0;

    /** toggleMenu Function to show menu by toggle effect , by default the stage of the menu is false as we click on toggle button, we make it to true or show and reverse on anothe click event. **/

    $scope.menuState = false;
    $scope.add_prod = true;

    $scope.toggleMenu = function() {
        if($scope.menuState) {
            $scope.menuState= false;
        }
        else {
            $scope.menuState= !$scope.menuState.show;
        }
    };

    var container = $('#prod-msg');
    var $form = $('#prod-form');

    /** Fonction pour récupérer tous les produits de la base Mysql **/
    $scope.get_product = function() {
        $http.get("?controller=product&action=listProduct").then(function(response)
        {
            //$scope.product_detail = data;
            $scope.pagedItems = response.data;

        });
    }

    /** Fonction pour ajouter un produit à  la base mysql **/

    $scope.product_submit = function() {
        $http.post('?controller=product&action=addProduct',
            {
                'prod_name'     : $scope.prod_name,
                'prod_desc'     : $scope.prod_desc,
                'prod_price'    : $scope.prod_price,
                'prod_quantity' : $scope.prod_quantity
            }
        )
            .then(function (response) {
                notify(container, response.data, null, null, 'success');
                $form.trigger('reset');
                $scope.get_product();
            }, function(data, status, headers, config){

            });
    }

    /** Fonction pour supprimer un objet de la base Mysql **/

    $scope.prod_delete = function(prod_id) {
        if (confirm('Are you sure to delete this product?')) {
            $http.post('?controller=product&action=deleteProduct',
                {
                    'prod_id'     : prod_id
                }
            )
            .then(function (response) {
                notify(container, response.data, null, null, 'danger');
                $scope.get_product();
            }, function(data, status, headers, config){

            });
        }
    }

    /** Fonction pour récupérer les données d'un produit existant de la base mysql **/

    $scope.prod_edit = function(td) {
        $scope.update_prod = true;
        $scope.update_canc = true;
        $scope.add_prod = false;

        data = td.product;

        /** Affecte les données aux champs **/
        $scope.prod_id          =   data.prod_id;
        $scope.prod_name        =   data.prod_name;
        $scope.prod_desc        =   data.prod_desc;
        $scope.prod_price       =   data.prod_price.substr(0,data.prod_price.length-3).replace('.','');
        $scope.prod_quantity    =   data.prod_quantity;

    }

    /** Fonction pour METTRE A JOUR un produit de la base de données Mysql **/

    $scope.update_product = function() {
        $.post('?controller=product&action=updateProduct',
            {
                'prod_id'       : $scope.prod_id,
                'prod_name'     : $scope.prod_name,
                'prod_desc'     : $scope.prod_desc,
                'prod_price'    : $scope.prod_price,
                'prod_quantity' : $scope.prod_quantity
            }
        )
        .done(function (data) {
            notify(container, data, null, null, 'success');
            $form.trigger('reset');
            $scope.get_product();
            $scope.update_prod = false;
            $scope.update_canc = false;
            $scope.add_prod = true;
        })
        .fail(function(data){

        });
    }

    $scope.update_cancel = function(){
        $scope.update_prod = false;
        $scope.update_canc = false;
        $scope.add_prod = true;
        $form.trigger('reset');
    }


});