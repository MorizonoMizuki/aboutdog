<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/leset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
  <div class="container">
        <header>
            <?php if (wp_get_document_title()): ?>
               <?php echo wp_get_document_title(); ?>
            <?php elseif (p_get_document_title()): ?>
                <h1>About Dog</h1>
            <?php endif; ?>
            <nav>
                <ul class="hader-right">
                    <li>TOP</li>
                   <li>Latest</li>
                   <li>Contact</li>
                </ul>
            </nav>
       

        </header>