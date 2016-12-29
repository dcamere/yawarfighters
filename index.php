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
                        <h3 class="danger">Shaak</h3>
                        <img src="../source/img/Shaak.jpg" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings">Lord of the Piscan Valley, Shaak is multiple champion in the noble tournament of wrestling. The reflection of his armor makes him shine in the battlefield. </p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger">Ashan</h3>
                        <img src="../source/img/Ashan.jpg" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings">When he was a kid, he managed to defend his village from a little plesiosaur that attacked from the river. Ever since, he has wandered the entire realm to fight against demonic or ancestral beasts. He does not know that he has been targeted by demonic incarnations that seek to banish him.</p>
                        </div>
                    </div>
                  </li>
                  <li class="pjslide">
                    <div class="personaje">
                        <h3 class="danger apai">Liviak</h3>
                        <img src="../source/img/Liviak.jpg" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings">The encarnation of the Jaguar God, Liviak has risen into the mortal´s realm to punish with severe cruelty all who defies his law. </p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger">Fluki</h3>
                        <img src="../source/img/Fluki.jpg" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings">She fights for the Dragon God and has declared war against all other clans that doesn’t praise him. Her fanatism has driven her fists into glorious deeds.</p>
                        </div>
                    </div>
                    <div class="personaje">
                        <h3 class="danger">Manqo</h3>
                        <img src="../source/img/Manqo.jpg" alt="">
                        <div style="width:75%; text-align:center;margin-left:auto;margin-right:auto;"> 
                            <p class="kings">He was sent from the gods to establish a secret mission. When its daylight, this fighter is nearly invincible, due to the Sun God, whom empowers him and his causes. </p>
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
