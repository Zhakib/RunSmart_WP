<section class="footer">
        <div class="footer__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.7513799239973!2d37.56283731622831!3d55.762820980556036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a2ce2ad982f%3A0x1b5684a1a6117666!2z0YPQuy4g0JrRgNCw0YHQvdCw0Y8g0J_RgNC10YHQvdGPLCA0NCDRgdGC0YDQvtC10L3QuNC1IDMsINCc0L7RgdC60LLQsCwgMTIzMDIy!5e0!3m2!1sru!2sru!4v1680552095170!5m2!1sru!2sru" width="100%" height="630" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer__info">            
            <address class="footer__address"><?php the_field('address') ?></address>
            <a href="tel:8 (499) 922-89-74" class="footer__phone"><?php the_field('phone') ?></a>
            <div class="footer__social">
                <a href="#" class="footer__social-item"><img src="<?php bloginfo('template_url');?>/assets/img/footer/fb.png" alt=""></a>
                <a href="#" class="footer__social-item"><img src="<?php bloginfo('template_url');?>/assets/img/footer/inst.png" alt=""></a>
                <a href="#" class="footer__social-item"><img src="<?php bloginfo('template_url');?>/assets/img/footer/pinterest.png" alt=""></a>
            </div>
        </div>
    </section>
    <?php wp_footer();?>

</body>
</html>
