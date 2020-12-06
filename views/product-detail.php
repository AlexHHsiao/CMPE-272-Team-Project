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
        <img class="card-img-top" src="../img/burger.jpg" alt="Burger">
        <div class="card-body">
            <h5 class="card-title"><?php $GLOBALS['selectedProduct']?></h5>
            <p class="card-text">
                This is our great product!
            </p>
            <a href="/" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer">
            <small class="text-muted">9/30/2020</small>
        </div>
    </div>
</div>


