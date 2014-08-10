    <footer>
        <section id="ft_widget">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
            <!--/ WIDGET -->
        </section>
        <!--/ FOOTER WIDGETS -->
        <p id="copyright">myBlog Copyright @ 2014</p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>