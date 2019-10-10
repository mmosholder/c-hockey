<?php
namespace GC\Acf;
class SiteOptions
{
  function register() {
    add_filter( 'timber_context', array( $this, 'gc_acf_options' ) );
  }
  function gc_acf_options( $context ) {
    $context['options'] = get_fields('option');
    return $context;
  }
}
