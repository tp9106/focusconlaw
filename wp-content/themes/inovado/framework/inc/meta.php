<span class="meta-date"><i class="icon-calendar"></i><time datetime="<?php echo date(DATE_W3C); ?>" class="updated"><?php the_time(get_option('date_format')); ?></time></span>
<span class="meta-author"><i class="icon-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="<?php _e('View all posts by', 'minti'); ?> <?php the_author(); ?>"><?php the_author(); ?></a></span>
<?php if ( comments_open() ) : ?><span class="meta-comment"><i class="icon-comment"></i><?php comments_popup_link(__('No Comments', 'minti'), __('1 Comment', 'minti'), __('% Comments', 'minti'), 'comments-link', ''); ?></span><?php endif; ?>
<span class="meta-category"><i class="icon-align-left"></i><?php the_category(', '); ?></span>
