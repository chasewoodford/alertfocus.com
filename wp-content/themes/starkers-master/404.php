<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/html-header', 'parts/header' ) ); ?>

<?php include('parts/nav.php'); ?>

<article class="cards" id="cards" style="top:50px;">
    <div class="card-container">
        <div class="card-wrap">
            <section class="home card card-bumped" data-section-id="home" data-subsection-id="" id="section_home">
                <div class="card-full-width" id="card_full_width_main">
                    <div class="card-primary-wrapper clearfix">
                        <div class="card-suspender-color alert"></div>

                        <?php include('parts/quick-links.php'); ?>

                        <section class="card-primary hero-module" id="module-position-4">
                            <div class="front-bump-shadow"></div>

                            <section class="card-primary headline-grid-module" id="module-position-10">
                                <div class="headlines-header">
                                    <h5 class="headlines-header-title">Houston, we have a problem</h5>
                                </div>

                                <div class="clearfix">
                                    <div class="headline-page active">

                                        <p class="no-content-message">
                                            Sorry, the page you were looking for does not exist.
                                        </p>

                                    </div>

                                </div>
                            </section>
                        </section>
                    </div>

                    <div class="sidebar sidebar-home">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-scrollable-window">

                                <?php include('parts/contact-sidebar.php'); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="sh_bottom"></div>
            </section>
        </div>
    </div>
</article>

<?php get_template_parts( array( 'parts/footer','parts/html-footer' ) ); ?>