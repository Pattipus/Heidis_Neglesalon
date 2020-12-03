<?php get_header() ?>

    <main class="main">
        <video autoplay loop muted playsinline>
            <source src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Video.mp4" type="video/mp4">
        </video>
        <div class="servicesFrontPage">
            <div class="flowers">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower1_2k.png" alt="Flower" class="flower">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower2_2k.png" alt="Flower" class="flower">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower3_2k.png" alt="Flower" class="flower">
            </div>
            <div class="serviceFrontPage">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Guldnegle_2.jpeg" alt="Nails" class="serviceImage">
                <div class="serviceFrontPageTextfield">
                    <h3>
                        <?php the_field('service_1'); ?>
                    </h3>
                    <p>
                        <?php the_field('service_1_beskrivelse'); ?>
                    </p>
                    <a href="<?php the_field('link_service_1') ?>" class="link button">Læs Mere</a>
                </div>
            </div>
            <div class="serviceFrontPage">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Negleolie.jpeg" alt="Nails" class="serviceImage">
                <div class="serviceFrontPageTextfield">
                    <h3>
                        <?php the_field('service_2'); ?>
                    </h3>
                    <p>
                        <?php the_field('service_2_beskrivelse'); ?>
                    </p>
                    <a href="<?php the_field('link_service_1') ?>" class="link button">Læs Mere</a>
                </div>
            </div>
            <div class="serviceFrontPage">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/image00002-scaled.jpeg" alt="Nails" class="serviceImage">
                <div class="serviceFrontPageTextfield">
                    <h3>
                        <?php the_field('service_3'); ?>
                    </h3>
                    <p>
                        <?php the_field('service_3_beskrivelse'); ?>
                    </p>
                    <a href="<?php the_field('link_service_1') ?>" class="link button">Læs Mere</a>
                    
                </div>
            </div>

        </div>
        <div class="contactFrontPage">
            <h2>Kontakt</h2>
            <p>Hvis du ønsker en tid send en SMS til:</p>
            <p class="phone">+45 99 88 77 66</p>
        </div>
        <div class="galleri">
            <h2>Galleri</h2>
            <div class="instagramGalleri">
                <?php echo do_shortcode( '[instagram-feed num=10]' ); ?>
            </div>
            
            <a href="https://www.instagram.com/heidis_neglesalon/" class="link buttonInstagram">Se resten af galleriet her</a>
        </div>
    </main>
<?php get_footer() ?>