<?php get_header(); ?>
    <section>
        <div class="main-section gl-col-12 gl-py-4">
            <div class="container">
                <div class="gl-row main-section-row">
                    <div class="gl-col-12 gl-col-6-md">
                        <div class="gl-row">
                            <div class="gl-col-9-md">
                                <h1 class="gl-mb-2">[KV]</h1>
                                <h2 class="gl-mb-3">Agora o seu Seguro te dá descontos e benefícios pra vc ousar mais por aí.</h2>
                                <a href="#" class="gl-button gl-primary">
                                    Conheça
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="gl-col-12 gl-col-6-md">
                        <iframe src="https://www.youtube.com/embed/Mn6mVNaK31g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container category-list-container">
            <div class="category-list page-information">
                <ul>
                    <?php echo get_category_menu(); ?>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container post-list-container line-fix">
            <div class="post-list gl-row">
                <?php
                get_query_posts();
                if (have_posts()):
                    get_template_part('loop/all');
                else:
                    get_template_part('loop/none');
                endif; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container partners-list-container gl-py-3">
            <h2 class="gl-mb-2">Parceiros em destaque</h2>
            <div class="featured-partner-list gl-row">
                <div class="gl-col-12 gl-col-6-md gl-mb-2">
                    <a class="featured-partner" href="#">
                        <span class="sr-only">Petite Box</span>
                        <img class="lazy" data-src="<?php echo bloginfo('template_url') ?>/assets/img/banner-petite.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-6-md gl-mb-2">
                    <a class="featured-partner" href="#">
                        <span class="sr-only">LEV</span>
                        <img class="lazy" data-src="<?php echo bloginfo('template_url') ?>/assets/img/banner-lev.jpg" alt=""/>
                    </a>
                </div>
            </div>
            <div class="partner-list gl-row">
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">DryWash</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/dry-wash.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/dry-wash.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">English Live</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/english-live.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/english-live.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Extra</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/extra.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/extra.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Lev</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/lev.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/lev.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Petite Box</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/petite-box.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/petite-box.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Sam&#x27;s Club</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/sam-s-club.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/sam-s-club.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">ZenKlub</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/zenklub.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/zenklub.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Sam&#x27;s Club</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/sam-s-club.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/sam-s-club.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Petite Box</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/petite-box.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/petite-box.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">DryWash</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/dry-wash.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/dry-wash.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">English Live</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/english-live.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/english-live.jpg" alt=""/>
                    </a>
                </div>
                <div class="gl-col-12 gl-col-4-sm gl-col-2-md gl-mb-2">
                    <a class="partner" href="#">
                        <span class="sr-only">Lev</span>
                        <img class="lazy" data-lazy="<?php echo bloginfo('template_url') ?>/assets/img/lev.jpg" data-src="<?php echo bloginfo('template_url') ?>/assets/img/lev.jpg" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="help-wrapper">
            <div class="container gl-pt-3">
                <div class="gl-row">
                    <div class="gl-col-12 gl-col-8-md gl-pb-2">
                        <h2>Tem dúvidas?</h2>
                        <p>A gente te explica tudo direitinho.</p>
                        <ul class="link-list">
                            <li>
                                <a href="#">Como faço para participar do programa de benefícios Youse?</a>
                            </li>
                            <li>
                                <a href="#">Como faço pra acessar o benefício?</a>
                            </li>
                            <li>
                                <a href="#">Como comprovar nos estabelecimentos que eu faço parte do programa de benefícios?</a>
                            </li>
                            <li>
                                <a href="#">Posso usar meu desconto quando eu quiser, ou existe alguma validade?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="gl-col-12 gl-col-4-md">
                        <img data-src="<?php echo bloginfo('template_url') ?>/assets/img/yousemon.png" alt="Yousemon" class="lazy gl-ml-2"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>