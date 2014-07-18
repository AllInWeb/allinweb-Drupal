<?php

/*
 * theme_pager();
 */

function allinweb_pager($variables) {
    $tags = $variables['tags'];
    $element = $variables['element'];
    $parameters = $variables['parameters'];
    $quantity = $variables['quantity'];
    global $pager_page_array, $pager_total;

    // Calculate various markers within this pager piece:
    // Middle is used to "center" pages around the current page.
    $pager_middle = ceil($quantity / 2);
    // current is the page we are currently paged to
    $pager_current = $pager_page_array[$element] + 1;
    // first is the first page listed by this pager piece (re quantity)
    $pager_first = $pager_current - $pager_middle + 1;
    // last is the last page listed by this pager piece (re quantity)
    $pager_last = $pager_current + $quantity - $pager_middle;
    // max is the maximum page number
    $pager_max = $pager_total[$element];
    // End of marker calculations.

    // Prepare for generation loop.
    $i = $pager_first;
    if ($pager_last > $pager_max) {
        // Adjust "center" if at end of query.
        $i = $i + ($pager_max - $pager_last);
        $pager_last = $pager_max;
    }
    if ($i <= 0) {
        // Adjust "center" if at start of query.
        $pager_last = $pager_last + (1 - $i);
        $i = 1;
    }
    // End of generation loop preparation.


    if ($pager_total[$element] > 1) {


        // When there is more than one page, create the pager list.
        if ($i != $pager_max) {
            if ($i > 1) {
                $items[] = array(
                    'class' => array('pager-ellipsis'),
                    'data' => '…',
                );
            }
            // Now generate the actual pager piece.
            for (; $i <= $pager_last && $i <= $pager_max; $i++) {
                if ($i < $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item'),
                        'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
                    );
                }
                if ($i == $pager_current) {
                    $items[] = array(
                        'class' => array('pager-current'),
                        'data' => $i,
                    );
                }
                if ($i > $pager_current) {
                    $items[] = array(
                        'class' => array('pager-item'),
                        'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
                    );
                }
            }
            if ($i < $pager_max) {
                $items[] = array(
                    'class' => array('pager-ellipsis'),
                    'data' => '…',
                );
            }
        }

        return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
            'items' => $items,
            'attributes' => array('class' => array('pager')),
        ));
    }
}