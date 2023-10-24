<?php 
    get_header(); 
?>
<?php 
    $post = get_post();
?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><i class="fa fa-pencil"></i>Our Blogs</h2>
                    <ul class="breadcrumb-cls"><?php //get_breadcrumb(); ?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    




    <div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">
					<div class="bloglist singlepost">
						<p><?php the_post_thumbnail('large'); ?></p>
						<h1><?php echo get_the_title(); ?></h1>
						<div class="postmeta">
							<ul>
								<li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
								<li><a href="#"><i class="icon_clock_alt"></i> 23/12/2015</a></li>
								<li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li>
								<li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
								<?php echo get_the_content(); ?>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

					<div id="comments">
						<h5>Comments</h5>
						<ul>
							<!-- <li>
								<div class="avatar">
									<a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
									</a>
								</div>

								<div class="comment_right clearfix">
									<div class="comment_info">
										By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
									</div>
									<p>
										Cursus tellus quis magna porta adipiscin
									</p>
								</div>
							</li> -->
						</ul>
					</div>
				</div>
				<!-- /col -->
				
				<aside class="col-lg-3">
					<div class="widget">
						<form>
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Search...">
							</div>
							<button type="submit" id="submit" class="btn_1"> Search</button>
						</form>
					</div>
					<!-- /widget -->
					
					<div class="widget">
						<div class="widget-title">
							<h4>Recent Posts</h4>
						</div>
						<ul class="comments-list">
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
						</ul>
					</div>
					<!-- /widget -->

					<div class="widget">
						<div class="widget-title">
							<h4>Blog Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Treatments <span>(12)</span></a></li>
							<li><a href="#">News <span>(21)</span></a></li>
							<li><a href="#">Events <span>(44)</span></a></li>
							<li><a href="#">New treatments <span>(09)</span></a></li>
							<li><a href="#">Focus in the lab <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->

					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Medicine</a>
							<a href="#">Treatments</a>
							<a href="#">Events</a>
							<a href="#">Specialist</a>
							<a href="#">Pills</a>
							<a href="#">Cancer</a>
						</div>
					</div>
					<!-- /widget -->
					
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>






    <!-- Blogs Area -->
    <section class="blogs-main archives single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                <?php the_post_thumbnail('large'); ?> 
                                </div>
                                <div class="blog-inner">
                                    <div class="blog-top">
                                        <div class="meta">
                                            <span>
												<i class="fa fa-bolt"></i>
												<a href="javascript:void(0)">
													<?php $category_detail = get_the_category($post->ID);
														foreach($category_detail as $cat_name){
														echo ucfirst($cat_name->cat_name); } 
													?>
												</a>
											</span>
                                            <span><i class="fa fa-calendar"></i><?php echo get_the_time('d, F, Y', $post->ID); ?></span>
                                            <span><a href="javascript:void(0)"><?php echo do_shortcode('[post-views]'); ?></a></span>
                                        </div>
                                       
                                    </div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php the_content(); ?>
                                    <div class="bottom-area">
                                        <ul class="arrow">
                                            <li class="prev"><?php previous_post_link( '%link', __( '<i class="fa fa-angle-double-left"></i>Previews Posts', 'smartthingsolutions' ) ); ?></li>
                                            <li class="next"><?php next_post_link( '%link', __( 'Next Posts<i class="fa fa-angle-double-right"></i>', 'smartthingsolutions' ) ); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-12">
						<?php $args = array('post_type' => 'post');
								
							$post_obj = new WP_Query($args);
								while($post_obj->have_posts() ) : $post_obj->the_post();

								$comments = get_comments(array(
									'post_id' => $post->ID
								));
								foreach($comments as $comment) {
									//echo "<pre>"; print_r($comment); echo "</pre>";
								}
						endwhile; ?>
                            <div class="author-details">
                                <div class="author-left">
								<?php $author_id=$post->post_author; ?>
									<img src="http://localhost/smartthingsolutions/wp-content/uploads/2021/11/t4.jpg" width="140" height="140" class="avatar" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
									<h4><?php the_author_meta( 'user_nicename' , $author_id ); ?></h4> 
                                    <p><a href="javascript:void(0)"><?php the_author_posts(); ?> posts</a></p>
                                </div>
                                <div class="author-content">
                                    <p><?php the_author_meta('description'); ?></p>
									<?php echo do_shortcode(get_option('smartthingsolutions_social_icons_option')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="comments-form"> 	
								<?php
									$comments_args = array(
										// Change the title of send button 
										'label_submit' => __( 'Submit Comment', 'textdomain' ),
										// Change the title of the reply section
										'title_reply' => __( '<h2 class="title">Leave a comment</h2>', 'textdomain' ),
										// Remove "Text or HTML to be displayed after the set of comment fields".
										
										'comment_notes_after' => '',

										'comment_field' => '<div class="row"><div class="col-12"><div class="form-group"><textarea id="comment" name="comment" placeholder="Type Your Message Here" aria-required="true"></textarea></div></div></div>',
									);
									comment_form( $comments_args );
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </section>
    <!--/ End Blogs Area -->
<?php 
    get_footer(); 
?>