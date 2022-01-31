<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6">volver a </div>
            <div class="col-md-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'temazo_footer_1',
                    )
                ); ?>
            </div>
            </div>

        </div>
    </div>

</footer>

<div class="footer"><?php wp_footer(); ?></div>

</footer>
</body>
</html>