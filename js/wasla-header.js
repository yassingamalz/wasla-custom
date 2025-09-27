/**
 * Wasla Header JavaScript
 * Handles header scroll effects, mobile menu, and dropdown functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';
    
    // Main elements
    const header = document.querySelector('.wasla-header');
    const navMenu = document.querySelector('.nav-menu');
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    let isMenuOpen = false;
    let lastScrollY = window.scrollY;
    
    // Initialize dropdown functionality
    function initializeDropdowns() {
        const dropdownMenus = document.querySelectorAll('.menu-item-has-children');
        
        dropdownMenus.forEach(menu => {
            const link = menu.querySelector('a');
            const submenu = menu.querySelector('.sub-menu');
            
            if (link && submenu) {
                setupDesktopHover(menu, submenu);
                setupMobileClick(menu, link, submenu);
                setupKeyboardNavigation(menu, link, submenu);
            }
        });
    }
    
    // Desktop hover functionality
    function setupDesktopHover(menu, submenu) {
        if (window.innerWidth > 768) {
            let hoverTimer;
            
            menu.addEventListener('mouseenter', function() {
                clearTimeout(hoverTimer);
                submenu.style.display = 'block';
                setTimeout(() => {
                    submenu.style.opacity = '1';
                    submenu.style.visibility = 'visible';
                    submenu.style.transform = 'translateY(0)';
                }, 10);
            });
            
            menu.addEventListener('mouseleave', function() {
                submenu.style.opacity = '0';
                submenu.style.visibility = 'hidden';
                submenu.style.transform = 'translateY(-10px)';
                
                hoverTimer = setTimeout(() => {
                    submenu.style.display = 'none';
                }, 300);
            });
        }
    }
    
    // Mobile click functionality
    function setupMobileClick(menu, link, submenu) {
        // Remove any existing listeners first
        link.removeEventListener('click', link._mobileClickHandler);
        
        // Create the handler function
        link._mobileClickHandler = function(e) {
            if (window.innerWidth <= 768) {
                // Always prevent default for parent items with submenus on mobile
                if (submenu) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                }
                
                const isOpen = menu.classList.contains('submenu-open');
                const dropdownMenus = document.querySelectorAll('.menu-item-has-children');
                
                // Close all other submenus first
                dropdownMenus.forEach(otherMenu => {
                    if (otherMenu !== menu) {
                        otherMenu.classList.remove('submenu-open');
                        const otherSubmenu = otherMenu.querySelector('.sub-menu');
                        if (otherSubmenu) {
                            otherSubmenu.style.maxHeight = '0';
                            otherSubmenu.style.padding = '0';
                        }
                        // Reset other dropdown indicators
                        const otherIndicator = otherMenu.querySelector('.dropdown-indicator');
                        if (otherIndicator) {
                            otherIndicator.style.transform = 'rotate(0deg)';
                        }
                    }
                });
                
                // Toggle current submenu
                if (isOpen) {
                    menu.classList.remove('submenu-open');
                    submenu.style.maxHeight = '0';
                    submenu.style.padding = '0';
                    
                    // Reset dropdown indicator
                    const indicator = menu.querySelector('.dropdown-indicator');
                    if (indicator) {
                        indicator.style.transform = 'rotate(0deg)';
                    }
                } else {
                    menu.classList.add('submenu-open');
                    
                    // Calculate content height for smooth animation
                    submenu.style.maxHeight = 'none';
                    const height = submenu.scrollHeight;
                    submenu.style.maxHeight = '0';
                    
                    // Animate to full height
                    requestAnimationFrame(() => {
                        submenu.style.maxHeight = (height + 20) + 'px';
                        submenu.style.padding = '0.5rem 0';
                    });
                    
                    // Rotate dropdown indicator
                    const indicator = menu.querySelector('.dropdown-indicator');
                    if (indicator) {
                        indicator.style.transform = 'rotate(180deg)';
                    }
                }
                
                return false;
            }
        };
        
        // Add the event listener with capture to prevent bubbling
        link.addEventListener('click', link._mobileClickHandler, true);
    }
    
    // Keyboard navigation
    function setupKeyboardNavigation(menu, link, submenu) {
        link.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    link.click();
                }
            } else if (e.key === 'Escape') {
                if (menu.classList.contains('submenu-open')) {
                    menu.classList.remove('submenu-open');
                    submenu.style.maxHeight = '0';
                    submenu.style.padding = '0';
                    link.focus();
                }
            } else if (e.key === 'ArrowDown') {
                e.preventDefault();
                if (window.innerWidth > 768 || menu.classList.contains('submenu-open')) {
                    const firstSubmenuItem = submenu.querySelector('a');
                    if (firstSubmenuItem) {
                        firstSubmenuItem.focus();
                    }
                }
            }
        });
        
        // Submenu keyboard navigation
        const submenuLinks = submenu.querySelectorAll('a');
        submenuLinks.forEach((submenuLink, index) => {
            submenuLink.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    if (index === 0) {
                        link.focus();
                    } else {
                        submenuLinks[index - 1].focus();
                    }
                } else if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    if (index < submenuLinks.length - 1) {
                        submenuLinks[index + 1].focus();
                    }
                } else if (e.key === 'Escape') {
                    e.preventDefault();
                    menu.classList.remove('submenu-open');
                    submenu.style.maxHeight = '0';
                    submenu.style.padding = '0';
                    link.focus();
                }
            });
        });
    }
    
    // Mobile menu toggle functionality
    function toggleMobileMenu() {
        isMenuOpen = !isMenuOpen;
        mobileToggle.classList.toggle('active', isMenuOpen);
        navMenu.classList.toggle('active', isMenuOpen);
        mobileToggle.setAttribute('aria-expanded', isMenuOpen);
        
        // Close all submenus when closing main menu
        if (!isMenuOpen) {
            const dropdownMenus = document.querySelectorAll('.menu-item-has-children');
            dropdownMenus.forEach(menu => {
                menu.classList.remove('submenu-open');
                const submenu = menu.querySelector('.sub-menu');
                if (submenu) {
                    submenu.style.maxHeight = '0';
                    submenu.style.padding = '0';
                }
                
                // Reset dropdown indicators
                const indicator = menu.querySelector('.dropdown-indicator');
                if (indicator) {
                    indicator.style.transform = 'rotate(0deg)';
                }
            });
        }
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
    }
    
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });
        
        // Close menu when clicking outside or on overlay
        document.addEventListener('click', function(e) {
            if (isMenuOpen && !header.contains(e.target)) {
                toggleMobileMenu();
            }
        });
        
        // Close menu when clicking the overlay
        document.addEventListener('click', function(e) {
            if (isMenuOpen && e.target.classList && e.target.classList.contains('nav-menu')) {
                const clickX = e.clientX;
                const menuRect = navMenu.getBoundingClientRect();
                if (clickX < menuRect.left) {
                    toggleMobileMenu();
                }
            }
        });
        
        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isMenuOpen) {
                toggleMobileMenu();
            }
        });
    }
    
    // Header scroll effects
    function handleScroll() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScrollY = currentScrollY;
    }
    
    if (header) {
        window.addEventListener('scroll', handleScroll);
    }
    
    // Responsive handling
    function handleResize() {
        const isMobile = window.innerWidth <= 768;
        
        // Close mobile menu when switching to desktop
        if (!isMobile && isMenuOpen) {
            toggleMobileMenu();
        }
        
        // Reinitialize dropdowns and mobile behavior
        clearTimeout(window.resizeTimer);
        window.resizeTimer = setTimeout(() => {
            initializeDropdowns();
            initMobileBehavior();
        }, 250);
    }
    
    window.addEventListener('resize', handleResize);
    
    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href && href !== '#' && href !== '#0') {
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    e.preventDefault();
                    const headerHeight = header ? header.offsetHeight + 20 : 80;
                    const targetPosition = targetElement.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (isMenuOpen) {
                        toggleMobileMenu();
                    }
                }
            }
        });
    });
    
    // Click outside to close dropdowns on desktop
    document.addEventListener('click', function(e) {
        if (window.innerWidth > 768 && !e.target.closest('.menu-item-has-children')) {
            const dropdownMenus = document.querySelectorAll('.menu-item-has-children');
            dropdownMenus.forEach(menu => {
                const submenu = menu.querySelector('.sub-menu');
                if (submenu && submenu.style.opacity === '1') {
                    submenu.style.opacity = '0';
                    submenu.style.visibility = 'hidden';
                    submenu.style.transform = 'translateY(-10px)';
                    setTimeout(() => {
                        submenu.style.display = 'none';
                    }, 300);
                }
            });
        }
    });
    
    // Skip link functionality
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.focus();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
    
    // Enhanced keyboard navigation for main menu
    const mainMenuLinks = document.querySelectorAll('.nav-menu > li > a');
    mainMenuLinks.forEach((link, index) => {
        link.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
                e.preventDefault();
                const direction = e.key === 'ArrowRight' ? 1 : -1;
                const nextIndex = (index + direction + mainMenuLinks.length) % mainMenuLinks.length;
                if (mainMenuLinks[nextIndex]) {
                    mainMenuLinks[nextIndex].focus();
                }
            }
        });
    });
    
    // Preload critical resources
    function preloadCriticalResources() {
        const logoImages = [
            'https://wasla-eg.com/wp-content/uploads/2025/08/شعار-وصلة-white-1.png',
            'https://antiquewhite-scorpion-378300.hostingersite.com/wp-content/uploads/2025/08/شعار-وصلة-white.png'
        ];
        
        logoImages.forEach(src => {
            const img = new Image();
            img.src = src;
        });
    }
    
    // Mobile-specific initialization
    function initMobileBehavior() {
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile) {
            // Ensure mobile menu starts closed
            document.body.classList.add('mobile-device');
            
            // Initialize mobile dropdown states
            document.querySelectorAll('.sub-menu').forEach(submenu => {
                submenu.style.maxHeight = '0';
                submenu.style.padding = '0';
                submenu.style.overflow = 'hidden';
            });
            
            // Reset dropdown indicators
            document.querySelectorAll('.dropdown-indicator').forEach(indicator => {
                indicator.style.transform = 'rotate(0deg)';
                indicator.style.transition = 'transform 0.3s ease';
            });
        } else {
            document.body.classList.remove('mobile-device');
            
            // Reset desktop behavior
            document.querySelectorAll('.sub-menu').forEach(submenu => {
                submenu.style.maxHeight = '';
                submenu.style.padding = '';
                submenu.style.overflow = '';
            });
        }
    }
    
    // Initialize everything
    initializeDropdowns();
    initMobileBehavior();
    if (header) {
        handleScroll();
    }
    preloadCriticalResources();
    
    // Header animation on page load
    setTimeout(() => {
        if (header) {
            header.style.transform = 'translateY(0)';
            header.style.opacity = '1';
        }
    }, 100);
    
    // Touch event handling for mobile
    let touchStartY = 0;
    let touchStartX = 0;
    
    document.addEventListener('touchstart', function(e) {
        touchStartY = e.touches[0].clientY;
        touchStartX = e.touches[0].clientX;
    }, { passive: true });
    
    document.addEventListener('touchmove', function(e) {
        if (isMenuOpen) {
            const touchY = e.touches[0].clientY;
            const touchX = e.touches[0].clientX;
            const deltaY = touchStartY - touchY;
            const deltaX = touchStartX - touchX;
            
            // Prevent scrolling when menu is open
            if (Math.abs(deltaX) < Math.abs(deltaY)) {
                e.preventDefault();
            }
        }
    }, { passive: false });
});