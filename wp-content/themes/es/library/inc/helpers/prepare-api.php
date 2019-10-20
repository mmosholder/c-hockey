<?php
// Exposes ACF data to rest api for pages (not for posts...)
$post_type = "post";
$post_type_page = "page";
function my_rest_prepare_post($data, $post, $request) {
    $_data = $data->data;
    $fields = get_fields($post->ID);
    $cats = get_the_category($post->ID);
    foreach ($fields as $key => $value){
        $_data[$key] = get_field($key, $post->ID);
    }
    $_data['cats'] = $cats;
    $data->data = $_data;
    return $data;
}
add_filter("rest_prepare_{$post_type}", 'my_rest_prepare_post', 10, 3);
function my_rest_prepare_page($data, $post, $request) {
    $_data = $data->data;
    $fields = get_fields($post->ID);
    foreach ($fields as $key => $value){
        $_data[$key] = get_field($key, $post->ID);
    }
    $data->data = $_data;
    return $data;
}
add_filter("rest_prepare_{$post_type_page}", 'my_rest_prepare_page', 10, 3);
?>
