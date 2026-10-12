<?php
/**
 * Helper / Template Utility Functions
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ─────────────────────────────────────────────
//  LOGO OUTPUT
// ─────────────────────────────────────────────
function gi_logo() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="gi-site-logo" rel="home">';
        echo '<span class="gi-logo-text">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
        echo '</a>';
    }
}

// ─────────────────────────────────────────────
//  PAGE BANNER / BREADCRUMB
// ─────────────────────────────────────────────
function gi_page_banner( $title = '', $subtitle = '' ) {
    if ( ! $title ) {
        $title = is_front_page() ? get_bloginfo( 'name' ) : get_the_title();
    }
    ?>
    <section class="gi-page-banner">
        <div class="gi-banner-overlay"></div>
        <div class="gi-container">
            <div class="gi-banner-content">
                <?php if ( $subtitle ) : ?>
                    <div class="gi-hero-badge" style="margin-bottom: var(--gi-space-6);">
                        <span class="gi-hero-badge-dot"></span>
                        <span><?php echo esc_html( $subtitle ); ?></span>
                    </div>
                <?php endif; ?>
                <h1 class="gi-banner-title"><?php echo esc_html( $title ); ?></h1>
                <?php gi_breadcrumb(); ?>
            </div>
        </div>
        <div class="gi-banner-dots"></div>
    </section>
    <?php
}

// ─────────────────────────────────────────────
//  BREADCRUMB
// ─────────────────────────────────────────────
function gi_breadcrumb() {
    if ( is_front_page() ) return;
    ?>
    <nav class="gi-breadcrumb" aria-label="Breadcrumb">
        <ol class="gi-breadcrumb-list">
            <li class="gi-breadcrumb-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    <?php esc_html_e( 'Home', 'graphics-innovator' ); ?>
                </a>
            </li>
            <?php
            if ( is_single() || is_page() ) {
                $ancestors = get_post_ancestors( get_the_ID() );
                foreach ( array_reverse( $ancestors ) as $ancestor ) {
                    echo '<li class="gi-breadcrumb-item"><a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a></li>';
                }
                echo '<li class="gi-breadcrumb-item gi-breadcrumb-current" aria-current="page">' . esc_html( get_the_title() ) . '</li>';
            } elseif ( is_archive() ) {
                echo '<li class="gi-breadcrumb-item gi-breadcrumb-current">' . esc_html( get_the_archive_title() ) . '</li>';
            } elseif ( is_search() ) {
                echo '<li class="gi-breadcrumb-item gi-breadcrumb-current">' . esc_html__( 'Search Results', 'graphics-innovator' ) . '</li>';
            } elseif ( is_404() ) {
                echo '<li class="gi-breadcrumb-item gi-breadcrumb-current">' . esc_html__( '404 — Not Found', 'graphics-innovator' ) . '</li>';
            }
            ?>
        </ol>
    </nav>
    <?php
}

// ─────────────────────────────────────────────
//  SECTION LABEL / HEADING HELPER
// ─────────────────────────────────────────────
function gi_section_heading( $label, $title, $subtitle = '', $center = true ) {
    $align_class = $center ? ' gi-text-center' : '';
    ?>
    <div class="gi-section-heading<?php echo esc_attr( $align_class ); ?>">
        <?php if ( $label ) : ?>
            <span class="gi-section-label"><?php echo esc_html( $label ); ?></span>
        <?php endif; ?>
        <h2 class="gi-section-title"><?php echo wp_kses_post( $title ); ?></h2>
        <?php if ( $subtitle ) : ?>
            <p class="gi-section-subtitle"><?php echo esc_html( $subtitle ); ?></p>
        <?php endif; ?>
    </div>
    <?php
}

// ─────────────────────────────────────────────
//  BEFORE/AFTER SLIDER COMPONENT
// ─────────────────────────────────────────────
function gi_before_after( $before_img, $after_img, $before_label = 'Before', $after_label = 'After', $id = 0 ) {
    $uid = 'gi-ba-' . ( $id ? $id : uniqid() );
    ?>
    <div class="gi-before-after" id="<?php echo esc_attr( $uid ); ?>" data-gi-ba>
        <div class="gi-ba-container">
            <div class="gi-ba-after">
                <img src="<?php echo esc_url( $after_img ); ?>" alt="<?php echo esc_attr( $after_label ); ?>" loading="lazy">
                <span class="gi-ba-label gi-ba-label--after"><?php echo esc_html( $after_label ); ?></span>
            </div>
            <div class="gi-ba-before">
                <img src="<?php echo esc_url( $before_img ); ?>" alt="<?php echo esc_attr( $before_label ); ?>" loading="lazy">
                <span class="gi-ba-label gi-ba-label--before"><?php echo esc_html( $before_label ); ?></span>
            </div>
            <div class="gi-ba-handle" aria-label="Drag to compare">
                <div class="gi-ba-handle-circle">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="gi-ba-handle-line"></div>
            </div>
        </div>
    </div>
    <?php
}

// ─────────────────────────────────────────────
//  STAT COUNTER COMPONENT
// ─────────────────────────────────────────────
function gi_stat_counter( $number, $suffix, $label, $icon = '' ) {
    ?>
    <div class="gi-stat-item" data-gi-animate="fade-up">
        <?php if ( $icon ) : ?>
            <div class="gi-stat-icon"><?php echo $icon; ?></div>
        <?php endif; ?>
        <div class="gi-stat-number">
            <span class="gi-counter" data-target="<?php echo esc_attr( $number ); ?>">0</span><?php echo esc_html( $suffix ); ?>
        </div>
        <div class="gi-stat-label"><?php echo esc_html( $label ); ?></div>
    </div>
    <?php
}

// ─────────────────────────────────────────────
//  SERVICE CARD COMPONENT
// ─────────────────────────────────────────────
function gi_service_card( $icon_svg, $title, $desc, $link = '#', $index = 0 ) {
    ?>
    <article class="gi-service-card" data-gi-animate="fade-up" data-gi-delay="<?php echo esc_attr( $index * 100 ); ?>">
        <div class="gi-service-card-inner">
            <div class="gi-service-icon"><?php echo $icon_svg; ?></div>
            <h3 class="gi-service-title"><?php echo esc_html( $title ); ?></h3>
            <p class="gi-service-desc"><?php echo esc_html( $desc ); ?></p>
            <a href="<?php echo esc_url( $link ); ?>" class="gi-service-link">
                Learn More
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
        <div class="gi-service-card-glow"></div>
    </article>
    <?php
}

// ─────────────────────────────────────────────
//  PRICING CARD COMPONENT
// ─────────────────────────────────────────────
function gi_pricing_card( $plan, $price, $unit, $features, $cta_text, $cta_link, $featured = false ) {
    $featured_class = $featured ? ' gi-pricing-card--featured' : '';
    ?>
    <div class="gi-pricing-card<?php echo esc_attr( $featured_class ); ?>" data-gi-animate="fade-up">
        <?php if ( $featured ) : ?>
            <div class="gi-pricing-badge">Most Popular</div>
        <?php endif; ?>
        <div class="gi-pricing-plan"><?php echo esc_html( $plan ); ?></div>
        <div class="gi-pricing-price">
            <span class="gi-pricing-currency">$</span>
            <span class="gi-pricing-amount"><?php echo esc_html( $price ); ?></span>
            <span class="gi-pricing-unit"><?php echo esc_html( $unit ); ?></span>
        </div>
        <ul class="gi-pricing-features">
            <?php foreach ( $features as $feature ) : ?>
                <li class="gi-pricing-feature <?php echo isset( $feature['included'] ) && ! $feature['included'] ? 'gi-pricing-feature--excluded' : ''; ?>">
                    <?php if ( ! isset( $feature['included'] ) || $feature['included'] ) : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="gi-check-icon"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <?php else : ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="gi-x-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    <?php endif; ?>
                    <?php echo esc_html( $feature['text'] ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="<?php echo esc_url( $cta_link ); ?>" class="gi-btn <?php echo $featured ? 'gi-btn-primary' : 'gi-btn-outline'; ?> gi-btn-full">
            <?php echo esc_html( $cta_text ); ?>
        </a>
    </div>
    <?php
}

// ─────────────────────────────────────────────
//  INLINE SVG ICONS
// ─────────────────────────────────────────────
function gi_icon( $name, $size = 24 ) {
    $icons = [
        'clipping-path'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M12 3c-1.2 5.4-5 9.2-9 12"/><path d="M12 3c1.2 5.4 5 9.2 9 12"/><circle cx="12" cy="20" r="2"/><circle cx="3" cy="15" r="2"/><circle cx="21" cy="15" r="2"/></svg>',
        'background'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>',
        'shadow'         => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><ellipse cx="12" cy="20" rx="8" ry="2"/><rect x="6" y="4" width="12" height="12" rx="2"/></svg>',
        'masking'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/><path d="M12 6v6l4 2"/></svg>',
        'multi-clip'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M8 3H5a2 2 0 0 0-2 2v3"/><path d="M21 8V5a2 2 0 0 0-2-2h-3"/><path d="M3 16v3a2 2 0 0 0 2 2h3"/><path d="M16 21h3a2 2 0 0 0 2-2v-3"/><rect x="7" y="7" width="10" height="10" rx="1"/></svg>',
        'catalogue'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>',
        'check'          => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="' . $size . '" height="' . $size . '"><polyline points="20 6 9 17 4 12"></polyline></svg>',
        'arrow-right'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="' . $size . '" height="' . $size . '"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
        'clock'          => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'shield'         => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'star'           => '<svg viewBox="0 0 24 24" fill="currentColor" width="' . $size . '" height="' . $size . '"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'upload'         => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>',
        'download'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><polyline points="8 17 12 21 16 17"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"/></svg>',
        'mail'           => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'phone'          => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.28l3-.04a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6.09 6.09l1.91-1.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'location'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="' . $size . '" height="' . $size . '"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'quote'          => '<svg viewBox="0 0 24 24" fill="currentColor" width="' . $size . '" height="' . $size . '"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>',
    ];
    return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

// ─────────────────────────────────────────────
//  PAGINATION
// ─────────────────────────────────────────────
function gi_pagination() {
    $links = paginate_links( [
        'prev_text' => '&larr; ' . esc_html__( 'Previous', 'graphics-innovator' ),
        'next_text' => esc_html__( 'Next', 'graphics-innovator' ) . ' &rarr;',
        'type'      => 'array',
    ] );
    if ( ! $links ) return;
    echo '<nav class="gi-pagination" aria-label="Pagination"><ul class="gi-pagination-list">';
    foreach ( $links as $link ) {
        echo '<li class="gi-pagination-item">' . $link . '</li>';
    }
    echo '</ul></nav>';
}

// ─────────────────────────────────────────────
//  SANITIZE / ESCAPE HELPERS
// ─────────────────────────────────────────────
function gi_kses( $content ) {
    return wp_kses( $content, [
        'a'      => [ 'href' => [], 'title' => [], 'target' => [], 'rel' => [] ],
        'strong' => [],
        'em'     => [],
        'br'     => [],
        'span'   => [ 'class' => [] ],
    ] );
}

// ─────────────────────────────────────────────
//  GET ATTACHMENT URL BY FILENAME SEARCH
// ─────────────────────────────────────────────
function gi_get_upload_url( $filename ) {
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'] . '/' . ltrim( $filename, '/' );
}

// ─────────────────────────────────────────────
//  DYNAMIC NAVIGATION URL NORMALIZER
//  Seamlessly adapts all menu links to BOTH Localhost & Live Hosting
// ─────────────────────────────────────────────
function gi_normalize_nav_url( $url ) {
    if ( empty( $url ) || $url === '#' || strpos( $url, 'javascript:' ) === 0 || strpos( $url, 'mailto:' ) === 0 || strpos( $url, 'tel:' ) === 0 ) {
        return $url;
    }

    // Do not touch external third-party links (WhatsApp, social media, external auth)
    $external_domains = [
        'wa.me',
        'whatsapp.com',
        'facebook.com',
        'twitter.com',
        'x.com',
        'linkedin.com',
        'instagram.com',
        'youtube.com',
        'pinterest.com',
        'github.com',
    ];
    foreach ( $external_domains as $ext_domain ) {
        if ( stripos( $url, $ext_domain ) !== false ) {
            return $url;
        }
    }

    $current_home = untrailingslashit( home_url() );

    // Known site host bases from both live and local environments
    $known_bases = [
        'https://graphicsinnovator.com',
        'http://graphicsinnovator.com',
        'https://www.graphicsinnovator.com',
        'http://www.graphicsinnovator.com',
        'http://localhost/Graphics%20Innovator',
        'http://localhost/Graphics Innovator',
        'http://127.0.0.1/Graphics%20Innovator',
        'http://127.0.0.1/Graphics Innovator',
        'http://localhost',
        'http://127.0.0.1',
    ];

    foreach ( $known_bases as $base ) {
        if ( stripos( $url, $base ) === 0 ) {
            $path = substr( $url, strlen( $base ) );
            // Clean up any remaining leading subdirectory fragment if base was just http://localhost
            if ( stripos( $path, '/Graphics%20Innovator' ) === 0 ) {
                $path = substr( $path, strlen( '/Graphics%20Innovator' ) );
            } elseif ( stripos( $path, '/Graphics Innovator' ) === 0 ) {
                $path = substr( $path, strlen( '/Graphics Innovator' ) );
            }

            if ( empty( $path ) || $path === '/' ) {
                return trailingslashit( $current_home );
            }
            return $current_home . ( $path[0] === '/' ? $path : '/' . $path );
        }
    }

    // Root-relative path (e.g., "/services/" or "/contact-us/")
    // On localhost in a subfolder, a root-relative path points to localhost root and fails.
    // Convert it to use current home_url() so it works perfectly everywhere.
    if ( strpos( $url, '/' ) === 0 && strpos( $url, '//' ) !== 0 ) {
        return $current_home . $url;
    }

    return $url;
}

// Hook URL normalizer into WordPress nav menu filters
add_filter( 'wp_nav_menu_objects', 'gi_filter_nav_menu_objects', 20 );
function gi_filter_nav_menu_objects( $items ) {
    if ( ! is_array( $items ) ) return $items;
    foreach ( $items as &$item ) {
        if ( isset( $item->url ) ) {
            $item->url = gi_normalize_nav_url( $item->url );
        }
    }
    return $items;
}

add_filter( 'nav_menu_link_attributes', 'gi_filter_nav_menu_link_attributes', 20, 4 );
function gi_filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( ! empty( $atts['href'] ) ) {
        $atts['href'] = gi_normalize_nav_url( $atts['href'] );
    }
    return $atts;
}

// ─────────────────────────────────────────────
//  SMART SLUG REDIRECTS / ALIASES
//  Ensures /pricing/, /contact/, /about/ work seamlessly
// ─────────────────────────────────────────────
add_action( 'init', 'gi_smart_slug_redirects', 1 );
function gi_smart_slug_redirects() {
    if ( is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) return;

    $req_uri = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';
    if ( empty( $req_uri ) ) return;

    $path = trim( parse_url( $req_uri, PHP_URL_PATH ), '/' );
    if ( empty( $path ) ) return;

    // Get the trailing slug
    $parts = explode( '/', $path );
    $last_slug = strtolower( end( $parts ) );

    $slug_aliases = [
        'pricing'      => 'pricing-3',
        'contact'      => 'contact-us',
        'about'        => 'about-us',
        'how-it-works' => 'how-it-work',
        'portfolio'    => 'portfolio-details',
        'trial'        => 'free-trial',
    ];

    if ( isset( $slug_aliases[ $last_slug ] ) ) {
        wp_safe_redirect( home_url( '/' . $slug_aliases[ $last_slug ] . '/' ), 301 );
        exit;
    }
}
