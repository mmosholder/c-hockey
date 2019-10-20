<?php 
// Rebuild the image tag with only the stuff I want

class bwd_img_rebuilder
{
  public $caption_class   = 'wp-caption';
  public $caption_p_class = 'wp-caption-text';
  public $caption_id_attr = FALSE;
  public $caption_padding = 8; // Double of the padding on $caption_class
 
  public function __construct()
  {
    add_filter( 'img_caption_shortcode', array( $this, 'img_caption_shortcode' ), 1, 3 );
    add_filter( 'get_avatar', array( $this, 'recreate_img_tag' ) );
    add_filter( 'the_content', array( $this, 'the_content') );
  }
 
  public function recreate_img_tag( $tag )
  {
    // Supress SimpleXML errors
    libxml_use_internal_errors( TRUE );
 
    try
    {
      $x = new SimpleXMLElement( $tag );
 
      // We only want to rebuild img tags
      if( $x->getName() == 'img' )
      {
        // Get the attributes I'll use in the new tag
        $alt        = (string) $x->attributes()->alt;
        $src        = (string) $x->attributes()->src;
        $classes    = (string) $x->attributes()->class;
        $class_segs = explode(' ', $classes);
 
        // All images have a source
        $img = '<img src="' . $src . '"';
 
        // If alt not empty, add it
        if( ! empty( $alt ) )
        {
          $img .= ' alt="' . $alt . '"';
        }
 
        // Only alignment classes are allowed
        $allowed_classes = array( 
          'alignleft', 
          'alignright', 
          'alignnone', 
          'aligncenter'
        );
 
        if( in_array( $class_segs[0], $allowed_classes ) )
        {
          $img .= ' class="' . $class_segs[0] . '"';
        }
 
        // Finish up the img tag
        $img .= ' />';
 
        return $img; 
      }
    }
    catch ( Exception $e ){}
 
    // Tag not an img, so just return it untouched
    return $tag;
  }
 
  /**
   * Search post content for images to rebuild
   */
  public function the_content( $html )
  {
    return preg_replace_callback( 
      '|(<img.*/>)|', 
      array( $this, 'the_content_callback' ), 
      $html
    );
  }
 
  /**
   * Rebuild an image in post content
   */
  private function the_content_callback( $match )
  {
    return $this->recreate_img_tag( $match[0] );
  }
 
  /**
   * Customize caption shortcode
   */
  public function img_caption_shortcode( $output, $attr, $content )
  {
    // Not for feed
    if ( is_feed() )
      return $output;
 
    // Set up shortcode atts
    $attr = shortcode_atts( array(        
      'align'   => 'alignnone',        
      'caption' => '',
      'width'   => ''
    ), $attr );
 
    // Add id and classes to caption
    $attributes = '';
    $caption_id_attr = '';
 
    if( $caption_id_attr && ! empty( $attr['id'] ) )
    {
      $attributes .= ' id="' . esc_attr( $attr['id'] ) . '"';
    }
 
    $attributes .= ' class="' . $this->caption_class . ' ' . esc_attr( $attr['align'] ) . '"';
 
    // Set the max-width of the caption
    $attributes .= ' style="max-width:' . ( $attr['width'] + $this->caption_padding ) . 'px;"';
 
    // Create caption HTML
    $output = '
      <div' . $attributes .'>' . 
        do_shortcode( $content ) . 
        '<p class="' . $this->caption_p_class . '">' . $attr['caption'] . '</p>' . 
      '</div>
    ';
 
    return $output;
  }
}
 
$bwd_img_rebuilder = new bwd_img_rebuilder;