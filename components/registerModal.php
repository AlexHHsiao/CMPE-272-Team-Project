<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="" onsubmit="return validate(this)">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" name='register' class="btn btn-primary float-right">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validate(form) {
        const {password, username, email} = form;

        if (password.value.trim().length > 0 && username.value.trim().length > 0 && email.value.trim().length > 0) {
            return true;
        } else {
            alert('Please enter required fields');
            return false;
        }
    }
</script>

<?php

registerForm();

function registerForm()
{
    if (isset($_POST["register"])) {
        $conn = $GLOBALS['conn'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $visited = serialize(array());
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $id = uniqid("user");

        $query = "INSERT INTO Persons (Email, Password, Username, Id, Visited)
            VALUES ('$email', '$password', '$username', '$id', '$visited');";

        if ($conn->query($query)) {
            $userData = array();
            $userData['userId'] = $id;
            $userData['username'] = $username;
            $userData['visited'] = array();
            $_SESSION["user"] = $userData;
        } else {
            echo "<script>alert('$conn -> error');</script>";
        }
    }
}

?>