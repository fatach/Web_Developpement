<!DOCTYPE html>
<html>
<head>
  <title>bootstrap</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css.css">

</head>
    <body>
          <div  class="container">
            <div class="red-devider"></div>
             <div class="heading">
              <h3>REMPLIR LE FORMULAIRE</h3>
            </div>

               <div class="col-lg-10 col-lg-offset-1">
                  <form id="contact-form" method="post" action="" role="form">
                      <div class="row">
                         <div class="col-md-6">
                          <label for="name">Name</label>
                          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                          <p class="comment">Fill the fiel</p>
                          </div>

                        <div class="col-md-6">
                         <label for="first-name">First-Name</label>
                         <input type="text" id="first-name" name="prenom" class="form-control" placeholder="Enter your fisrt-name">
                          <p class="comment">Fill the fiel</p>
                       </div>

                       <div class="col-md-6">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="mail" class="form-control" placeholder="Enter your address E-mail">
                        <p class="comment">Fill the fiel</p>
                      </div>

                      <div class="col-md-6">
                       <label for="number">Number</label>
                       <input type="text" id="number" name="number" class="form-control" placeholder="Enter your telephone number">
                       <p class="comment">Fill the fiel</p>
                     </div>

                      <div class="col-md-6">
                        <label for="city">City </label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter your city name">
                        <p class="comment">Fill the fiel</p>
                       </div>

                       <div class="col-md-6">
                         <label for="county">County</label>
                         <input type="text" id="county" name="name" class="form-control" placeholder="Enter your county name">
                         <p class="comment">Fill the fiel</p>
                        </div>

                        <div class="col-md-6">
                          <label for="zone">Zone</label>
                          <input type="text" id="zone" name="zone" class="form-control" placeholder="Enter your zone">
                          <p class="comment">Fill the fiel</p>
                         </div>

                         <div class="col-md-6">
                           <label for="address">Address</label>
                           <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address">
                           <p class="comment">Fill the fiel</p>
                          </div>

                          <div class="col-md-6">
                            <label for="command">Command</label>
                            <input type="text" id=command name="command" class="form-control" placeholder="">

                           </div>

                           <div class="col-md-6">
                             <label for="price">Price</label>
                             <input type="number" id="price"  name="price" class="form-control" placeholder="Price">
                            </div>

                            <div class="col-md-6">
                              <label for="amount">Amount</label>
                              <input type="number" id="amount" step="0.5" name="amount" class="form-control" placeholder="Amount">
                             </div>

                             <div class="col-md-6">
                               <label for="total">Total</label>
                               <input type="text" id="total" name="total" class="form-control" placeholder="">
                             </div>
                             <br/>
                             <div class="col-md-6">
                               <input type="submit"  class="button1" value="Send">
                             </div>



                      </div>
                      <!---<p class="thanks"> Your message is send.thank you.:))</p>----->
                </form>

            </div>

    </body>
</html>
