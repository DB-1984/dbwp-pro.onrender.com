<div class="container-fluid px-4 contact-form-main" id="contact_form_top">
    <div class="container inner-form" style="margin-bottom: 6rem">
        <div class="row justify-content-center">
            <div class="col-md-8 form-actual" data-aos="fade-up">
                <h3 class="lh-1 cform">
                    Reach out to us using our contact form, and we'll respond <strong>typically within 48 hours.</strong>
                </h3>
                <br>
                <p class="cform">The <strong>more detail you can provide</strong>, the better-informed we are to make an <strong>initial assessment</strong>.</p>
                <br>
                <form class="needs-validation" id="contact_form" novalidate>
                    <!-- First Name -->
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide your first name.
                            </div>
                        </div>
                    </div>

                    <!-- Last Name, Email -->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" id="lastName" name="lastName" placeholder="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                    </div>

                    <!-- URL -->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="url">URL</label>
                            <input type="url" id="url" name="url" placeholder="">
                        </div>
                    </div>

                    <!-- Message Textarea -->
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                        <div class="invalid-feedback">
                            Please provide a message.
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-primary btn-lg px-4 me-md-2 fw-bold cta" type="submit" id="submit">Submit form
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>