<?php if ($teaser): ?>
<div class="portfolio-main">
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

    <div class="body-portfolio">
        <?php print render($content['body']); ?>
        <br>
        <?php print render($content['field_client']); ?>
        <?php print render($content['field_date']); ?>
    </div>

    <div class="image-portfolio">
        <?php print render($content['field_image']); ?>
    </div>

</div>
<?php else: ?>
    <?php print render($content['body']); ?>
    <?php print render($content['field_image']); ?>
    <?php print render($content['field_date']); ?>
    <?php print render($content['field_client']); ?>
    <?php print render($content['field_time']); ?>
    <?php print render($content['field_team']); ?>

<?php endif ?>
