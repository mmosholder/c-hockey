<?php
//ACF Editor customization
function es_toolbars( $toolbars )
{
	// Uncomment to view format of $toolbars
	// echo '< pre >';
	// 	print_r($toolbars);
	// echo '< /pre >';
	// die;
	// Add a NEW toolbar called "Extremely Basic"
	// - this toolbar has only 1 row of buttons
	$toolbars['Emerson Stone' ] = array();
	$toolbars['Emerson Stone' ][1] = array('link', 'unlink','bullist' );
	// Add a NEW toolbar called "Emerson Stone"
	// - this toolbar has only 1 row of buttons
	$toolbars['Emerson Stone Basic' ] = array();
	$toolbars['Emerson Stone Basic' ][1] = array('link', 'unlink');     
	// Edit the "Full" toolbar, and remove 'underline' from the 2nd row
	// if( ($key = array_search('underline' , $toolbars['Full' ][2])) !== false )
	// {
	//     unset( $toolbars['Full' ][2][$key] );
	// }
 //  // Edit the "Full" toolbar and remove 'alignleft' from the 1st row
 //  if( ($key = array_search('alignleft' , $toolbars['Full' ][1])) !== false )
	// {
	//   unset( $toolbars['Full' ][1][$key] );
	// }
 //  // Edit the "Full" toolbar and add 'fontsizeselect' if not already present.
 //  if (($key = array_search('fontsizeselect' , $toolbars['Full'][2])) !== true) {
 //    array_unshift($toolbars['Full'][2], 'fontsizeselect');
 //  }
	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic' ] );
	// return $toolbars - IMPORTANT!
	return $toolbars;
}
add_filter( 'acf/fields/wysiwyg/toolbars' , 'es_toolbars'  );
?>