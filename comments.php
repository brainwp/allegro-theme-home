<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php printf ( __( 'This post is password protected. Enter the password to view comments.' , THEME_NAME ));?></p>
	<?php
		return;
	}

	

?>
<?php //You can start editing here. ?>
						<div class="block-title">
							<a href="#respond" class="right"><?php _e("Escrever um comentário",THEME_NAME);?></a>
							<h2><?php comments_number(__('Sem Comentários', THEME_NAME), __('1 Comentário', THEME_NAME), __('% Comentários', THEME_NAME)); ?></h2>
						</div>
						<div class="block-content">

							<div class="comment-block">
								<?php if ( have_comments() && comments_open()) : ?>
									<ol class="comments" id="comments">
										<?php wp_list_comments('type=comment&callback=orangethemes_comment'); ?>
									</ol>
									<div class="comments-pager"><?php paginate_comments_links(); ?></div>
									
								 <?php else : // this is displayed if there are no comments so far ?>

									<?php if ( comments_open() ) : ?>
										<div class="no-comment-block">
											<span class="icon-text big-icon">&#59168;</span>
											<b><?php _e("Nenhum Comentário Ainda!", THEME_NAME);?></b>
											<p><?php _e("Nãohá nenhum comentário ainda, mas você pode ser o primeiro a comentar esse artigo", THEME_NAME);?></p>
											<a href="#respond" class="icon-link"><span class="icon-text">&#59154;</span><?php _e("Escrever um comentário", THEME_NAME);?></a>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div>

						</div>

						<?php if ( comments_open() ) : ?>
							<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
								<p class="registered-user-restriction"><?php printf ( __( 'Only <a href="%1$s"> registered </a> users can comment.', THEME_NAME ), wp_login_url( get_permalink() ));?> </p>
							<?php else : ?>
								<div class="block-title">
									<a href="#comments" class="right"><?php _e("Visualizar Comentários", THEME_NAME);?></a>
									<h2><?php _e("Escrever um comentário", THEME_NAME);?></h2>
								</div>


								<div class="block-content">
									<div id="writecomment">
										<a href="#" name="respond"></a>
										<?php 
											$defaults = array(
												'comment_field'       	=> '<p class="contact-form-message"><label for="c_message">'.__("Comentário", THEME_NAME).'<span class="required">*</span></label><textarea name="comment" id="comment" placeholder="'.__("Sua mensagem..",THEME_NAME).'"></textarea></p>',
												'comment_notes_before' 	=> '',
												'comment_notes_after'  	=> '',
												'id_form'              	=> 'writecomment',
												'id_submit'            	=> 'submit',
												'title_reply'          => '',
												'title_reply_to'       => '',
												'cancel_reply_link'    	=> '',
												'label_submit'         	=> ''.__( 'Publicar Comentário', THEME_NAME ).'',
											);
											comment_form($defaults);			
										?>
									</div>
								</div>

							<?php endif; // if you delete this the sky will fall on your head ?>

						<?php endif; ?>
						
