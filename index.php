<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<!-- Begin of loop -->
<?php 
	$args = array(
          //Type & Status Parameters
          'post_type'   => array('post'), //change this one to your cpt-slug
          'posts_per_page' => -1
    );
	$query = new WP_Query( $args ); 
 ?>

<body class="body">
    <div class="container">
        
        
    <main class="main">
        <h3 class="danger" style="font-size:20px;text-align:left;">Aviso</h3>
		<?php if($query->have_posts()): ?>
			<?php while($query->have_posts()): $query->the_post(); ?>
				<hr>
                <p>
    				<?php the_content(); ?>
                </p>
			<?php endwhile; ?>
		<?php endif; ?> 
        <div class="flechita">
            <div id="fl"> 
                <span class="flechita-left"></span>
            </div>
            <div id="fr">
                <span class="flechita-right"></span>
            </div>
        </div>
            <h2 class="danger"><?php the_title(); ?></h2>
                <ul>
                   <li class="pjslide">
                    <div class="personaje">
                        <h3 class="danger"><?php the_field("character_name1"); ?></h3>
                        <img src="<?php the_field("character_image1"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description1"); ?></p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger"><?php the_field("character_name2"); ?></h3>
                        <img src="<?php the_field("character_image2"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description2"); ?> </p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger"><?php the_field("character_name3"); ?></h3>
                        <img src="<?php the_field("character_image3"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description3"); ?></p>
                        </div>
                    </div>
                  </li>
                  <li class="pjslide">
                    <div class="personaje">
                        <h3 class="danger apai"><?php the_field("character_name4"); ?></h3>
                        <img src="<?php the_field("character_image4"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description4") ?> </p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger"><?php the_field("character_name5"); ?></h3>
                        <img src="<?php the_field("character_image5"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description5"); ?></p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger"><?php the_field("character_name6"); ?></h3>
                        <img src="<?php the_field("character_image6"); ?>" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings"><?php the_field("character_description6"); ?> </p>
                        </div>          
                     </div>
                    </li> 
                </ul>
            </main>
            <aside class="aside">
                <h2 class="danger">Info</h2>
                <ul class="patch-list">
                    <li><p>Nota de parche: Lorem ipsum dolor sit amet.</p> </li>
                    <li><p>Nota de parche: Lorem ipsum dolor sit amet.</p> </li>
                    <li><p>Nota de parche: Lorem ipsum dolor sit amet.</p> </li>
                    <li><p>Nota de parche: Lorem ipsum dolor sit amet.</p> </li>
                </ul>
            </aside>
		</div>


<?php wp_reset_postdata(); ?>	
<!-- End of loop -->

<?php get_footer(); ?> 
