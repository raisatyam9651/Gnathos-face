<!DOCTYPE html>
<html class="light" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title><?php echo isset($page_title) ? $page_title : "Gnathos Facial &amp; Dr. Suresh | Maxillofacial Surgery"; ?></title>
  <?php if (isset($page_description) && !empty($page_description)): ?>
  <meta content="<?php echo $page_description; ?>" name="description"/>
  <?php endif; ?>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Playfair+Display:wght@600;700&amp;display=swap" rel="stylesheet"/>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
                  "on-primary-fixed": "#081b38",
                  "on-surface-variant": "#44474d",
                  "on-tertiary-fixed": "#0b1c30",
                  "inverse-surface": "#2d3133",
                  "secondary": "#136870",
                  "surface": "#f7f9fb",
                  "on-background": "#191c1e",
                  "on-secondary-fixed": "#002023",
                  "surface-container-low": "#f2f4f6",
                  "secondary-fixed": "#a6eff7",
                  "surface-variant": "#e0e3e5",
                  "surface-container-high": "#e6e8ea",
                  "on-primary-fixed-variant": "#374765",
                  "surface-bright": "#f7f9fb",
                  "on-primary": "#ffffff",
                  "surface-tint": "#4e5f7e",
                  "primary-fixed-dim": "#b6c7eb",
                  "on-error-container": "#93000a",
                  "secondary-fixed-dim": "#8ad2db",
                  "on-surface": "#191c1e",
                  "secondary-container": "#a3ecf5",
                  "primary": "#031632",
                  "on-secondary-container": "#1a6d74",
                  "error": "#ba1a1a",
                  "on-tertiary-fixed-variant": "#38485d",
                  "on-primary-container": "#8293b5",
                  "error-container": "#ffdad6",
                  "primary-container": "#1a2b48",
                  "tertiary-fixed": "#d3e4fe",
                  "on-tertiary-container": "#8393ac",
                  "inverse-on-surface": "#eff1f3",
                  "tertiary-fixed-dim": "#b7c8e1",
                  "outline": "#75777e",
                  "surface-container-highest": "#e0e3e5",
                  "surface-container": "#eceef0",
                  "outline-variant": "#c5c6ce",
                  "surface-dim": "#d8dadc",
                  "tertiary-container": "#1c2c40",
                  "on-tertiary": "#ffffff",
                  "background": "#f7f9fb",
                  "surface-container-lowest": "#ffffff",
                  "on-error": "#ffffff",
                  "tertiary": "#06172a",
                  "inverse-primary": "#b6c7eb",
                  "primary-fixed": "#d7e2ff",
                  "on-secondary-fixed-variant": "#004f55",
                  "on-secondary": "#ffffff"
          },
          "borderRadius": {
                  "DEFAULT": "0.125rem",
                  "lg": "0.25rem",
                  "xl": "0.5rem",
                  "full": "0.75rem"
          },
          "spacing": {
                  "unit": "8px",
                  "section-gap": "80px",
                  "gutter": "24px",
                  "margin-mobile": "16px",
                  "margin-desktop": "48px",
                  "container-max": "1200px"
          },
          "fontFamily": {
                  "headline-md": [
                          "Playfair Display"
                  ],
                  "headline-sm": [
                          "Playfair Display"
                  ],
                  "body-md": [
                          "Inter"
                  ],
                  "display-lg": [
                          "Playfair Display"
                  ],
                  "body-lg": [
                          "Inter"
                  ],
                  "label-sm": [
                          "Inter"
                  ],
                  "display-lg-mobile": [
                          "Playfair Display"
                  ],
                  "label-md": [
                          "Inter"
                  ]
          },
          "fontSize": {
                  "headline-md": [
                          "32px",
                          {
                                  "lineHeight": "1.3",
                                  "fontWeight": "600"
                          }
                  ],
                  "headline-sm": [
                          "24px",
                          {
                                  "lineHeight": "1.4",
                                  "fontWeight": "600"
                          }
                  ],
                  "body-md": [
                          "16px",
                          {
                                  "lineHeight": "1.6",
                                  "fontWeight": "400"
                          }
                  ],
                  "display-lg": [
                          "48px",
                          {
                                  "lineHeight": "1.2",
                                  "letterSpacing": "-0.02em",
                                  "fontWeight": "700"
                          }
                  ],
                  "body-lg": [
                          "18px",
                          {
                                  "lineHeight": "1.6",
                                  "fontWeight": "400"
                          }
                  ],
                  "label-sm": [
                          "12px",
                          {
                                  "lineHeight": "1.2",
                                  "fontWeight": "500"
                          }
                  ],
                  "display-lg-mobile": [
                          "32px",
                          {
                                  "lineHeight": "1.25",
                                  "fontWeight": "700"
                          }
                  ],
                  "label-md": [
                          "14px",
                          {
                                  "lineHeight": "1.2",
                                  "letterSpacing": "0.05em",
                                  "fontWeight": "600"
                          }
                  ]
          }
        },
      },
    }
  </script>
  <link href="<?php echo $path_prefix; ?>style.css" rel="stylesheet"/>
  <!-- WhatsApp Chat Widget (WACRS) -->
  <script defer src="https://app.wacrs.com/install-widget/bundle.js?key=81eecf0b-d4a9-43b9-81c8-98912520244a"></script>
  <!-- Alternative ToChat Widget (Commented out)
  <script defer src="https://widget.tochat.be/bundle.js?key=6365b4c8-3167-4e13-ad05-384397c5d4af"></script>
  -->
</head>
<body class="antialiased">
