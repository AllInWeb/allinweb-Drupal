<?php if ($teaser): ?>

    <div id="accordion-container">
        <h2 class="accordion-header"><?php print render($content['question']); ?></h2>
        <div class="accordion-content">
            <p><?php print render($content['answer']); ?></p>
        </div>
    </div>

<?php endif ?>