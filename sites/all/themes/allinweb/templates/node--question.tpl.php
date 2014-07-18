<?php if ($teaser): ?>

    <div id="accordion-container">
        <div class="grey-line">
            <h2 class="accordion-header"><?php print render($content['question']); ?></h2>
            <div class="accordion-content">
                <p><?php print render($content['answer']); ?></p>
            </div>
        </div>
    </div>

<?php endif ?>