<?php get_header(); ?>

<div class="contact">
    <div id="contact__map"></div>

    <div class="container">
        <h1 class="contact__map--heading">GET IN TOUCH</h1>
        <div class="contact__body">
            <div class="contact__body--left">
                <h3 class="contact__body--heading">
                    Send Us A Message
                </h3>
                <div id="container" class="ltr">
                    <div class="form-style-2">
                        <form action="" method="post">
                            <label for="field1">
                                <span>Name
                                    <span class="required">*</span>
                                </span>
                                <input type="text" class="input-field" name="field1" value="" />
                            </label>
                            <label for="field2">
                                <span>Email
                                    <span class="required">*</span>
                                </span>
                                <input type="text" class="input-field" name="field2" value="" />
                            </label>
                            <label for="field2">
                                <span>Company
                                    <span class="required">*</span>
                                </span>
                                <input type="text" class="input-field" name="field2" value="" />
                            </label>
                            <label>
                                <span>Telephone</span>
                                <input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-
                                <input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4" />-
                                <input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10" />
                            </label>
                            <label for="field4">
                                <span>I am interested in</span>
                                <select name="field4" class="select-field">
                                    <option value="Steel Detailing">Steel Detailing</option>
                                    <option value="Structural Engineering">Structural Engineering</option>
                                    <option value="Connection Design">Connection Design</option>
                                    <option value="Other Services">Other Services</option>
                                </select>
                            </label>
                            <label for="field5">
                                <span>Message
                                    <span class="required">*</span>
                                </span>
                                <textarea name="field5" class="textarea-field"></textarea>
                            </label>

                            <label>
                                <span>&nbsp;</span>
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
                            202 S. 22nd Street Suite 209
                            <br> Tampa, FL 33605
                        </div>
                    </div>
                    <div class="contact__wrapper">
                        <div class="contact__icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        
                        <div class="contact__body--content">
                        <h3>Phone:</h3>
                            (813) 247-3835
                            <br> Fax: (813) 247-4305
                        </div>
                    </div>
                    <div class="contact__wrapper">
                        <div class="contact__icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        
                        <div class="contact__body--content">
                        <h3>Email:</h3>
                            <a href="mailto:vphan@vp-associates.com">vphan@vp-associates.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php get_footer(); ?>