<?php
/*
Template Name: Gallery
*/

get_header();
?>

<main class="gallery-page">

    <!-- Gallery Hero -->
    <section class="gallery-hero">
        <div class="container">

            <h1>Gallery</h1>

            <p>
                Explore our latest work and collections.
            </p>

        </div>
    </section>


    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">

            <h2>Our Gallery</h2>

            <div class="gallery-grid">

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-1.jpg"
                        alt="Gallery Image 1"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-2.jpg"
                        alt="Gallery Image 2"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-3.jpg"
                        alt="Gallery Image 3"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-4.jpg"
                        alt="Gallery Image 4"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-5.jpg"
                        alt="Gallery Image 5"
                    >
                </div>

                <div class="gallery-item">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-6.jpg"
                        alt="Gallery Image 6"
                    >
                </div>

            </div>

        </div>
    </section>

</main>

<?php
get_footer();
?>
```
