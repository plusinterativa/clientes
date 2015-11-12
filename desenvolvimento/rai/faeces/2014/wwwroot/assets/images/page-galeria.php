<?php 
get_header();
while (have_posts()) : the_post();
?>
<div class="body">
	<div class="container">
		<div class="row">
            <div class="col-md-12">
                <div class="visible-md visible-lg">
                    <div class="menu2">
                        <?php get_template_part('menu');?>
                    </div>
                </div>
            </div>
        </div>
	    <div class="row noticias produzindosingle">
	    	<div class="col-md-8">
	    		<div class="titleproduzido">
		            <!-- h2 class="amarelo uppercase">Conteúdo produzido</h2 -->
		            <h1 class="amarelo uppercase espacoamarelo">Fotos</h1>
	    		</div>
		    	<div class="galeria">
					<?php the_content();?>
				</div>
				<?php $content = get_the_content(); if(!empty($content)){echo '</div>';}?>
            </div>
			<div class="col-md-4 sidebar">
				<?php include 'outros-conteudos.php';?>
	    	</div>
		</div>
	    <div class="row">
            <div class="col-md-12">
                <hr/>
            </div>
        </div>
	</div>
</div>
<?php 
endwhile;
get_footer();
?>