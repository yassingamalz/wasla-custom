<?php
/**
 * Comments Template for Wasla Educational Site
 * Displays comments and comment form with Wasla styling
 * 
 * @package Wasla
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

$comment_count = get_comments_number();
?>

<div id="comments" class="wasla-comments-section">
    
    <?php if ( have_comments() ) : ?>
        <div class="comments-header">
            <h3 class="comments-title">
                <i class="bi bi-chat-dots"></i>
                <?php
                if ( '1' === $comment_count ) {
                    echo 'تعليق واحد على "' . get_the_title() . '"';
                } else {
                    printf(
                        '%1$s تعليقات على "%2$s"',
                        number_format_i18n( $comment_count ),
                        get_the_title()
                    );
                }
                ?>
            </h3>
            
            <div class="comments-stats">
                <span class="comment-count">
                    <i class="bi bi-people"></i>
                    <?php echo $comment_count; ?> مشاركة
                </span>
                <span class="discussion-note">
                    <i class="bi bi-info-circle"></i>
                    شاركنا رأيك واستفساراتك
                </span>
            </div>
        </div>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-above" class="comment-navigation" role="navigation">
                <h4 class="screen-reader-text">تصفح التعليقات</h4>
                <div class="nav-links">
                    <div class="nav-previous">
                        <?php previous_comments_link( '<i class="bi bi-chevron-right"></i> التعليقات الأقدم' ); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_comments_link( 'التعليقات الأحدث <i class="bi bi-chevron-left"></i>' ); ?>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
                'callback'    => 'wasla_comment_callback'
            ) );
            ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <h4 class="screen-reader-text">تصفح التعليقات</h4>
                <div class="nav-links">
                    <div class="nav-previous">
                        <?php previous_comments_link( '<i class="bi bi-chevron-right"></i> التعليقات الأقدم' ); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_comments_link( 'التعليقات الأحدث <i class="bi bi-chevron-left"></i>' ); ?>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

    <?php endif; // Check for have_comments(). ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <div class="comments-closed">
            <div class="comments-closed-message">
                <i class="bi bi-lock"></i>
                <h4>التعليقات مغلقة</h4>
                <p>التعليقات مغلقة لهذا المقال، لكن يمكنك <a href="<?php echo home_url('/contact'); ?>">التواصل معنا</a> مباشرة.</p>
            </div>
        </div>
    <?php endif; ?>

    <?php if ( comments_open() ) : ?>
        <div class="comment-form-wrapper">
            <div class="comment-form-header">
                <h3 class="comment-reply-title">
                    <i class="bi bi-chat-square-text"></i>
                    اترك تعليقاً
                </h3>
                <p class="comment-form-description">
                    نحب أن نسمع رأيك! شاركنا تجربتك أو استفساراتك حول هذا المقال.
                </p>
            </div>

            <?php
            $comment_form_args = array(
                'title_reply'          => '',
                'title_reply_to'       => 'رد على %s',
                'cancel_reply_link'    => 'إلغاء الرد',
                'label_submit'         => 'نشر التعليق',
                'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"><i class="bi bi-send"></i> %4$s</button>',
                'submit_field'         => '<div class="form-submit-wrapper">%1$s %2$s</div>',
                'class_form'           => 'wasla-comment-form',
                'comment_field'        => '
                    <div class="comment-form-comment">
                        <label for="comment" class="comment-form-label">التعليق <span class="required">*</span></label>
                        <textarea id="comment" name="comment" cols="45" rows="6" maxlength="65525" required placeholder="اكتب تعليقك هنا... كن مهذباً ومحترماً في تعليقك"></textarea>
                    </div>',
                'fields' => array(
                    'author' => '
                        <div class="comment-form-author">
                            <label for="author" class="comment-form-label">الاسم <span class="required">*</span></label>
                            <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245" required placeholder="اسمك الكامل" />
                        </div>',
                    'email' => '
                        <div class="comment-form-email">
                            <label for="email" class="comment-form-label">البريد الإلكتروني <span class="required">*</span></label>
                            <input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" required placeholder="your@email.com" />
                            <small class="form-help-text">لن يتم نشر بريدك الإلكتروني</small>
                        </div>',
                    'url' => '
                        <div class="comment-form-url">
                            <label for="url" class="comment-form-label">الموقع الإلكتروني</label>
                            <input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" placeholder="https://yourwebsite.com (اختياري)" />
                        </div>'
                ),
                'comment_notes_before' => '
                    <div class="comment-notes">
                        <div class="privacy-notice">
                            <i class="bi bi-shield-check"></i>
                            <span>نحن نحترم خصوصيتك. بياناتك آمنة ولن نشاركها مع أطراف خارجية.</span>
                        </div>
                    </div>',
                'comment_notes_after' => '',
            );
            
            comment_form( $comment_form_args );
            ?>
        </div>
    <?php endif; ?>

</div>

<?php
// Custom comment callback function
if ( ! function_exists( 'wasla_comment_callback' ) ) :
    function wasla_comment_callback( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
            
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
                <div class="comment-author-avatar">
                    <?php 
                    if ( $args['avatar_size'] != 0 ) {
                        echo get_avatar( $comment, $args['avatar_size'], '', get_comment_author(), array( 'class' => 'comment-avatar' ) ); 
                    } else {
                        echo '<div class="comment-avatar-placeholder"><i class="bi bi-person-circle"></i></div>';
                    }
                    ?>
                </div>
                
                <div class="comment-content-wrapper">
                    <div class="comment-meta">
                        <div class="comment-author-info">
                            <h4 class="comment-author-name">
                                <?php 
                                $author_url = get_comment_author_url();
                                if ( $author_url && $author_url !== 'http://' ) {
                                    echo '<a href="' . esc_url( $author_url ) . '" target="_blank" rel="nofollow">' . get_comment_author() . '</a>';
                                } else {
                                    echo get_comment_author();
                                }
                                ?>
                                
                                <?php if ( $comment->user_id === get_the_author_meta('ID') ) : ?>
                                    <span class="comment-author-badge">
                                        <i class="bi bi-patch-check-fill"></i>
                                        الكاتب
                                    </span>
                                <?php endif; ?>
                            </h4>
                            
                            <div class="comment-metadata">
                                <time datetime="<?php comment_time('c'); ?>" class="comment-date">
                                    <i class="bi bi-clock"></i>
                                    <?php 
                                    $comment_date = get_comment_date('U');
                                    $current_time = current_time('U');
                                    $time_diff = $current_time - $comment_date;
                                    
                                    if ( $time_diff < 3600 ) { // Less than 1 hour
                                        echo 'منذ ' . ceil($time_diff / 60) . ' دقيقة';
                                    } elseif ( $time_diff < 86400 ) { // Less than 1 day
                                        echo 'منذ ' . ceil($time_diff / 3600) . ' ساعة';
                                    } elseif ( $time_diff < 604800 ) { // Less than 1 week
                                        echo 'منذ ' . ceil($time_diff / 86400) . ' يوم';
                                    } else {
                                        echo get_comment_date('j F Y');
                                    }
                                    ?>
                                </time>
                                
                                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-permalink">
                                    <i class="bi bi-link-45deg"></i>
                                    رابط
                                </a>
                            </div>
                        </div>
                        
                        <div class="comment-actions">
                            <?php 
                            comment_reply_link( 
                                array_merge( $args, 
                                    array( 
                                        'add_below' => $add_below, 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'],
                                        'reply_text' => '<i class="bi bi-reply"></i> رد'
                                    ) 
                                ) 
                            ); 
                            ?>
                        </div>
                    </div>

                    <div class="comment-content">
                        <?php if ( $comment->comment_approved == '0' ) : ?>
                            <div class="comment-awaiting-moderation">
                                <i class="bi bi-hourglass-split"></i>
                                <em>تعليقك في انتظار المراجعة.</em>
                            </div>
                        <?php endif; ?>
                        
                        <div class="comment-text">
                            <?php comment_text(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if ( $comment->comment_approved != '0' ) : ?>
                <div class="comment-footer">
                    <div class="comment-reactions">
                        <button type="button" class="comment-like-btn" data-comment-id="<?php comment_ID(); ?>">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <span class="like-count">0</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        <?php
    }
endif;
?>

<style>
/* ===== WASLA COMMENTS STYLING ===== */
.wasla-comments-section {
    background: #f8f9fa;
    border-radius: 20px;
    padding: 2.5rem;
    margin: 3rem 0;
    border: 1px solid #e9ecef;
    box-shadow: 0 5px 20px rgba(0, 11, 88, 0.05);
    font-family: 'Tajawal', sans-serif;
    direction: rtl;
}

/* Comments Header */
.comments-header {
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid #FFF4B7;
}

.comments-title {
    font-family: 'Cairo', sans-serif;
    font-size: 1.8rem;
    color: #000B58;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: 600;
}

.comments-title i {
    color: #006A67;
    font-size: 1.5rem;
}

.comments-stats {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
    align-items: center;
    font-size: 0.95rem;
    color: #666;
}

.comment-count,
.discussion-note {
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.comment-count i,
.discussion-note i {
    color: #006A67;
}

/* Comment Navigation */
.comment-navigation {
    margin: 2rem 0;
    padding: 1rem;
    background: white;
    border-radius: 12px;
    border: 1px solid #e9ecef;
}

.comment-navigation .nav-links {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.comment-navigation a {
    color: #006A67;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    background: #f8f9fa;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.comment-navigation a:hover {
    background: #006A67;
    color: white;
    transform: translateY(-2px);
}

/* Comment List */
.comment-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment-list .comment {
    margin-bottom: 2rem;
    background: white;
    border-radius: 15px;
    padding: 2rem;
    border: 1px solid #e9ecef;
    box-shadow: 0 3px 10px rgba(0, 11, 88, 0.05);
    transition: all 0.3s ease;
}

.comment-list .comment:hover {
    box-shadow: 0 5px 15px rgba(0, 11, 88, 0.1);
    transform: translateY(-2px);
}

.comment-list .children {
    list-style: none;
    padding: 0;
    margin: 2rem 0 0 2rem;
}

.comment-list .children .comment {
    background: #f8f9fa;
    border-right: 3px solid #006A67;
    margin-bottom: 1.5rem;
    position: relative;
}

.comment-list .children .comment::before {
    content: '';
    position: absolute;
    top: -1rem;
    right: -2rem;
    width: 20px;
    height: 20px;
    background: #FFF4B7;
    border-radius: 50%;
    border: 2px solid #006A67;
}

/* Comment Body */
.comment-body {
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
}

.comment-author-avatar {
    flex-shrink: 0;
}

.comment-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 3px solid #FFF4B7;
    object-fit: cover;
}

.comment-avatar-placeholder {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFF4B7;
    font-size: 2rem;
    border: 3px solid #FFF4B7;
}

.comment-content-wrapper {
    flex: 1;
    min-width: 0;
}

/* Comment Meta */
.comment-meta {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.comment-author-info {
    flex: 1;
}

.comment-author-name {
    font-family: 'Cairo', sans-serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: #000B58;
    margin: 0 0 0.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.comment-author-name a {
    color: #000B58;
    text-decoration: none;
    transition: color 0.3s ease;
}

.comment-author-name a:hover {
    color: #006A67;
}

.comment-author-badge {
    background: linear-gradient(135deg, #006A67 0%, #000B58 100%);
    color: white;
    padding: 0.2rem 0.6rem;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.comment-metadata {
    display: flex;
    gap: 1.5rem;
    align-items: center;
    font-size: 0.9rem;
    color: #666;
    flex-wrap: wrap;
}

.comment-date,
.comment-permalink {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    color: #666;
    text-decoration: none;
    transition: color 0.3s ease;
}

.comment-permalink:hover {
    color: #006A67;
}

.comment-date i,
.comment-permalink i {
    font-size: 0.8rem;
    color: #006A67;
}

.comment-actions {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.comment-actions .comment-reply-link {
    color: #006A67;
    text-decoration: none;
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    background: #f8f9fa;
    font-size: 0.9rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    border: 1px solid #e9ecef;
}

.comment-actions .comment-reply-link:hover {
    background: #006A67;
    color: white;
    border-color: #006A67;
}

/* Comment Content */
.comment-awaiting-moderation {
    background: #fff3cd;
    color: #856404;
    padding: 0.75rem 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    border: 1px solid #ffeaa7;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.comment-text {
    font-size: 1rem;
    line-height: 1.7;
    color: #333;
}

.comment-text p {
    margin: 0 0 1rem 0;
}

.comment-text p:last-child {
    margin-bottom: 0;
}

/* Comment Footer */
.comment-footer {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
}

.comment-reactions {
    display: flex;
    gap: 1rem;
}

.comment-like-btn {
    background: none;
    border: 1px solid #e9ecef;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: #666;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.comment-like-btn:hover {
    border-color: #006A67;
    color: #006A67;
    background: #f8f9fa;
}

.comment-like-btn.liked {
    background: #006A67;
    color: white;
    border-color: #006A67;
}

/* Comments Closed */
.comments-closed {
    text-align: center;
    padding: 3rem 2rem;
}

.comments-closed-message {
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 15px;
    padding: 2rem;
    max-width: 500px;
    margin: 0 auto;
}

.comments-closed-message i {
    font-size: 3rem;
    color: #006A67;
    margin-bottom: 1rem;
}

.comments-closed-message h4 {
    font-family: 'Cairo', sans-serif;
    font-size: 1.5rem;
    color: #000B58;
    margin-bottom: 1rem;
}

.comments-closed-message p {
    color: #666;
    margin: 0;
}

.comments-closed-message a {
    color: #006A67;
    text-decoration: none;
    font-weight: 600;
}

.comments-closed-message a:hover {
    text-decoration: underline;
}

/* Comment Form */
.comment-form-wrapper {
    margin-top: 3rem;
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    border: 1px solid #e9ecef;
    box-shadow: 0 3px 15px rgba(0, 11, 88, 0.05);
}

.comment-form-header {
    text-align: center;
    margin-bottom: 2rem;
}

.comment-reply-title {
    font-family: 'Cairo', sans-serif;
    font-size: 1.8rem;
    color: #000B58;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    font-weight: 600;
}

.comment-reply-title i {
    color: #006A67;
    font-size: 1.5rem;
}

.comment-form-description {
    color: #666;
    font-size: 1rem;
    margin: 0;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.wasla-comment-form {
    display: grid;
    gap: 1.5rem;
}

.comment-form-author,
.comment-form-email,
.comment-form-url,
.comment-form-comment {
    display: grid;
    gap: 0.5rem;
}

.comment-form-label {
    font-family: 'Cairo', sans-serif;
    font-weight: 600;
    color: #333;
    font-size: 1rem;
}

.comment-form-label .required {
    color: #dc3545;
}

.wasla-comment-form input[type="text"],
.wasla-comment-form input[type="email"],
.wasla-comment-form input[type="url"],
.wasla-comment-form textarea {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    font-family: 'Tajawal', sans-serif;
    transition: all 0.3s ease;
    background: #fafafa;
    outline: none;
}

.wasla-comment-form input:focus,
.wasla-comment-form textarea:focus {
    border-color: #006A67;
    background: white;
    box-shadow: 0 0 0 3px rgba(0, 106, 103, 0.1);
    transform: translateY(-2px);
}

.wasla-comment-form textarea {
    resize: vertical;
    min-height: 120px;
    line-height: 1.6;
}

.form-help-text {
    font-size: 0.85rem;
    color: #999;
    margin-top: 0.25rem;
}

.comment-notes {
    background: #e8f4f8;
    border-radius: 10px;
    padding: 1rem;
    margin-bottom: 1.5rem;
    border: 1px solid #bee5eb;
}

.privacy-notice {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: #0c5460;
    font-size: 0.9rem;
}

.privacy-notice i {
    color: #006A67;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.form-submit-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.wasla-comment-form .submit {
    background: linear-gradient(135deg, #000B58 0%, #006A67 100%);
    color: white;
    padding: 18px 40px;
    border: none;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 11, 88, 0.25);
    font-family: 'Cairo', sans-serif;
    min-width: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.wasla-comment-form .submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(0, 11, 88, 0.35);
}

.wasla-comment-form .submit:active {
    transform: translateY(0);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .wasla-comments-section {
        padding: 2rem;
        margin: 2rem 0;
    }
    
    .comments-title {
        font-size: 1.5rem;
        flex-direction: column;
        gap: 0.5rem;
        text-align: center;
    }
    
    .comments-stats {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    
    .comment-body {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    
    .comment-meta {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .comment-metadata {
        justify-content: center;
    }
    
    .comment-list .children {
        margin-right: 1rem;
    }
    
    .comment-form-wrapper {
        padding: 2rem;
    }
    
    .comment-reply-title {
        font-size: 1.5rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .comment-navigation .nav-links {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .wasla-comments-section {
        padding: 1.5rem;
    }
    
    .comment-form-wrapper {
        padding: 1.5rem;
    }
    
    .comment-list .comment {
        padding: 1.5rem;
    }
    
    .comment-avatar,
    .comment-avatar-placeholder {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }
    
    .wasla-comment-form .submit {
        width: 100%;
        max-width: 300px;
    }
}

/* Screen Reader Text */
.screen-reader-text {
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    white-space: nowrap;
}
</style>