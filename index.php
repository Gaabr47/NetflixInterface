<?php get_header(); ?>



<main>

<h1>Só na netflix</h1>




<div class="exclusivos_box"onmouseover="ButtonScroll()" onmouseout="OutButtonScroll()">
<div class="exclusivos_indi">
    
<img src="<?php echo get_template_directory_uri()?>/src/img/e2.webp">

<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Os sete pecados capitais</p>

</div>
</div>



<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e3.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Lucifer</p>

</div>

</div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e4.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Lupin</p>

</div></div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e5.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Sex/Life</p>

</div>
</div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e6.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Peaky Blinders</p>

</div></div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e7.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Paternidade</p>

</div></div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e8.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Pokas - Thiago Ventura</p>

</div></div>
<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e9.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>La casa de papel</p>

</div></div>

<div class="exclusivos_indi"><img src="<?php echo get_template_directory_uri()?>/src/img/e10.webp">
<div class="exclusivos_info">
    <img src="<?php echo get_template_directory_uri()?>/src/img/playex" style="height:30px; width:30px;">
    <img src="<?php echo get_template_directory_uri()?>/src/img/addex" style="height:30px; width:30px;">
<p>Umbrella Academy</p>

</div></div>
<div class="buttons_exclusives">
<div class="leftButton"onClick="Lscroll()"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="RightButton"onClick="Rscroll()"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>

</div>


<div class="box_posts"style="margin-top:-150px; ">
<h1>Em alta </h1>
<div class="postagens">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                  
<div class="postagens_individual"> <div class="postagens_individual_limite"><?php the_post_thumbnail(); ?>
<div class="options_posts">
<img src="<?php echo get_template_directory_uri()?>/src/img/playex.png" style="height:24px; width:25px; margin-left:5px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/addex.png" style="height:24px; width:25px; margin-left:5px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/like.png" style="height:18px; width:18px; margin-left:5px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/dislike.png" style="height:18px; width:18px;margin-left:5px;">


</div>
<div class="category"style="margin-top:-10px;"><?php the_category( ', ' ); ?></div>
</div></div>
            <?php endwhile?>
                 
            <?php else: ?>
                 
            <?php endif; ?>
            <div class="buttons_post">

<div class="leftarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="rightarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>
</div>

<div class="top10">
    
<h1>Top 10 no Brasil</h1>
<div class="top10_box"onmouseover="ButtonScrollTop10()" onmouseout="OutButtonScrollTop10()">
<li><img src="<?php echo get_template_directory_uri()?>/src/img/one.png"style="height:200px "><img src="<?php echo get_template_directory_uri()?>/src/img/e3.webp"style="height:200px; width:130px; margin-left:-70px;"></li>
<li><img src="<?php echo get_template_directory_uri()?>/src/img/2.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e2.webp"style="height:200px; width:130px; margin-left:-70px;"></li>

<li><img src="<?php echo get_template_directory_uri()?>/src/img/3.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e4.webp"style="height:200px; width:130px; margin-left:-70px;"></li>

<li><img src="<?php echo get_template_directory_uri()?>/src/img/4.png"style="height:200p; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e5.webp"style="height:200px; width:130Px; margin-left:-70px;"></li>

<li><img src="<?php echo get_template_directory_uri()?>/src/img/5.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e6.webp"style="height:200px; width:130px; margin-left:-70px;"></li>
<li><img src="<?php echo get_template_directory_uri()?>/src/img/6.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e8.webp"style="height:200px; width:130px; margin-left:-70px;"></li>

<li><img src="<?php echo get_template_directory_uri()?>/src/img/7.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e9.webp"style="height:200px; width:130px; margin-left:-70px;"></li>

<li><img src="<?php echo get_template_directory_uri()?>/src/img/8.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e10.webp"style="height:200px; width:130px; margin-left:-70px;"></li>
<li><img src="<?php echo get_template_directory_uri()?>/src/img/9.png"style="height:200px; width:180px;"><img src="<?php echo get_template_directory_uri()?>/src/img/e1.webp"style="height:200px; width:130px; margin-left:-70px;"></li>

<div class="buttons_Top10">
<div class="leftButton_top10"onClick="LscrollTop10()"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="RightButton_top10"onClick="RscrollTop10()"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>
            </div>

  

            </div>
<h1>Ação</h1>
<div class="postagens">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                  
<div class="postagens_individual"> <div class="postagens_individual_limite"><?php the_post_thumbnail(); ?>
<div class="options_posts">
<img src="<?php echo get_template_directory_uri()?>/src/img/playex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/addex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/like.png" style="height:18px; width:18px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/dislike.png" style="height:18px; width:18px;">
</div>

<div class="category"><?php the_category( ', ' ); ?></div>

</div></div>
            <?php endwhile?>
                 
            <?php else: ?>
                 
            <?php endif; ?>
            <div class="buttons_post">

<div class="leftarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="rightarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>
</div>


<h1>Populares na netflix </h1>
<div class="postagens">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                  
<div class="postagens_individual"> <div class="postagens_individual_limite"><?php the_post_thumbnail(); ?>
<div class="options_posts">
<img src="<?php echo get_template_directory_uri()?>/src/img/playex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/addex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/like.png" style="height:18px; width:18px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/dislike.png" style="height:18px; width:18px;">
</div>
<div class="category"><?php the_category( ', ' ); ?></div>
</div></div>
            <?php endwhile?>
                 
            <?php else: ?>
                 
            <?php endif; ?>
            <div class="buttons_post">

<div class="leftarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="rightarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>
</div>


<h1>Comédia</h1>
<div class="postagens">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                   
                  
<div class="postagens_individual"> <div class="postagens_individual_limite"><?php the_post_thumbnail(); ?>
<div class="options_posts">
<img src="<?php echo get_template_directory_uri()?>/src/img/playex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/addex.png" style="height:24px; width:25px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/like.png" style="height:18px; width:18px;">
<img src="<?php echo get_template_directory_uri()?>/src/img/dislike.png" style="height:18px; width:18px;">
</div>
<div class="category"><?php the_category( ', ' ); ?></div>
</div></div>
            <?php endwhile?>
                 
            <?php else: ?>
                 
            <?php endif; ?>
            <div class="buttons_post">

<div class="leftarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/larrow.png"style="height:25px;width:25px;"></div>
<div class="rightarrow"><img src="<?php echo get_template_directory_uri()?>/src/img/rarrow.png"style="height:25px;width:25px;"></div>
</div>
</div>



          

            
            </div>
    
    
            </main>
<?php get_footer() ?>