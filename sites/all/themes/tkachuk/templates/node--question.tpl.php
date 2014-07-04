<?php if ($teaser): ?>
    <div class="faq-main">
        <div class="question-block">
            <?php print render($content['question']); ?>
        </div>
        <div class="answer-block">
            <?php print render($content['answer']); ?>
        </div>
    </div>
<?php endif ?>