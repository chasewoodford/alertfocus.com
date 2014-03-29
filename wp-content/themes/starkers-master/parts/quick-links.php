<?php
// codex.wordpress.org/Template_Tags/wp_list_categories
$argsQuickLinks = array(
    'hide_empty'         => 0,  // No, show all
    'use_desc_for_title' => 0,  // No, we'll write custom titles
    'hierarchical'       => 0,  // Don't display sub-categories
    'include'            => '17,18,19,20', // Only include Wrap-Around, Evidence, Links and About categories
    'title_li'           => '', // Remove outer list element
    'echo'               => 0,  // Keep results as variable
);

$quickLinks = get_categories( $argsQuickLinks );
?>

<section class="card-suspender">
    <p class="slst-header">Quick Links</p>

    <ul class="quick-links-list">

        <li class="quick-links-item">
            <a class="clst-link" href="/" title="Home">Home</a>
        </li>

        <?php foreach($quickLinks as $cat) {
            echo '
            <li class="quick-links-item">
                <a class="clst-link"
                    href="' . get_category_link($cat->term_id) . '"
                    title="'. esc_attr($cat->name) . '">'
                        . $cat->cat_name .
                '</a>
            </li>';
        } ?>

    </ul>
</section>