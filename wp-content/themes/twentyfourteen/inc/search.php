<?php
class My_theme_widget_search extends WP_Widget {

	function __construct() {
		parent::__construct(
			'contact_widget', // Base ID
			__('My Theme Search', 'text_domain2'), // Name
			array( 'description' => __( 'Info contact and save contact widget', 'text_domain2' ), ) // Args
		);
	}


                        
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
        $description= apply_filters( 'widget_description', $instance['description'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
        ?>
                 <div id="search_l">
                    <div id="search_r">
                    <div class="searchContainer">
        <form action="<?php echo get_home_url(); ?>/result-search/" method="get">
        <div class="searchControl">



        <label for="text_search">Search for </label>
        <input type="text" name="text_search" id="text_search" size="30" value="" onblur="if(this.value=='') this.value='';" onfocus="if(this.value=='') this.value='';" style="width:200px" />
        <label for="category"> In </label>
        <select name="catSlug" id="category" style="width:200px">
        <option value="" selected='selected'>All Ads</option>
        <?php
            $args=array(
            'taxonomy' => 'category',
            'child_of' => '85',
            'hide_empty' => '0',
            'orderby' => 'term_order'
            );
            $menu_list = '';
            $categories=get_categories($args);
            foreach($categories as $category) { 
                $isChild=0;
                if($category->category_parent==85){
                $menu_list.='<option value="'.$category->cat_ID.'">'.$category->name.'</option>';
                }
               
                $pid=$category->cat_ID;
                
                $p_child=$category->category_parent;
                $args_Child=array(
                'taxonomy' => 'category',
                'child_of' =>$p_child,
                'hide_empty' => '0',
                'orderby' => 'term_order'
                );
                $categories_clild=get_categories($args_Child);
                foreach($categories_clild as $category_clild){
                    if($category_clild->category_parent==$pid){
                    $menu_list.='<option value="'. $category_clild->cat_ID.'">&gt;&gt;'. $category_clild->name.'</option>';
                    }
                }
                
    
            }
            echo $menu_list;
        ?>
			        </select>
        <label for="location"> And </label>
        <select name="location" id="location" style="width:200px">
        <option value="">All locations</option>
        <?php
         if($_GET){
            $cat=$_GET['loca'];
         }
        ?>
        <?php
            $args=array(
            'taxonomy' => 'category',
            'child_of' => '59',
            'hide_empty' => '0',
            'orderby' => 'term_order'
            );
            $menu_list = '';
 
            $categories=get_categories($args);
            foreach($categories as $category) { 

                if($category->category_parent==59){
                    if ($cat==$category->cat_ID){
                         $menu_list.='<option value="'.$category->cat_ID.'" selected="true">'.$category->name.'</option>';
                    }else{
                        $menu_list.='<option value="'.$category->cat_ID.'">'.$category->name.'</option>';
                        }
                }

            }
            echo $menu_list;
            ?>

        </select>
        </div>
		<div class="searchButton">
            <input type="image" src="http://www.khmer24.com/templates/khmer24/images/search.gif" />
        </div>
        </form>
    
        </div>                   
        </div>
        </div> 


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