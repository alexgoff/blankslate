<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    <div class="social-icons">
        <a href="https://github.com/alexgoff" rel="noopener" target="_blank" title="Github">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
            </svg>
        </a>
        <a href="https://codepen.io/alexgoff" rel="noopener" target="_blank" title="CodePen">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l10 6.5v7L12 22 2 15.5v-7L12 2zM12 22v-6.5"/>
                <path d="M22 8.5l-10 7-10-7"/>
                <path d="M2 15.5l10-7 10 7M12 2v6.5"/>
            </svg>
        </a>
        <a href="https://twitter.com/bigmoodenergy" rel="noopener" target="_blank" title="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
        </a>
    </div>
    <div id="copyright" class="copyright">
        <?php echo sprintf( __( '%1$s %2$s %3$s. all rights reserved.', 'blankslate' ), '&copy; 2016 -', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
        email the <a class="webmaster" href="mailto:<?php echo get_bloginfo('admin_email'); ?>" rel="noopener" target="_blank" title="webmaster">webmaster</a>. <a href="privacy-policy/" title="Privacy Policy">privacy policy</a>.
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>