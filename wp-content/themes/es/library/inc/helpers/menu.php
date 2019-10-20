<?php
if(!defined('ABSPATH')) exit;
class es_walker_nav_menu extends Walker_Nav_menu {
    function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"es-nav-sublinks$submenu depth_$depth\">\n";
    }
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    $li_attributes = '';
        $class_names = $value = 'nav-item';
        // $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? '-has-dropdown' : '-no-dropdown';
        $classes[] = ($item->current || $item->current_item_anchestor) ? ' -active' : '';
        // $classes[] = 'nav-item';
        // $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = '';
        }
        $classes[] = 'nav-item';
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' ' : '';
        $output .= $indent . '<li ' .  $class_names .  '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ( $args->walker->has_children ) ? ' ' : ' class="es-nav-sublink"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a ' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<svg width="10" height="7" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 1.2L8.833 0 5 3.943 1.167 0 0 1.2l5 5.143z" fill="#34293B" fill-rule="evenodd"/>
                </svg></a>';
        $item_output .= $args->after;
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
