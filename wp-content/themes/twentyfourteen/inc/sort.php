<?php
class My_theme_widget_sort extends WP_Widget {

	function __construct() {
		parent::__construct(
			'sort_widget', // Base ID
			__('My Theme Sort', 'tool-sort'), // Name
			array( 'description' => __( 'Info contact and save contact widget', 'tool-sort' ), ) // Args
		);
	}


                        
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
        $description= apply_filters( 'widget_description', $instance['description'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
        ?>
       
            <script type="text/JavaScript" language="JavaScript">
            &lt;!--
            function jumpmenuprice(){
              document.getElementById('formprice').submit();
            }		
            //--&gt;
            </script>        
            
            	<form id="formprice" method="get" action="http://www.khmer24.com/index.php">
            	<input type="hidden" name="option" value="com_adsmanager">	
            	<input type="hidden" name="page" value="show_category">
            	<input type="hidden" name="text_search" value="">	
            	<input type="hidden" name="catid" value="48">
            	<input type="hidden" name="location" value="">	
            	<input type="hidden" name="Itemid" value="0">	
            	<input type="hidden" name="ad_field" value="0">	
            	Sort By : 
                 <select onchange="jumpmenuprice()" name="sortby">
                
                <option value="newads"><?php echo single_cat_title('latest-ads');?></option>
                <option value="mosthitads">Most Hit Ads</option>
                </select>
                 <select onchange="jumpmenuprice()" name="price">
                <option selected="selected" value="0">All prices</option><option value="1">1$ =&gt; 50$</option>
                <option value="2">50$ =&gt; 100$</option><option value="3">100$ =&gt; 300$</option><option value="4">300$ =&gt; 500$</option><option value="5">500$ =&gt; 1000$</option><option value="6">1000$ =&gt; 3000$</option><option value="7">3000$ =&gt; 5000$</option><option value="8">5000$ =&gt; 10000$</option><option value="9">10000$ =&gt; 20000$</option><option value="10">20000$ =&gt; 50000$</option><option value="11">50000$ =&gt; 100000$</option><option value="12">100000$ =&gt; 500000$</option><option value="13">500000$ =&gt; 1000000$</option></select>
            	  <select onchange="jumpmenuprice()" name="adtype"><option selected="selected" value="">All ad types</option><option value="1">Sale</option><option value="2">Buy</option><option value="3">Other</option></select>	
            	</form>              
                      
        					

        <?php
		echo $args['after_widget'];
	}


	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
            $description['$description'];
		}
		else {
			$title = __( 'New title', 'tool-sort' );
            $description =__( 'To learn more about us and our offers?', 'tool-sort' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo esc_attr($description); ?>">
		</p>
		<?php 
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		return $instance;
	}

}