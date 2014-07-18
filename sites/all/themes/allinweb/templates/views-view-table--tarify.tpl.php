<table class="tg">
    <?php foreach (taxonomy_get_tree(2) as $tree_item):
        $term = taxonomy_term_load($tree_item->tid);
        $alias = isset($term->field_alias['und'][0]['value']) ? $term->field_alias['und'][0]['value'] : null;
        $orange = isset($term->field_orange['und'][0]['value']) ? $term->field_orange['und'][0]['value'] : null;
        $button = isset($term->field_button['und'][0]['value']) ? $term->field_button['und'][0]['value'] : null;
        ?>

        <tr>
            <?php
                $parents = taxonomy_get_parents($tree_item->tid);
                $children = taxonomy_get_children($tree_item->tid);
                $class = (empty($parents) && !empty($children)) ? "parent-td" : "title-td";
                $class .= !empty($orange) ? " orange-td" : null;
                if (empty($button)){
                    print '<td class="' . $class . '">'.$term->name.'</td>';
                } else {
                    print '<td></td>';
                }

            ?>

            <?php foreach ($rows as $item): ?>
                <?php
                    $class = !empty($item[$alias]) ? "normal-td" : null;
                    $class .= !empty($orange) ? " orange-td" : null;

                    print '<td class="' . $class . '">' . (!empty($item[$alias]) ? $item[$alias] : null) . '</td>';
                ?>
            <?php endforeach ?>
        </tr>

    <?php endforeach ?>
</table>