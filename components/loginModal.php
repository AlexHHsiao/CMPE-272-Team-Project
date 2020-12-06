<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" onsubmit="return validate(this)">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder=" Enter Password">
                    </div>
                    <button type="submit" name='login' class="btn btn-primary float-right">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validate(form) {
        const {password, username} = form;

        if (password.value.trim().length > 0 && username.value.trim().length > 0) {
            return true;
        } else {
            alert('Please enter required fields');
            return false;
        }
    }
</script>

<?php

loginForm();

function loginForm()
{
    if (isset($_POST["login"])) {
        $conn = $GLOBALS['conn'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT Password, Username, Id, Visited FROM Persons WHERE Email='$email'";
        $result =  $conn->query($query);

        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Not Found');</script>";
        } else {
            while ($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['Password'])) {
                    $userData = array();
                    $userData['userId'] = $row['Id'];
                    $userData['username'] = $row['Username'];
                    $userData['visited'] = unserialize($row['Visited']);
                    $_SESSION["user"] = $userData;
                } else {
                    echo "<script>alert('Wrong Password');</script>";
                }
            }
        }
    }
}

?>