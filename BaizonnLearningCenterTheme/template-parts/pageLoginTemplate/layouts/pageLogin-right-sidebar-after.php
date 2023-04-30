
          </div>
          <?php $sidebar_html = theme_sidebar(array(
            'id' => 'primary',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block u-indent-30">
        <div class="u-block-container u-clearfix">
            <h5 class="u-block-header u-text" style="font-size: 1.125rem; line-height: 2;">{block_header}</h5>
            <div class="u-block-content u-text" style="font-size: 0.875rem; line-height: 2;">{block_content}</div>
        </div>
    </div>
WIDGET_TEMPLATE
        )); ?> <aside data-id="b2a3" class="u-indent-40 u-sidebar" style="flex-basis: auto; width: 250px;"><?php if ($sidebar_html) { echo stylingDefaultControls($sidebar_html); } else { ?> <div class="u-block u-indent-30">
        <div class="u-block-container u-clearfix">
            <h5 class="u-block-header u-text" style="font-size: 1.125rem; line-height: 2;"><!--block_header_content_replacer-->
                Categories
            <!--/block_header_content_replacer--></h5>
            <div class="u-block-content u-text" style="font-size: 0.875rem; line-height: 2;">
                <div class="u-categories u-categories-vertical">
     <ul class="u-unstyled">
        <li class="u-categories-item u-expand-open u-root">
            <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                <a class="u-button-style u-category-link u-nav-link" href="#">
                    <span class="u-icon">
                        <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="1">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-open"></use>
                        </svg>
                    </span>
                    Category 1
                </a>
            </div>
            <ul class="u-unstyled">
                <li class="u-categories-item u-expand-closed">
                    <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                        <a class="u-button-style u-category-link u-nav-link" href="#">
                            <span class="u-icon">
                                <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="1">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-closed"></use>
                                </svg>
                            </span>
                            Item 1
                        </a>
                    </div>
                    <ul class="u-unstyled">
                        <li class="u-categories-item u-expand-leaf">
                            <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                                <a class="u-button-style u-category-link u-nav-link" href="#">
                                    <span class="u-icon">
                                        <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="0">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-leaf"></use>
                                        </svg>
                                    </span>
                                    SubItem 1
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="u-categories-item u-expand-leaf">
                    <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                        <a class="u-button-style u-category-link u-nav-link" href="#">
                            <span class="u-icon">
                                <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="0">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-leaf"></use>
                                </svg>
                            </span>
                            Item 2
                        </a>
                    </div>
                </li>
                <li class="u-categories-item u-expand-leaf">
                    <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                        <a class="u-button-style u-category-link u-nav-link" href="#">
                            <span class="u-icon">
                                <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="0">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-leaf"></use>
                                </svg>
                            </span>
                            Item 3
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="u-categories-item u-expand-leaf u-root">
            <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                <a class="u-button-style u-category-link u-nav-link" href="#">
                    <span class="u-icon">
                        <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="0">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-leaf"></use>
                        </svg>
                    </span>
                    Category 2
                </a>
            </div>
        </li>
        <li class="u-categories-item u-expand-leaf u-root">
            <div class="u-categories-item-content" style="padding: 10px 0px; margin-bottom: 0px; margin-right: 0px; font-size: 0.875rem;">
                <a class="u-button-style u-category-link u-nav-link" href="#">
                    <span class="u-icon">
                        <svg x="0px" y="0px" style="width: 1em; height: 1em;" viewBox="0 0 16 16" fill-opacity="0">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-categories-leaf"></use>
                        </svg>
                    </span>
                    Category 3
                </a>
            </div>
        </li>
    </ul>
    <svg style="display:none;">
        <g id="icon-categories-open">
            <polygon points="12,10 9,6 15,6 "></polygon>
        </g>
        <g id="icon-categories-closed">
            <polygon points="14,8 10,11 10,5 "></polygon>
        </g>
        <g id="icon-categories-leaf">
            <polygon points="14,8 10,11 10,5 "></polygon>
        </g>
    </svg>
</div>
            </div>
        </div>
    </div> <?php } ?></aside>
        </div></div>