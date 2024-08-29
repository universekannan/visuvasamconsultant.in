@extends('layout.app')
@section('content')
<div class="w3l-innerblock">
  </div>
  <!--//w3l-innerblock-->
  <!-- /contact-section -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Contact Us</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Send a Message</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Visit Us</h6>
                <p>Estates Housing Company, 343 marketing, #2214 cravel street, NY - 62617.</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:support@mail.com" class="mail">support@mail.com</a></p>
                <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">

              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="map-iframe mt-5 mb-lg-5 pb-lg-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
          width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
@endsection
