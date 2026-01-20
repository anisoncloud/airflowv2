<?php
/* Template Name: Donation
    Version: 1.0
*/
?> 


<style>
.togol__sty {
    border: 1px solid #ccc;
    padding: 17px;
    /* color: #000; */
    margin-top: 20px;
    background: #fff;
    box-shadow: -2px 1px 18px 0px rgba(0,0,0,0.75);
    -webkit-box-shadow: -2px 1px 18px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -2px 1px 18px 0px rgba(0,0,0,0.75);
    border-radius: 10px;
    margin-left: 2%;
}

.togol__sty h5{
    font-weight: 700;
}

.togol_but_st {
    font-weight: 600;
    color: #008136;
    border: 1px solid #ccc;
    padding: 6px 13px;
    border-radius: 15px;
}

.checkout .radio-wrapper .radio-single {
    margin-left: 10px;
}

</style>





<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">

                <h2 class="title-animation">{{getContentBySlug(collect(request()->segments())->last())->title}}</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{ asset('/public/uploads/')}}/{{getContentBySlug(collect(request()->segments())->last())->thumbnail_path}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{ asset('/public/front/assets/images/banner/banner-one-shape.png')}}" alt="Image">
    </div>
    <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('/public/front/assets/images/sprade-base.png')}}" alt="Image" class="base-img">
    </div>
</section>
<!-- ==== / banner section end ==== --> 

<!-- ==== / banner section end ==== -->
<!-- ==== contact section start ==== -->
<section class="contact-main volunteer">
 <form action="{{ url('/feedbacks') }}" method="post">
    @csrf
    <input type="hidden" placeholder="Your name" name="form_name" value="Donation">
    <!-- ==== donate us section start ==== -->
    <div class="cm-details donate-us community checkout ">
        <div class="container">

            <div class="row gutter-60 justify-content-center">
                <div class="col-lg-12">

                    <div class="cm-details__content">

                        <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="cm-group">
                                <h3 class="title-animation">Donate to Restore Vision</h3>
                                <p>Your generosity helps give sight, dignity, and hope to people suffering from
                                    preventable blindness. Please fill in the form below to support an eye patient in
                                    need.
                                </p>
                            </div>
                            <div class="cta">
                                <div class="community-donation">
                                    <div class="new">

                                        <div class="donation-form__single ">     
                                            <h5>Eye Hospital Name</h5>                                            
                                            <div class="radio-wrapper">
                                                <div class="radio-single">
                                                    <input type="radio" id="testDonation" name="donation-payment" value="VARD Eye Hospital, Sunamganj">
                                                    <label for="testDonation">VARD Eye Hospital, Sunamganj</label>
                                                </div>
                                                <div class="radio-single">
                                                    <input type="radio" id="offlineDonation"
                                                        name="donation-payment" value="VARD Eye Hospital, Osmaninagar,
                                                        Sylhet">
                                                    <label for="offlineDonation">VARD Eye Hospital, Osmaninagar,
                                                        Sylhet </label>
                                                </div>
                                                <div class="radio-single">
                                                    <input type="radio" id="cardDonation" name="donation-payment" value="VARD Eye Hospital, Jatorpur, Sylhet
                                                        City">
                                                    <label for="cardDonation">VARD Eye Hospital, Jatorpur, Sylhet
                                                        City </label>
                                                </div>
                                                <div class="radio-single">
                                                    <input type="radio" id="cardcom" name="donation-payment" value="VARD Kamal Eye Hospital, Chouddagram,
                                                        Cumilla">
                                                    <label for="cardcom">VARD Kamal Eye Hospital, Chouddagram,
                                                        Cumilla </label>
                                                </div>
                                            </div>
                                        </div>                                    
                                        
                                    </div>

                                    <hr style="margin: 29px 0;">
                                    <div class="checkout__form pb-0">
                                        <div class="intro">
                                            <h5>Details Information</h5>
                                        </div>                                         
                                            <div class="input-group">
                                                <div class="input-single">
                                                    <input type="text" name="full-name" id="cName" placeholder="Full Name"
                                                        required>
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-single">
                                                    <input type="email" name="email" id="cEmail"
                                                        placeholder="Your Email" required>
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="input-single">
                                                    <input type="text" name="phone" id="cPhone"
                                                        placeholder="Your Number" required>
                                                    <i class="fa-solid fa-phone"></i>
                                                </div>
                                            </div>   
                                            <div class="input-single">
                                                <select class="" id="country" name="country">
                                                    <option selected disabled>Select a country</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia (Plurinational State of)</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="CV">Cabo Verde</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="BQ">Caribbean Netherlands</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, Democratic Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="SZ">Eswatini (Swaziland)</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, North</option>
                                                    <option value="KR">Korea, South</option>
                                                    <option value="XK">Kosovo</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia North</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar (Burma)</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestine</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn Islands</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthelemy</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="CS">Serbia and Montenegro</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands
                                                    </option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey (Türkiye)</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UM">U.S. Outlying Islands</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican City Holy See</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="address" id="cAddressTwo"
                                                    placeholder="Your Address" required>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>

                                            <div class="input-single alter-input">
                                                <textarea name="contact-message" id="contactMessage"
                                                    placeholder="your message..."></textarea>
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                    </div>

                                    <div class="donation-form" data-aos-delay="300">
                                        <div class="donation-form__single">
                                            <h5>Your Donation:</h5>
                                            <div class="input-group-icon">
                                                <div class="thumb">
                                                    <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                                                </div>
                                                <input type="text" name="donation-amount" id="donationAmount">
                                            </div>
                                            <div class="made-amount">
                                                <span class="donation-amount active">5000.00</span>
                                                <span class="donation-amount">10,000.00</span>
                                                <span class="donation-amount ">5000.00</span>
                                                <span class="donation-amount">9000.00</span>
                                                <span class="donation-amount">6000.00</span>
                                                <span class="donation-amount custom-amount">Custom Amount for an Eye
                                                    Camp</span>
                                            </div>
                                        </div>  
                                    </div>

                                  <hr style="margin: 29px 0;">

                                    <div class="donation-form__single mb-3">     
                                        <h5>Purpose of Donation:</h5>                                            
                                        <div class="radio-wrapper">
                                            <div class="radio-single">
                                                <input type="radio" id="01" name="donation-purpose" value="Small Incision Cataract Surgery (SICS)">
                                                <label for="01">Small Incision Cataract Surgery (SICS)</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="02" name="donation-purpose" value="Dacryo Cysto Rhinostomy ( DCR) Surgery">
                                                <label for="02">Dacryo Cysto Rhinostomy ( DCR) Surgery</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="03" name="donation-purpose" value="Dacryo Cystectomy (DCT) Surgery">
                                                <label for="03">Dacryo Cystectomy (DCT) Surgery</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="04" name="donation-purpose" value="Pterygium (Normal) Surgery">
                                                <label for="04">Pterygium (Normal) Surgery</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="05" name="donation-purpose" value="Pterygium (Grafting) Surgery">
                                                <label for="05">Pterygium (Grafting) Surgery</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="06" name="donation-purpose" value="Glaucoma surgery">
                                                <label for="06">Glaucoma surgery</label>
                                            </div> 
                                            
                                            <div class="radio-single">
                                                <input type="radio" id="07" name="donation-purpose" value="An Eye Camp">
                                                <label for="07">An Eye Camp</label>
                                            </div> 
                                        </div> 
                                    </div>
                                 <hr style="margin: 29px 0;">

                                    <div class="row">
                                                <div class="col-lg-6 col-sm-12">

                                                    <div class="checkout__form pb-0">
                                                        <div class="intro">
                                                            <h5>Would you like your donation to be:</h5>
                                                        </div> 
                                                        <div class="input-single mb-3">
                                                            <select class="" id="like_direction" name="like_direction">
                                                                <option selected disabled>Select</option>
                                                                <option value="One-time">One-time</option> 
                                                                <option value="Monthly">Monthly</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-lg-6 col-sm-12 checkout__form pb-0">
                                                        <div class="intro">
                                                            <h5>Dedication (Optional)</h5>
                                                        </div>
                                                        <div class="input-group">
                                                                <div class="input-single">
                                                                    <input type="text" name="dedication" id="cName" placeholder="This donation is made in the name of:"
                                                                        required>
                                                                    <i class="fa-solid fa-user"></i>
                                                                </div>
                                                        </div>

                                                </div>

                                                <div class=" col-lg-12  checkout__form pb-0">
                                                <div class="intro">
                                                            <h5>Privacy Preference</h5>
                                                </div> 
                                                            <div class="radio-wrapper">
                                                                <div class="radio-single">
                                                                    <input type="radio" id="08" name="privacy-preference" value="Display my name as a donor">
                                                                    <label for="08">Display my name as a donor</label>
                                                                </div>     
                                                                <div class="radio-single">
                                                                    <input type="radio" id="09" name="privacy-preference" value="Keep my donation anonymous">
                                                                    <label for="09">Keep my donation anonymous</label>
                                                                </div>     
                                                            </div>                               
                
                                                </div>
                                
                                    <div class="col-lg-12">
                                                <a class="pt-3 " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <h5 class="togol_but_st"> Ways To Donate </h5>
                                                </a>

                                            <div class="collapse" id="collapseExample">
                                
                                            <div class="col-lg-6  pt-3 togol__sty">
                                            <h5>Bank Details</h5>
                                                <hr style="margin:15px 0;">
                                                <ul>
                                                <li><i class="fa-solid fa-angles-right"></i> A/C Title: VARD Eye Hospital Mother AC </li>
                                                <li><i class="fa-solid fa-angles-right"></i> A/C Number and Account Type: STD 005313100000091</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Bank Name & Branch: Southeast Bank Limited, Satmasjid Road Branch, Dhaka</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Branch Address: ADC Empire Plaza (1st & 2nd Floor), Plot#183 (Old) 91 (New) Road# 22 (Old) 12/A (New), Satmasjid Road , Dhanmondi, Dhaka-1207</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Routing No: 205264038</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Bank SWIFT Code : SEBDBDDHCTS</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Phone : +8802-41021195-96</li>
                                                <li><i class="fa-solid fa-angles-right"></i> Email: info.sr@southeastbank.com.bd</li>
                                            
                                                </ul>
                                                </div>

                                            </div>


                                    </div>

                                    </div>



                                    <div class="mb-3 form-check">
                                        @if(session()->has('message'))
                                            
                                            <div class="alert alert-success" role="alert">
                                                {{session('message')}}
                                            </div>
                                            @endif
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-cta">
                                        <button type="submit" aria-label="submit message" title="submit message"
                                            class="btn--primary">Donate Now <i
                                                class="fa-solid fa-arrow-right"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!--  -->

   

                <div class="shape-right aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="300">
                    <img src="{{ asset('/public/front/assets/images/testimonial/testimonail-seven-shape.png')}}" alt="Image">
                </div>
                <!--  -->
        </div>
    </div>


</form>


     
    <!-- ==== / donate us section end ==== -->
</section>







<!-- ==== / contact section end ==== -->