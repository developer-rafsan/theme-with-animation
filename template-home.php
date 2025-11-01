<?php
/**
 * Template Name: Home Page
 */
get_header();
?>
<main id="thynk-unlimited" role="main">
    <div class="floating-shapes"></div>
    <div class="custom-cursor"></div>
    <div class="horizontal-sections">
        <!-- home page -->
        <section class="panel home">
            <!-- home page header -->
            <header class="site-header wrap">
                <div class="logo">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>

                <nav class="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-links',
                        'fallback_cb' => '__return_false'
                    ));
                    ?>
                </nav>
            </header>

            <!-- content -->
            <div class="fade-letters hoverEffect h2">hello</div>
            <div class="vertical-content">
                <ul class="social-icons">
                    <li>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="800px" height="800px" viewBox="0 -2 20 20" version="1.1">

                                <title>twitter [#154]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                        fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                id="twitter-[#154]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#0F0F0F" />
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#0F0F0F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#0F0F0F" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="email">hello@thynkunlimited.com</p>
            </div>

            <!-- footer -->
            <footer>
                <p class="fade-words">© <?php echo date('Y'); ?> Thynk Unlimited.</p>
            </footer>
        </section>

        <!-- about page -->
        <section class="panel about">
            <!-- home page header -->
            <header class="site-header wrap">
                <div class="logo">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>

                <nav class="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-links',
                        'fallback_cb' => '__return_false'
                    ));
                    ?>
                </nav>
            </header>

            <div class="content wrap">
                <div class="h2">ABOUT us</div>
                <div class="hoverEffect h1">
                    <span>Think <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#ffffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg> Bigger</span> </br> <span>Grow Smarter</span>
                </div>
                <div class="about-text">
                    <p class="fade-words top-text">
                        Thynk Unlimited is built on two decades of experience successfully
                        scaling high-growth small-to-sizable businesses, specialising in multi-
                        site expansion and comprehensive franchise development across
                        Australia and the wider APAC region. We operate as a Fractional
                        Executive Partner, rapidly deploying industry best-practice systems
                        and operational controls into your business. Our core mission is to
                        de-risk the hyper-scale phase by delivering high-impact, validated
                        Intellectual Property, ensuring you achieve sustainable profitability
                        and network consistency without the cost or time commitment of
                        hiring permanent senior staff.
                    </p>

                    <p class="fade-words base-text">
                        Thynk Unlimited is built on two decades of experience successfully
                        scaling high-growth small-to-sizable businesses, specialising in multi-
                        site expansion and comprehensive franchise development across
                        Australia and the wider APAC region. We operate as a Fractional
                        Executive Partner, rapidly deploying industry best-practice systems
                        and operational controls into your business. Our core mission is to
                        de-risk the hyper-scale phase by delivering high-impact, validated
                        Intellectual Property, ensuring you achieve sustainable profitability
                        and network consistency without the cost or time commitment of
                        hiring permanent senior staff.
                    </p>
                </div>
            </div>

            <div class="vertical-content">
                <ul class="social-icons">
                    <li>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="800px" height="800px" viewBox="0 -2 20 20" version="1.1">

                                <title>twitter [#154]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                        fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                id="twitter-[#154]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#0F0F0F" />
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#0F0F0F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#0F0F0F" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="email">hello@thynkunlimited.com</p>
            </div>
            <!-- footer -->
            <footer>
                <p>© <?php echo date('Y'); ?> Thynk Unlimited.</p>
            </footer>
        </section>

        <!-- service page -->
        <section class="panel service">
            <!-- home page header -->
            <header class="site-header wrap">
                <div class="logo">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>

                <nav class="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-links',
                        'fallback_cb' => '__return_false'
                    ));
                    ?>
                </nav>
            </header>

            <div class="wrap">
                <div class="h2">OUR services</div>
                <div class="hoverEffect h1"><span>Fractional</span></br> <span>Executive</span></div>
                <div class="card-slider">
                    <div class="card-track">
                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/business-people-discussing-charts-graphs-showing-results-their-successful-teamwork-scaled.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>High-Quality Franchisee Onboarding & Network Readiness</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/2150769947.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>Scalable Operating Systems & Systemisation</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/picture-professional-business-presentation-scaled.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>Franchise Compliance,Risk Management,and Governance</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/jar-with-savings-little-tree-inside-scaled.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>Unit Economics & Sustainable Profit Maximisation</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/2150769947.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>Scalable Operating Systems & Systemisation</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class="card">
                            <img src="http://localhost:8881/wp-content/uploads/2025/11/business-people-discussing-charts-graphs-showing-results-their-successful-teamwork-scaled.jpg"
                                alt="High-Quality Franchisee Onboarding & Network Readiness">
                            <div class="card-content">
                                <h3>High-Quality Franchisee Onboarding & Network Readiness</h3>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M7 17L17 7M17 7H8M17 7V16" stroke="#000000" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vertical-content">
                <ul class="social-icons">
                    <li>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="800px" height="800px" viewBox="0 -2 20 20" version="1.1">

                                <title>twitter [#154]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                        fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                id="twitter-[#154]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#0F0F0F" />
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#0F0F0F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#0F0F0F" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="email">hello@thynkunlimited.com</p>
            </div>

            <!-- footer -->
            <footer>
                <p class="fade-words">© <?php echo date('Y'); ?> Thynk Unlimited.</p>
            </footer>
        </section>

        <!-- contact page -->
        <section class="panel contact">
            <!-- home page header -->
            <header class="site-header wrap">
                <div class="logo">
                    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                </div>

                <nav class="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav-links',
                        'fallback_cb' => '__return_false'
                    ));
                    ?>
                </nav>
            </header>

            <div class="wrap-contact">
                <div class="h2">CONTACT us</div>
                <div class="hoverEffect h1"><span> Questions? </span></br> <span>We’ve Answers</span></div>
                <div class="contact-form">
                    <div class="left-site">
                        <h3>Get in Touch</h3>
                        <p>
                            We would love to hear from you! Whether you have questions about our services, need
                            assistance, or want to explore partnership opportunities, our team is here to help. Fill
                            out the form below, and we will get back to you as soon as possible.
                        </p>
                        <ul class="icon-box-list">
                            <li>
                                <svg viewBox="0 0 24 24" class="icon">
                                    <path fill="none" stroke="#0073e6" stroke-width="2"
                                        d="M4 4h16v16H4z M4 4l8 8 8-8" />
                                </svg>
                                <span>Email</span>
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" class="icon">
                                    <path fill="none" stroke="#0073e6" stroke-width="2"
                                        d="M6.6 10.8a15.1 15.1 0 006.6 6.6l2.2-2.2a1 1 0 011.1-.2 11.3 11.3 0 004.3.8 1 1 0 011 1v3.5a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.3 11.3 0 00.8 4.3 1 1 0 01-.2 1.1z" />
                                </svg>
                                <span>Phone</span>
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" class="icon">
                                    <path fill="none" stroke="#0073e6" stroke-width="2"
                                        d="M12 2C8 2 5 5 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-4-3-7-7-7z" />
                                    <circle cx="12" cy="9" r="2" fill="#0073e6" />
                                </svg>
                                <span>Address</span>
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24" class="icon">
                                    <circle cx="12" cy="12" r="10" fill="none" stroke="#0073e6" stroke-width="2" />
                                    <path d="M12 6v6l3 3" fill="none" stroke="#0073e6" stroke-width="2" />
                                </svg>
                                <span>Hours</span>
                            </li>
                        </ul>
                    </div>
                    <div class="right-site">
                        <?php echo do_shortcode('[contact-form-7 id="d4b34b1" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>

            <div class="vertical-content">
                <ul class="social-icons">
                    <li>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="800px" height="800px" viewBox="0 -2 20 20" version="1.1">

                                <title>twitter [#154]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)"
                                        fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                id="twitter-[#154]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                    fill="#0F0F0F" />
                                <path
                                    d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z"
                                    fill="#0F0F0F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z"
                                    fill="#0F0F0F" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="email">hello@thynkunlimited.com</p>
            </div>

            <!-- footer -->
            <footer>
                <p class="fade-words">© <?php echo date('Y'); ?> Thynk Unlimited.</p>
            </footer>
        </section>
    </div>
</main>
<?php
get_footer();