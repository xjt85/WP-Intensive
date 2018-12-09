<?php

function filter_deals_example($data)
{
//массив аргументов
    $args = array(
        'posts_per_page' => '5',
        'tax_query' => array(
            'relation' => 'AND', //означает, что все условия в фильтре в header-е обязательны
        ),
    );
//если значение установлено
    if (isset($data['location']) && $data['location'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'location',
            'field' => 'name',
            'terms' => array($data['location']),
        ));
        echo '<span style="color: red;">';
        print_r(array($data['location']));
        echo '</span>';
    }
    ;
    //если значение установлено
    if (isset($data['type']) && $data['type'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'type',
            'field' => 'name',
            'terms' => array($data['type']),
        ));
        echo '<span style="color: green; font-weight: bold;">';
        print_r(array($data['type']));
        echo '</span>';
    }
    ;
    //если значение установлено
    if (isset($data['price']) && $data['price'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'price',
            'field' => 'name',
            'terms' => array($data['price']), //в виде массива,т.к. может принимать несколько значений
        ));
        echo '<span style="color: blue;">';
        print_r(array($data['price']));
        echo '</span>';
    }
    ;

    echo '<span style="color: olive; font-weight: bold;">';
    print_r($args);
    echo '</span>';
    echo '<br>';
//все вышеперечисленно вставляем в переменную
    $custom_filter = new WP_Query($args);

    if (!empty($_POST)) {
        if ($custom_filter->have_posts()) {
            /* Start the Loop */
            while ($custom_filter->have_posts()) {
                $custom_filter->the_post();
                the_title();
                echo '<br>';
            }
            ;
        } else {
            echo 'No posts';
        }
        ;
    } else {
        $default_query = new WP_Query(array('post_type' => 'deals', 'post_per_page' => 5));
        $i = 0;
        if ($default_query->have_posts()) {
            /* Start the Loop */
            while ($default_query->have_posts()) {
                $default_query->the_post();
                $i++;
                if ($i == 1) {

                } else {
                    the_title();
                }
                echo '<br>';

            }

        }

    }
    ;
};
