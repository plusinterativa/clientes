<?php get_header();?> 
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => '1', 'category_name' => 'sobre-nos');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<div class="bar-sobre bar-first">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="imghand">              
          <img name="hand2" class="hidden-xs hidden-sm" src="<?php echo bloginfo('template_url');?>/assets/images/hand.gif" alt="">
          </div>
          <div class="coin animated infinite slideInDown hidden-sm hidden-xs">
          <img class="imgcoin" src="<?php echo bloginfo('template_url');?>/assets/images/moeda.png" alt="">
          </div>
          <img class="imghouse" src="<?php echo bloginfo('template_url');?>/assets/images/house.png" alt="">
        </div>
        <div class="col-md-6">
          <h2><?php the_title();?></h2>
          <p><?php the_content();?></p>
        </div>         
      </div>
    </div>
</div>
<?php endwhile;?>
<div class="localizacao">
  <div class="te">
  </div>
  <img class="kitblue" src="<?php echo bloginfo('template_url');?>/assets/images/kitblue.png"> 
</div>
<div class="owl-carousel">
  <div class="bgnone"> 
   <div class="bar2-sobre container animated bounceInUp">   
    <div class="row ">
       <div class="col-md-6 col-md-offset-1">
        <?php
        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('empresa'),catid('sobre-nos')));
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $class = get_post_meta($post->ID, 'class', true);
        ?>
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
        <?php endwhile;?>
        <div class="mapafull animate dafeInDownBig hidden-xs hidden-sm">
          <img class="imgmapfull" src="<?php echo bloginfo('template_url');?>/assets/images/imgmapfull.png" alt=""> 
        </div>
        <div class="mapa animate dafeInDownBig hidden-xs hidden-sm">
          <img class="imgmap" src="<?php echo bloginfo('template_url');?>/assets/images/mapa.png" alt=""> 
          <img data-text="
                    <div class='title'>Escritório Palmas</div>
          <p>Quadra 104 Norte, Rua NE 11, s/n, Lote 18, Conj. 04 - sala 02</br>Plano Diretor Norte - Palmas / TO</br>CEP: 77.006-030</br></br>Fone: (63) 3219-5036</p>"
          class="imgesc2 imgvet animated infinite pulse " src="<?php echo bloginfo('template_url');?>/assets/images/escritorio.png" alt=""> 
          <img data-text="
          <div class='title'>Escritório Cuiabá</div>
          <p>Av. General Valle, 321, 7º andar</br>Sala 706 - Ed. Marechal Rondon</br>Bandeirantes – Cuiabá / MT</br>CEP: 78.010-020</br></br>Fone: (65) 3624-7750</p>"
          class="imgesc3 imgvet animated infinite pulse" src="<?php echo bloginfo('template_url');?>/assets/images/escritorio.png" alt=""> 
          <img data-text="
          <div class='title'>Sede</div>
          <p>Rua Teixeira, 467 – Taboão -</br> 
          Bragança Paulista - SP</br>
          CEP: 12916-360</br></br>
          Tel.: (11) 4481-9600</p>" class="imgpredio imgvet animated infinite pulse " src="<?php echo bloginfo('template_url');?>/assets/images/predio.png" alt=""> 
        </div>
      </div>
        
        <div class="col-md-4">       
          <img class="hidden-md hidden-lg" src="<?php echo bloginfo('template_url');?>/assets/images/bonecos.png" alt="">
          <div class="mb-ass-ati hidden-md hidden-lg">Ativos - 4.850 </br> Assitidos - 967</div>
          <img class="toys hidden-xs hidden-sm" src="<?php echo bloginfo('template_url');?>/assets/images/bonecos.png" alt="">
          <div class="dates">
            <div class="row">
             <div class="col-md-12 ativos">
               <span class="toyman"></span>
               <h3 id="ativos"></h3>
               <p>Ativos</p>
             </div>
            </div>
            <div class="line"></div>
            <div class="row">               
               <div class="col-md-12 assistidos">
               <span class="toyold"></span>
               <h3 id="assistidos"></h3>
               <p>Assistidos</p>
             </div>                             
            </div>
          </div>
          <ul class="list-sobre">
            <li></li>
            <li class="one">Estrutura Organizacional</li>
            <li class="two">Governança</li>
            <li class="tree">Empréstimos</li>
            <li class="four">Nossa Equipe</li>
            <!--<li class="five">Conselhos e Diretoria</li>-->
          </ul>       
        </div>
      </div>
    </div>
  </div>
  <?php
  $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('info'),catid('sobre-nos')));
  $the_query = new WP_Query( $args );
  while ( $the_query->have_posts() ) : $the_query->the_post();
  $class = get_post_meta($post->ID, 'class', true);
  ?>
  <div class="<?php echo $class;?>">      
    <div class="bar2-sobre container animated bounceInUp">
      <img class="imgx" src="<?php echo bloginfo('template_url');?>/assets/images/x.png" alt="">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 post-sobre">
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile;?>     
</div>
<?php 
if(isset($_GET['sobre-nos'])):
    if($_GET['sobre-nos']=="emprestimos"):
?>
    <script>
    setTimeout(function(){
      $('.b3').trigger("click");
    },1000);
    </script>                 
<?php   
  endif;    
endif;?>
<?php get_footer();?> 