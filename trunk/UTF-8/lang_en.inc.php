<?php
// Colorsets
@define('THEME_COLORSET', 'Colorset');
@define('BP_COLORSET_DEF', 'blank');
@define('BP_COLORSET_OPT1', 'purple');
@define('BP_COLORSET_OPT2', 'blue');
@define('BP_COLORSET_OPT3', 'green');
// Layout
@define('LAYOUT_TYPE','Blog layout (B = Blog entriee, S = Sidebar, CF = Content first)');
@define('LAYOUT_SBS','Three columns S-B-S');
@define('LAYOUT_BSS','Three columns, B-S-S, CF');
@define('LAYOUT_SSB','Three columns, S-S-B');
@define('LAYOUT_SB','Two columns, S-B');
@define('LAYOUT_BS','Two columns, B-S, CF');
@define('LAYOUT_SC','One column, sidebars below, CF');
@define('JAVASCRIPT_COLUMNS','Generate equal heights columns using javascript (May slow down page rendering a little.)');
// Custom header
@define('BP_CUSTOM_HEADER','Custom header image from media database');
@define('BP_HEADER_IMAGE','Choose image');
@define('BP_HEADER_TYPE','Tiling of header image');
@define('BP_HEADER_BANNER', 'Banner (no tiling)');
@define('BP_HEADER_HTILED', 'Horizontally tiled');
@define('BP_HEADER_VTILED', 'Vertically tiled');
@define('BP_HEADER_BTILED', 'Tiles horizontally and vertically');
@define('BP_HEADER_POSHOR', 'Horizontal alignment');
@define('BP_HEADER_POSVER', 'Vertical alignment');
@define('BP_CENTER', 'centered');
@define('BP_TOP', 'top');
@define('BP_BOTTOM', 'bottom');
// Fahrner Image Replacement
@define('FIR_BTITLE','Show blog title in the header');
@define('FIR_BDESCR','Show blog description in the header');
// Date format
@define('BP_DATE_FORMAT', 'Date format');
// Entry footer
@define('ENTRY_FOOTER_POS','Position of the entry footer');
@define('BELOW_ENTRY','Below the entry');
@define('BELOW_TITLE','Below the entry title');
@define('SPLIT_FOOTER','Split entry footer');
@define('FOOTER_AUTHOR','Show author in the entry footer');
@define('FOOTER_CATEGORIES','Show categories in the entry footer');
@define('FOOTER_TIMESTAMP','Show timestamp in the entry footer');
@define('FOOTER_COMMENTS','Show number of comments in the entry footer');
@define('FOOTER_TRACKBACKS','Show number of trackback in the entry footer');
// coComment support
@define('COCOMMENT_ACTIVE','Integrate coComment (http://www.cocomment.com) into comment form');
// Counter code
@define('COUNTER_CODE', 'Insert code for counter and/or web stat tool');
@define('USE_COUNTER', 'Choose whether to use counter code inserted above');
// Additional footer text
@define('FOOTER_TEXT', 'Use this to insert additional text into the page footer');
@define('USE_FOOTER_TEXT', 'Integrate footer text');
//Sitenav
@define('SITENAV_POSITION','Position of the navbar');
@define('SITENAV_NONE','No navbar');
@define('SITENAV_ABOVE','Above the banner');
@define('SITENAV_BELOW','Below the banner');
@define('SITENAV_LEFT','At the top of the left sidebar');
@define('SITENAV_RIGHT','At the top of the right sidebar');
@define('SITENAV_FOOTER','Also show navigation links in the footer (not displayed regardless of choice if "No navbar" is selected above)');
@define('SITENAV_QUICKSEARCH','Show quicksearch in the navbar (only works in navbar above or below banner; quicksearch sidebar item will be suppressed automagically)');
@define('SITENAV_TITLE','Title for navigation menu (only displayed when located at the top of a sidebar)');
@define('SITENAV_TITLE_TEXT','Main menu');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');
?>