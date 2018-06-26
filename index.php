<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<script src="prototype.js"></script>
<script src="onepagecheckout.js"></script>
<script src="jquery.min.js"></script>
<script src="jquery.noconflict.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="jquery.payment.min.js"></script>
<div class="onepagecheckout_block">
    <div class="op_block_title">
        Name &amp; Adresse    </div>
    <div class="form_fields">
        <div id="bill_form">
            <input type="hidden" name="billing[address_id]" id="billing:address_id" value="959">
            <div class="two_fields">
                <div class="customer-name">
                    <div class="short name-firstname">
                        <!--  <label for="billing:firstname" class="required">
                              Vorname        </label>
                          <sup>*</sup>-->
                        <div class="data_area">
                            <input placeholder="Vorname" type="text" id="billing:firstname" name="billing[firstname]" value="" title="Vorname" class="t1 required-entry">
                        </div>
                    </div>
                    <div class="short name-lastname">
                        <!-- <label for="billing:lastname" class="required">
                             Nachname        </label>
                         <sup>*</sup> -->
                        <div class="data_area">
                            <input placeholder="Nachname" type="text" id="billing:lastname" name="billing[lastname]" value="" title="Nachname" class="t1 required-entry">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            <div class="full">
                <!--	<label for="billing:email" class="required">
                        Email Addresse					</label>
                    <sup>*</sup> -->
                <div class="data_area">
                    <input placeholder="Email Addresse" type="text" id="billing:email" name="billing[email]" value="" title="Email Addresse" class="t1 validate-email required-entry">
                </div>
            </div>
            <div class="full">
                <!--	<label for="billing:street1" class="required"  >
                        Adresse					</label>
                    <sup>*</sup> -->
                <div class="data_area">
                    <input placeholder="Adresse" type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="" class="t1 required-entry">
                </div>
            </div>
            <div class="full">
                <div class="data_area">
                    <input placeholder="Adresszusatz" type="text" title="Adresszusatz" name="billing[street][]" id="billing:street2" value="" class="t1">
                </div>
            </div>
            <div class="two_fields">
                <div class="short">
                    <!--	<label for="billing:postcode" class="required" >
							PLZ						</label>
						 <sup>*</sup>-->
                    <div class="data_area">
                        <input placeholder="PLZ" type="text" title="PLZ" name="billing[postcode]" id="billing:postcode" value="" class="t1 validate-zip-international required-entry ">
                    </div>
                </div>
                <div class="short">
                    <!--	<label for="billing:city" class="required" >
                            Ort					</label>
                         <sup>*</sup>  -->
                    <div class="data_area">
                        <input placeholder="Ort" type="text" title="Ort" name="billing[city]" value="" class="t1 required-entry " id="billing:city">
                    </div>
                </div>
                <div class="short" style="display:none">
                    <!--	<label for="billing:region_id">
                            State / Province					</label>
                         -->
                    <div class="data_area">
                        <select id="billing:region_id" name="billing[region_id]" title="State / Province" class="validate-select" style="display:none;" defaultvalue="1">
                            <option value="1">State / Province *</option>
                            <option value="">Select One</option>
                        </select>
                        <script type="text/javascript">
                            //<![CDATA[
                            $('billing:region_id').setAttribute('defaultValue',  "1");
                            //]]>
                        </script>
                        <input type="text" id="billing:region" name="billing[region]" value="" title="State / Province" class="t1" style="display:none;">
                    </div>
                </div>
            </div>
            <div class="clr"></div>
            <div class="two_fields">
                <div class="short">
                    <!--	<label for="billing:telephone" class="required" >
                            Telefon						</label>
                         <sup>*</sup>  -->
                    <div class="data_area">
                        <input placeholder="Telefon" type="text" name="billing[telephone]" value="" title="Telefon" class="t1 required-entry " id="billing:telephone">
                    </div>
                </div>
            </div>
            <div class="clr"></div>

            <div class="full">
                <!--	<label for="billing:country_id">
                        Country	        	</label>
                     -->
                <div class="data_area">
                    <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country"><option value=""> </option><option value="AF">Afghanistan</option><option value="AX">Alandinseln</option><option value="AL">Albanien</option><option value="DZ">Algerien</option><option value="UM">Amerikanisch-Ozeanien</option><option value="AS">Amerikanisch-Samoa</option><option value="VI">Amerikanische Jungferninseln</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarktis</option><option value="AG">Antigua und Barbuda</option><option value="AR">Argentinien</option><option value="AM">Armenien</option><option value="AW">Aruba</option><option value="AZ">Aserbaidschan</option><option value="AU">Australien</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesch</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgien</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivien</option><option value="BA">Bosnien und Herzegowina</option><option value="BW">Botsuana</option><option value="BV">Bouvetinsel</option><option value="BR">Brasilien</option><option value="VG">Britische Jungferninseln</option><option value="IO">Britisches Territorium im Indischen Ozean</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgarien</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CL">Chile</option><option value="CN">China</option><option value="CK">Cookinseln</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="CD">Demokratische Republik Kongo</option><option value="KP">Demokratische Volksrepublik Korea</option><option value="DE">Deutschland</option><option value="DM">Dominica</option><option value="DO">Dominikanische Republik</option><option value="DJ">Dschibuti</option><option value="DK">Dänemark</option><option value="EC">Ecuador</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estland</option><option value="FK">Falklandinseln</option><option value="FJ">Fidschi</option><option value="FI">Finnland</option><option value="FR">Frankreich</option><option value="GF">Französisch-Guayana</option><option value="PF">Französisch-Polynesien</option><option value="TF">Französische Süd- und Antarktisgebiete</option><option value="FO">Färöer</option><option value="GA">Gabun</option><option value="GM">Gambia</option><option value="GE">Georgien</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Grenada</option><option value="GR">Griechenland</option><option value="GL">Grönland</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard- und McDonald-Inseln</option><option value="HN">Honduras</option><option value="IN">Indien</option><option value="ID">Indonesien</option><option value="IQ">Irak</option><option value="IR">Iran</option><option value="IE">Irland</option><option value="IS">Island</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italien</option><option value="JM">Jamaika</option><option value="JP">Japan</option><option value="YE">Jemen</option><option value="JE">Jersey</option><option value="JO">Jordanien</option><option value="KY">Kaimaninseln</option><option value="KH">Kambodscha</option><option value="CM">Kamerun</option><option value="CA">Kanada</option><option value="CV">Kap Verde</option><option value="KZ">Kasachstan</option><option value="QA">Katar</option><option value="KE">Kenia</option><option value="KG">Kirgisistan</option><option value="KI">Kiribati</option><option value="CC">Kokosinseln</option><option value="CO">Kolumbien</option><option value="KM">Komoren</option><option value="CG">Kongo</option><option value="HR">Kroatien</option><option value="CU">Kuba</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettland</option><option value="LB">Libanon</option><option value="LR">Liberia</option><option value="LY">Libyen</option><option value="LI">Liechtenstein</option><option value="LT">Litauen</option><option value="LU">Luxemburg</option><option value="MG">Madagaskar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Malediven</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marokko</option><option value="MH">Marshallinseln</option><option value="MQ">Martinique</option><option value="MR">Mauretanien</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MK">Mazedonien</option><option value="MX">Mexiko</option><option value="FM">Mikronesien</option><option value="MC">Monaco</option><option value="MN">Mongolei</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mosambik</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NC">Neukaledonien</option><option value="NZ">Neuseeland</option><option value="NI">Nicaragua</option><option value="NL">Niederlande</option><option value="AN">Niederländische Antillen</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolkinsel</option><option value="NO">Norwegen</option><option value="MP">Nördliche Marianen</option><option value="OM">Oman</option><option value="TL">Osttimor</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palästinensische Gebiete</option><option value="PA">Panama</option><option value="PG">Papua-Neuguinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippinen</option><option value="PN">Pitcairn</option><option value="PL">Polen</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="KR">Republik Korea</option><option value="MD">Republik Moldau</option><option value="RW">Ruanda</option><option value="RO">Rumänien</option><option value="RU">Russische Föderation</option><option value="RE">Réunion</option><option value="SB">Salomonen</option><option value="ZM">Sambia</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi-Arabien</option><option value="SE">Schweden</option><option value="CH" selected="selected">Schweiz</option><option value="SN">Senegal</option><option value="RS">Serbien</option><option value="SC">Seychellen</option><option value="SL">Sierra Leone</option><option value="ZW">Simbabwe</option><option value="SG">Singapur</option><option value="SK">Slowakei</option><option value="SI">Slowenien</option><option value="SO">Somalia</option><option value="HK">Sonderverwaltungszone Hongkong</option><option value="MO">Sonderverwaltungszone Macao</option><option value="ES">Spanien</option><option value="LK">Sri Lanka</option><option value="BL">St. Barthélemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts und Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre und Miquelon</option><option value="VC">St. Vincent und die Grenadinen</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard und Jan Mayen</option><option value="SZ">Swasiland</option><option value="SY">Syrien</option><option value="ST">São Tomé und Príncipe</option><option value="ZA">Südafrika</option><option value="GS">Südgeorgien und die Südlichen Sandwichinseln</option><option value="TJ">Tadschikistan</option><option value="TW">Taiwan</option><option value="TZ">Tansania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad und Tobago</option><option value="TD">Tschad</option><option value="CZ">Tschechische Republik</option><option value="TN">Tunesien</option><option value="TM">Turkmenistan</option><option value="TC">Turks- und Caicosinseln</option><option value="TV">Tuvalu</option><option value="TR">Türkei</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="HU">Ungarn</option><option value="UY">Uruguay</option><option value="UZ">Usbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatikanstadt</option><option value="VE">Venezuela</option><option value="AE">Vereinigte Arabische Emirate</option><option value="US">Vereinigte Staaten</option><option value="GB">Vereinigtes Königreich</option><option value="VN">Vietnam</option><option value="WF">Wallis und Futuna</option><option value="CX">Weihnachtsinsel</option><option value="EH">Westsahara</option><option value="CF">Zentralafrikanische Republik</option><option value="CY">Zypern</option><option value="EG">Ägypten</option><option value="GQ">Äquatorialguinea</option><option value="ET">Äthiopien</option><option value="AT">Österreich</option></select>				</div>
            </div>

            <ul>
                <li class="options">
                    <input type="checkbox" name="billing[register_account]" value="1" title="Billing Register Account" id="billing:register_account" onclick="if(window.billing) billing.setCreateAccount(this.checked);" class="checkbox">
                    <label for="billing:register_account">
                        Erstelle einen Account bei Qurs.ch						</label>
                </li>
            </ul>
            <div class="two_fields" id="register-customer-password" style="display: none;">
                <div class="short">
                    <label for="billing:customer_password" class="required">
                        Passwort						</label>
                    <sup>*</sup>
                    <div class="data_area">
                        <input type="password" name="billing[customer_password]" id="billing:customer_password" title="Passwort" class="t1 required-entry validate-password">
                    </div>
                </div>
                <div class="short">
                    <label for="billing:confirm_password" class="required">
                        Bestätige Passwort						</label>
                    <sup>*</sup>
                    <div class="data_area">
                        <input type="password" name="billing[confirm_password]" title="Bestätige Passwort" id="billing:confirm_password" class="t1 required-entry validate-cpassword">
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
            <ul>
                <li class="no-display">
                    <input type="hidden" value="1" name="billing[save_in_address_book]">
                </li>
            </ul>
        </div>

        <input type="hidden" name="billing[use_for_shipping]" value="1">
    </div>
</div>
<script type="text/javascript">
    //<![CDATA[
    var billing = new BillingAddress();
    //]]>
</script>
<div class="form-list" id="payment_form_stripe_cc">
    <div id="stripe-cards-select">
        <input type="hidden" name="stripeToken" id="stripe_token">
        <div id="stripe-cards-select-new">
            <ol>
                <li>
                    <label for="stripe_cc_number" class="district-label_placeholder">Card Number</label>
                    <input id="stripe_cc_number" type="tel" x-autocompletetype="cc-number" autocompletetype="cc-number" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="Card Number" data-stripe="number" size="20">
                </li>
                <li class="district-float">
                    <label for="stripe_cc_exp" class="district-label_placeholder">Expiry</label>
                    <input id="stripe_cc_exp" type="tel" x-autocompletetype="off" autocompletetype="off" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="MM / YY" size="5" data-stripe="exp">
                </li>
                <li class="district-float">
                    <label for="stripe_cc_cvc" class="district-label_placeholder">CVC</label>
                    <input id="stripe_cc_cvc" type="tel" autocomplete="off" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="CVC" data-stripe="cvc" size="4" maxlength="4">
                </li>
            </ol>
        </div>
    </div>
</div>

<script src="stripe.js"></script>
<script>
    var stripeApi = Stripe('pk_test_EJ9pNitFVresmb8Y6OiAUHJ3');
    (function() {
        district.stripeCc.init('AE,DI,DC,JCB,MC,VI');
    })();
</script>
</body>
</html>