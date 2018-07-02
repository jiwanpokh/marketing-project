<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

@extends('layouts.layout')

@section('content')



<div class="col-md-8 col-sm-12 col-xs-12">
  <div class="panel-group">
    <div class="title">
      <h2>Marketing Day Book jiwan</h2>
    </div>

    <form id="requestdomain-form" action="https://register.com.np/userdomain" method="Post">
      <input type="hidden" name="_token" value="Lx6zvkJq7cEEAEBlYJAlqC1yDe2wlBgEs5FrQFiM">

      <div class="reg-block">
        <fieldset>
          <legend>#Staffname</legend>
        </fieldset>
      </div>



      <div class="reg-block">
        <fieldset>
          <div class="row"></div>
        </fieldset>
      </div>



      <div class="reg-block">
        <fieldset>
          <legend><div class="class="panel-heading">   Clients Details</div></legend>
          <!--<p class="info-help-block">Domain owner's detail</p>-->

          <div class="row">
                   <!--  <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Full name <small>( पुरा नाम ) </small>:  <span>*</span>  </label>
                            <input class="form-control" type="text" name="adminName" id="adminName">
                        </div>
                      </div> -->

                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Organization name <small>( संस्थाको नाम )</small> :    </label>
                          <input class="form-control" type="text" name="adminOrganization" id="adminOrganization">
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label >Country/Region <small>( देश )</small> :    <span>*</span>  </label>
                            <select class="btn btn-primary dropdown-toggle " name="adminCountry" id="adminCountry">

                              <option value="Afghanistan" >Afghanistan</option>  


                              <option value="Albania" >Albania</option>  


                              <option value="Algeria" >Algeria</option>  


                              <option value="American Samoa" >American Samoa</option>  


                              <option value="Andorra" >Andorra</option>  


                              <option value="Angola" >Angola</option>  


                              <option value="Anguilla" >Anguilla</option>  


                              <option value="Antarctica" >Antarctica</option>  


                              <option value="Antigua and Barbuda" >Antigua and Barbuda</option>  


                              <option value="Argentina" >Argentina</option>  


                              <option value="Armenia" >Armenia</option>  


                              <option value="Aruba" >Aruba</option>  


                              <option value="Australia" >Australia</option>  


                              <option value="Austria" >Austria</option>  


                              <option value="Azerbaijan" >Azerbaijan</option>  


                              <option value="Bahamas" >Bahamas</option>  


                              <option value="Bahrain" >Bahrain</option>  


                              <option value="Bangladesh" >Bangladesh</option>  


                              <option value="Barbados" >Barbados</option>  


                              <option value="Belarus" >Belarus</option>  


                              <option value="Belgium" >Belgium</option>  


                              <option value="Belize" >Belize</option>  


                              <option value="Benin" >Benin</option>  


                              <option value="Bermuda" >Bermuda</option>  


                              <option value="Bhutan" >Bhutan</option>  


                              <option value="Bolivia" >Bolivia</option>  


                              <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>  


                              <option value="Botswana" >Botswana</option>  


                              <option value="Bouvet Island" >Bouvet Island</option>  


                              <option value="Brazil" >Brazil</option>  


                              <option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>  


                              <option value="Brunei Darussalam" >Brunei Darussalam</option>  


                              <option value="Bulgaria" >Bulgaria</option>  


                              <option value="Burkina Faso" >Burkina Faso</option>  


                              <option value="Burundi" >Burundi</option>  


                              <option value="Cambodia" >Cambodia</option>  


                              <option value="Cameroon" >Cameroon</option>  


                              <option value="Canada" >Canada</option>  


                              <option value="Cape Verde" >Cape Verde</option>  


                              <option value="Cayman Islands" >Cayman Islands</option>  


                              <option value="Central African Republic" >Central African Republic</option>  


                              <option value="Chad" >Chad</option>  


                              <option value="Chile" >Chile</option>  


                              <option value="China" >China</option>  


                              <option value="Christmas Island" >Christmas Island</option>  


                              <option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>  


                              <option value="Colombia" >Colombia</option>  


                              <option value="Comoros" >Comoros</option>  


                              <option value="Congo" >Congo</option>  


                              <option value="Congo, the Democratic Republic of the" >Congo, the Democratic Republic of the</option>  


                              <option value="Cook Islands" >Cook Islands</option>  


                              <option value="Costa Rica" >Costa Rica</option>  


                              <option value="Cote D&#039;Ivoire" >Cote D&#039;Ivoire</option>  


                              <option value="Croatia" >Croatia</option>  


                              <option value="Cuba" >Cuba</option>  


                              <option value="Cyprus" >Cyprus</option>  


                              <option value="Czech Republic" >Czech Republic</option>  


                              <option value="Denmark" >Denmark</option>  


                              <option value="Djibouti" >Djibouti</option>  


                              <option value="Dominica" >Dominica</option>  


                              <option value="Dominican Republic" >Dominican Republic</option>  


                              <option value="Ecuador" >Ecuador</option>  


                              <option value="Egypt" >Egypt</option>  


                              <option value="El Salvador" >El Salvador</option>  


                              <option value="Equatorial Guinea" >Equatorial Guinea</option>  


                              <option value="Eritrea" >Eritrea</option>  


                              <option value="Estonia" >Estonia</option>  


                              <option value="Ethiopia" >Ethiopia</option>  


                              <option value="Falkland Islands (Malvinas)" >Falkland Islands (Malvinas)</option>  


                              <option value="Faroe Islands" >Faroe Islands</option>  


                              <option value="Fiji" >Fiji</option>  


                              <option value="Finland" >Finland</option>  


                              <option value="France" >France</option>  


                              <option value="French Guiana" >French Guiana</option>  


                              <option value="French Polynesia" >French Polynesia</option>  


                              <option value="French Southern Territories" >French Southern Territories</option>  


                              <option value="Gabon" >Gabon</option>  


                              <option value="Gambia" >Gambia</option>  


                              <option value="Georgia" >Georgia</option>  


                              <option value="Germany" >Germany</option>  


                              <option value="Ghana" >Ghana</option>  


                              <option value="Gibraltar" >Gibraltar</option>  


                              <option value="Greece" >Greece</option>  


                              <option value="Greenland" >Greenland</option>  


                              <option value="Grenada" >Grenada</option>  


                              <option value="Guadeloupe" >Guadeloupe</option>  


                              <option value="Guam" >Guam</option>  


                              <option value="Guatemala" >Guatemala</option>  


                              <option value="Guinea" >Guinea</option>  


                              <option value="Guinea-Bissau" >Guinea-Bissau</option>  


                              <option value="Guyana" >Guyana</option>  


                              <option value="Haiti" >Haiti</option>  


                              <option value="Heard Island and Mcdonald Islands" >Heard Island and Mcdonald Islands</option>  


                              <option value="Holy See (Vatican City State)" >Holy See (Vatican City State)</option>  


                              <option value="Honduras" >Honduras</option>  


                              <option value="Hong Kong" >Hong Kong</option>  


                              <option value="Hungary" >Hungary</option>  


                              <option value="Iceland" >Iceland</option>  


                              <option value="India" >India</option>  


                              <option value="Indonesia" >Indonesia</option>  


                              <option value="Iran, Islamic Republic of" >Iran, Islamic Republic of</option>  


                              <option value="Iraq" >Iraq</option>  


                              <option value="Ireland" >Ireland</option>  


                              <option value="Israel" >Israel</option>  


                              <option value="Italy" >Italy</option>  


                              <option value="Jamaica" >Jamaica</option>  


                              <option value="Japan" >Japan</option>  


                              <option value="Jordan" >Jordan</option>  


                              <option value="Kazakhstan" >Kazakhstan</option>  


                              <option value="Kenya" >Kenya</option>  


                              <option value="Kiribati" >Kiribati</option>  


                              <option value="Korea, Democratic People&#039;s Republic of" >Korea, Democratic People&#039;s Republic of</option>  


                              <option value="Korea, Republic of" >Korea, Republic of</option>  


                              <option value="Kuwait" >Kuwait</option>  


                              <option value="Kyrgyzstan" >Kyrgyzstan</option>  


                              <option value="Lao People&#039;s Democratic Republic" >Lao People&#039;s Democratic Republic</option>  


                              <option value="Latvia" >Latvia</option>  


                              <option value="Lebanon" >Lebanon</option>  


                              <option value="Lesotho" >Lesotho</option>  


                              <option value="Liberia" >Liberia</option>  


                              <option value="Libyan Arab Jamahiriya" >Libyan Arab Jamahiriya</option>  


                              <option value="Liechtenstein" >Liechtenstein</option>  


                              <option value="Lithuania" >Lithuania</option>  


                              <option value="Luxembourg" >Luxembourg</option>  


                              <option value="Macao" >Macao</option>  


                              <option value="Macedonia, the Former Yugoslav Republic of" >Macedonia, the Former Yugoslav Republic of</option>  


                              <option value="Madagascar" >Madagascar</option>  


                              <option value="Malawi" >Malawi</option>  


                              <option value="Malaysia" >Malaysia</option>  


                              <option value="Maldives" >Maldives</option>  


                              <option value="Mali" >Mali</option>  


                              <option value="Malta" >Malta</option>  


                              <option value="Marshall Islands" >Marshall Islands</option>  


                              <option value="Martinique" >Martinique</option>  


                              <option value="Mauritania" >Mauritania</option>  


                              <option value="Mauritius" >Mauritius</option>  


                              <option value="Mayotte" >Mayotte</option>  


                              <option value="Mexico" >Mexico</option>  


                              <option value="Micronesia, Federated States of" >Micronesia, Federated States of</option>  


                              <option value="Moldova, Republic of" >Moldova, Republic of</option>  


                              <option value="Monaco" >Monaco</option>  


                              <option value="Mongolia" >Mongolia</option>  


                              <option value="Montserrat" >Montserrat</option>  


                              <option value="Morocco" >Morocco</option>  


                              <option value="Mozambique" >Mozambique</option>  


                              <option value="Myanmar" >Myanmar</option>  


                              <option value="Namibia" >Namibia</option>  


                              <option value="Nauru" >Nauru</option>  


                              <option value="Nepal" selected>Nepal</option>


                              <option value="Netherlands" >Netherlands</option>  


                              <option value="Netherlands Antilles" >Netherlands Antilles</option>  


                              <option value="New Caledonia" >New Caledonia</option>  


                              <option value="New Zealand" >New Zealand</option>  


                              <option value="Nicaragua" >Nicaragua</option>  


                              <option value="Niger" >Niger</option>  


                              <option value="Nigeria" >Nigeria</option>  


                              <option value="Niue" >Niue</option>  


                              <option value="Norfolk Island" >Norfolk Island</option>  


                              <option value="Northern Mariana Islands" >Northern Mariana Islands</option>  


                              <option value="Norway" >Norway</option>  


                              <option value="Oman" >Oman</option>  


                              <option value="Pakistan" >Pakistan</option>  


                              <option value="Palau" >Palau</option>  


                              <option value="Palestinian Territory, Occupied" >Palestinian Territory, Occupied</option>  


                              <option value="Panama" >Panama</option>  


                              <option value="Papua New Guinea" >Papua New Guinea</option>  


                              <option value="Paraguay" >Paraguay</option>  


                              <option value="Peru" >Peru</option>  


                              <option value="Philippines" >Philippines</option>  


                              <option value="Pitcairn" >Pitcairn</option>  


                              <option value="Poland" >Poland</option>  


                              <option value="Portugal" >Portugal</option>  


                              <option value="Puerto Rico" >Puerto Rico</option>  


                              <option value="Qatar" >Qatar</option>  


                              <option value="Reunion" >Reunion</option>  


                              <option value="Romania" >Romania</option>  


                              <option value="Russian Federation" >Russian Federation</option>  


                              <option value="Rwanda" >Rwanda</option>  


                              <option value="Saint Helena" >Saint Helena</option>  


                              <option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>  


                              <option value="Saint Lucia" >Saint Lucia</option>  


                              <option value="Saint Pierre and Miquelon" >Saint Pierre and Miquelon</option>  


                              <option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>  


                              <option value="Samoa" >Samoa</option>  


                              <option value="San Marino" >San Marino</option>  


                              <option value="Sao Tome and Principe" >Sao Tome and Principe</option>  


                              <option value="Saudi Arabia" >Saudi Arabia</option>  


                              <option value="Senegal" >Senegal</option>  


                              <option value="Serbia and Montenegro" >Serbia and Montenegro</option>  


                              <option value="Seychelles" >Seychelles</option>  


                              <option value="Sierra Leone" >Sierra Leone</option>  


                              <option value="Singapore" >Singapore</option>  


                              <option value="Slovakia" >Slovakia</option>  


                              <option value="Slovenia" >Slovenia</option>  


                              <option value="Solomon Islands" >Solomon Islands</option>  


                              <option value="Somalia" >Somalia</option>  


                              <option value="South Africa" >South Africa</option>  


                              <option value="South Georgia and the South Sandwich Islands" >South Georgia and the South Sandwich Islands</option>  


                              <option value="Spain" >Spain</option>  


                              <option value="Sri Lanka" >Sri Lanka</option>  


                              <option value="Sudan" >Sudan</option>  


                              <option value="Suriname" >Suriname</option>  


                              <option value="Svalbard and Jan Mayen" >Svalbard and Jan Mayen</option>  


                              <option value="Swaziland" >Swaziland</option>  


                              <option value="Sweden" >Sweden</option>  


                              <option value="Switzerland" >Switzerland</option>  


                              <option value="Syrian Arab Republic" >Syrian Arab Republic</option>  


                              <option value="Taiwan, Province of China" >Taiwan, Province of China</option>  


                              <option value="Tajikistan" >Tajikistan</option>  


                              <option value="Tanzania, United Republic of" >Tanzania, United Republic of</option>  


                              <option value="Thailand" >Thailand</option>  


                              <option value="Timor-Leste" >Timor-Leste</option>  


                              <option value="Togo" >Togo</option>  


                              <option value="Tokelau" >Tokelau</option>  


                              <option value="Tonga" >Tonga</option>  


                              <option value="Trinidad and Tobago" >Trinidad and Tobago</option>  


                              <option value="Tunisia" >Tunisia</option>  


                              <option value="Turkey" >Turkey</option>  


                              <option value="Turkmenistan" >Turkmenistan</option>  


                              <option value="Turks and Caicos Islands" >Turks and Caicos Islands</option>  


                              <option value="Tuvalu" >Tuvalu</option>  


                              <option value="Uganda" >Uganda</option>  


                              <option value="Ukraine" >Ukraine</option>  


                              <option value="United Arab Emirates" >United Arab Emirates</option>  


                              <option value="United Kingdom" >United Kingdom</option>  


                              <option value="United States" >United States</option>  


                              <option value="United States Minor Outlying Islands" >United States Minor Outlying Islands</option>  


                              <option value="Uruguay" >Uruguay</option>  


                              <option value="Uzbekistan" >Uzbekistan</option>  


                              <option value="Vanuatu" >Vanuatu</option>  


                              <option value="Venezuela" >Venezuela</option>  


                              <option value="Viet Nam" >Viet Nam</option>  


                              <option value="Virgin Islands, British" >Virgin Islands, British</option>  


                              <option value="Virgin Islands, U.s." >Virgin Islands, U.s.</option>  


                              <option value="Wallis and Futuna" >Wallis and Futuna</option>  


                              <option value="Western Sahara" >Western Sahara</option>  


                              <option value="Yemen" >Yemen</option>  


                              <option value="Zambia" >Zambia</option>  


                              <option value="Zimbabwe" >Zimbabwe</option>  

                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Province/State <small>( प्रदेश )</small> :       <span>*</span>  </label>
                          <select class="btn btn-primary dropdown-toggle"  name="adminState"  id="adminState">
                            <option value="" selected="selected"  >:: Select One ::</option>
                            <option value="Province 1">Province 1 <small>( प्रदेश नं. १  )</small></option>
                            <option value="Province 2">Province 2 <small>( प्रदेश नं. २ )</small></option>
                            <option value="Province 3">Province 3 <small>( प्रदेश नं. ३ )</small></option>
                            <option value="Province 4">Province 4 <small>( प्रदेश नं. ४ )</small></option>
                            <option value="Province 5">Province 5 <small>( प्रदेश नं. ५  )</small></option>
                            <option value="Province 6">Province 6 <small>( प्रदेश नं. ६  )</small></option>
                            <option value="Province 7">Province 7 <small>( प्रदेश नं. ७  )</small></option>
                          </select>
                        </div> 
                      </div>
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>City<small> ( गाउँ / शहर   )</small> :   <span>*</span>  </label>
                          <input class="form-control" type="text" name="adminCity" id="adminCity">
                        </div>
                      </div> 
                    </div>

                    <div class="row">
                         
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group text-light bg-dark p-3 mb-2 ">
                          <label>Address <small>( ठेगाना  )</small> :    <span>*</span>  </label>
                          <input class="form-control" type="text" name="adminAddress" id="adminAddress">
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Email :     <span>*</span>  </label>
                          <input class="form-control" type="text" name="adminEmail" id="adminEmail">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Industry :  </label>
                          <input class="form-control" type="text" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Representative :  </label>
                          <input class="form-control" type="text" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Follow-up :  </label>
                          <input class="form-control" type="date" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Note :  </label>
                          <input class="form-control" type="text" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Response:  </label>
                          <input class="form-control" type="text" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Value </label>
                          <input class="form-control" type="number" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Contact No. </label>
                          <input class="form-control" type="number" name="adminTelephone" id="adminTelephone">
                        </div>
                      </div>

                       <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label>Duties:</small><span>*</span>  </label>
                          <select class="btn btn-primary dropdown-toggle" multiple name="adminState"  id="adminState">
                            <option value="" selected="selected"  >:: Select One ::</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Web App">Web App</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Designing">Designing</option>
                            <option value="Printing">Printing</option>
                          </select>
                        </div> 
                      </div>



                      <div class="reg-block">
                        <h1 style="color:blue;padding:143px;margin-left:400px;margin-top:105px; ">
                          <button type="submit" class="btn btn-lg btn-primary" >Save & Continue </button>
                        </h1>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>





      <!--           </div>
              </div>

            </div>
          </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
<!-- //jiwan -->

@endsection()