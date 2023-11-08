    <!--========== FOOTER ==========-->
    <footer class="footer">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div>
                    <a href="#" class="footer__logo"><?php echo get_bloginfo('name'); ?></a>

                    <p class="footer__description">
                        Travel with us and explore <br>
                        the world without limits.
                    </p>
                </div>

                <div class="footer__data grid">


                    
                        <?php
                        if (is_active_sidebar('footer-sidebar-1')) {
                            dynamic_sidebar('footer-sidebar-1');
                        }
                        ?>
                    
                    
                        <?php
                        if (is_active_sidebar('footer-sidebar-2')) {
                            dynamic_sidebar('footer-sidebar-2');
                        }
                        ?>
                    
                    
                        <?php
                        if (is_active_sidebar('footer-sidebar-3')) {
                            dynamic_sidebar('footer-sidebar-3');
                        }
                        ?>
                    
                </div>
            </div>

            <div class="footer__group">
                <div class="footer__social">
                    <a href="https://www.facebook.com/vilniuscoding" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-line"></i>
                    </a>

                    <a href="https://www.instagram.com/vilniuscodingschool/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://www.youtube.com/@vilniuscodingschool2647" target="_blank" class="footer__social-link">
                        <i class="ri-youtube-line"></i>
                    </a>
                </div>

                <span class="footer__copy">
                    &#169; VilniusCodingSchool
                </span>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <?php
    wp_footer();
    ?>
    </body>

    </html>