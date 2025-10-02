<?php
/**
 * Wasla Block Patterns & Components Loader
 * 
 * Professional, organized system for article templates and reusable components
 * Designed for easy content creation with beautiful Wasla branding
 * 
 * @package Wasla
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Wasla Block Pattern Categories
 */
function wasla_register_block_pattern_categories() {
    if (function_exists('register_block_pattern_category')) {
        // Main patterns category
        register_block_pattern_category(
            'wasla-educational',
            array(
                'label' => __('قوالب وصلة التعليمية', 'wasla')
            )
        );
        
        // Components category
        register_block_pattern_category(
            'wasla-components',
            array(
                'label' => __('عناصر وصلة القابلة لإعادة الاستخدام', 'wasla')
            )
        );
        
        // Patterns category (for organisms)
        register_block_pattern_category(
            'wasla-patterns',
            array(
                'label' => __('أنماط وصلة المتقدمة', 'wasla')
            )
        );
    }
}
add_action('init', 'wasla_register_block_pattern_categories');

/**
 * Load Pattern Files
 * Organized by type for better maintainability
 */
function wasla_load_block_patterns() {
    $pattern_dir = get_stylesheet_directory() . '/inc/patterns/';
    $component_dir = get_stylesheet_directory() . '/inc/components/';
    
    // Article Templates
    $patterns = array(
        'complete-article',
        'step-by-step-guide',
        'comparison-article',
        'quick-tips',
        'qa-interview',
        'case-study',
        'resources-list',
        'timeline-article'
    );
    
    foreach ($patterns as $pattern) {
        $file = $pattern_dir . $pattern . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
    
    // Reusable Components (Molecules & Atoms)
    $components = array(
        // Existing components
        'introduction-box',
        'tip-box',
        'warning-box',
        'success-box',
        'info-box',
        'quote-highlight',
        'stats-grid',
        'feature-list',
        'checklist',
        'tutorial-walkthrough',
        
        // New Phase 1 components
        'card-icon',
        'card-numbered',
        'card-feature',
        'box-question',
        'grid-2col',
        'grid-3col',
        'grid-4col',
        'section-standard',
        'hero-article',
        'section-grid-cards',
        'faq-section',
        
        // Micro components
        'button',
        'breadcrumb',
        'timeline-item',
        'accordion-item',
        'progress-bar'
    );
    
    foreach ($components as $component) {
        $file = $component_dir . $component . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
add_action('init', 'wasla_load_block_patterns');
