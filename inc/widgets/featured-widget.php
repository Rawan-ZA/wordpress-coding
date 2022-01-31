<?php
class Featured_Widget extends WP_Widget
{

      public function __construct()
      {
            parent::__construct(
                  'Lhander-featured-widget',
                  'LHander : Featured Widget'
            );   //two args id of widget and name of widget

      }
      public function form($instance)
      {
         
            printf(
                  '<p>
        <label for="%s">Heading</label>
        <input type="text"  name="%s" id="%s" value ="%s" class="widefat"
        </p>',
                  $this->get_field_id('title'),
                  $this->get_field_name('title'),
                  $this->get_field_id('title'),
                  $instance['title'] ?? ' ',
            );
            printf(
                  '<p>
        <label for="%1$s">icon Class from font awsome</label>
        <input type="text"  name="%2$s" id="%1$s" value ="%3$s" class="widefat"
        </p>',
                  $this->get_field_id('icon'),
                  $this->get_field_name('icon'),
                  $instance['icon'] ?? ' ',
            );
            printf(
                  '<p>
        <label for="%1$s">Details</label>
        <input type="text"  name="%2$s" id="%1$s" value ="%3$s" class="widefat"
        </p>',
                  $this->get_field_id('details'),
                  $this->get_field_name('details'),
                  $instance['details'] ?? ' ',
            );
      }
      public function widget($args, $instance)
      {
          
            // echo $args['befor_widget'];
            if($instance['title']){
                   echo '<div class="bgrid feature">
                  <span class="icon"><i class="' . $instance["icon"] . '"></i></span>';
                  echo '<div class="service-content">	
                  <h3 class="h05">'. $instance["title"].'</h3>';
                 echo  '<p>'. $instance["details"]  .'</p> </div></div>';  
              

            }         
            //    echo  $args['after_widget'];
      }
      public function update($new_instance, $old_instance)
      {
            return $new_instance;
      }
}
