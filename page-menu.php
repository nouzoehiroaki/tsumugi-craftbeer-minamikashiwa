<?php get_header();?>
<main id="main" class="under-page page-menu">
    <section id="first-view" class="position-relative">
        <div class="first-view-slide">
            <div class="first-view first-view07"></div>
            <div class="first-view first-view08"></div>
            <div class="first-view first-view09"></div>
        </div>
        <div class="under-h2-posi text-center">
            <h2 class="fade" data-en="menu">メニュー</h2>
        </div>
    </section>
    <section id="gallary">
        <div class="lux-margin">
            <div class="container">
                <div class="gallary d-flex">
                    <div class="gallary-left">
                        <div class="_slider">
                            <?php
                			$args = array(
                			  'offset' => 0,
                			  'post_type' => 'post-menu',
                			  'posts_per_page' => -1,
                			);
                			query_posts($args);
                			?>
                			<?php
                			if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                            <div class="slick-img">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('slick-img'); ?>
                                <?php endif ; ?>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="gallary-right">
                        <div class="_thumbnail">
                            <?php
                			$args = array(
                			  'offset' => 0,
                			  'post_type' => 'post-menu',
                			  'posts_per_page' => -1,
                			);
                			query_posts($args);
                			?>
                			<?php
                			if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                            <div class="thumbnail-img">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('slick-img'); ?>
                                <?php endif ; ?>
                                <div class="fadeText">
                                    <h3><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_content(); ?>
                                    </p>
                                    <?php if(get_post_meta($post->ID, 'price', true)): ?>
                                        <ul>
                                            <li><?php echo post_custom('price'); ?>円</li>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if(get_post_meta($post->ID, 'handled', true)): ?>
                                        <p>※週末(金土日)限定Food</p>
                                    <?php endif; ?>
                                    <button type="button" name="button">閉じる</button>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                            <?php endif; ?>
                            <div class="thumbnail-img"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-list">
                    <div class="margin">
                        <h3>クラフトビール（樽）</h3>
                        <p>
                            国内のクラフトビール醸造所から仕入れた新鮮なクラフトビールです。<br>
                            なくなり次第入れ替えるので、
                            日によってお楽しみいただけるビールの種類が替わります。<br>
                            インスタグラムでその日のビールをお知らせしています。
                        </p>
                        <ul>
                            <li>Trial（40ml）150円</li>
                            <li>Mサイズ（230ml）</li>
                            <li>Lサイズ （310ml）</li>
                            <li>LLサイズ （420ml）</li>
                        </ul>
                        <p>※MサイズからXLサイズでご提供するビールの価格は、ビールの種類によって異なります。</p>
                    </div>
                    <div class="margin">
                        <h3>ソフトドリンク</h3>
                        <ul>
                            <?php
                            $free_item = SCF::get('soft-drink');
                            foreach ($free_item as $fields) {
                                if($fields['drink-menu'] !== ""){
                            ?>
                            <li><?php echo $fields['drink-menu']; ?></li>
                            <?php } }?>
                        </ul>
                    </div>
                    <div class="margin">
                        <h3>フード</h3>
                        <ul>
                            <?php
                            $free_item = SCF::get('food');
                            foreach ($free_item as $fields) {
                                if($fields['food-menu'] !== ""){
                            ?>
                            <li><?php echo $fields['food-menu']; ?></li>
                            <?php } }?>
                            <h4>週末(金土日)限定Food</h4>
                            <?php
                            $free_item = SCF::get('exclusive-food');
                            foreach ($free_item as $fields) {
                                if($fields['exclusive-food-menu'] !== ""){
                            ?>
                            <li><?php echo $fields['exclusive-food-menu']; ?></li>
                            <?php } }?>
                        </ul>
                    </div>
                    <div class="handling">
                        <div class="margin">
                            <h3>取扱ビール<span>(順不同)</span></h3>
                            <ul>
                                <li>沼津クラフト</li>
                                <li>うちゅうブルーイング</li>
                                <li>WestCoast Brewing</li>
                                <li>Inkhorn Brewing</li>
                                <li>Baird Beer</li>
                                <li>BlackTide Brewing</li>
                                <li>Vertere</li>
                                <li>Grow Brewhouse</li>
                                <li>祭醸造</li>
                                <li>城端麦酒</li>
                                <li>伊勢角屋麦酒</li>
                                <li>Baeren醸造所</li>
                                <li>京都醸造</li>
                                <li>サンクトガーレン</li>
                                <li>いわて蔵ビール</li>
                                <li>DD4D</li>
                                <li>ビアへるん</li>
                                <li>奈良醸造</li>
                                <li>Y.Mareket</li>
                                <li>Nomcraft</li>
                                <li>新潟麦酒</li>
                                <li>スワンレイク</li>
                                <li>AJB</li>
                                <li>BeEasyBrewing</li>
                                <li>Revo Brewing</li>
                                <li>浮島Brewing</li>
                                <li>若林酒造</li>
                                <li>箕面麦酒</li>
                                <li>星野製作所(麦)</li>
                                <li>HEISEI BREWING</li>
                                <li>Kamikatz</li>
                                <li>浮島ブルーイング</li>
                                <li>反射炉ビヤ</li>
                                <li>秩父麦酒</li>
                                <li>忽布古丹</li>
                                <li>BrewClassic</li>
                                <li>Two Rabbits</li>
                                <li>North Island</li>
                                <li>尾道ブルーイング</li>
                                <li>うしとらブルワリー</li>
                                <li>下関ブルーイング</li>
                                <li>OKEI BREWERY</li>
                                <li>BeerBrainBrewery</li>
                                <li>天草ソナー</li>
                                <li>ベアード</li>
                                <li>のろし醸造</li>
                                <li>Brew Classic</li>
                                <li>AQUWA Brew Works</li>
                                <li>こまいぬブルーイング</li>
                                <li>FarYeast</li>
                                <li>箕面ビール</li>
                                <li>金しゃちビール</li>
                                <li>富士桜高原麦酒</li>
                                <li>Monkey Mountain</li>
                                <li>OPEN AIR</li>
                                <?php
                                $free_item = SCF::get('handled');
                                foreach ($free_item as $fields) {
                                    if($fields['handled-beer'] !== ""){
                                ?>
                                <li><?php echo $fields['handled-beer']; ?></li>
                                <?php } }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
