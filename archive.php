<?php get_header();?>
<main id="main" class="under-page page-archive">
    <section id="first-view" class="position-relative">
        <div class="first-view-slide">
            <div class="first-view first-view04"></div>
            <div class="first-view first-view05"></div>
            <div class="first-view first-view06"></div>
        </div>
        <div class="under-h2-posi text-center">
            <h2 class="fade" data-en="column">コラム</h2>
        </div>
    </section>
    <section id="column">
        <div class="lux-margin">
            <div class="container">
                <div class="">
                    <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        query_posts( $query_string.'&posts_per_page=3&paged='.$paged);
                    ?>
                    <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <div class="column-box">
        				<div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('column-thumbnail'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_tsumugi.svg" alt="<?php the_title(); ?>" />
                            <?php endif ; ?>
        				</div>
        				<div class="text ja">
        					<h3 class="title">
        						<?php the_title(); ?>
        					</h3>
        					<time><?php echo get_the_date('Y年n月j日(D)'); ?></time>
        					<div class="excerpt">
        						<?php echo get_the_excerpt(); ?>
        					</div>
        					<div class="vk_post_btnOuter text-right">
        						<a class="btn-primary" href="<?php the_permalink(); ?>">
        							続きを読む
        						</a>
        					</div>
        				</div>
        			</div>
                <?php endwhile; wp_reset_query(); ?>
                    <div class="pagenavi text-center">
    					<?php if(function_exists('wp_pagenavi')): wp_pagenavi(); endif;?>
    				</div>
                <?php endif; ?>
                </div>
                <div class="master">
                    <div class="column-box">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/under/master.jpg" alt="" />
                        </div>
                        <div class="text ja">
                            <div class="box">
                                <h3 class="title">
                                    ご挨拶
                                </h3>
                                <div class="excerpt">
                                    2階のクラフトビール屋つむぎのウェブサイトへようこそ。<br>
                                    オーナーの大江と申します。<br><br>

                                    こちらでは、お店と私自身にまつわるエトセトラを書いてみました。<br>
                                    お店にこめた想いなど、お暇な時にお目通しください。
                                </div>
                                <p class="name">大江信明</p>
                            </div>
                            <div class="d-flex">
                                <div class="box">
                                    <h3 class="title">
                                        クラフトビールとの出会い
                                    </h3>
                                    <div class="excerpt">
                                        私がクラフトビールに目覚めたのは2005年の頃。<br>
                                        たまたま旅行で訪れたロンドンで飲んだビールに衝撃を受けたことがきっかけでした。<br><br>

                                        今まで日本で飲んでいたビールとあまりに違う。<br>
                                        ロンドンに行くまでのビールは、金色で、冷たく、シュワシュワした飲み心地で苦い。<br>
                                        それが、ロンドンで180度変わりました。<br>
                                        ぬるくて気が抜けていて茶色いくて。しかもあまり苦味を感じない。<br><br>

                                        美味しいと思うより、驚きの方が先にありました。<br>
                                        でもそれが私の口に合っていて。<br><br>

                                        帰国後、ロンドンで飲んだビールが飲みたくて、あのビールはなんだったのかを調べ始めました。<br><br>

                                        調べ始めてほどなく、それが「地ビール」と呼ばれていることを知りました。<br>
                                        ちょうど「地ビールをクラフトビールと呼んでみよう」という声が上がっていた頃です。<br><br>

                                        「地ビール（クラフトビール）ってこんな美味しいものだったんだ」<br><br>

                                        その体験があって以来、ずっとクラフトビールの虜です。
                                    </div>
                                </div>
                                <div class="box">
                                    <h3 class="title">
                                        南柏を選んだ理由
                                    </h3>
                                    <div class="excerpt">
                                        つむぎは柏市の中でも中心地から離れている南柏にあります。<br><br>

                                        南柏は、繁華街というような場所はなく、どちらかといえば住宅地。<br>
                                        遊びに出かける場所ではなく、自宅に帰る場所。<br>
                                        戸建やマンションも多く、長年住まわれている方から最近引っ越してくる方まで多様な方が住んでいます。<br><br>

                                        そんな街の特徴のせいか、街全体に「おかえり」と言われているような雰囲気があります。<br><br>

                                        居心地としては最高です。<br><br>

                                        まだ新型コロナウィルスの影響が残る2022年4月。<br>
                                        つむぎは、そんな南柏に誕生しました。<br><br>

                                        電車で出かけるような繁華街ではない、<br>
                                        自宅から近い場所だからこそ楽しめるお酒があるんじゃないか。<br><br>

                                        自宅でパーティーをするように。<br>
                                        あるいは、自宅でくつろいで楽しむように。<br><br>

                                        そんなスタイルが似合う場所にしたいと思い、この南柏の場所を選びました。
                                    </div>
                                </div>
                                <div class="box">
                                    <h3 class="title">
                                        「つむぎ」にこめた理由
                                    </h3>
                                    <div class="excerpt">
                                        「つむぎ」というお店の名前は「紡ぐ」という言葉に由来してます。<br>
                                        ｢紡ぐ｣には、｢さまざまなものをより合わせ、1つのものを作り出す｣という意味があります。<br><br>

                                        「つむぎ」が紡ぎたいのは、お客さま同士が繋がり出来上がる楽しい空間。<br>
                                        多様なビールに出会う事で見つかる面白さ。<br>
                                        楽しい、面白い、という気持ちが積み重なって生まれる幸せな気持ち。<br><br>

                                        ご来店いただくお客さまが幸せな気持ちになって帰っていただけたら<br>
                                        こんなに嬉しいことはありません。
                                    </div>
                                </div>
                                <div class="box">
                                    <h3 class="title">
                                        つむぎロゴ
                                    </h3>
                                    <div class="excerpt">
                                        つむぎのロゴは、近所にあるカフェ「hello, hanelca」さんのオーナーに制作をお願いしました。<br>
                                        カフェのオーナーでありながら、デザイナー、アートディレクターでもあります。<br>
                                        開業やお店に込めたい想いのたけを聞いていただいた上でできあがたのが今のロゴです。<br><br>

                                        ビールの美味しそうな泡と、ビアグラス。<br>
                                        乾杯する手。<br>
                                        結び目は、人と人とをつなぐという意味でもあり、お祝いの水引を表したものです。<br>
                                        クラフトビールを飲んでおめでたい気持ちになろうという意味も込めています。<br><br>

                                        また、サイドには麦の穂が。<br>
                                        ホップの効いたビールも良いですが、モルトの味わいが好きな私はあえて麦を入れたかったのです。<br>
                                        つむぎの名前の中にも「むぎ」という言葉があるくらいですから。<br><br>

                                        そんな想いが詰まったロゴデザイン。<br>
                                        気に入っていただけると嬉しいですし、これからも大事にしたいと思います。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
