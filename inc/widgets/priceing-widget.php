<?php 

class Priceing_Widget extends WP_Widget
{
       public   function __construct()
        {
             parent::__construct(
              'lhander-priceing-widget',
              'LHander : Priceing Widget'
             );
        }
         
        public function form($instance)
        {
             printf('<p>
                    <label for="%1$s">Plan Title</label>
                    <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
             </p>',
              $this->get_field_id('title'),
              $this->get_field_name('title'),
              $instance['title'] ?? ' ',
            );
            printf('<p>
            <label for="%1$s">Plan Price</label>
             <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('plan-price'),
            $this->get_field_name('plan-price'),
            $instance['plan-price'] ?? ' ',

            );
            printf('<p>
            <label for="%1$s">Price Month</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
           </p>',
            $this->get_field_id('price-month'),
            $this->get_field_name('price-month'),
            $instance['price-month'] ?? ' ',

            ); 
            printf('<p>
            <label for="%1$s">Price Meta</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('price-meta'),
            $this->get_field_name('price-meta'),
            $instance['price-meta'] ?? ' ',
        );
            printf('<p>
            <label for="%1$s">Storage</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('storage'),
            $this->get_field_name('storage'),
            $instance['storage'] ?? ' ',
        );
            printf('<p>
            <label for="%1$s">Bandwidth</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('band-width'),
            $this->get_field_name('band-width'),
            $instance['band-width'] ?? ' ',
         );
            printf('<p>
            <label for="%1$s">Databases</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('database'),
            $this->get_field_name('database'),
            $instance['database'] ?? ' ',
         ); 
            printf('<p>
            <label for="%1$s">Email Accounts</label>
            <input type="text" name="%2$s" id="%1$s" value="%3$s" class="widefat">
            </p>',
            $this->get_field_id('email'),
            $this->get_field_name('email'),
            $instance['email'] ?? ' ',
        );
        printf('<p>
        <label for="%1$s">Part Top Background Color</label>
        <input type="color" name="%2$s" id="%1$s" value="%3$s" class="widefat">
        </p>',
        $this->get_field_id('bg-color'),
        $this->get_field_name('bg-color'),
        $instance['bg-color'] ?? ' ',
    );   
  
        }
        public function widget($args, $instance)
        {
             if($instance['title']){
               echo '<div class="bgrid"> <div class="price-block"> <div class="top-part" style="background-color:'. $instance['bg-color'].'!important">';
               echo '<h3 class="plan-title">'. $instance['title'] . '</h3>';
               echo '<p class="plan-price"><sup>$</sup>'. $instance['plan-price'] . '</p>';
               echo '<p class="price-month">'. $instance['price-month']  . '</p>' ;
               echo '<p class="price-meta">'. $instance['price-meta'] .'</p>';
               echo '</div> ';

               echo ' <div class="bottom-part">' ;  
               echo '<ul class="features">';
               echo '<li><strong>'.  $instance['storage'].'</strong> Storage</li>';
               echo '<li><strong>' .  $instance['band-width'] .' </strong> Bandwidth</li>';	                  
               echo '<li><strong>' . $instance['database']. '</strong> Databases</li>';		                  
               echo  '<li><strong>' . $instance['email'] .'</strong>Email Accounts</li>';
              echo ' </ul> <a class="button large" href="' . get_home_url('/') .'">Get Started</a> </div> </div> </div>';
             }
              
          
        
        }
        public function update($new_instance, $old_instance)
        {
            $new_instance['title'] = strtoupper($new_instance['title']);
            return $new_instance;
        }
}