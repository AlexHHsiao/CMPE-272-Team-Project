<?php
$GLOBALS['currentPage'] = 'visited';
require_once './components/header.php';
?>

<style>
    .card-container {
        padding: 30px 50px;
    }

</style>

<div class="card-container">
    <div class="card">
        <h5 class="card-header">Most Visited Products</h5>
        <div class="card-body">
            <div class="list-group">
                <?php
                foreach ($_SESSION['user']['visited'] as $value) {
                    $id = $value['id'];
                    $name = $value['name'];
                    echo <<<_END
<a href="/product/$id" class="list-group-item list-group-item-action">$name</a>
_END;
                }
                ?>
            </div>
        </div>
    </div>
</div>


