<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
  'key' => 'group_5acf882c1f127',
  'title' => 'Gallery Filters',
  'fields' => array(
    array(
      'key' => 'es_filter',
      'label' => 'Gallery Filters',
      'name' => 'gallery_filter',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array(
        'suits' => 'Suits',
        'shirts' => 'Shirts',
        'formal' => 'Formal',
        'casual' => 'Casual',
        'weddings' => 'Weddings',
        'bold' => 'Bold',
      ),
      'default_value' => array(
      ),
      'allow_null' => 0,
      'multiple' => 1,
      'ui' => 1,
      'ajax' => 1,
      'return_format' => 'value',
      'placeholder' => 'Choose a filter:',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'attachment',
        'operator' => '==',
        'value' => 'image',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;
?>
