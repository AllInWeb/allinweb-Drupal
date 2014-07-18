<?php print render($content['body']); ?>
<?php print render($content['field_termin']); ?>
<?php print render($content['field_price']); ?>

<table class="tg rate-info">
    <?php foreach (taxonomy_get_tree(2) as $tree_item):
        $term = taxonomy_term_load($tree_item->tid);
        $parents = taxonomy_get_parents($tree_item->tid);
        $children = taxonomy_get_children($tree_item->tid);

        if (empty($parents) && empty($children)) {
            continue;
        }

        $alias = isset($term->field_alias['und'][0]['value']) ? $term->field_alias['und'][0]['value'] : null; ?>

        <tr>
            <?php

            $class = (empty($parents) && !empty($children)) ? "parent-td" : "title-td";

            print '<td class="' . $class . '">'.$term->name.'</td>';
            ?>

                <td class="normal-td"><?php print !empty($content[$alias]) ? render($content[$alias]) : '' ?></td>
        </tr>

    <?php endforeach ?>
</table>
