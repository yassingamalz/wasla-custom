<?php
/**
 * One-time setup script for initializing view counts
 * Run this once to set random view counts for existing posts
 */

require_once('../../../wp-config.php');

if (!current_user_can('manage_options')) {
    die('Access denied. Admin privileges required.');
}

echo "<h1>Wasla View Counter Setup</h1>";

$posts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1
));

$updated_count = 0;

foreach ($posts as $post) {
    $existing_views = get_post_meta($post->ID, '_wasla_view_count', true);
    
    if (empty($existing_views)) {
        $random_views = rand(100, 500);
        update_post_meta($post->ID, '_wasla_view_count', $random_views);
        echo "<p>Post: {$post->post_title} - Set views to: {$random_views}</p>";
        $updated_count++;
    } else {
        echo "<p>Post: {$post->post_title} - Already has views: {$existing_views}</p>";
    }
}

echo "<h2>Setup Complete!</h2>";
echo "<p>Updated {$updated_count} posts with random view counts.</p>";
echo "<p><strong>IMPORTANT:</strong> Delete this file after running it for security.</p>";
?>