<?php if ($teaser): ?>
    <div class="portfolio">
        <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <div class="portfolio-full">
            <?php print render($content['field_image'][0]); ?>
        </div>
        <div class="gallery">
            <?php print render($content['field_image']); ?>
        </div>
        <div class="clear"></div>
        <?php print render($content['body']); ?>
    </div>

<?php else: ?>
    <?php print render($content['body']); ?>
    <?php print render($content['field_image']); ?>
    <?php print render($content['field_date']); ?>
    <?php print render($content['field_client']); ?>
    <?php print render($content['field_time']); ?>
    <?php print render($content['field_team']); ?>

<?php endif ?>
