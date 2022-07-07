<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Inter:wght@400;600;700&family=Lato:wght@100;300;400&family=Metrophobic&family=Nuosu+SIL&family=Open+Sans:ital@0;1&family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,500&family=Quicksand&family=Roboto:ital,wght@0,400;0,500;0,700;1,100&family=Yellowtail&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- About -->
    <section class="about ">
        <div class=" container">
            <div class="shadow-box ">
                <div class="shadow-box__text">
                    <h1 >About Mediapp Hospital</h1>
                    <p>Mediapp Hospital is an established local private hospital providing comprehensive treatments and care to our patients in Birmingham and the surrounding areas.</p>
                    <p>We’re dedicated to providing quality treatment and aftercare. This means ongoing investment in our facilities and introducing new services so you can have up-to-date treatment and care in a clean, comfortable environment.</p>
                </div>
                <div class="shadow-box__enquire">
                    <a href="" class="link ">Enquire now</a>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <a href="">0121 756 3309</a>
                    </div>
                </div>
            </div>
    
            <div class="info">
                <div class="wrapper">
                    <div class="facilities">
                        <h2>Facilities at Mediapp Hospital</h2>
                        <div class="facilities-info">
                            <p>We aim to make your stay with us as comfortable as possible. Our facilities include:</p>
                            <div class="list">
                                <p>39 private rooms, each with en-suite facilities, TV and WiFi</p>
                                <p>Four operating theatres (two with laminar flow)</p>
                                <p>On-site pharmacy which is open Monday to Friday 9am to 5pm and Saturday 9.30am to 1.30pm</p>
                                <p>Meals prepared by professional on-site chefs to your room</p>
                            </div>
                            <p>Mediapp Hospital is guided by the formulary and decisions made by the <span><a href="">Local Health Community Formulary Board Medicines Management Board</a></span> for the clinical indications that we're contracted to treat.</p>
                        </div>
                    </div>
    
                    <div class="payment">
                        <h2>How to pay for your treatment at Mediapp Hospital</h2>
                        <p>Our private hospital welcomes all patients and our inclusive prices and payment plans make it easy and affordable, even if you don’t have medical insurance.</p>
                        <p>We offer easy booking and flexible appointment times to suit you so you don’t have to wait to get the treatment you need.</p>
                    </div>

                    <div class="visiting">
                        <h2>Visiting and COVID-19</h2>
                        <p>To help protect our staff, patients and consultants against the potential risk of COVID-19, we’re restricting visitors to:</p>
                        <div class="list">
                            <p>One accompanying visitor for outpatient appointments (no lateral flow test required)</p>
                            <p>Two visitors for patients having inpatient treatment (evidence of a negative lateral flow test must be presented at reception on the day of visit)</p>
                        </div>
                        <p>Visitors attending the inpatient wards and outpatients are not required to wear a mask unless this is their personal preference. View our <span><a href="">safety patient pathway</a></span> on safety measures in our hospitals.</p>
                        <p>We have free on-site parking available to patients and visitors.</p>
                    </div>

                    <div class="Accessibility">
                        <h2>Accessibility</h2>
                        <p>At Mediapp Hospital we strive to recognise and support the needs of every individual. Our hospital is accessible to everybody – patients and their visitors – and we provide patient information in a variety of formats, including large print and audio versions.</p>
                        <p>If you’d like to speak to someone about your needs, you can call us on 0121 704 1451 or complete the enquiry form below.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- enquiry -->
    <section class="enquiry">
        <div class="container">
            <h1>Get in touch</h1>
            <div class="covid-info">
                <h3>Important information about Covid-19 tests</h3>
                <p>COVID-19 testing or antibody tests are not available as a standalone service at Mediapp Hospital.</p>
            </div>

            <form >
                <div class="row-1">
                    <div class="col-1">
                        <div>
                            <label for="appointment">Contact us to request...</label>
                            <select  id="appointment">
                                <option >An appointment</option>
                                <option >A quotation</option>
                                <option >Information</option>
                            </select>
                        </div>
                        <div>
                            <label for="payment-method">How do you intend to fund your treatment?</label>
                            <select  id="payment-method">
                                <option >Please select</option>
                                <option >Private medical insurance</option>
                                <option >Paying for yourself</option>
                                <option >Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-2">
                        <label for="enquiry-detail">Type the detail of your enquiry</label>
                        <textarea  id="enquiry-detail" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row-2">
                    <div>
                        <label for="title">Title</label>
                        <select  id="title">
                            <option >Select a atitle</option>
                            <option >Mrs</option>
                            <option >Miss</option>
                            <option >Ms</option>
                            <option >Mr</option>
                            <option >Mx</option>
                            <option >Dr</option>
                            <option >Prof</option>
                        </select>
                    </div>

                    <div>
                        <label for="email">Email address</label>
                        <input type="text" id="email">
                    </div>

                    <div>
                        <label for="phone-number">Phone number</label>
                        <input type="text" id="phone-number">
                    </div>

                    <div>
                        <label for="first-name">First name</label>
                        <input type="text" id="first-name">
                    </div>

                    <div>
                        <label for="email-confirmation">Confirm email address</label>
                        <input type="text" id="email-confirmation">
                    </div>

                    <div>
                        <label for="post-code">Postcode</label>
                        <input type="text" id="post-code">
                    </div>

                    <div>
                        <label for="Surname">Surname</label>
                        <input type="text" id="Surname">
                    </div>

                    <div>
                        <label >Date of birth</label>
                        <div class="date">
                            <select >
                                <option value="">DD</option>
                            </select>

                            <select >
                                <option value="">MM</option>
                            </select>

                            <select >
                                <option value="">YYYY</option>
                            </select>

                        </div>
                    </div>

                    <div>
                        <label for="select-hospital">Select a hospital</label>
                        <select id="select-hospital">
                            <option >Parkway Hospital</option>
                        </select>
                    </div>
                </div>
    
            </form>
            <div class="market-information">
                <div class="market-information-div1">
                    <h3>Marketing Information</h3>
                    <p>Spire would like to provide you with marketing information about products and services offered by Spire and by selected third-party partners. If you do not consent for us to process your personal data for marketing activities, we will still be able to contact you about your enquiry.</p>
                    <div class="consent">
                        <h4>Please tick the box(es) to confirm your consent to receive marketing information from Spire:</h4>
                        <div>
                            <div class="check-box">
                                <input type="checkbox" id="email-check">
                                <label for="email-check">Email</label>
                            </div>
                            <div class="check-box">
                                <input type="checkbox" id="sms-check">
                                <label for="sms-check" >SMS</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="market-information-div2">
                    <p>
                        We may contact you by email, SMS or phone about your enquiry. If we try to contact you by phone (mobile and/or landline) and you are not available, we may leave you a voicemail message. We may also use your details to contact you about patient surveys we use for improving our service or monitoring outcomes, which are not a form of marketing.
                    </p>
                    <div class="privacy-notice ">
                        <input type="checkbox">
                        <p>I have read, understood and agree to the <span><a href="">Privacy Notice.</a></span>
                        </p>
                    </div>
                </div>
                <a href="" class="link">Submit my enquiry </a>
            </div>
        </div>
    </section>
</body>
</html>