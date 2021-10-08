<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Caculator</title>

    <!-- CSS CDN LINKS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- FONTAWSOME CDN CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <!-- BOOTSTRAP CDN FAIL -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- CUSTOM CSS FILES -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body id="site_body">

    <div class="d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="container">
            <h1 class="mb-5">PHP Calculator</h1>
            <form action="inc/error.inc.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <h2>First Number</h2>
                        <div class="form-group input-group">
                            <input id="no1" class="form-control form-control-lg" type="number" name="num_1" id=""
                                placeholder="Number One">
                        </div>
                    </div>
                    <div class="text-center mt-5 col-md-4">
                        <button type="submit"><i class="p-3 fas fa-plus"></i></button></i>
                        <button type="submit"><i class="p-3 fas fa-divide"></i></button></i>
                        <button type="submit"><i class="p-3 fas fa-minus"></i></button></i>
                        <button type="submit"><i class="p-3 fas fa-times"></i></button></i>
                    </div>
                    <div class=col-md-4>
                        <h2>Second Number</h2>
                        <div class="form-group input-group">
                            <input id="no2" class="form-control form-control-lg" type="number" name="num_2" id=""
                                placeholder="Number Two">
                        </div>
                    </div>
                </div>
                <div class="mt-5 col-md-12">
                    <div class="form-group input-group">
                        <input readonly="readonly" class="form-control form-control-lg" type="text" name="results" id=""
                            placeholder="Results">
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>

    <!-- BOOTSTRAP JS FILES -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>