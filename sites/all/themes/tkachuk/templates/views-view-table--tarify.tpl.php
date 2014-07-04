<table class="tg">
    <?php foreach (taxonomy_get_tree(2) as $tree_item):
        $term = taxonomy_term_load($tree_item->tid);
        $alias = isset($term->field_alias['und'][0]['value']) ? $term->field_alias['und'][0]['value'] : null; ?>

        <tr>
            <td><?php print $term->name ?></td>

            <?php foreach ($rows as $item): ?>
                <td><?php print !empty($item[$alias]) ? $item[$alias] : '' ?></td>
            <?php endforeach ?>
        </tr>

    <?php endforeach ?>
</table>