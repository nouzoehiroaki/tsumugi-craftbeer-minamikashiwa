<?php
  $page = get_post( get_the_ID() );
  $slug = $page->post_name;
?>
<?php get_header();?>
<main id="main" class="under-page page-single">
    <section id="first-view" class="position-relative">
        <div class="first-view-slide">
            <div class="first-view first-view04"></div>
            <div class="first-view first-view05"></div>
            <div class="first-view first-view06"></div>
        </div>
        <div class="under-h2-posi text-center">
            <h2 class="fade" data-en="contact">	<?php the_title(); ?></h2>
        </div>
    </section>
    <section id="single">
        <div class="lux-margin">
            <div class="container">
                <div class="d-flex">
                    <article class="column-content">
                        <!-- <div class="eye-catch-wrap">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('single-top-thumbnail'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/signboard.jpg" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div> -->
                         <div class="entry-content">
             				<?php the_content(); ?>
                         </div>
        			</article>
                    <aside class="latest-post">
                        <h3>最新のコラム</h3>
                        <ul>
                            <?php
                                 global $post;
                                 $args = array(
                                  'numberposts' => 8,
                                  'post_type' => 'post',
                                  'post__not_in' => array($post->ID)
                                 );
                            ?>
                            <?php $myPosts = get_posts($args); if($myPosts) : ?>
                            <?php foreach($myPosts as $post) : setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="side-eye-catch-wrap">
                                        <?php if(has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('single-side-thumbnail'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_tsumugi.svg" alt="<?php the_title(); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </a>
                                <div class="cont">
                                    <span class="entry-date date published">
                                        <?php the_time('Y/m/d');?>
                                    </span>
                                    <h4>
                                        <?php
                                        if(mb_strlen($post->post_title, 'UTF-8')>15){
                                            $title= mb_substr($post->post_title, 0, 15, 'UTF-8');
                                            echo $title.'…';
                                        }else{
                                            echo $post->post_title;
                                        }
                                        ?>
                                    </h4>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <p>その他の最新記事はまだありません。</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
