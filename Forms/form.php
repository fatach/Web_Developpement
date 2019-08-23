<!--Codegena.com-->
<!--Designed By https://codepen.io/jq/pen/rVVQXz -->
<link rel="stylesheet" href="form.css" type="text/css" >
<form name="contact-form" class="stage">
  <Codegena>Contact Me</Codegena>
  <p></p>
  Name:
  <br />
  <input class="contact-form-name" id="ContactForm1_contact-form-name" name="name" size="30" value="" type="text" placeholder="What should I call you?" autofocus required/>
  <p></p>
  E-mail:
  <span style="font-weight: bolder;color:red;">*</span>
  <br />
  <input class="contact-form-email" id="ContactForm1_contact-form-email" name="email" size="30" value="" type="text"  placeholder="Where can I reach you?" required/>
  <p></p>
  Message: <span style="font-weight: bolder;color:red;">*</span>
  <br />
  <textarea class="contact-form-email-message" id="ContactForm1_contact-form-email-message" name="email-message" cols="25" rows="5" placeholder="What's on your mind?" required></textarea>
  <p></p>
  <input class="contact-form-button contact-form-button-submit" id="ContactForm1_contact-form-submit" value="Send" type="button" />
  <p></p>
  <div style="text-align: center; max-width: 222px; width: 100%">
    <p class="contact-form-error-message" id="ContactForm1_contact-form-error-message"></p>
    <p class="contact-form-success-message" id="ContactForm1_contact-form-success-message"></p>
  </div>
</form>
