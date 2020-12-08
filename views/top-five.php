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
                <a href="/product/product6" class="list-group-item list-group-item-action">Product 6</a>
                <a href="/product/product7" class="list-group-item list-group-item-action">Product 7</a>
                <a href="/product/product8" class="list-group-item list-group-item-action">Product 8</a>
                <a href="/product/product9" class="list-group-item list-group-item-action">Product 9</a>
                <a href="/product/product10" class="list-group-item list-group-item-action">Product 10</a>
            </div>
        </div>
    </div>
</div>

