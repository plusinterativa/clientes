<?php get_header();?>

<div class="owl-carousel banner ">
  <?php
$args = array('post_type' => 'banners', 'posts_per_page' => '-1', 'category_name' => 'home');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
$color = get_post_meta($post->ID, 'color', true);?>     
        <div class="index-banner" style="background:<?php echo $color; ?>;">
          
        <a href="<?php the_title();?>" target="_blank"><?php the_content() ;?></a>
        </div>
<?php endwhile;?>
</div>
    <div class="bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>              
              <?php
              $args = array('post_type' => 'extras', 'order'=>'DSC', 'posts_per_page' => '4', 'category__and' => array(catid('home'),catid('chamadas')));
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) : $the_query->the_post();
              $url = get_post_meta($post->ID, 'url', true);
              $icon = get_post_meta($post->ID, 'icon', true);
              ?>
              <li>
                <a href="<?php echo $url;?>">
                  <img src="<?php echo bloginfo('template_url');?>/assets/images/<?php echo $icon;?>.png" alt="">
                  <h2><?php the_title();?></h2>
                  <p><?php the_content();?></p>
                </a>
              </li>     
              <?php endwhile;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container bar2">
      <div class="row">
        <?php
        $args = array('post_type' => 'extras', 'order'=>'DSC', 'posts_per_page' => '1', 'category__and' => array(catid('home'),catid('video')));
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $url = get_post_meta($post->ID, 'url', true);
        $video = get_post_meta($post->ID, 'video', true);
        ?>
        <div class="col-md-6 col-md-offset-1">
          <iframe src="<?php echo $video;?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
          <h2><?php the_title();?></h2>
          <p><?php the_content();?></p>
          <a href="<?php echo home_url();?>/planos?planos=open">
            <span class="button">Faça já a sua Adesão!</span>
          </a>          
        </div>
        <?php endwhile;?>
      </div>
    </div>
    <div class="container bar3">
      <div class="row">
        <div class="col-md-10 col-sm-10 col-md-offset-1 ">
          <h2>Notícias</h2>
        </div>
      </div>
      <div class="row">
        <?php
        $args = array('post_type' => 'post', 'order'=>'DSC', 'posts_per_page' => '1');
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $fNews_ID = get_the_ID();
        ?>
        <div class="col-md-3 col-sm-5 col-md-offset-1  noticia-principal">
          <a href="<?php the_permalink();?>">
            <figure>
            <?php the_post_thumbnail('newsmax');?>
            <figcaption><h2><?php echo get_the_date('d');?></h2><p><?php echo get_the_date('M');?>/<?php echo get_the_date('Y');?></p></figcaption>            
            </figure>
            <h2><?php the_title();?></h2>
            <p><?php echo excerpt(15).'...';?></p>
          </a>
        </div>
        <?php endwhile;?>
        <div class="col-md-7 col-sm-7">
          <div class="col-md-12 col-sm-12">
            <div class="row hide-child"> 
              <?php
              $args = array('post_type' => 'post', 'order'=>'DSC', 'posts_per_page' => '6', 'post__not_in' => array($fNews_ID));
              $the_query = new WP_Query( $args );
              while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>             
              <div class="col-md-6 col-sm-6 sub-noticias">      
                <a href="<?php the_permalink();?>">
                  <?php the_post_thumbnail('newsmin');?>
                  <h2><?php the_title();?></h2>
                  
                </a>
              </div>
              <?php endwhile;?>          
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer();?> 