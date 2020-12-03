<?php get_header() ?>

    <main class="main">
        <div class="topServices">
            <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Guldnegle_2.jpeg" alt="Nails">
            <div class="title">
                <h1>Services</h1>
            </div>
            <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Farveprover.jpeg" alt="Nails">
        </div>
        <div class="services">
            <div class="flowers flowersServices">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower3_2k.png" class="flower">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower2_2k.png" alt="Flower" class="flower">
                <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Flower3_2k.png" alt="Flower" class="flower">
            </div>
            <div class="service">
                <h2><?php the_field('service_1'); ?></h2>
                <div class="serviceImages">
                    <div class="colorbox"></div>
                    <img src="<?php the_field('service_1_lille_billede_1'); ?>" alt="Nails">
                    <img src="<?php the_field('service_1_lille_billede_2'); ?>" alt="Nails">
                    <img src="<?php the_field('service_1_lille_billede_3'); ?>" alt="Nails">
                </div>
                <div class="serviceDescription">
                    <div class="serviceDescriptionImage">
                        <div class="colorbox"></div>
                        <img src="<?php the_field('service_1_stort_billede'); ?>" alt="Nails">
                    </div>
                    <div class="description">
                        <p><?php the_field('service_1_beskrivelse'); ?></p>
                        <h3><?php the_field('service_1_pris'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="service">
                <h2><?php the_field('service_2'); ?></h2>
                <div class="serviceImages">
                    <div class="colorbox"></div>
                    <img src="<?php the_field('service_2_lille_billede_1'); ?>" alt="Nails">
                    <img src="<?php the_field('service_2_lille_billede_2'); ?>" alt="Nails">
                    <img src="<?php the_field('service_2_lille_billede_3'); ?>" alt="Nails">
                </div>
                <div class="serviceDescription">
                    <div class="serviceDescriptionImage">
                        <div class="colorbox"></div>
                        <img src="<?php the_field('service_2_stort_billede'); ?>" alt="Nails">
                    </div>
                    <div class="description">
                        <p><?php the_field('service_2_beskrivelse'); ?></p>
                        <h3><?php the_field('service_2_pris'); ?></h3>
                    </div>
                </div>
            </div>
            <div class="service">
                <h2><?php the_field('service_3'); ?></h2>
                <div class="serviceImages">
                    <div class="colorbox"></div>
                    <img src="<?php the_field('service_3_lille_billede_1'); ?>" alt="Nails">
                    <img src="<?php the_field('service_3_lille_billede_2'); ?>" alt="Nails">
                    <img src="<?php the_field('service_3_lille_billede_3'); ?>" alt="Nails">
                </div>
                <div class="serviceDescription">
                    <div class="serviceDescriptionImage">
                        <div class="colorbox"></div>
                        <img src="<?php the_field('service_3_stort_billede'); ?>" alt="Nails">
                    </div>
                    <div class="description">
                        <p><?php the_field('service_3_beskrivelse'); ?></p>
                        <h3><?php the_field('service_3_pris'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>