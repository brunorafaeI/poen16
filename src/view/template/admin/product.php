<?php
/**
 * Created by PhpStorm.
 * User: POE-JAVA-09
 * Date: 25/07/2017
 * Time: 11:25
 */
?>
<div ng-controller="productCtrl">

    <h3>Ajouter un produit</h3>
    <p> Un CRUD AngularJS avec PHP/MySQL : [Créer, Lire, Mettre à jour]</p>
    <form name="add_product" class="form-inline form-group" id="prod-form">
        <input type="hidden"     name="prod_id"          ng-model="prod_id">
        <input type="text"       name="prod_name"        class="form-control"   ng-model="prod_name"        placeholder="Product Name">
        <input type="text"       name="prod_desc"        class="form-control"   ng-model="prod_desc"        placeholder="Description">
        <input type="text"       name="prod_price"       class="form-control"   ng-model="prod_price"       placeholder="Price">
        <input type="text"       name="prod_quantity"    class="form-control"   ng-model="prod_quantity"    placeholder="Quantity">
        <input type="button"     name="submit_product"   class="btn btn-primary"   ng-show='add_prod'
               value="Ajouter"
               ng-click="product_submit()">
        <input type="button"     name="update_product"   class="btn btn-primary"   ng-show='update_prod'
               value="Update" ng-click="update_product()">
        <input type="button"     name="update_cancel"   class="btn btn-danger"   ng-show='update_canc'
               value="Cancel" ng-click="update_cancel()">
    </form>

    <div class="input-group pull-right">
        <input type="search" class="form-control" ng-model="Search" placeholder="Search">
    </div>
    <br/>

    <div id="prod-msg"></div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Liste de produits</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                <th>ID              <a ng-click="sort_by('id')"><i class="icon-sort"></i></a></th>
                <th>Nom             <a ng-click="sort_by('name')"><i class="icon-sort"></i></a></th>
                <th>Description     <a ng-click="sort_by('description')"><i class="icon-sort"></i></a></th>
                <th>Prix            <a ng-click="sort_by('field3')"><i class="icon-sort"></i></a></th>
                <th>Quantité        <a ng-click="sort_by('field4')"><i class="icon-sort"></th>
                <th>Action          <a ng-click="sort_by('field5')"><i class="icon-sort"></i></a></th>
                </thead>

                <tbody ng-init="get_product()">
                <tr ng-repeat="product in pagedItems | filter:Search">
                    <td>{{ product.prod_id }}</td>
                    <td>{{ product.prod_name | uppercase }}</td>
                    <td>{{ product.prod_desc }}</td>
                    <td>{{ product.prod_price }}</td>
                    <td>{{ product.prod_quantity }}</td>
                    <td>
                        <a href="javascript:void(0)" ng-click="prod_edit(this)">
                            <i class="fa fa-edit"> Modifier</i>
                        </a> |
                        <a href="javascript:void(0)" ng-click="prod_delete(product.prod_id)">
                            <i class="fa fa-trash"> Supprimer</i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
