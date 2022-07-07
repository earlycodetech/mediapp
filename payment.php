<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<div class="container mb-4  ">
   <div class="col-sm-12">
      <div class="row">
         <div class="col-sm-12 col-lg-8">
            <h1 class="hero__heading">Make a payment</h1>
         </div>
       </div>

       <div class="row">
          <div class="col-sm-12 col-lg-12">
           <div class="lead">Pay any outstanding bills for your care at mediapp</div>
          </div>
       </div>

      <div class="row">
        <div class="col-sm-12">
            <hr class="ruler--light-grey">
        </div>
      </div>
      <div class="row">
        <div class="online-payment step-lead">
            <h2>Before you start</h2>
            <p><span>Please make sure you've got the following to hand:</span></p>
            <ul>
            <li><strong>Patient ID</strong> - the 8 digit number shown on your bill or other correspondence from Mediapp</li>
            <li><strong>Case number</strong> - the 10 digit number also on your bill or other correspondence from Mediapp</li>
            <li><strong>Credit or debit card</strong> (for a UK bank/ credit account)</li>
            </ul>
            <p><strong>Please note:</strong><br>If you have a letter from your insurer advising that you have a balance to settle but which doesn't specify your Patient ID and case number, please wait for a request for payment directly from Mediapp which will confirm these details.</p>
        </div>
      </div>

    </div>
    
</div>
<div class="container mb-5 container-component container-component--spacing online-payment">
    <div class="row justify-content-center align-items-center">

    <div class="row">
    <div class="col-sm-12 col-md-8">

    <form action="make-a-payment" class="online-payment-form" >               

    <div class="online-payment-form">
        <ul class="pay-label">
        <li>
        <label for="Personaldata">Please enter your Patient ID</label>
        </li>           
        </ul>

    <div class="field-inner">
        <input class="input-text" type="text" placeholder="123456789">
    </div>
                             
    </div>

    <div class="online-payment-form">
        <ul class="pay-label">
        <li>
        <label for="Personaldata">Please enter your Case number</label>
        </li>
                                        
         </ul>
    <div class="field-inner">
        <input class="input-text" type="text" placeholder="ABCD12345">
    </div>

    </div>

    <div class="online-payment-form">
        <label for="Personaldata">Please enter your email address</label>

    <div class="field-inner">
        <i class="field-inner--error"></i>
        <input class="input-text" type="text" placeholder="mediapp@health.com">
    </div>
    
    </div>

    <div>
      <p>Please note the information you provide here will only be used for the purposes of making a one off payment and will not be stored or used for any other purposes.</p>
      <p>This will only be used to confirm any payment made.</p>
    </div>
                            
    <div class="col-12">                         
    <button type="submit" class="button button--green-rounded button--small online-payment-form__submit">Submit</button>
    </div>
        
    </form>
    </div>

    <div class="col-12 col-md-4 d-lg-block mt-4 mt-md-0" style="background-color:#f0fafa">
        <h2 class="mt-4 mt-md-0 mb-4 mb-md-0">Where to find the required details:</h2>
        <div class="inner">
            <img src="img/sample-letter01.png" class="sample-letter">
        </div>
    </div>
    </div>

    </div>
</div>
</body>
</html>