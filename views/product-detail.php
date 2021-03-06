<?php
reviewForm();

function reviewForm()
{
    if (isset($_POST["review"])) {
        global $reviewArray;
        $conn = $GLOBALS['conn'];
        $username = $_SESSION['user']['username'];
        $userId = $_SESSION['user']['userId'];
        $rate = $_POST['rate'];
        $comment = $_POST['comment'];
        $id = $GLOBALS['selectedProduct'];

        $query = "INSERT INTO Reviews (UserId, UserName, Rate, Id, Comment)
            VALUES ('$userId', '$username', '$rate', '$id', '$comment');";

        if ($conn->query($query)) {
            // update local comment
            $review = array(
                'username' => $username,
                'rate' => $rate,
                'comment' => $comment
            );
        } else {
            echo "<script>alert('$conn -> error');</script>";
        }
    }
}

// Fetch comments from db based on id $GLOBALS['selectedProduct']
function readComments()
{
    $id = $GLOBALS['selectedProduct'];
    $conn = $GLOBALS['conn'];
    $sql = "SELECT Comment, Username, Rate FROM reviews WHERE Id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $username = $row["Username"];
            $rate = $row["Rate"];
            $comment = $row["Comment"];


            echo <<<_END
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Rate: $rate</h5>
                    </div>
                    <p class="mb-1">$comment</p>
                    <small>By: $username</small>
                </div>
_END;
        }
    }
}


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .card-container {
        padding: 30px 50px;
    }

    img {
        height: 200px;
        object-fit: cover;
    }

</style>

<div class="card-container">
    <div class="card">
        <img class="card-img-top" src="../img/background.jpg" alt="Burger">
        <div class="card-body">
            <h5 class="card-title"><?php echo $GLOBALS['productData'][$GLOBALS['selectedProduct']] ?></h5>
            <p class="card-text">
                This is our great product!
            </p>
            <a href="/" class="btn btn-primary">Go Back</a>

            <form method="POST" action="" onsubmit="return validate(this)">
                <div class="form-group">
                    <label>Rate this product</label>
                    <select class="form-control" name="rate">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control" rows="3" name="comment"></textarea>
                </div>
                <button type="submit" name='review' class="btn btn-primary">Submit</button>
            </form>

            <div class="list-group">
                <?php
                readComments();
                ?>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">9/30/2020</small>
        </div>
    </div>
</div>

<script>
    function validate(form) {
        const {rate, comment} = form;
        console.log(rate.value, comment.value)
        if (rate.value.trim().length > 0 && comment.value.trim().length > 0) {
            return true;
        } else {
            alert('Please enter required fields');
            return false;
        }
    }
</script>

