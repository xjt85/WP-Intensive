<?php

function filter_deals_example($data)
{
//массив аргументов
    $args = array(
        'posts_per_page' => '5',
        'tax_query' => array(
            'relation' => 'AND', //означает, что все условия в фильтре в header-е являются true
        ),
    );
//если значение установлено
    if (isset($data['location']) && $data['location'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'location',
            'field' => 'name',
            'terms' => array($data['location']),
        ));
    }
    ;
    //если значение установлено
    if (isset($data['type']) && $data['type'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'type',
            'field' => 'name',
            'terms' => array($data['type']),
        ));
    }
    ;
    //если значение установлено
    if (isset($data['price']) && $data['price'] != '') {
        array_push($args['tax_query'], array(
            'taxonomy' => 'price',
            'field' => 'name',
            'terms' => array($data['price']), //в виде массива,т.к. может принимать несколько значений
        ));
    }
    ;

    //echo '<span style="color: olive; font-weight: bold;">';
    //print_r($args);
    //echo '</span>';
    //echo '<br>';
//все вышеперечисленно вставляем в переменную
    $custom_filter = new WP_Query($args);
    //если переменная $_POST не пустая, то выводим посты;
    if (!empty($_POST)) {
        //в кастомном фильтре есть посты, то выводим посты;
        if ($custom_filter->have_posts()) {
            /* Выводим посты циклом */
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
        //если поиск не производился - выдаем запрос по умолчанию
        $default_query = new WP_Query(array('post_type' => 'deals', 'post_per_page' => 5));
        $i = 0;
        if ($default_query->have_posts()) {
            /* Start the Loop */
            while ($default_query->have_posts()) {
                $default_query->the_post();
                $i++;//счетчик для определения первого шаблона и его вывода в большом thumb
                if ($i == 1) {//если пост - первый
                    
                } else {
                    the_title(); //заголовок поста
                    echo "<br>";
                    the_content(); //контент поста
                    echo "<br>";
                    the_permalink();  //ссылка на страницу поста
                    echo "<br>";
                    the_excerpt();  //краткий контент
                    echo "<br>";
                    get_the_date();
                    echo "<hr>";
                };

            };

        };

    };
};
