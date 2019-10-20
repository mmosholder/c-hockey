<?php


add_filter( 'timber/context', 'add_to_context' );

function add_to_context( $context ) {
    // So here you are adding data to Timber's context object, i.e...
    $context['foo'] = 'I am some other typical value set in your functions.php file, unrelated to the menu';
    $context['footer1'] = Timber::get_widgets('footer1');
    $context['footer2'] = Timber::get_widgets('footer2');
    $context['footer3'] = Timber::get_widgets('footer3');
    $context['footer4'] = Timber::get_widgets('footer4');
    $context['footer5'] = Timber::get_widgets('footer5');
    $context['footer6'] = Timber::get_widgets('footer6');
    $context['sidebar'] = Timber::get_sidebar('sidebar.php');
    // Now, in similar fashion, you add a Timber Menu and send it along to the context.
    $context['menu'] = new \Timber\Menu( 'primary-menu' );

    return $context;
}
?>
