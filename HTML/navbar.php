<!DOCTYPE html>
<html lang="en">
<!-- navbar.php -->

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#00D4FF">

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand"><img src='..\image\Logo.png'width=70px style='border-radius:180px'></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="..\PHP\display_products.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..\PHP\product_card.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link a_tage" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"
                            style="color:white;"></i></a>
                </li>
            </ul>
            <form class="form-inline ml-auto" action="/">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
                <a id="a_tage" href="..\HTML\login.php" target="_blank" rel="noopener noreferrer">
                    <span id="logout" class="login  ml-1" style="color: white;">Login</span>
                </a>
            </form>
        </div>
    </nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
<script>
    let is_logged_in = <?php echo $_SESSION['is_logged_in'] ? 'true' : 'false'; ?>;

    if (is_logged_in) {
        let logout = document.getElementById('logout');
        let a_tage = document.getElementById('a_tage');
        logout.innerHTML = 'Logout';
        a_tage.href = "logout_process.php";
    }
</script>