<div id="side-menu" class="col-lg-3 position-relative">
    <div class="position-fixed">
        <header class="side-menu-logo">
            <a href="<?php echo get_site_url(); ?>">
                <img src=" <?php echo get_template_directory_uri() ?>/images/logo.png">
            </a>
        </header>

        <nav> 
            <?php
                $pages = get_pages();

                $cats = [];
                
                // Fill helper array with page's categories
                foreach($pages as $page) {
                    $cats[get_the_category($page->ID)[0]->cat_name][] = "
                        <a href ='" . get_permalink($page->ID) . "'> " . $page->post_title ."</a>
                    ";
                }

                // Populate side menu with each category inside the cat helper array
                foreach(array_reverse($cats) as $key => $value) {
                    echo "
                        <div class='side-menu-list-block'>
                            <h3> " . $key . " </h3>
                            <ul>
                    ";

                    // List all strings(pages) inside each category
                    foreach($value as $page_name) {
                        echo "
                                <li> " . $page_name . "</li>
                        ";
                    }

                    echo "
                            </ul>
                        </div>
                    ";
                }
            ?>
        </nav>

        <footer>
            <nav>
                <div class="side-menu-list-block">
                    <ul>
                        <li>
                            <a href="#">
                                Biography
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="side-menu-list-block">
                    <ul>
                        <li>
                            <a href="#">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Behance
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Pinterest
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </footer>
    </div>
</div>