<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Sendigs</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* Background Gradien */
        body {
            background: linear-gradient(135deg, #318ce7, #165baa);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            position: relative;
        }

        /* Header Portal */
        .portal-header {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 20px 50px;
            border-radius: 50px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            margin-top: 40px;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }

        /* Kartu Website */
        .website-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            backdrop-filter: blur(10px);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        .website-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
        }

        .website-card i {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .website-card a {
            text-decoration: none;
            color: white;
        }

        .website-card a:hover {
            text-decoration: none;
            color: #ffeb3b;
        }
    </style>
</head>

<body>
    <!-- Header Portal -->
    <div class="portal-header">
        🌍 Portal Sendigs
    </div>

    <!-- Daftar Website -->
    <div class="container text-center mt-4">
        <div class="row justify-content-center">
            <?php foreach ($data as $site) : ?>
                <div class="col-md-3 col-sm-6">
                    <div class="website-card p-3">
                        <a href="<?= $site->url ?>" target="_blank">
                            <i class="<?= $site->icon ?>"></i>
                            <h5 class="mt-2"><?= $site->name ?></h5>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>