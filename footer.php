</div>
</div>
<?php if(is_singular('post')) { ?>
<?php get_template_part( 'templates-parts/parts/articles' ); ?>
<?php } ?>
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="row">
            <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
            <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
        </div>
    </div>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>
<div class="tr-widget" data-id="2636" data-view="flash" data-lang=""><a href="https://trust.reviews/" class="trcr" target="_blank">Powered by <span>Trust.Reviews</span></a></div>
<script type="text/javascript" src="https://cdn.trust.reviews/widget/embed.min.js" defer></script>

<?php wp_footer(); ?>
</body>

</html>
