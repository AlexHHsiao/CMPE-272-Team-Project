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
        <h5 class="card-header">Top 5 Rating Product &#128293</h5>
        <div class="card-body">
            <h5 class="list-group-item">
                Product Name &#128717
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <span style="float: right;">Total Rating</span>
            </h5>
            <div class="list-group">
                <?php
                    getTop5();
                ?>
            </div>
        </div>
    </div>
</div>

<?php


function getTop5()
{
    $id = $GLOBALS['selectedProduct'];
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM (SELECT Id, SUM(Rate) AS totalRate FROM Reviews GROUP BY Id) AS RESULT ORDER BY totalRate DESC LIMIT 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sumRate = $row["totalRate"];
            $productId = $row["Id"];
            echo <<<_END
                <a href="/product/$productId" class="list-group-item list-group-item-action">
                    Product $productId
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span style="float: right; "class="badge badge-primary">$sumRate</span>
                </a>
_END;
        }
    }
}
?>
