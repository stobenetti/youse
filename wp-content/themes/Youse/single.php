<?php get_header();
the_post() ?>
    <section>
        <div class="main-section gl-col-12 gl-py-4">
            <div class="container">
                <div class="gl-col-6-md">
                    <div class="gl-row">
                        <div class="gl-col-9-md">
                            <h2 class="gl-mb-2"><?php echo strtoupper(get_the_title()); ?></h2>
                            <h4 class="gl-mb-3"><?php the_content(); ?></h4>
                            <a href="<?php echo get_category_link(current(get_the_category())->cat_ID); ?>" class="gl-button gl-primary">
                                <?php echo current(get_the_category())->name; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container category-list-container">
            <div class="post-information page-information">
                <p><?php echo the_date('d M Y'); ?> - <?php the_author(); ?></p>
            </div>
        </div>
    </section>

    <section>
        <div class="container post-content-container gl-pt-2 gl-pb-3">
            <p>Lorem ipsum dolor sit amet, ea sed habeo pertinax similique, duo dicant feugiat no. Ei populo pertinacia eos, choro scripta dolorum et mea. Mel ne labitur concludaturque conclusionemque, cu soluta perpetua usu. Vero mucius mei id, ad qui dicunt delicata mediocritatem, ad wisi putent impedit mea. Vidit timeam vidisse sed ad, ne est ponderum cotidieque. Has dicat mediocritatem an.</p>
            <p>Nam luptatum invenire suavitate ex, qui id insolens rationibus voluptatibus, wisi commodo deserunt est an. Purto regione usu eu. Vix laudem prodesset mediocritatem cu, dolores deseruisse pri cu. Nec cu vidisse tractatos, vel an aeterno nonumes.</p>
            <p>Pertinax imperdiet in quo, ei ullum causae eam. Eam ut illum timeam posidonium, fabulas indoctum eu pro, in nec facer paulo bonorum. Decore singulis accusamus vis ea, stet vero reprimique et ius. Ex modus maiestatis vis, eam ornatus definitionem ea.</p>
            <p>Eum brute phaedrum ea. Vide eripuit definitionem per cu, ceteros maiestatis ei vim. Oratio nostrud in duo, partiendo referrentur in nam. Error offendit vulputate eum ut, facilis vituperatoribus duo ad. Duo detraxit periculis id, audire appareat gloriatur vix an. Autem appareat et nec, viderer invidunt vituperata et vim.</p>
            <p>Voluptua democritum cum at, elitr utinam aeterno eu nam. Cum alterum deterruisset in, has id sonet phaedrum intellegat. Vix rebum nostrud ea, has ex quidam quaeque. Per et hinc oporteat disputationi, vitae labore no vix, ipsum aeterno appareat ius an. Clita omittam noluisse sit cu, per id debitis accusam sensibus, posse facer fuisset sit cu.</p>
            <br/>
            <img class="lazy img-responsive" data-src="<?php bloginfo('template_url'); ?>/assets/img/post-sample.png" alt=""/>
        </div>
    </section>
<?php get_footer(); ?>