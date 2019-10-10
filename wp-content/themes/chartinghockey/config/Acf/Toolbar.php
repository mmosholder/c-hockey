<?php

namespace GC\Acf;

/**
 * ACF Toolbar
 */
class Toolbar
{
  /**
     * register default hooks and actions for WordPress
     * @return
     */
  public function register()
  {
    add_filter( 'gc_toolbars', array( $this, 'gc_toolbars' ) );
    add_filter( 'acf/fields/wysiwyg/toolbars', array( $this, 'gc_toolbars' ) );
  }

  public function gc_toolbars( $toolbars )
  {

  $toolbars['GC Toolbar' ] = array();
  $toolbars['GC Toolbar' ][1] = array('link', 'unlink','bullist' );

  unset( $toolbars['Basic' ] );

  return $toolbars;
  }
}
