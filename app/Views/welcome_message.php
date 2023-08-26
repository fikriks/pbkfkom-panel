<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel - Paguyuban Barudak Komputer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="mx-auto col-10 col-md-8 col-lg-6 mt-5" style="margin-bottom: 100px;">
                <form class="form-example" action="/" method="post">
                    <?= csrf_field() ?>
                    <h1>Eagle Eye</h1>
                    <p class="description">
                        Panel Paguyuban Barudak Komputer.
                    </p>
                    <!-- Input fields -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Ketikkan nama disini..." name="name" />
                    </div>

                    <button type="submit" class="btn btn-primary btn-customized mt-4">
                        Cari
                    </button>
                </form>
                <!-- Form end -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>