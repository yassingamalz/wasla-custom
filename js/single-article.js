/**
 * WASLA SINGLE ARTICLE JAVASCRIPT
 * Interactive functionality for individual blog posts/articles
 * Features: Table of Contents, Copy to Clipboard, Reading Progress, etc.
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    
    // ===== TABLE OF CONTENTS GENERATOR =====
    function generateTableOfContents() {
        const tocContainer = document.getElementById('table-of-contents');
        const articleBody = document.querySelector('.article-body');
        
        if (!tocContainer || !articleBody) return;
        
        // Find all headings (h2, h3, h4) in the article
        const headings = articleBody.querySelectorAll('h2, h3, h4');
        
        if (headings.length === 0) {
            tocContainer.innerHTML = '<p class="no-toc">لا توجد عناوين فرعية في هذا المقال</p>';
            return;
        }
        
        // Create TOC list
        const tocList = document.createElement('ul');
        tocList.classList.add('toc-list');
        
        headings.forEach((heading, index) => {
            // Generate unique ID for heading
            const headingId = `heading-${index}`;
            heading.id = headingId;
            
            // Create TOC item
            const tocItem = document.createElement('li');
            tocItem.classList.add('toc-item', `toc-${heading.tagName.toLowerCase()}`);
            
            const tocLink = document.createElement('a');
            tocLink.href = `#${headingId}`;
            tocLink.textContent = heading.textContent;
            tocLink.classList.add('toc-link');
            
            // Add click handler for smooth scrolling
            tocLink.addEventListener('click', function(e) {
                e.preventDefault();
                const targetElement = document.getElementById(headingId);
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 120; // Account for fixed header
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                    
                    // Update active link
                    updateActiveTocLink(tocLink);
                }
            });
            
            tocItem.appendChild(tocLink);
            tocList.appendChild(tocItem);
        });
        
        // Replace placeholder with actual TOC
        tocContainer.innerHTML = '';
        tocContainer.appendChild(tocList);
        
        // Set up scroll spy for active link highlighting
        setupScrollSpy(headings);
    }
    
    // ===== SCROLL SPY FOR TOC =====
    function setupScrollSpy(headings) {
        const tocLinks = document.querySelectorAll('.toc-link');
        
        function updateActiveTocOnScroll() {
            let activeHeading = null;
            const scrollPosition = window.scrollY + 140; // Account for header
            
            // Find the currently visible heading
            headings.forEach(heading => {
                const rect = heading.getBoundingClientRect();
                const elementTop = rect.top + window.scrollY;
                
                if (elementTop <= scrollPosition) {
                    activeHeading = heading;
                }
            });
            
            // Update active TOC link
            tocLinks.forEach(link => link.classList.remove('active'));
            
            if (activeHeading) {
                const activeLink = document.querySelector(`a[href="#${activeHeading.id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        }
        
        // Throttle scroll events for better performance
        let scrollTimeout;
        window.addEventListener('scroll', function() {
            if (scrollTimeout) {
                cancelAnimationFrame(scrollTimeout);
            }
            scrollTimeout = requestAnimationFrame(updateActiveTocOnScroll);
        });
        
        // Initial check
        updateActiveTocOnScroll();
    }
    
    function updateActiveTocLink(activeLink) {
        document.querySelectorAll('.toc-link').forEach(link => link.classList.remove('active'));
        activeLink.classList.add('active');
    }
    
    // ===== COPY TO CLIPBOARD FUNCTIONALITY =====
    window.copyToClipboard = function(url) {
        if (navigator.clipboard && window.isSecureContext) {
            // Modern approach
            navigator.clipboard.writeText(url).then(() => {
                showCopyNotification('تم نسخ الرابط بنجاح!');
            }).catch(() => {
                fallbackCopyToClipboard(url);
            });
        } else {
            fallbackCopyToClipboard(url);
        }
    };
    
    function fallbackCopyToClipboard(text) {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-9999px';
        textArea.style.top = '-9999px';
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        
        try {
            document.execCommand('copy');
            showCopyNotification('تم نسخ الرابط بنجاح!');
        } catch (err) {
            showCopyNotification('فشل في نسخ الرابط', 'error');
        }
        
        document.body.removeChild(textArea);
    }
    
    function showCopyNotification(message, type = 'success') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `copy-notification ${type}`;
        notification.textContent = message;
        
        // Style the notification
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 30px;
            background: ${type === 'success' ? '#006A67' : '#dc3545'};
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            font-family: 'Cairo', sans-serif;
            font-weight: 600;
            z-index: 10000;
            opacity: 0;
            transform: translateX(100px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Animate out and remove
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100px)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
    
    // ===== READING PROGRESS BAR =====
    function createReadingProgressBar() {
        const progressBar = document.createElement('div');
        progressBar.className = 'reading-progress';
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #000B58, #006A67);
            z-index: 9999;
            transition: width 0.2s ease;
        `;
        document.body.appendChild(progressBar);
        
        function updateReadingProgress() {
            const articleBody = document.querySelector('.article-body');
            if (!articleBody) return;
            
            const articleRect = articleBody.getBoundingClientRect();
            const articleTop = articleRect.top + window.scrollY;
            const articleHeight = articleRect.height;
            const viewportHeight = window.innerHeight;
            const scrolled = window.scrollY - articleTop + viewportHeight;
            const progress = Math.min(Math.max(scrolled / articleHeight, 0), 1);
            
            progressBar.style.width = `${progress * 100}%`;
        }
        
        // Throttle scroll events
        let progressTimeout;
        window.addEventListener('scroll', function() {
            if (progressTimeout) {
                cancelAnimationFrame(progressTimeout);
            }
            progressTimeout = requestAnimationFrame(updateReadingProgress);
        });
    }
    
    // ===== SOCIAL SHARING ENHANCEMENTS =====
    function enhanceSocialSharing() {
        const shareButtons = document.querySelectorAll('.share-btn[href]');
        
        shareButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
                
                // Track sharing (you can add analytics here)
                const platform = this.className.includes('facebook') ? 'Facebook' :
                              this.className.includes('twitter') ? 'Twitter' :
                              this.className.includes('whatsapp') ? 'WhatsApp' :
                              this.className.includes('telegram') ? 'Telegram' :
                              this.className.includes('linkedin') ? 'LinkedIn' : 'Unknown';
                
                console.log(`Article shared on: ${platform}`);
            });
        });
    }
    
    // ===== IMAGE ZOOM FUNCTIONALITY =====
    function addImageZoomFeature() {
        const articleImages = document.querySelectorAll('.article-body img');
        
        articleImages.forEach(img => {
            // Skip small images
            if (img.naturalWidth < 400) return;
            
            img.style.cursor = 'zoom-in';
            img.addEventListener('click', function() {
                createImageModal(this);
            });
        });
    }
    
    function createImageModal(img) {
        // Create modal overlay
        const modal = document.createElement('div');
        modal.className = 'image-modal';
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: zoom-out;
            padding: 2rem;
        `;
        
        // Create modal image
        const modalImg = document.createElement('img');
        modalImg.src = img.src;
        modalImg.alt = img.alt;
        modalImg.style.cssText = `
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transform: scale(0.8);
            transition: transform 0.3s ease;
        `;
        
        modal.appendChild(modalImg);
        document.body.appendChild(modal);
        
        // Animate in
        setTimeout(() => {
            modal.style.opacity = '1';
            modalImg.style.transform = 'scale(1)';
        }, 50);
        
        // Close on click or escape
        modal.addEventListener('click', () => closeImageModal(modal));
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeImageModal(modal);
        });
    }
    
    function closeImageModal(modal) {
        const modalImg = modal.querySelector('img');
        modal.style.opacity = '0';
        modalImg.style.transform = 'scale(0.8)';
        
        setTimeout(() => {
            if (modal.parentNode) {
                modal.parentNode.removeChild(modal);
            }
        }, 300);
    }
    
    // ===== ESTIMATED READING TIME =====
    function updateReadingTime() {
        const articleBody = document.querySelector('.article-body');
        const readingTimeElement = document.querySelector('.article-meta-item:nth-child(4) span');
        
        if (!articleBody || !readingTimeElement) return;
        
        const text = articleBody.textContent || articleBody.innerText;
        const wordCount = text.trim().split(/\s+/).length;
        const readingTime = Math.max(1, Math.ceil(wordCount / 200)); // Average 200 words per minute in Arabic
        
        readingTimeElement.textContent = `${readingTime} دقائق قراءة`;
    }
    
    // ===== SMOOTH ANIMATIONS FOR ELEMENTS =====
    function addScrollAnimations() {
        const animatedElements = document.querySelectorAll(
            '.author-box, .related-article-card, .sidebar-widget, .nav-post'
        );
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            observer.observe(element);
        });
    }
    
    // ===== LINK ENHANCEMENT =====
    function enhanceExternalLinks() {
        const articleLinks = document.querySelectorAll('.article-body a');
        
        articleLinks.forEach(link => {
            // Add external link indicator
            if (link.hostname && link.hostname !== window.location.hostname) {
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'noopener noreferrer');
                
                // Add external link icon
                const icon = document.createElement('i');
                icon.className = 'bi bi-box-arrow-up-left';
                icon.style.cssText = 'margin-right: 0.3rem; font-size: 0.8em; opacity: 0.7;';
                link.appendChild(icon);
            }
        });
    }
    
    // ===== INITIALIZATION =====
    function initializeArticlePage() {
        // Core features
        generateTableOfContents();
        createReadingProgressBar();
        enhanceSocialSharing();
        addImageZoomFeature();
        updateReadingTime();
        
        // Visual enhancements
        addScrollAnimations();
        enhanceExternalLinks();
        
        // Accessibility improvements
        addKeyboardNavigation();
        
        console.log('✅ Wasla Single Article JavaScript loaded successfully!');
    }
    
    // ===== KEYBOARD NAVIGATION =====
    function addKeyboardNavigation() {
        document.addEventListener('keydown', function(e) {
            // Alt + Left Arrow: Previous post
            if (e.altKey && e.key === 'ArrowLeft') {
                const prevLink = document.querySelector('.nav-previous a');
                if (prevLink) {
                    e.preventDefault();
                    window.location.href = prevLink.href;
                }
            }
            
            // Alt + Right Arrow: Next post
            if (e.altKey && e.key === 'ArrowRight') {
                const nextLink = document.querySelector('.nav-next a');
                if (nextLink) {
                    e.preventDefault();
                    window.location.href = nextLink.href;
                }
            }
            
            // Alt + H: Go to home
            if (e.altKey && e.key === 'h') {
                e.preventDefault();
                window.location.href = '/';
            }
        });
    }
    
    // ===== ERROR HANDLING =====
    window.addEventListener('error', function(e) {
        if (e.filename && e.filename.includes('single-article.js')) {
            console.error('Wasla Single Article JS Error:', e.message, 'at line', e.lineno);
        }
    });
    
    // Start everything
    initializeArticlePage();
});

// ===== UTILITY FUNCTIONS =====

// Debounce function for performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Format reading time in Arabic
function formatReadingTime(minutes) {
    if (minutes === 1) return 'دقيقة واحدة';
    if (minutes === 2) return 'دقيقتان';
    if (minutes <= 10) return `${minutes} دقائق`;
    return `${minutes} دقيقة`;
}