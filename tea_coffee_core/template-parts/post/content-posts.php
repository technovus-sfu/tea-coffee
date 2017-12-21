<?
/**
 * Template part for displaying post list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */
?>

<?
if (have_posts()) :
    while (have_posts()) : the_post();
?>

<article>
    <a href="<? the_permalink(); ?>">
        <container>
            <h2 class="post-title"><? the_title(); ?></h2>
            <p class="post-info">
                    <? echo the_time( 'F j, Y g:i a' ); ?> | Posted in 
                    <?
                        $categories = get_the_category();
                        $seperator = ", ";
                        $output = '';

                        if ($categories) :
                            foreach ($categories as $category) :

                                $output .=  $category->cat_name . $seperator;

                            endforeach;
                            echo trim($output, $seperator);
                        endif;
                    ?>
            </p>
            <div class="post-excerpt content">
                <? the_excerpt(); ?>
            </div>
        </container>
    </a>
</article>
    
<? endwhile;
    else :
        echo '<p>No content found</p>';
endif;
?>