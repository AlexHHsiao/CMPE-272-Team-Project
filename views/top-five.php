<?php
$GLOBALS['currentPage'] = 'topFive';
require_once './components/header.php';

// display top five whatever
?>

<style>
    .card-container {
        padding: 30px 50px;
    }
</style>

<div class="card-container">
    <div class="card">
        <h5 class="card-header">Top Five</h5>
        <div class="card-body">
            <div class="list-group">
                <a href="/product/id" class="list-group-item list-group-item-action">Product Name</a>
                <a href="/product/product2" class="list-group-item list-group-item-action">Product 2</a>
                <a href="/product/product3" class="list-group-item list-group-item-action">Product 3</a>
                <a href="/product/product4" class="list-group-item list-group-item-action">Product 4</a>
                <a href="/product/product5" class="list-group-item list-group-item-action">Product 5</a>
                <a href="/product/product5" class="list-group-item list-group-item-action">Product 5</a>
            </div>
        </div>
    </div>
</div>

