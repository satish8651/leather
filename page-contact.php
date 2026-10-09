<?php
/*
Template Name: Contact
*/

get_header();
?>

<main class="contact-page">

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">

            <h1>Contact Us</h1>

            <p>
                Get in touch with us. We would love to hear from you.
            </p>

        </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">

            <div class="contact-wrapper">

                <!-- Contact Information -->
                <div class="contact-info">

                    <h2>Get In Touch</h2>

                    <p>
                        If you have any questions or need more
                        information, please contact us.
                    </p>

                    <div class="contact-detail">
                        <h3>Address</h3>
                        <p>123 Main Street, New Delhi, India</p>
                    </div>

                    <div class="contact-detail">
                        <h3>Phone</h3>
                        <p>+91 98765 43210</p>
                    </div>

                    <div class="contact-detail">
                        <h3>Email</h3>
                        <p>info@example.com</p>
                    </div>

                </div>


                <!-- Contact Form -->
                <div class="contact-form">

                    <h2>Send Us a Message</h2>

                    <form action="#" method="post">

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your name"
                                required
                            >
                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                            >
                        </div>


                        <div class="form-group">
                            <label for="phone">Phone</label>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="Enter your phone number"
                            >
                        </div>


                        <div class="form-group">
                            <label for="message">Message</label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Enter your message"
                                required
                            ></textarea>
                        </div>


                        <button type="submit">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>

</main>

<?php
get_footer();
?>
```
