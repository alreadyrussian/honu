<?php 
/*

@package honu

*/
?>

<?php
if(post_password_required()){
    return;
}
?>
         
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-sm-12">

            <div id="comments" class="comments-area">

                <?php
                    if(have_comments()):
                    // we have comments
                ?>  

                
                <p class="comment-title">
                <?php 
                    $comments_number = get_comments_number();
                    if ( '1' === $comments_number ) {
                        /* translators: %s: post title */
                        printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'honu' ), get_the_title() );
                    } else {
                        printf(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s Reply to &ldquo;%2$s&rdquo;',
                            '%1$s Replies to &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'honu'
                        ),
                        number_format_i18n( $comments_number ),
                        get_the_title()
                        );
                    }
                ?>
                </p>


            <ul class="comment-list">
                <?php
                //Comment list
                $args = array(
                        // how deep we wanna go in the comments --> indentation
                        'max_depth'             => 5,

                        // Replay message
                        'reply_text'            => 'Reply',

                        // size avatar in px
                        'avatar_size'           => 32,

                        // order comments
                        //'reverse_top_level'     => false,

                );
                    wp_list_comments($args);
                ?> 
                </ul>


                <?php honu_get_post_navigation(); ?>




            <div class="col-12 comment-form-area">
                <?php 
                    if(!comments_open() && get_comments_number()) :
                ?>

                <p class="no-comments">
                    <?php esc_html_e('Comments are closed', 'honu') ?>
                </p>

                <?php
                    endif;
                ?>

                <?php
                    endif;
                ?>

                <?php 
                    // Stile the comment form
                    $fields = array(
                        'author' => 
                        '<div class="form-group"><label for="author">' . __( 'Name', 'honu' )
                        . '</label> <span class="required">*</span>' .
                        '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" required="required" /></div >',


                        'email' => 
                        '<div class="form-group"><label for="email">' . __( 'Email', 'honu' ) .
                        '</label> <span class="required">*</span>'  .  
                        '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" required="required" /></div>',

                        'url' =>
                        '<div class="form-group"><label for="url">' . __( 'Website', 'honu' ) . '</label>' .
                        '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
                        '" /></div>',

                    );

                    $args = array(

                        // Class form button submit
                        'class_submit' => 'btn-custom btn-custom--medium',

                        // Change text for the button
                        'label_submit' => __('Submit Comment', 'honu'),

                        // Comment field
                        'comment_field' => 
                        '<p class="form-group"><label for="comment">' . _x( 'Comment', 'noun', 'honu' ) . 
                        '</label><br /><textarea id="comment" name="comment" class="form-control" rows="4" required="required"></textarea></div>',


                        'fields' => apply_filters( 'comment_form_default_fields' , $fields),
                        

                    );

                    comment_form($args); ?>
                </div>
            </div>
        </div>
    </div>
    

</div>