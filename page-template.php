<?php /*o nama*/  ?>

<?php get_header(); ?>

//Start the single post loop.
<? while ( have_posts() ) : the_post(); ?>

<div class="hero-image"> 
       <img src="img/o-nama-nasl.jpg" alt="" class="image">
        <div class="center"><h1>O klubu</h1>
        </div>
        
    </div>

<div class="main-content">

    <div class="content">

        <?php  the_content(); ?> 

    </div>  

</div>


<?php endwhile; ?>

<?php get_footer(); ?>