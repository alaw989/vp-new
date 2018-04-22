<?php get_header(); ?>

<div class="contact">
    <div id="contact__map"></div>

    <div class="container">
        <h1 class="contact__map--heading">GET IN TOUCH</h1>
        <div class="contact__body contentHeight">
            <div class="contact__body--left">
                <h3 class="contact__body--heading">
                    Send Us A Message
                </h3>
                <div id="container" class="ltr">
                    <div class="form-style-2">
                    <p>Please fill out the form below and we will contact you shortly.</p>
                        <form data-bvalidator-validate action="" method="post">
                            <label for="field1">
                                <input type="text" class="input-field" name="field1" value="" placeholder="Name" data-bvalidator="required" />
                            </label>
                            <label for="field2">
                                <input type="text" class="input-field" name="field2" value="" data-bvalidator="required,email" placeholder="Email" />
                            </label>
                            <label for="field3">
                                <input type="text" class="input-field" name="field3" value="" placeholder="Company" data-bvalidator="required" />
                            </label>
                            <label>
                                <input type="text" class="input-field" name="field4" value="" maxlength="10" placeholder="Phone" data-bvalidator="required"
                                />
                            </label>
                            <label for="field4">
                                <select name="field4" class="select-field">
                                    <option value="Steel Detailing">I am interested in</option>
                                    <option value="Steel Detailing">Steel Detailing</option>
                                    <option value="Structural Engineering">Structural Engineering</option>
                                    <option value="Connection Design">Connection Design</option>
                                    <option value="Other Services">Other Services</option>
                                </select>
                            </label>
                            <label for="field5">
                                <textarea name="field5" class="textarea-field" placeholder="Comment"></textarea>
                            </label>

                            <label>
                               
                                <input type="submit" value="Submit" />
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact__body--right">
                <h3 class="contact__body--heading">
                    Contact Information
                </h3>
                <div class="contact__container">
                    <div class="contact__wrapper">
                        <div class="contact__icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>

                        <div class="contact__body--content">
                            <h3>Location:</h3>
                            <p>
                                <?php the_field('address', 'option'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="contact__wrapper">
                        <div class="contact__icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>

                        <div class="contact__body--content">
                            <h3>Phone:</h3>
                            <p>
                                <?php the_field('phone_number', 'option'); ?> </br>
                                Fax:
                                <?php the_field('fax', 'option'); ?> </p>
                        </div>
                    </div>
                    <div class="contact__wrapper">
                        <div class="contact__icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>

                        <div class="contact__body--content">
                            <h3>Email:</h3>
                            <a href="mailto:<?php the_field('email', 'option'); ?>">
                                <?php the_field('email', 'option'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php get_footer(); ?>