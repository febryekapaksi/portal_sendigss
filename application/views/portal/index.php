<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/images/icon_ssc.png') ?>">
    <title>Sentral Sistem Consulting</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <!-- Header Portal -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="https://sentralsistem.com/" target="_blank">
                    <img src="<?= base_url('assets/images/logo_ssc.png') ?>" alt="Logo SSC" class="logo-img">
                </a>
            </div>
        </div>
    </header>

    <!-- Daftar Website -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <?php foreach ($data as $site): ?>
                <div class="col-md-3">
                    <div class="card card-custom">
                        <a href="<?= $site->url ?>" target="_blank" class="card-link">
                            <div class="card-icon">
                                <img src="<?= base_url('assets/images/' . $site->image) ?>" alt="<?= $site->name ?>" class="card-img">
                            </div>
                            <h5 class="card-title"><?= $site->name ?></h5>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="copyright">
                    &copy; <?= date('Y') ?> Sentral Sistem Consulting. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>