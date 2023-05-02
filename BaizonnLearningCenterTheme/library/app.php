<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#111111",
            "#ffffff"
        ],
        "bgColor": "#ffffff",
        "colors": [
            "#478ac9",
            "#a79770",
            "#f1c50e",
            "#2cccc4",
            "#b9c1cc"
        ],
        "customColors": [
            {
                "color": "#206fa3",
                "status": 0,
                "transparency": 1,
                "index": 0
            },
            {
                "color": "#4cae6a",
                "status": 0,
                "transparency": 1,
                "index": 1
            },
            {
                "color": "#b5a776",
                "status": 0,
                "transparency": 1,
                "index": 2
            },
            {
                "color": "#62531c",
                "status": 0,
                "transparency": 1,
                "index": 3
            },
            {
                "color": "#f0e691",
                "status": 0,
                "transparency": 1,
                "index": 4
            },
            {
                "color": "#d5dee9",
                "status": 0,
                "transparency": 1,
                "index": 5
            },
            {
                "color": "#9af541",
                "status": 0,
                "transparency": 1,
                "index": 6
            }
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-color",
        "name": "u11"
    },
    "fontScheme": {
        "name": "custom-font-family-2",
        "default": true,
        "fonts": {
            "heading": "Playfair Display, serif",
            "text": "Lato, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Playfair Display",
            "textTitle": "Lato"
        }
    },
    "typography": {
        "name": "custom-page-typography-2",
        "title": {
            "font-size": 4.5,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 3.75
            },
            "XS": {
                "font-size": 3
            },
            "font-weight": "700"
        },
        "subtitle": {
            "font-size": 2.25,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            },
            "font-weight": "700"
        },
        "h1": {
            "font-size": 3.75,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.875
            },
            "font-weight": "700",
            "font-style": "",
            "text-decoration": "",
            "text-transform": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": ""
        },
        "h2": {
            "font-size": 3.75,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 2.25,
                "font-weight": "700",
                "font-style": "",
                "text-decoration": "",
                "text-transform": "",
                "line-height": "1_1",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            },
            "font-style": "",
            "text-decoration": "",
            "text-transform": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "Playfair Display, serif",
            "font-weight": "700",
            "LG": {
                "font-size": 3,
                "font-weight": "700",
                "font-style": "",
                "text-decoration": "",
                "text-transform": "",
                "line-height": "1_1",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            }
        },
        "h3": {
            "font-size": 1.875,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            },
            "font-weight": "700"
        },
        "h4": {
            "font-size": 1.5,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "700",
            "font-style": "",
            "text-decoration": "",
            "text-transform": "uppercase",
            "letter-spacing": 2,
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "text-font"
        },
        "h5": {
            "font-size": 1.25,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "700"
        },
        "h6": {
            "font-size": 1.125,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": "700"
        },
        "largeText": {
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "smallText": {
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "margin-top": 20,
            "margin-bottom": 20,
            "font-size": 1.125,
            "line-height": "1.8"
        },
        "hyperlink": {
            "text-color": "palette-1-base"
        },
        "link": {},
        "button": {
            "color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "blockquote": {
            "font-style": "italic",
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "theme": {
            "gradient": "",
            "image": "",
            "sheet-width-xl": 1140,
            "sheet-width-lg": 940,
            "sheet-width-md": 720,
            "sheet-width-sm": 540,
            "sheet-width-xs": 340
        },
        "htmlBaseSize": 16,
        "form-input": {
            "border": 1,
            "border-color": "grey-30",
            "borders": "top right bottom left",
            "color": "white"
        }
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
?>
    <?php $GLOBALS['googleAnalyticsMarker'] = false; ?>
<?php
}
add_action('wp_head', 'theme_analytics', 0);


function theme_intlTelInputMeta() {
    $GLOBALS['meta_tel_input'] = true; ?>
    <meta data-intl-tel-input-cdn-path="<?php echo get_template_directory_uri(); ?>/intlTelInput/" />
    <?php
}
add_action('wp_head', 'theme_intlTelInputMeta', 0);

function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');

function theme_gtm_header() {
    ?>
    <?php $GLOBALS['gtmMarker'] = false; ?>
    <?php
}
add_action('wp_head', 'theme_gtm_header', 0);

function theme_gtm_body() {
    ob_start(); ?>
    
    <?php $gtmCodeNoScript = ob_get_clean(); ?>
    <script>
        jQuery(document).ready(function () {
            jQuery(document).find('body').prepend(`<?php echo $gtmCodeNoScript; ?>`)
        });
    </script>
    <?php
}
add_action('wp_footer', 'theme_gtm_body');