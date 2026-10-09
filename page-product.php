<?php
/*
Template Name: Product Page
*/

get_header();
?>

<main class="product-page">

    <!-- Product Hero Section -->
    <section class="product-hero">
        <div class="container">

            <h1>Our Products</h1>

            <p>
                Explore our latest and best-quality products.
            </p>

        </div>
    </section>


    <!-- Products Section -->
    <section class="products-section">
        <div class="container">

            <div class="products-grid">

                <!-- Product 1 -->
                <div class="product-card">

                    <div class="product-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/product-1.jpg"
                            alt="Product 1"
                        >
                    </div>

                    <div class="product-content">

                        <h2>Product Name One</h2>

                        <p class="product-price">
                            ₹999
                        </p>

                        <p>
                            This is a high-quality product with
                            excellent features and performance.
                        </p>

                        <a href="#" class="product-btn">
                            Buy Now
                        </a>

                    </div>

                </div>


                <!-- Product 2 -->
                <div class="product-card">

                    <div class="product-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/product-2.jpg"
                            alt="Product 2"
                        >
                    </div>

                    <div class="product-content">

                        <h2>Product Name Two</h2>

                        <p class="product-price">
                            ₹1,499
                        </p>

                        <p>
                            This product is designed with quality,
                            reliability and customer satisfaction.
                        </p>

                        <a href="#" class="product-btn">
                            Buy Now
                        </a>

                    </div>

                </div>


                <!-- Product 3 -->
                <div class="product-card">

                    <div class="product-image">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/product-3.jpg"
                            alt="Product 3"
                        >
                    </div>

                    <div class="product-content">

                        <h2>Product Name Three</h2>

                        <p class="product-price">
                            ₹1,999
                        </p>

                        <p>
                            A reliable and premium product made
                            for everyday use.
                        </p>

                        <a href="#" class="product-btn">
                            Buy Now
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

<?php
get_footer();
?>
```
