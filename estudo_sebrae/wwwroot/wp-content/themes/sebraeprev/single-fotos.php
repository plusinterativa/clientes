<?php get_header('single');while (have_posts()) : the_post();?>
<div class="avada-row">	
    <div class="content">
        <div class="post-content fotos-type">
            <h2><?php the_title();?></h2>
            <div class="gallery">
                <div class="hidden"><?php the_content();?></div>
            </div>
            <?php the_content();?>
            <div class="owl-carousel">
                <div class="item"><img src="http://2.bp.blogspot.com/_EZ16vWYvHHg/S-Bl2fuyyWI/AAAAAAAAMKc/DNayYJK8mEo/s1600/www.BancodeImagenesGratuitas.com-Fantasticas-20.jpg" alt="" /></div>            
			    <div class="item"><img src="http://2.bp.blogspot.com/_EZ16vWYvHHg/S-Bl2fuyyWI/AAAAAAAAMKc/DNayYJK8mEo/s1600/www.BancodeImagenesGratuitas.com-Fantasticas-20.jpg" alt="" /></div>		    
			    
    	    </div>
        </div>
    </div>
</div>






<script>
$(function(){
    var src = [];
    //get urls image inside the_content -> put in array -> print
    $('.fotos-type img').each(function(index, value) {
        image = $(this).attr('src');
        crop = image.replace('-150x150.jpg','.jpg');
        full = crop.replace('-300x225.jpg','.jpg');
        crop = full.replace('.jpg','-500x340.jpg');
        src[index] = crop;
        $('.fotos-type .gallery').append('<img data-toggle="modal" data-target="#myModal'+index+'" name="'+full+'" src="'+src[index]+'">');
        $('.fotos-type').append('<div class="modal fade" id="myModal'+index+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="close" data-dismiss="modal" aria-label="Close"></div><img src="'+full+'"/></div></div></div>');
    });

    //modal trigger
    $('.gallery img').click(function() {
        
    });
});
$('.owl-carousel').owlCarousel({
        items:1,
        loop:false,
        center:true,
        margin:10,
        
    });
</script>
<?php endwhile; get_footer();?>