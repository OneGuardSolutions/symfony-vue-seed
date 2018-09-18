<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $view['slots']->output('title', 'Welcome!') ?></title>
    </head>
    <body>
        <div id="app"></div>
        <script src="<?php echo $view['assets']->getUrl('build/manifest.js') ?>"></script>
        <script src="<?php echo $view['assets']->getUrl('build/vendor.js') ?>"></script>
        <script src="<?php echo $view['assets']->getUrl('build/app.js') ?>"></script>
    </body>
</html>
