<!doctype html>
    <!DOCTYPE html>
    <html>
    <head>

    <meta charset="utf-8">
        <title> My Blog</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        
    </head>
    <body>
        
       </body>
       <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
    </body>
    </html>