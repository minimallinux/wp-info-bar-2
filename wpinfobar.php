<div class="info-bar-top" style="background:#191919;">
        <div class="container">
        <div class="left-section" style="float:left;">
         <?php dynamic_sidebar( 'info-bar-top-left' ); ?>    
        </div>
        <div class="right-section" style="float:right;padding-top:4px;">
        <?php dynamic_sidebar( 'info-bar-top-right' ); ?>    
       </div>
</div>
    </div>
</div> 
//Functions file  
function airi_child_widgets_init() {
       register_sidebar( array(
		'name'          => 'Info-bar-Top-Left',
		'id'            => 'info-bar-top-left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
       register_sidebar( array(
		'name'          => 'Info-bar-Top-Right',
		'id'            => 'info-bar-top-right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'airi_child_widgets_init' );
?>