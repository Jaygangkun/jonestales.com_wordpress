<?php
 
class BookCategoriesWidget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'widget-book-categories',  // Base ID
            'BookCategories'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'BookCategoriesWidget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="widget widget_categories widget-book-categories-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        else {
            echo $args['before_title'] . "Book Categories" . $args['after_title'];
        }
  
        $book_categories = get_terms(array(
            'taxonomy' => 'book_categories'
        ));

        echo "<ul>";
        foreach($book_categories as $book_category) {
            ?>
            <li class="cat-item cat-item-<?php echo $book_category->ID?>">
                <a href="<?php echo get_term_link($book_category)?>"><?php echo $book_category->name ?></a>
            </li>
            <?php
        }
        echo "</ul>";
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }
 
}

new BookCategoriesWidget();
?>