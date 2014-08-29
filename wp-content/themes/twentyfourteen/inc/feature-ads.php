<?php
class My_theme_widget_feature_ads extends WP_Widget {

	function __construct() {
		parent::__construct(
			'feature_ads_widget', // Base ID
			__('Show post feature ads', 'feature_ads'), // Name
			array( 'description' => __( 'Info contact and save contact widget', 'feature_ads' ), ) // Args
		);
	}


                        
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
        $description= apply_filters( 'widget_description', $instance['description'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
            
            
            
            
            
            ?>
            	<table class='adsmanager_inner_box' width="100%">
                	
            <?php
            $wp_query = new WP_Query();
                $properties = array(
                        'post_type' =>  'post',
                        'paged' => 1,
                        'tax_query' => array(),
                        'posts_per_page' =>10,
                
                 );
                
                
                
                $properties['tax_query']=array(
                    array(
                        'taxonomy' => 'index category',
                        'terms' =>'featured-ads',
                        'field' => 'slug',
                    )
                );
                $query = $wp_query->query($properties);
                foreach ($query as $perres){
                    $meta_key=get_post_meta($perres->ID,'prices',true);
                
                  ?>
                  
                    
                    	<div style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($perres->ID));?>) 50% no-repeat; width:80px; height:65px; float:left; border:1px solid #e1e1e1 " class="specialads_image">
                        
                       
                       </div>
                        
                        <div style="background:#FFF; margin-left:90px" class="specialads_content">
                        <a href="<?php echo $perres->guid;?>"><?php echo $perres->post_title;?></a>
		                <br/><span class="price"><?php echo $meta_key;?>$</span>
                        <?php
                            
                        ?>             
                        <br/>
                        <span style="color:#BBB">
                           <?php
                            $author=$perres->post_author;   
                            $phone=get_user_meta($author,'phone',true);
                           ?>
                        <?php echo $phone;?></span>
                        </div>
                        <div class="clear">&nbsp;</div>
                
                    <?php
                 
                
                }  
                ?>
                    </tr>
                    </table>
                <?php 
        
		echo $args['after_widget'];
	}


	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
            $description['$description'];
		}
		else {
			$title = __( 'New title', 'text_domain2' );
            $description =__( 'To learn more about us and our offers?', 'text_domain2' );
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