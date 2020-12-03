<?php get_header() ?>
    <main class="main contactPage">
        <h1>Kontakt</h1>
        <div class="contactImage">
            <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Twig-Swirl.png" alt="Circle Twigs" class="circleTwigs">
            <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Heidi.jpeg" alt="Profile Picture" class="profile">
        </div>
        <p class="contactDescription"><?php the_field('kontakt_beskrivelse');?></p>
        <div class="contactInfo">
            <img src="http://heidis-neglesalon.dk/wp-content/uploads/2020/12/Guldnegle_1.jpeg" alt="Nails">
            <div class="contactInfoBox">
                <h3>Kontakt Information</h3>
                <p>+45 99 88 77 66</p>
                <p>heidisneglesalon@gmail.com</p>
                <h3>Adresse</h3>
                <p>Bredgade 16 Alslev</p>
                <p>6800 Varde</p>
            </div>
        </div>
    </main>
<?php get_footer() ?>