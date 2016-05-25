<!DOCTYPE html>
<html>
    
<!-- Mirrored from yukon-admin.tzdthemes.com/html/forms-extended_elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:28 GMT -->
<head>
		<meta charset="UTF-8">
		<title>Yukon Admin HTML v1.5 (forms-extended_elements)</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
        <!-- icon sets -->
            <!-- elegant icons -->
                <link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
            <!-- elusive icons -->
                <link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
            <!-- flags -->
                <link rel="stylesheet" href="assets/icons/flags/flags.css">
            <!-- scrollbar -->
                <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <!-- page specific stylesheets -->

            <!-- select2 -->
            <link href="assets/lib/select2/select2.css" rel="stylesheet" media="screen">
            <!-- datepicker -->
            <link href="assets/lib/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" media="screen">
            <!-- date range picker -->
            <link href="assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" media="screen">
            <!-- rangeSlider -->
            <link href="assets/lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet" media="screen">
            <link href="assets/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" media="screen">
            <!-- uplaoder -->
            <link href="assets/lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet" media="screen">
            <!-- icheck -->
            <link href="assets/lib/iCheck/skins/minimal/blue.css" rel="stylesheet" media="screen">
            <!-- selectize.js -->
            <link href="assets/lib/selectize-js/css/selectize.css" rel="stylesheet" media="screen">
		
        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
            <header id="main_header">
                <div class="container-fluid">
                    <div class="brand_section">
                        <a href="dashboard.php"><img src="assets/img/logo.png" alt="site_logo" width="63" height="26"></a>
                    </div>
                    <ul class="header_notifications clearfix">
                        <li class="dropdown">
                            <span class="label label-danger">8</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-envelope"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <img src="assets/img/avatars/avatar02_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar03_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar04_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar05_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All messages</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown" id="tasks_dropdown">
                            <span class="label label-danger">14</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-tasks"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-warning pull-right">Medium</div>
                                            <small class="text-muted">YUK-21 (24.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-danger pull-right">High</div>
                                            <small class="text-muted">YUK-8 (26.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-success pull-right">Medium</div>
                                            <small class="text-muted">DES-14 (25.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All tasks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <span class="label label-primary">2</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-bell"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">20 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit&hellip;</p>
                                        <small class="text-muted">44 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor&hellip;</p>
                                        <small class="text-muted">10:55</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All Alerts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="header_user_actions dropdown">
                        <div data-toggle="dropdown" class="dropdown-toggle user_dropdown">
                            <div class="user_avatar">
                                <img src="assets/img/avatars/avatar08_tn.png" alt="" title="Carrol Clark (carrol@example.com)" width="38" height="38">
                            </div>
                            <span class="caret"></span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="pages-user_profile.php">User Profile</a></li>
                            <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            <li><a href="login_page.php">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="search_section hidden-sm hidden-xs">
                        <input type="text" class="form-control input-sm">
                        <button class="btn btn-link btn-sm" type="button"><span class="icon_search"></span></button>
                    </div>
                </div>
            </header>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><span>Forms</span></li>
                    <li><span>Extended Elements</span></li>
                </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Enhanced selects, tagging</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="s2_basic">Basic</label>
                                    <select id="s2_basic">
                                        <option></option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="s2_multi">Multi Value</label>
                                    <select id="s2_multi" multiple>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Auto Tokenization</label>
                                    <input type="text" id="s2_tokenization" value="green,red">
                                    <span class="help-block">Try typing in the search field above and entering a space or a comma.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="s2_ext_value">External Value Change & Templating</label>
                                    <div class="sepH_a">
                                        <select id="s2_ext_value" multiple>
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
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
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
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
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
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
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
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
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
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
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
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <a href="#" id="s2_ext_us" class="btn btn-xs btn-default">Select USA</a>
                                    <a href="#" id="s2_ext_br_gb" class="btn btn-xs btn-default">Select Japan & Poland</a>
                                </div>
                                <div class="col-md-4">
                                    <label>Loading Array Data</label>
                                    <input type="hidden" id="s2_load_data">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Custom &lt;select&gt; UI control (selectize.js)</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="2col_ms_default">Optgroups</label>
                                    <select id="slz_optgroups" multiple placeholder="Select gear...">
                                        <option value="">Select gear...</option>
                                        <optgroup label="Climbing">
                                            <option value="pitons">Pitons</option>
                                            <option value="cams">Cams</option>
                                            <option value="nuts">Nuts</option>
                                            <option value="bolts">Bolts</option>
                                            <option value="stoppers">Stoppers</option>
                                            <option value="sling">Sling</option>
                                        </optgroup>
                                        <optgroup label="Skiing">
                                            <option value="skis">Skis</option>
                                            <option value="skins">Skins</option>
                                            <option value="poles">Poles</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="2col_ms_search">Email Contacts</label>
                                    <select id="slz_contacts"></select>
                                </div>
                                <div class="col-md-4">
                                    <label for="2col_ms_default">Plugin "Remove Button"</label>
                                    <input type="text" id="slz_remove_btn" value="awesome,neat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">2col Multiselect</span></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="2col_ms_default">Custom headers/footers (500 elements)</label>
                                    <div class="ms-wrapper">
                                        <select id="2col_ms_default" multiple class="form-control">
                                                <option value="elem_1">1. Incidunt ea iste quia.</option>
                                                <option value="elem_2">2. Qui dolorem excepturi ratione ut autem.</option>
                                                <option value="elem_3">3. Voluptatum enim et accusamus.</option>
                                                <option value="elem_4">4. Saepe delectus est exercitationem.</option>
                                                <option value="elem_5">5. Eveniet necessitatibus cum.</option>
                                                <option value="elem_6">6. Explicabo ducimus quis laboriosam fugit sit.</option>
                                                <option value="elem_7">7. Aut amet distinctio eligendi.</option>
                                                <option value="elem_8">8. Temporibus velit eum aperiam dolorem.</option>
                                                <option value="elem_9">9. Neque rerum repellendus rem dignissimos eos.</option>
                                                <option value="elem_10">10. Ea labore voluptatibus laboriosam rem.</option>
                                                <option value="elem_11">11. Vel fuga porro.</option>
                                                <option value="elem_12">12. Aut natus quisquam perferendis et.</option>
                                                <option value="elem_13">13. Molestias sit nisi molestiae eum sed.</option>
                                                <option value="elem_14">14. Voluptas voluptatem tempora aut quasi id.</option>
                                                <option value="elem_15">15. Eos labore sed accusamus et.</option>
                                                <option value="elem_16">16. Eos est error officiis porro.</option>
                                                <option value="elem_17">17. Consectetur fugit consequatur animi.</option>
                                                <option value="elem_18">18. Nesciunt nemo amet ea.</option>
                                                <option value="elem_19">19. Beatae quibusdam qui tenetur ad modi.</option>
                                                <option value="elem_20">20. Voluptatem libero et.</option>
                                                <option value="elem_21">21. Consequuntur voluptatum et maiores dolor nihil.</option>
                                                <option value="elem_22">22. Eius sed dignissimos quia possimus.</option>
                                                <option value="elem_23">23. Sequi molestiae ut mollitia excepturi.</option>
                                                <option value="elem_24">24. Quia ut molestiae minima ut cupiditate.</option>
                                                <option value="elem_25">25. Culpa reprehenderit aperiam.</option>
                                                <option value="elem_26">26. Recusandae assumenda nisi nobis dolor.</option>
                                                <option value="elem_27">27. Nostrum ut perferendis amet.</option>
                                                <option value="elem_28">28. Voluptas fuga voluptatem minus est.</option>
                                                <option value="elem_29">29. Ducimus est quia voluptatem quas.</option>
                                                <option value="elem_30">30. Ad sed temporibus deleniti.</option>
                                                <option value="elem_31">31. Ad quasi sint aperiam.</option>
                                                <option value="elem_32">32. Eum non maiores.</option>
                                                <option value="elem_33">33. Temporibus modi provident dolores.</option>
                                                <option value="elem_34">34. Illum quis et eveniet.</option>
                                                <option value="elem_35">35. Voluptas ut rerum repellendus harum.</option>
                                                <option value="elem_36">36. Nulla nesciunt qui nam placeat.</option>
                                                <option value="elem_37">37. Aut accusamus praesentium.</option>
                                                <option value="elem_38">38. Aut assumenda omnis eos.</option>
                                                <option value="elem_39">39. Nostrum magnam vel soluta nemo.</option>
                                                <option value="elem_40">40. Ad mollitia occaecati.</option>
                                                <option value="elem_41">41. Magni atque repellendus dolorem.</option>
                                                <option value="elem_42">42. Non qui facilis ipsum.</option>
                                                <option value="elem_43">43. Ea voluptate et sed repellendus sit.</option>
                                                <option value="elem_44">44. Totam vero non maxime voluptas.</option>
                                                <option value="elem_45">45. Numquam provident ea iste omnis.</option>
                                                <option value="elem_46">46. Eum qui qui.</option>
                                                <option value="elem_47">47. Dolores quo velit et fugiat amet.</option>
                                                <option value="elem_48">48. Placeat quis sapiente.</option>
                                                <option value="elem_49">49. Sed officia blanditiis quia illo.</option>
                                                <option value="elem_50">50. Qui reprehenderit ipsum.</option>
                                                <option value="elem_51">51. Voluptatibus blanditiis atque mollitia.</option>
                                                <option value="elem_52">52. Molestiae velit aspernatur eum qui velit.</option>
                                                <option value="elem_53">53. Amet ut aut consequuntur.</option>
                                                <option value="elem_54">54. Voluptas voluptas nulla aut est.</option>
                                                <option value="elem_55">55. Quas vero molestias voluptas fugit enim.</option>
                                                <option value="elem_56">56. Doloribus nesciunt assumenda iste nam sed.</option>
                                                <option value="elem_57">57. Rem numquam veritatis ea.</option>
                                                <option value="elem_58">58. Dolores temporibus neque.</option>
                                                <option value="elem_59">59. Aut nulla non iste dolorum voluptas.</option>
                                                <option value="elem_60">60. Rem aut dolor aliquid omnis et.</option>
                                                <option value="elem_61">61. Asperiores id totam.</option>
                                                <option value="elem_62">62. Ipsum reprehenderit quasi natus omnis repudiandae.</option>
                                                <option value="elem_63">63. Sit placeat qui expedita.</option>
                                                <option value="elem_64">64. Et facere deleniti quo.</option>
                                                <option value="elem_65">65. Animi dicta fugiat.</option>
                                                <option value="elem_66">66. Fugiat velit temporibus omnis quia voluptates.</option>
                                                <option value="elem_67">67. Incidunt laborum quidem.</option>
                                                <option value="elem_68">68. Quis et saepe qui numquam voluptatem.</option>
                                                <option value="elem_69">69. Aut consectetur a.</option>
                                                <option value="elem_70">70. Iure aspernatur ut pariatur.</option>
                                                <option value="elem_71">71. Sed aliquid quidem.</option>
                                                <option value="elem_72">72. At est expedita quaerat reprehenderit pariatur.</option>
                                                <option value="elem_73">73. Expedita sequi sapiente quia quia.</option>
                                                <option value="elem_74">74. Ratione culpa qui nesciunt ipsa aut.</option>
                                                <option value="elem_75">75. Et nisi culpa laudantium quaerat id.</option>
                                                <option value="elem_76">76. Cupiditate iusto est rerum voluptatem.</option>
                                                <option value="elem_77">77. Beatae quos maxime quos.</option>
                                                <option value="elem_78">78. Et eveniet dolor.</option>
                                                <option value="elem_79">79. Repellendus est quibusdam amet.</option>
                                                <option value="elem_80">80. Earum ipsam aut hic.</option>
                                                <option value="elem_81">81. Nemo architecto quam ipsam.</option>
                                                <option value="elem_82">82. Veniam beatae dolores laborum esse.</option>
                                                <option value="elem_83">83. Consequatur explicabo eos quibusdam similique sequi.</option>
                                                <option value="elem_84">84. Blanditiis dolorem ea labore ipsam.</option>
                                                <option value="elem_85">85. Reprehenderit et voluptas accusamus.</option>
                                                <option value="elem_86">86. Quaerat dolores assumenda qui.</option>
                                                <option value="elem_87">87. Adipisci minima quam et.</option>
                                                <option value="elem_88">88. Sit voluptas molestias nesciunt ut.</option>
                                                <option value="elem_89">89. Et aut vel necessitatibus rerum quos.</option>
                                                <option value="elem_90">90. Nesciunt quam dolores totam inventore.</option>
                                                <option value="elem_91">91. Qui consequatur blanditiis.</option>
                                                <option value="elem_92">92. Quisquam enim excepturi excepturi.</option>
                                                <option value="elem_93">93. Molestiae vel est.</option>
                                                <option value="elem_94">94. In alias non perspiciatis non repellendus.</option>
                                                <option value="elem_95">95. Ex sint libero repudiandae et.</option>
                                                <option value="elem_96">96. Magni consectetur placeat tempora officiis.</option>
                                                <option value="elem_97">97. Hic consequatur placeat adipisci.</option>
                                                <option value="elem_98">98. Sed dolores saepe dolores.</option>
                                                <option value="elem_99">99. Velit veritatis rerum id quod qui.</option>
                                                <option value="elem_100">100. Cum provident laborum.</option>
                                                <option value="elem_101">101. Dolore voluptatum rem assumenda ut.</option>
                                                <option value="elem_102">102. Nam quo architecto repudiandae magnam exercitationem.</option>
                                                <option value="elem_103">103. Nulla et alias.</option>
                                                <option value="elem_104">104. Rerum temporibus asperiores sint explicabo reiciendis.</option>
                                                <option value="elem_105">105. Quis ipsam nesciunt.</option>
                                                <option value="elem_106">106. Dolores iste inventore consequuntur provident velit.</option>
                                                <option value="elem_107">107. Voluptatem officia eveniet quia quae aut.</option>
                                                <option value="elem_108">108. Perspiciatis doloremque possimus.</option>
                                                <option value="elem_109">109. Veritatis quis est.</option>
                                                <option value="elem_110">110. Sunt provident quo distinctio voluptates.</option>
                                                <option value="elem_111">111. Cumque voluptatibus et reiciendis.</option>
                                                <option value="elem_112">112. Molestiae doloremque sapiente incidunt veniam.</option>
                                                <option value="elem_113">113. Omnis vero soluta et nihil.</option>
                                                <option value="elem_114">114. Magnam fugiat quos.</option>
                                                <option value="elem_115">115. Distinctio deleniti modi.</option>
                                                <option value="elem_116">116. Et laboriosam voluptatem maxime quia natus.</option>
                                                <option value="elem_117">117. Molestias officiis fugit corrupti.</option>
                                                <option value="elem_118">118. Quia magnam minus et.</option>
                                                <option value="elem_119">119. Mollitia aut saepe soluta incidunt.</option>
                                                <option value="elem_120">120. Alias ea natus inventore suscipit.</option>
                                                <option value="elem_121">121. Ut est totam eligendi.</option>
                                                <option value="elem_122">122. Quod fuga nesciunt.</option>
                                                <option value="elem_123">123. Minus officia voluptas aut.</option>
                                                <option value="elem_124">124. Tempore aperiam rerum.</option>
                                                <option value="elem_125">125. Facilis doloremque illo doloremque eveniet et.</option>
                                                <option value="elem_126">126. Voluptas laborum impedit velit et.</option>
                                                <option value="elem_127">127. Voluptatum occaecati aut officia sed quibusdam.</option>
                                                <option value="elem_128">128. Beatae quae iure aut voluptatem.</option>
                                                <option value="elem_129">129. Quod amet id aut et.</option>
                                                <option value="elem_130">130. Sit id molestias harum.</option>
                                                <option value="elem_131">131. Culpa nostrum laudantium non in.</option>
                                                <option value="elem_132">132. Nobis doloribus omnis consequatur inventore.</option>
                                                <option value="elem_133">133. Fugiat commodi exercitationem eaque.</option>
                                                <option value="elem_134">134. Voluptas explicabo sed quia.</option>
                                                <option value="elem_135">135. Non perferendis molestias odit.</option>
                                                <option value="elem_136">136. Cumque blanditiis odio minima voluptatem.</option>
                                                <option value="elem_137">137. Voluptatibus ratione qui.</option>
                                                <option value="elem_138">138. Necessitatibus nisi et.</option>
                                                <option value="elem_139">139. Quidem enim ipsa dolorum.</option>
                                                <option value="elem_140">140. Animi possimus sed fuga ullam deleniti.</option>
                                                <option value="elem_141">141. Velit quis voluptas voluptatem vero id.</option>
                                                <option value="elem_142">142. Aut sit cumque temporibus.</option>
                                                <option value="elem_143">143. Est doloremque nemo veritatis in distinctio.</option>
                                                <option value="elem_144">144. Qui repellendus voluptas ut.</option>
                                                <option value="elem_145">145. Voluptatem ea assumenda.</option>
                                                <option value="elem_146">146. Excepturi ut omnis.</option>
                                                <option value="elem_147">147. Est quasi consequatur.</option>
                                                <option value="elem_148">148. Sed vitae iusto architecto corporis consequatur.</option>
                                                <option value="elem_149">149. Ullam ut provident numquam dolor eum.</option>
                                                <option value="elem_150">150. Error tempore unde animi sed.</option>
                                                <option value="elem_151">151. Consequatur dolorem dolores.</option>
                                                <option value="elem_152">152. Excepturi iusto voluptatem dolorum deleniti a.</option>
                                                <option value="elem_153">153. Est molestiae non officia cupiditate.</option>
                                                <option value="elem_154">154. Totam qui voluptatem enim.</option>
                                                <option value="elem_155">155. Quo ducimus praesentium id unde.</option>
                                                <option value="elem_156">156. Ex ut id quo perspiciatis.</option>
                                                <option value="elem_157">157. Ab optio neque quia dolorem.</option>
                                                <option value="elem_158">158. Qui quia laborum est nisi dicta.</option>
                                                <option value="elem_159">159. Perferendis blanditiis magni maxime.</option>
                                                <option value="elem_160">160. Ipsum quia quia vitae sit.</option>
                                                <option value="elem_161">161. Reprehenderit omnis laudantium facere.</option>
                                                <option value="elem_162">162. Est voluptas cumque.</option>
                                                <option value="elem_163">163. Unde quidem et.</option>
                                                <option value="elem_164">164. Officiis ut asperiores maiores.</option>
                                                <option value="elem_165">165. Veritatis aspernatur est autem eaque.</option>
                                                <option value="elem_166">166. Modi sint nostrum.</option>
                                                <option value="elem_167">167. Voluptatem voluptatem consequuntur sit voluptatem unde.</option>
                                                <option value="elem_168">168. Dolor nam commodi eligendi.</option>
                                                <option value="elem_169">169. Quis dolore deleniti voluptatem.</option>
                                                <option value="elem_170">170. Atque ullam labore velit doloribus eum.</option>
                                                <option value="elem_171">171. Nemo ut saepe.</option>
                                                <option value="elem_172">172. Quae qui eveniet id.</option>
                                                <option value="elem_173">173. Ducimus ab accusantium quo suscipit dolores.</option>
                                                <option value="elem_174">174. Voluptatem omnis libero.</option>
                                                <option value="elem_175">175. Odio voluptatem vitae iusto iure.</option>
                                                <option value="elem_176">176. Quis magni omnis rerum commodi.</option>
                                                <option value="elem_177">177. Quia omnis aut qui quia.</option>
                                                <option value="elem_178">178. Saepe deserunt aspernatur facere.</option>
                                                <option value="elem_179">179. Error optio illum reiciendis itaque.</option>
                                                <option value="elem_180">180. Cumque et neque dolorem consequuntur.</option>
                                                <option value="elem_181">181. Minima vero amet qui deserunt illo.</option>
                                                <option value="elem_182">182. Magni esse voluptate ex voluptate.</option>
                                                <option value="elem_183">183. Et voluptatibus ipsam qui et.</option>
                                                <option value="elem_184">184. Praesentium non expedita id corporis.</option>
                                                <option value="elem_185">185. Ut consequatur voluptatum totam.</option>
                                                <option value="elem_186">186. Saepe veritatis a delectus placeat.</option>
                                                <option value="elem_187">187. Dolores eum dignissimos.</option>
                                                <option value="elem_188">188. Vero ex cumque eos et.</option>
                                                <option value="elem_189">189. Sit ut aspernatur accusantium exercitationem.</option>
                                                <option value="elem_190">190. Voluptas consectetur sed.</option>
                                                <option value="elem_191">191. Omnis cupiditate eligendi eius dolorem dicta.</option>
                                                <option value="elem_192">192. Rerum qui et harum.</option>
                                                <option value="elem_193">193. In dolorem provident voluptates.</option>
                                                <option value="elem_194">194. Quis fugiat reiciendis magni.</option>
                                                <option value="elem_195">195. Saepe ut dignissimos laudantium.</option>
                                                <option value="elem_196">196. Non voluptatem rem.</option>
                                                <option value="elem_197">197. Molestiae est itaque ut similique.</option>
                                                <option value="elem_198">198. Impedit omnis quia.</option>
                                                <option value="elem_199">199. Nostrum eum a aut praesentium repellendus.</option>
                                                <option value="elem_200">200. Et in labore delectus.</option>
                                                <option value="elem_201">201. Nulla velit et in et.</option>
                                                <option value="elem_202">202. Veniam soluta veniam repellendus in nesciunt.</option>
                                                <option value="elem_203">203. Labore cum ad.</option>
                                                <option value="elem_204">204. Consequatur aut autem reiciendis molestiae.</option>
                                                <option value="elem_205">205. Ipsa est impedit officiis ut in.</option>
                                                <option value="elem_206">206. Illum voluptate voluptatem.</option>
                                                <option value="elem_207">207. Sit velit est voluptatum.</option>
                                                <option value="elem_208">208. Reprehenderit necessitatibus dicta eligendi est.</option>
                                                <option value="elem_209">209. Et omnis laborum molestiae dolorem.</option>
                                                <option value="elem_210">210. Ullam veniam hic quod.</option>
                                                <option value="elem_211">211. Repellendus eveniet et eligendi.</option>
                                                <option value="elem_212">212. Sint nam fuga optio error.</option>
                                                <option value="elem_213">213. Est debitis quia modi.</option>
                                                <option value="elem_214">214. Cupiditate qui aut.</option>
                                                <option value="elem_215">215. Dicta qui molestias praesentium vel veritatis.</option>
                                                <option value="elem_216">216. Molestiae voluptatibus eveniet.</option>
                                                <option value="elem_217">217. Ut saepe sit ea libero in.</option>
                                                <option value="elem_218">218. Repellendus libero illum rerum excepturi.</option>
                                                <option value="elem_219">219. Quo ratione illo.</option>
                                                <option value="elem_220">220. Expedita eum eum consequatur molestiae.</option>
                                                <option value="elem_221">221. Error necessitatibus hic magni a.</option>
                                                <option value="elem_222">222. Sed voluptatibus praesentium ut fugiat deserunt.</option>
                                                <option value="elem_223">223. Odit quaerat perspiciatis quo in esse.</option>
                                                <option value="elem_224">224. Dolore dolores dolorum.</option>
                                                <option value="elem_225">225. Consequatur sed facilis ut eaque.</option>
                                                <option value="elem_226">226. Sapiente sint aperiam fugiat.</option>
                                                <option value="elem_227">227. Voluptatem voluptatem atque.</option>
                                                <option value="elem_228">228. Quam sed officia nihil sequi aut.</option>
                                                <option value="elem_229">229. Nesciunt fugit est.</option>
                                                <option value="elem_230">230. Fugit sint iusto similique sit.</option>
                                                <option value="elem_231">231. Unde aperiam nihil illo.</option>
                                                <option value="elem_232">232. Incidunt fugiat saepe itaque est.</option>
                                                <option value="elem_233">233. Hic vitae in sapiente similique.</option>
                                                <option value="elem_234">234. Dolorem nam necessitatibus.</option>
                                                <option value="elem_235">235. Laudantium omnis labore.</option>
                                                <option value="elem_236">236. Qui sed dolores distinctio.</option>
                                                <option value="elem_237">237. Veniam non iste ut sit quia.</option>
                                                <option value="elem_238">238. Optio odio voluptatem qui.</option>
                                                <option value="elem_239">239. Architecto qui vero ut voluptatem magnam.</option>
                                                <option value="elem_240">240. Rerum itaque eum.</option>
                                                <option value="elem_241">241. Quod perferendis eveniet omnis.</option>
                                                <option value="elem_242">242. Consequatur consequatur doloremque consequatur doloribus.</option>
                                                <option value="elem_243">243. Cupiditate doloremque et nemo autem.</option>
                                                <option value="elem_244">244. Dolor maxime ducimus sed voluptas.</option>
                                                <option value="elem_245">245. Eum et facere corrupti eligendi.</option>
                                                <option value="elem_246">246. Doloremque consectetur nihil reprehenderit voluptas.</option>
                                                <option value="elem_247">247. Consequuntur recusandae reprehenderit fugit.</option>
                                                <option value="elem_248">248. Illum laudantium ducimus quis accusamus.</option>
                                                <option value="elem_249">249. Ad hic enim beatae ut.</option>
                                                <option value="elem_250">250. Cupiditate voluptas esse quia.</option>
                                                <option value="elem_251">251. Tempora magnam dignissimos.</option>
                                                <option value="elem_252">252. Similique non ut.</option>
                                                <option value="elem_253">253. Aut fuga nulla.</option>
                                                <option value="elem_254">254. Modi occaecati enim dolorem asperiores quis.</option>
                                                <option value="elem_255">255. Et ut assumenda repellendus.</option>
                                                <option value="elem_256">256. Ullam at earum.</option>
                                                <option value="elem_257">257. Aliquid quod et.</option>
                                                <option value="elem_258">258. Corporis maiores dolor esse officiis.</option>
                                                <option value="elem_259">259. Nihil illo et ullam inventore.</option>
                                                <option value="elem_260">260. Aut doloremque eligendi debitis corporis quas.</option>
                                                <option value="elem_261">261. In aut quo qui.</option>
                                                <option value="elem_262">262. Eveniet dignissimos vel.</option>
                                                <option value="elem_263">263. Beatae ut asperiores placeat earum.</option>
                                                <option value="elem_264">264. Explicabo excepturi incidunt sed sed.</option>
                                                <option value="elem_265">265. Voluptatem ea dolorum.</option>
                                                <option value="elem_266">266. Recusandae quia ut cupiditate voluptas.</option>
                                                <option value="elem_267">267. Et laudantium perferendis sequi totam doloremque.</option>
                                                <option value="elem_268">268. Dolor perspiciatis at odio nam enim.</option>
                                                <option value="elem_269">269. Dolores minus qui.</option>
                                                <option value="elem_270">270. Vel nobis voluptatem est ipsa est.</option>
                                                <option value="elem_271">271. Maiores corrupti earum et consequatur corrupti.</option>
                                                <option value="elem_272">272. Et tempora in cupiditate.</option>
                                                <option value="elem_273">273. Alias maiores occaecati illum nihil.</option>
                                                <option value="elem_274">274. Delectus dolores omnis aut praesentium voluptatem.</option>
                                                <option value="elem_275">275. Ut voluptates nesciunt voluptatem id.</option>
                                                <option value="elem_276">276. Qui dicta non ullam enim praesentium.</option>
                                                <option value="elem_277">277. Dolorem amet sint neque.</option>
                                                <option value="elem_278">278. Provident recusandae maxime sint eaque.</option>
                                                <option value="elem_279">279. Optio cupiditate sed praesentium rem.</option>
                                                <option value="elem_280">280. Maxime molestiae sapiente.</option>
                                                <option value="elem_281">281. Similique beatae quo reiciendis.</option>
                                                <option value="elem_282">282. Ab et rerum velit.</option>
                                                <option value="elem_283">283. Ut possimus voluptatibus tempora perspiciatis sapiente.</option>
                                                <option value="elem_284">284. Magnam ut voluptatibus.</option>
                                                <option value="elem_285">285. Quasi asperiores neque eos.</option>
                                                <option value="elem_286">286. Et enim et.</option>
                                                <option value="elem_287">287. Totam sunt et fugit vero.</option>
                                                <option value="elem_288">288. Id aut aut eaque omnis.</option>
                                                <option value="elem_289">289. A excepturi qui.</option>
                                                <option value="elem_290">290. Consequuntur sed eos dolorem.</option>
                                                <option value="elem_291">291. Accusantium ut minus.</option>
                                                <option value="elem_292">292. Molestias quam voluptates ut alias.</option>
                                                <option value="elem_293">293. Earum harum harum sit vitae corporis.</option>
                                                <option value="elem_294">294. Alias doloremque tempore aut.</option>
                                                <option value="elem_295">295. Eius aut repellat modi.</option>
                                                <option value="elem_296">296. Necessitatibus quo voluptatibus quia.</option>
                                                <option value="elem_297">297. Laboriosam tenetur eos repellat rem vitae.</option>
                                                <option value="elem_298">298. Dicta veritatis quia.</option>
                                                <option value="elem_299">299. Qui omnis facere.</option>
                                                <option value="elem_300">300. Quod distinctio ut.</option>
                                                <option value="elem_301">301. Et voluptas officia eveniet.</option>
                                                <option value="elem_302">302. Sed sit eligendi voluptatem totam.</option>
                                                <option value="elem_303">303. Non sit magnam doloribus.</option>
                                                <option value="elem_304">304. Et facere autem explicabo sequi.</option>
                                                <option value="elem_305">305. Quas debitis molestiae pariatur dolorem necessitatibus.</option>
                                                <option value="elem_306">306. Sequi eum nostrum aut fugiat eveniet.</option>
                                                <option value="elem_307">307. Voluptas facilis nam odio.</option>
                                                <option value="elem_308">308. Cupiditate ut commodi architecto omnis.</option>
                                                <option value="elem_309">309. Sed doloribus est tempora eum tenetur.</option>
                                                <option value="elem_310">310. Aut incidunt eligendi odio placeat.</option>
                                                <option value="elem_311">311. Magnam corrupti quae amet laudantium praesentium.</option>
                                                <option value="elem_312">312. Dolor minima pariatur.</option>
                                                <option value="elem_313">313. Est eligendi voluptas assumenda.</option>
                                                <option value="elem_314">314. Soluta quia aut itaque nihil.</option>
                                                <option value="elem_315">315. Ut consectetur non et voluptatibus.</option>
                                                <option value="elem_316">316. Ex voluptatem neque.</option>
                                                <option value="elem_317">317. Porro hic ipsa doloribus.</option>
                                                <option value="elem_318">318. Dolorem et quos maiores.</option>
                                                <option value="elem_319">319. Sit rerum provident dolor nulla.</option>
                                                <option value="elem_320">320. In qui et.</option>
                                                <option value="elem_321">321. Perferendis quod et aliquid voluptas corporis.</option>
                                                <option value="elem_322">322. Aut molestiae animi fugit.</option>
                                                <option value="elem_323">323. Qui ab nesciunt laudantium.</option>
                                                <option value="elem_324">324. Aut qui repudiandae iure aut.</option>
                                                <option value="elem_325">325. Qui cum sequi ea voluptatem necessitatibus.</option>
                                                <option value="elem_326">326. Nemo quas magni.</option>
                                                <option value="elem_327">327. Rerum deleniti quibusdam.</option>
                                                <option value="elem_328">328. Qui modi nihil laudantium.</option>
                                                <option value="elem_329">329. Sunt eius laborum.</option>
                                                <option value="elem_330">330. Voluptate non et.</option>
                                                <option value="elem_331">331. Harum adipisci nihil aliquam natus.</option>
                                                <option value="elem_332">332. Laboriosam id est modi similique.</option>
                                                <option value="elem_333">333. Totam itaque atque.</option>
                                                <option value="elem_334">334. Voluptatem enim dicta sit non.</option>
                                                <option value="elem_335">335. Tenetur explicabo non dicta.</option>
                                                <option value="elem_336">336. Non voluptatem nihil dolores.</option>
                                                <option value="elem_337">337. Dolores optio ullam sunt id.</option>
                                                <option value="elem_338">338. Atque sed odio magnam.</option>
                                                <option value="elem_339">339. Tenetur facere corrupti eum atque.</option>
                                                <option value="elem_340">340. Quia dolorem eligendi mollitia quia soluta.</option>
                                                <option value="elem_341">341. Ut nostrum ea non consequatur fugiat.</option>
                                                <option value="elem_342">342. Quas ut voluptatem deleniti.</option>
                                                <option value="elem_343">343. Aut iure cum illum.</option>
                                                <option value="elem_344">344. Laborum suscipit reiciendis ad eos.</option>
                                                <option value="elem_345">345. Autem quia laboriosam sit rerum.</option>
                                                <option value="elem_346">346. Quo quasi accusamus.</option>
                                                <option value="elem_347">347. Ipsam tenetur consequatur nihil.</option>
                                                <option value="elem_348">348. Sint quo quaerat cumque sint eum.</option>
                                                <option value="elem_349">349. Unde ipsum alias eaque maxime excepturi.</option>
                                                <option value="elem_350">350. Vel iure perferendis ullam.</option>
                                                <option value="elem_351">351. Animi deleniti delectus sint quasi eius.</option>
                                                <option value="elem_352">352. Temporibus corporis aliquid dicta repellendus ut.</option>
                                                <option value="elem_353">353. Eos maxime est.</option>
                                                <option value="elem_354">354. Consequuntur occaecati itaque aut in.</option>
                                                <option value="elem_355">355. Optio dignissimos est quod voluptas aut.</option>
                                                <option value="elem_356">356. Laboriosam qui sit mollitia.</option>
                                                <option value="elem_357">357. Et non aut.</option>
                                                <option value="elem_358">358. Qui architecto autem explicabo ipsum minima.</option>
                                                <option value="elem_359">359. Placeat voluptatem id non.</option>
                                                <option value="elem_360">360. Quos nulla soluta magni commodi.</option>
                                                <option value="elem_361">361. Earum officia ea.</option>
                                                <option value="elem_362">362. Itaque quod id nemo distinctio.</option>
                                                <option value="elem_363">363. Repellendus inventore rerum corporis.</option>
                                                <option value="elem_364">364. Quidem iste molestiae accusantium et voluptates.</option>
                                                <option value="elem_365">365. Recusandae molestiae in numquam cumque.</option>
                                                <option value="elem_366">366. Optio cumque culpa porro.</option>
                                                <option value="elem_367">367. Alias ex ea assumenda quis.</option>
                                                <option value="elem_368">368. Illo quos consequatur deserunt quam.</option>
                                                <option value="elem_369">369. Consequatur dolor magnam voluptatem delectus.</option>
                                                <option value="elem_370">370. Non quasi optio.</option>
                                                <option value="elem_371">371. Vero a minima earum occaecati.</option>
                                                <option value="elem_372">372. Ipsum voluptas nisi ipsam illum.</option>
                                                <option value="elem_373">373. Facere cupiditate aliquid.</option>
                                                <option value="elem_374">374. Recusandae doloremque et et.</option>
                                                <option value="elem_375">375. Numquam repellendus corporis enim.</option>
                                                <option value="elem_376">376. Ea quis non ipsum.</option>
                                                <option value="elem_377">377. Hic architecto recusandae tenetur sit.</option>
                                                <option value="elem_378">378. Voluptas dolor est quidem.</option>
                                                <option value="elem_379">379. Nemo at quae ducimus.</option>
                                                <option value="elem_380">380. Animi repellendus dolorem explicabo doloribus fugit.</option>
                                                <option value="elem_381">381. Et quo et error adipisci.</option>
                                                <option value="elem_382">382. Culpa explicabo facilis nam nihil.</option>
                                                <option value="elem_383">383. Explicabo illo sunt.</option>
                                                <option value="elem_384">384. Autem modi voluptatem.</option>
                                                <option value="elem_385">385. Et consectetur quis quo magnam eaque.</option>
                                                <option value="elem_386">386. Alias et quia culpa deserunt.</option>
                                                <option value="elem_387">387. Rerum culpa rerum reprehenderit eos modi.</option>
                                                <option value="elem_388">388. Porro delectus qui cum explicabo.</option>
                                                <option value="elem_389">389. Omnis ipsam quasi fugit id libero.</option>
                                                <option value="elem_390">390. Neque nisi id dolor at sed.</option>
                                                <option value="elem_391">391. Quis repellendus voluptas sint doloremque minus.</option>
                                                <option value="elem_392">392. Quod nesciunt consectetur et.</option>
                                                <option value="elem_393">393. Quaerat velit ratione.</option>
                                                <option value="elem_394">394. Laboriosam aspernatur corrupti a error natus.</option>
                                                <option value="elem_395">395. Aspernatur mollitia voluptatem aspernatur.</option>
                                                <option value="elem_396">396. Quos ab voluptatem.</option>
                                                <option value="elem_397">397. Quo cumque autem ut.</option>
                                                <option value="elem_398">398. Dolorem consectetur ipsa.</option>
                                                <option value="elem_399">399. Excepturi recusandae et blanditiis cum.</option>
                                                <option value="elem_400">400. Possimus maiores et fuga.</option>
                                                <option value="elem_401">401. Maiores id vel iure sed.</option>
                                                <option value="elem_402">402. Qui rerum qui vero.</option>
                                                <option value="elem_403">403. Porro nesciunt qui.</option>
                                                <option value="elem_404">404. Ut harum iste explicabo libero ut.</option>
                                                <option value="elem_405">405. Veniam autem esse in.</option>
                                                <option value="elem_406">406. Id eaque in accusantium.</option>
                                                <option value="elem_407">407. Occaecati fugiat natus optio explicabo.</option>
                                                <option value="elem_408">408. Et nobis eos nisi quos sit.</option>
                                                <option value="elem_409">409. Et quis error.</option>
                                                <option value="elem_410">410. Mollitia eum vel.</option>
                                                <option value="elem_411">411. Ipsam est accusantium dolorem laborum.</option>
                                                <option value="elem_412">412. Modi suscipit nihil.</option>
                                                <option value="elem_413">413. Et dicta error suscipit.</option>
                                                <option value="elem_414">414. Qui quidem autem eius.</option>
                                                <option value="elem_415">415. Ipsa doloremque mollitia iusto qui quia.</option>
                                                <option value="elem_416">416. Sunt et assumenda quia quo.</option>
                                                <option value="elem_417">417. Voluptas error voluptatem excepturi corrupti.</option>
                                                <option value="elem_418">418. Iure voluptate aut.</option>
                                                <option value="elem_419">419. Sit quo aut ut quo.</option>
                                                <option value="elem_420">420. Saepe eum modi eum nulla.</option>
                                                <option value="elem_421">421. Qui quae veniam.</option>
                                                <option value="elem_422">422. Delectus dolore et.</option>
                                                <option value="elem_423">423. Vero odio aut sunt non facilis.</option>
                                                <option value="elem_424">424. Saepe et ratione assumenda.</option>
                                                <option value="elem_425">425. Dicta earum quis aut.</option>
                                                <option value="elem_426">426. Quidem sunt saepe inventore eum.</option>
                                                <option value="elem_427">427. Tenetur voluptatem incidunt repudiandae assumenda.</option>
                                                <option value="elem_428">428. Eveniet reiciendis suscipit non.</option>
                                                <option value="elem_429">429. Dolore ut autem excepturi.</option>
                                                <option value="elem_430">430. Fugit veniam laboriosam veniam exercitationem.</option>
                                                <option value="elem_431">431. Qui exercitationem qui et deserunt.</option>
                                                <option value="elem_432">432. Et illo ab dolores.</option>
                                                <option value="elem_433">433. Officiis quos nisi quisquam cumque minima.</option>
                                                <option value="elem_434">434. Et debitis quo quo.</option>
                                                <option value="elem_435">435. Eos qui ab provident.</option>
                                                <option value="elem_436">436. Ut dolor vel.</option>
                                                <option value="elem_437">437. Incidunt recusandae rerum nihil sunt vel.</option>
                                                <option value="elem_438">438. Quo quibusdam ea qui tenetur.</option>
                                                <option value="elem_439">439. Consectetur corrupti sint sapiente aut illum.</option>
                                                <option value="elem_440">440. Temporibus dolores non illo aliquid est.</option>
                                                <option value="elem_441">441. Ex aut at recusandae voluptate in.</option>
                                                <option value="elem_442">442. Aut sed quam perferendis quidem.</option>
                                                <option value="elem_443">443. Eius non eaque.</option>
                                                <option value="elem_444">444. Quia laudantium cupiditate dicta temporibus sit.</option>
                                                <option value="elem_445">445. Alias iure odio non.</option>
                                                <option value="elem_446">446. Reprehenderit quaerat pariatur quibusdam harum.</option>
                                                <option value="elem_447">447. Qui at reiciendis id.</option>
                                                <option value="elem_448">448. Blanditiis aut fuga et omnis.</option>
                                                <option value="elem_449">449. Est quia omnis perspiciatis explicabo.</option>
                                                <option value="elem_450">450. Molestias id occaecati.</option>
                                                <option value="elem_451">451. Assumenda cupiditate velit nihil totam.</option>
                                                <option value="elem_452">452. Culpa tempora ullam.</option>
                                                <option value="elem_453">453. Ut dolore quos magnam et iusto.</option>
                                                <option value="elem_454">454. Voluptas hic perspiciatis voluptatibus explicabo.</option>
                                                <option value="elem_455">455. Excepturi ut voluptatem est recusandae.</option>
                                                <option value="elem_456">456. Consequatur recusandae soluta aliquid voluptas.</option>
                                                <option value="elem_457">457. Voluptatem eveniet et.</option>
                                                <option value="elem_458">458. Voluptatem et qui.</option>
                                                <option value="elem_459">459. Molestiae consequatur atque tenetur.</option>
                                                <option value="elem_460">460. Odio enim consequatur quo laborum rerum.</option>
                                                <option value="elem_461">461. Aut sint numquam.</option>
                                                <option value="elem_462">462. Eos consequatur et dolore et.</option>
                                                <option value="elem_463">463. Voluptas repellendus asperiores eius.</option>
                                                <option value="elem_464">464. Est aspernatur ea provident.</option>
                                                <option value="elem_465">465. Voluptate asperiores necessitatibus dolor libero.</option>
                                                <option value="elem_466">466. Necessitatibus nemo nesciunt repellendus voluptatibus exercitationem.</option>
                                                <option value="elem_467">467. Rem magni reiciendis mollitia.</option>
                                                <option value="elem_468">468. Dolorum aut perferendis alias.</option>
                                                <option value="elem_469">469. Consequuntur ad cupiditate veritatis.</option>
                                                <option value="elem_470">470. Cum non qui aut.</option>
                                                <option value="elem_471">471. Et ullam soluta quae aliquid quibusdam.</option>
                                                <option value="elem_472">472. Est ipsum nemo impedit.</option>
                                                <option value="elem_473">473. Architecto id tempore.</option>
                                                <option value="elem_474">474. Laboriosam omnis soluta.</option>
                                                <option value="elem_475">475. Laborum velit quo quos.</option>
                                                <option value="elem_476">476. Qui quisquam eius est distinctio.</option>
                                                <option value="elem_477">477. Eos in eos.</option>
                                                <option value="elem_478">478. Odit ut inventore reprehenderit voluptatem.</option>
                                                <option value="elem_479">479. Vel nemo qui voluptate odio voluptate.</option>
                                                <option value="elem_480">480. Ut rem rerum dolor autem.</option>
                                                <option value="elem_481">481. Labore nam hic est.</option>
                                                <option value="elem_482">482. Officia et quam molestiae odit.</option>
                                                <option value="elem_483">483. Sequi error inventore hic non.</option>
                                                <option value="elem_484">484. Vero velit ea voluptatem blanditiis.</option>
                                                <option value="elem_485">485. Quaerat aut aspernatur ut fugit.</option>
                                                <option value="elem_486">486. Quo rerum soluta.</option>
                                                <option value="elem_487">487. Veniam exercitationem placeat.</option>
                                                <option value="elem_488">488. Sit consequatur tempore eaque.</option>
                                                <option value="elem_489">489. Ex ex delectus molestiae at consectetur.</option>
                                                <option value="elem_490">490. Suscipit ut asperiores.</option>
                                                <option value="elem_491">491. Laboriosam commodi in ut.</option>
                                                <option value="elem_492">492. Qui et nobis dolorem aliquam adipisci.</option>
                                                <option value="elem_493">493. Totam est cumque doloremque quidem dolorem.</option>
                                                <option value="elem_494">494. Quod architecto corrupti aperiam necessitatibus.</option>
                                                <option value="elem_495">495. Dignissimos eum quasi in dolor.</option>
                                                <option value="elem_496">496. Rem et id.</option>
                                                <option value="elem_497">497. Eius et earum.</option>
                                                <option value="elem_498">498. Iure ratione fugit possimus.</option>
                                                <option value="elem_499">499. Voluptatem culpa nihil qui quidem.</option>
                                                <option value="elem_500">500. Omnis voluptatem earum aspernatur ea quia.</option>
                                        </select>
                                        <button type="button" class="btn btn-default btn-xs ms_select_all bs_ttip" title="Select All"><span class="arrow_carrot-2right"></span></button>
                                        <button type="button" class="btn btn-default btn-xs ms_deselect_all bs_ttip" title="Deselect All"><span class="arrow_carrot-2left"></span></button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="2col_ms_search">Searchable (custom template)</label>
                                    <div class="ms-wrapper">
                                        <select id="2col_ms_search" multiple class="form-control">
                                            <option value="AF">[[AF]] Afghanistan (‫افغانستان‬‎)</option>
                                            <option value="AX">[[AX]] Åland Islands (Åland)</option>
                                            <option value="AL">[[AL]] Albania (Shqipëri)</option>
                                            <option value="DZ">[[DZ]] Algeria (‫الجزائر‬‎)</option>
                                            <option value="AS">[[AS]] American Samoa</option>
                                            <option value="AD">[[AD]] Andorra</option>
                                            <option value="AO">[[AO]] Angola</option>
                                            <option value="AI">[[AI]] Anguilla</option>
                                            <option value="AQ">[[AQ]] Antarctica</option>
                                            <option value="AG">[[AG]] Antigua and Barbuda</option>
                                            <option value="AR">[[AR]] Argentina</option>
                                            <option value="AM">[[AM]] Armenia (Հայաստան)</option>
                                            <option value="AW">[[AW]] Aruba</option>
                                            <option value="AC">[[AC]] Ascension Island</option>
                                            <option value="AU">[[AU]] Australia</option>
                                            <option value="AT">[[AT]] Austria (Österreich)</option>
                                            <option value="AZ">[[AZ]] Azerbaijan (Azərbaycan)</option>
                                            <option value="BS">[[BS]] Bahamas</option>
                                            <option value="BH">[[BH]] Bahrain (‫البحرين‬‎)</option>
                                            <option value="BD">[[BD]] Bangladesh (বাংলাদেশ)</option>
                                            <option value="BB">[[BB]] Barbados</option>
                                            <option value="BY">[[BY]] Belarus (Беларусь)</option>
                                            <option value="BE">[[BE]] Belgium (België)</option>
                                            <option value="BZ">[[BZ]] Belize</option>
                                            <option value="BJ">[[BJ]] Benin (Bénin)</option>
                                            <option value="BM">[[BM]] Bermuda</option>
                                            <option value="BT">[[BT]] Bhutan (འབྲུག)</option>
                                            <option value="BO">[[BO]] Bolivia</option>
                                            <option value="BA">[[BA]] Bosnia and Herzegovina (Босна и Херцеговина)</option>
                                            <option value="BW">[[BW]] Botswana</option>
                                            <option value="BV">[[BV]] Bouvet Island</option>
                                            <option value="BR">[[BR]] Brazil (Brasil)</option>
                                            <option value="IO">[[IO]] British Indian Ocean Territory</option>
                                            <option value="VG">[[VG]] British Virgin Islands</option>
                                            <option value="BN">[[BN]] Brunei</option>
                                            <option value="BG">[[BG]] Bulgaria (България)</option>
                                            <option value="BF">[[BF]] Burkina Faso</option>
                                            <option value="BI">[[BI]] Burundi (Uburundi)</option>
                                            <option value="KH">[[KH]] Cambodia (កម្ពុជា)</option>
                                            <option value="CM">[[CM]] Cameroon (Cameroun)</option>
                                            <option value="CA">[[CA]] Canada</option>
                                            <option value="IC">[[IC]] Canary Islands (islas Canarias)</option>
                                            <option value="CV">[[CV]] Cape Verde (Kabu Verdi)</option>
                                            <option value="BQ">[[BQ]] Caribbean Netherlands</option>
                                            <option value="KY">[[KY]] Cayman Islands</option>
                                            <option value="CF">[[CF]] Central African Republic (République centrafricaine)</option>
                                            <option value="EA">[[EA]] Ceuta and Melilla (Ceuta y Melilla)</option>
                                            <option value="TD">[[TD]] Chad (Tchad)</option>
                                            <option value="CL">[[CL]] Chile</option>
                                            <option value="CN">[[CN]] China (中国)</option>
                                            <option value="CX">[[CX]] Christmas Island</option>
                                            <option value="CP">[[CP]] Clipperton Island</option>
                                            <option value="CC">[[CC]] Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))</option>
                                            <option value="CO">[[CO]] Colombia</option>
                                            <option value="KM">[[KM]] Comoros (‫جزر القمر‬‎)</option>
                                            <option value="CD">[[CD]] Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
                                            <option value="CG">[[CG]] Congo (Republic) (Congo-Brazzaville)</option>
                                            <option value="CK">[[CK]] Cook Islands</option>
                                            <option value="CR">[[CR]] Costa Rica</option>
                                            <option value="CI">[[CI]] Côte d’Ivoire</option>
                                            <option value="HR">[[HR]] Croatia (Hrvatska)</option>
                                            <option value="CU">[[CU]] Cuba</option>
                                            <option value="CW">[[CW]] Curaçao</option>
                                            <option value="CY">[[CY]] Cyprus (Κύπρος)</option>
                                            <option value="CZ">[[CZ]] Czech Republic (Česká republika)</option>
                                            <option value="DK">[[DK]] Denmark (Danmark)</option>
                                            <option value="DG">[[DG]] Diego Garcia</option>
                                            <option value="DJ">[[DJ]] Djibouti</option>
                                            <option value="DM">[[DM]] Dominica</option>
                                            <option value="DO">[[DO]] Dominican Republic (República Dominicana)</option>
                                            <option value="EC">[[EC]] Ecuador</option>
                                            <option value="EG">[[EG]] Egypt (‫مصر‬‎)</option>
                                            <option value="SV">[[SV]] El Salvador</option>
                                            <option value="GQ">[[GQ]] Equatorial Guinea (Guinea Ecuatorial)</option>
                                            <option value="ER">[[ER]] Eritrea</option>
                                            <option value="EE">[[EE]] Estonia (Eesti)</option>
                                            <option value="ET">[[ET]] Ethiopia</option>
                                            <option value="FK">[[FK]] Falkland Islands (Islas Malvinas)</option>
                                            <option value="FO">[[FO]] Faroe Islands (Føroyar)</option>
                                            <option value="FJ">[[FJ]] Fiji</option>
                                            <option value="FI">[[FI]] Finland (Suomi)</option>
                                            <option value="FR">[[FR]] France</option>
                                            <option value="GF">[[GF]] French Guiana (Guyane française)</option>
                                            <option value="PF">[[PF]] French Polynesia (Polynésie française)</option>
                                            <option value="TF">[[TF]] French Southern Territories (Terres australes françaises)</option>
                                            <option value="GA">[[GA]] Gabon</option>
                                            <option value="GM">[[GM]] Gambia</option>
                                            <option value="GE">[[GE]] Georgia (საქართველო)</option>
                                            <option value="DE">[[DE]] Germany (Deutschland)</option>
                                            <option value="GH">[[GH]] Ghana (Gaana)</option>
                                            <option value="GI">[[GI]] Gibraltar</option>
                                            <option value="GR">[[GR]] Greece (Ελλάδα)</option>
                                            <option value="GL">[[GL]] Greenland (Kalaallit Nunaat)</option>
                                            <option value="GD">[[GD]] Grenada</option>
                                            <option value="GP">[[GP]] Guadeloupe</option>
                                            <option value="GU">[[GU]] Guam</option>
                                            <option value="GT">[[GT]] Guatemala</option>
                                            <option value="GG">[[GG]] Guernsey</option>
                                            <option value="GN">[[GN]] Guinea (Guinée)</option>
                                            <option value="GW">[[GW]] Guinea-Bissau (Guiné Bissau)</option>
                                            <option value="GY">[[GY]] Guyana</option>
                                            <option value="HT">[[HT]] Haiti</option>
                                            <option value="HM">[[HM]] Heard & McDonald Islands</option>
                                            <option value="HN">[[HN]] Honduras</option>
                                            <option value="HK">[[HK]] Hong Kong (香港)</option>
                                            <option value="HU">[[HU]] Hungary (Magyarország)</option>
                                            <option value="IS">[[IS]] Iceland (Ísland)</option>
                                            <option value="IN">[[IN]] India (भारत)</option>
                                            <option value="ID">[[ID]] Indonesia</option>
                                            <option value="IR">[[IR]] Iran (‫ایران‬‎)</option>
                                            <option value="IQ">[[IQ]] Iraq (‫العراق‬‎)</option>
                                            <option value="IE">[[IE]] Ireland</option>
                                            <option value="IM">[[IM]] Isle of Man</option>
                                            <option value="IL">[[IL]] Israel (‫ישראל‬‎)</option>
                                            <option value="IT">[[IT]] Italy (Italia)</option>
                                            <option value="JM">[[JM]] Jamaica</option>
                                            <option value="JP">[[JP]] Japan (日本)</option>
                                            <option value="JE">[[JE]] Jersey</option>
                                            <option value="JO">[[JO]] Jordan (‫الأردن‬‎)</option>
                                            <option value="KZ">[[KZ]] Kazakhstan (Казахстан)</option>
                                            <option value="KE">[[KE]] Kenya</option>
                                            <option value="KI">[[KI]] Kiribati</option>
                                            <option value="XK">[[XK]] Kosovo (Kosovë)</option>
                                            <option value="KW">[[KW]] Kuwait (‫الكويت‬‎)</option>
                                            <option value="KG">[[KG]] Kyrgyzstan (Кыргызстан)</option>
                                            <option value="LA">[[LA]] Laos (ລາວ)</option>
                                            <option value="LV">[[LV]] Latvia (Latvija)</option>
                                            <option value="LB">[[LB]] Lebanon (‫لبنان‬‎)</option>
                                            <option value="LS">[[LS]] Lesotho</option>
                                            <option value="LR">[[LR]] Liberia</option>
                                            <option value="LY">[[LY]] Libya (‫ليبيا‬‎)</option>
                                            <option value="LI">[[LI]] Liechtenstein</option>
                                            <option value="LT">[[LT]] Lithuania (Lietuva)</option>
                                            <option value="LU">[[LU]] Luxembourg</option>
                                            <option value="MO">[[MO]] Macau (澳門)</option>
                                            <option value="MK">[[MK]] Macedonia (FYROM) (Македонија)</option>
                                            <option value="MG">[[MG]] Madagascar (Madagasikara)</option>
                                            <option value="MW">[[MW]] Malawi</option>
                                            <option value="MY">[[MY]] Malaysia</option>
                                            <option value="MV">[[MV]] Maldives</option>
                                            <option value="ML">[[ML]] Mali</option>
                                            <option value="MT">[[MT]] Malta</option>
                                            <option value="MH">[[MH]] Marshall Islands</option>
                                            <option value="MQ">[[MQ]] Martinique</option>
                                            <option value="MR">[[MR]] Mauritania (‫موريتانيا‬‎)</option>
                                            <option value="MU">[[MU]] Mauritius (Moris)</option>
                                            <option value="YT">[[YT]] Mayotte</option>
                                            <option value="MX">[[MX]] Mexico (México)</option>
                                            <option value="FM">[[FM]] Micronesia</option>
                                            <option value="MD">[[MD]] Moldova (Republica Moldova)</option>
                                            <option value="MC">[[MC]] Monaco</option>
                                            <option value="MN">[[MN]] Mongolia (Монгол)</option>
                                            <option value="ME">[[ME]] Montenegro (Crna Gora)</option>
                                            <option value="MS">[[MS]] Montserrat</option>
                                            <option value="MA">[[MA]] Morocco (‫المغرب‬‎)</option>
                                            <option value="MZ">[[MZ]] Mozambique (Moçambique)</option>
                                            <option value="MM">[[MM]] Myanmar (Burma)</option>
                                            <option value="NA">[[NA]] Namibia (Namibië)</option>
                                            <option value="NR">[[NR]] Nauru</option>
                                            <option value="NP">[[NP]] Nepal (नेपाल)</option>
                                            <option value="NL">[[NL]] Netherlands (Nederland)</option>
                                            <option value="NC">[[NC]] New Caledonia (Nouvelle-Calédonie)</option>
                                            <option value="NZ">[[NZ]] New Zealand</option>
                                            <option value="NI">[[NI]] Nicaragua</option>
                                            <option value="NE">[[NE]] Niger (Nijar)</option>
                                            <option value="NG">[[NG]] Nigeria</option>
                                            <option value="NU">[[NU]] Niue</option>
                                            <option value="NF">[[NF]] Norfolk Island</option>
                                            <option value="MP">[[MP]] Northern Mariana Islands</option>
                                            <option value="KP">[[KP]] North Korea (조선 민주주의 인민 공화국)</option>
                                            <option value="NO">[[NO]] Norway (Norge)</option>
                                            <option value="OM">[[OM]] Oman (‫عُمان‬‎)</option>
                                            <option value="PK">[[PK]] Pakistan (‫پاکستان‬‎)</option>
                                            <option value="PW">[[PW]] Palau</option>
                                            <option value="PS">[[PS]] Palestine (‫فلسطين‬‎)</option>
                                            <option value="PA">[[PA]] Panama (Panamá)</option>
                                            <option value="PG">[[PG]] Papua New Guinea</option>
                                            <option value="PY">[[PY]] Paraguay</option>
                                            <option value="PE">[[PE]] Peru (Perú)</option>
                                            <option value="PH">[[PH]] Philippines</option>
                                            <option value="PN">[[PN]] Pitcairn Islands</option>
                                            <option value="PL">[[PL]] Poland (Polska)</option>
                                            <option value="PT">[[PT]] Portugal</option>
                                            <option value="PR">[[PR]] Puerto Rico</option>
                                            <option value="QA">[[QA]] Qatar (‫قطر‬‎)</option>
                                            <option value="RE">[[RE]] Réunion (La Réunion)</option>
                                            <option value="RO">[[RO]] Romania (România)</option>
                                            <option value="RU">[[RU]] Russia (Россия)</option>
                                            <option value="RW">[[RW]] Rwanda</option>
                                            <option value="BL">[[BL]] Saint Barthélemy (Saint-Barthélemy)</option>
                                            <option value="SH">[[SH]] Saint Helena</option>
                                            <option value="KN">[[KN]] Saint Kitts and Nevis</option>
                                            <option value="LC">[[LC]] Saint Lucia</option>
                                            <option value="MF">[[MF]] Saint Martin (Saint-Martin (partie française))</option>
                                            <option value="PM">[[PM]] Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
                                            <option value="WS">[[WS]] Samoa</option>
                                            <option value="SM">[[SM]] San Marino</option>
                                            <option value="ST">[[ST]] São Tomé and Príncipe (São Tomé e Príncipe)</option>
                                            <option value="SA">[[SA]] Saudi Arabia (‫المملكة العربية السعودية‬‎)</option>
                                            <option value="SN">[[SN]] Senegal (Sénégal)</option>
                                            <option value="RS">[[RS]] Serbia (Србија)</option>
                                            <option value="SC">[[SC]] Seychelles</option>
                                            <option value="SL">[[SL]] Sierra Leone</option>
                                            <option value="SG">[[SG]] Singapore</option>
                                            <option value="SX">[[SX]] Sint Maarten</option>
                                            <option value="SK">[[SK]] Slovakia (Slovensko)</option>
                                            <option value="SI">[[SI]] Slovenia (Slovenija)</option>
                                            <option value="SB">[[SB]] Solomon Islands</option>
                                            <option value="SO">[[SO]] Somalia (Soomaaliya)</option>
                                            <option value="ZA">[[ZA]] South Africa</option>
                                            <option value="GS">[[GS]] South Georgia & South Sandwich Islands</option>
                                            <option value="KR">[[KR]] South Korea (대한민국)</option>
                                            <option value="SS">[[SS]] South Sudan (‫جنوب السودان‬‎)</option>
                                            <option value="ES">[[ES]] Spain (España)</option>
                                            <option value="LK">[[LK]] Sri Lanka (ශ්‍රී ලංකාව)</option>
                                            <option value="VC">[[VC]] St. Vincent & Grenadines</option>
                                            <option value="SD">[[SD]] Sudan (‫السودان‬‎)</option>
                                            <option value="SR">[[SR]] Suriname</option>
                                            <option value="SJ">[[SJ]] Svalbard and Jan Mayen (Svalbard og Jan Mayen)</option>
                                            <option value="SZ">[[SZ]] Swaziland</option>
                                            <option value="SE">[[SE]] Sweden (Sverige)</option>
                                            <option value="CH">[[CH]] Switzerland (Schweiz)</option>
                                            <option value="SY">[[SY]] Syria (‫سوريا‬‎)</option>
                                            <option value="TW">[[TW]] Taiwan (台灣)</option>
                                            <option value="TJ">[[TJ]] Tajikistan</option>
                                            <option value="TZ">[[TZ]] Tanzania</option>
                                            <option value="TH">[[TH]] Thailand (ไทย)</option>
                                            <option value="TL">[[TL]] Timor-Leste</option>
                                            <option value="TG">[[TG]] Togo</option>
                                            <option value="TK">[[TK]] Tokelau</option>
                                            <option value="TO">[[TO]] Tonga</option>
                                            <option value="TT">[[TT]] Trinidad and Tobago</option>
                                            <option value="TA">[[TA]] Tristan da Cunha</option>
                                            <option value="TN">[[TN]] Tunisia (‫تونس‬‎)</option>
                                            <option value="TR">[[TR]] Turkey (Türkiye)</option>
                                            <option value="TM">[[TM]] Turkmenistan</option>
                                            <option value="TC">[[TC]] Turks and Caicos Islands</option>
                                            <option value="TV">[[TV]] Tuvalu</option>
                                            <option value="UM">[[UM]] U.S. Outlying Islands</option>
                                            <option value="VI">[[VI]] U.S. Virgin Islands</option>
                                            <option value="UG">[[UG]] Uganda</option>
                                            <option value="UA">[[UA]] Ukraine (Україна)</option>
                                            <option value="AE">[[AE]] United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</option>
                                            <option value="GB">[[GB]] United Kingdom</option>
                                            <option value="US">[[US]] United States</option>
                                            <option value="UY">[[UY]] Uruguay</option>
                                            <option value="UZ">[[UZ]] Uzbekistan (Oʻzbekiston)</option>
                                            <option value="VU">[[VU]] Vanuatu</option>
                                            <option value="VA">[[VA]] Vatican City (Città del Vaticano)</option>
                                            <option value="VE">[[VE]] Venezuela</option>
                                            <option value="VN">[[VN]] Vietnam (Việt Nam)</option>
                                            <option value="WF">[[WF]] Wallis and Futuna</option>
                                            <option value="EH">[[EH]] Western Sahara (‫الصحراء الغربية‬‎)</option>
                                            <option value="YE">[[YE]] Yemen (‫اليمن‬‎)</option>
                                            <option value="ZM">[[ZM]] Zambia</option>
                                            <option value="ZW">[[ZW]] Zimbabwe</option>
                                        </select>
                                        <button type="button" class="btn btn-default btn-xs ms_select_all bs_ttip" title="Select All"><span class="arrow_carrot-2right"></span></button>
                                        <button type="button" class="btn btn-default btn-xs ms_deselect_all bs_ttip" title="Deselect All"><span class="arrow_carrot-2left"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Chained select</span></div>
                            <form>
                                <div class="row">
                                    <div class="col-md-2">
                                        <select id="chs_mark" name="chs_mark" class="form-control">
                                            <option value="">--</option>
                                            <option value="chs_bmw">BMW</option>
                                            <option value="chs_audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select id="chs_series" name="chs_series" class="form-control">
                                            <option value="">--</option>
                                            <option value="chs_series-1" class="chs_bmw">1 series</option>
                                            <option value="chs_series-3" class="chs_bmw">3 series</option>
                                            <option value="chs_series-5" class="chs_bmw">5 series</option>
                                            <option value="chs_series-6" class="chs_bmw">6 series</option>
                                            <option value="chs_series-7" class="chs_bmw">7 series</option>
                                            <option value="chs_a1" class="chs_audi">A1</option>
                                            <option value="chs_a3" class="chs_audi">A3</option>
                                            <option value="chs_s3" class="chs_audi">S3</option>
                                            <option value="chs_a4" class="chs_audi">A4</option>
                                            <option value="chs_s4" class="chs_audi">S4</option>
                                            <option value="chs_a5" class="chs_audi">A5</option>
                                            <option value="chs_s5" class="chs_audi">S5</option>
                                            <option value="chs_a6" class="chs_audi">A6</option>
                                            <option value="chs_s6" class="chs_audi">S6</option>
                                            <option value="chs_rs6" class="chs_audi">RS6</option>
                                            <option value="chs_a8" class="chs_audi">A8</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="chs_model" name="chs_model" class="form-control">
                                            <option value="">--</option>
                                            <option value="chs_3-doors" class="chs_series-1">3 doors</option>
                                            <option value="chs_5-doors" class="chs_series-1">5 doors</option>
                                            <option value="chs_coupe" class="chs_series-1 chs_series-3 chs_series-6">Coupe</option>
                                            <option value="chs_cabrio" class="chs_series-1 chs_series-3 chs_series-6">Cabrio</option>
                                            <option value="chs_sedan" class="chs_series-3 chs_series-5 chs_series-7">Sedan</option>
                                            <option value="chs_touring" class="chs_series-3 chs_series-5">Touring</option>
                                            <option value="chs_gran-tourismo" class="chs_series-5">Gran Tourismo</option>
                                            <option value="chs_sedan" class="chs_a1 chs_a3 chs_s3 chs_a4 chs_s4 chs_a6 chs_s6 chs_rs6">Sedan</option>
                                            <option value="chs_sportback" class="chs_a3 chs_s3 chs_a5 chs_s5">Sportback</option>
                                            <option value="chs_cabriolet" class="chs_a3 chs_a5 chs_s5">Cabriolet</option>
                                            <option value="chs_avant" class="chs_a4 chs_s4 chs_a6 chs_s6 chs_rs6">Avant</option>
                                            <option value="chs_allroad" class="chs_a4 chs_a6">Allroad</option>
                                            <option value="chs_coupe" class="chs_a5 chs_s5">Coupe</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="chs_engine" name="chs_engine" class="form-control">
                                            <option value="">--</option>
                                            <option value="chs_25-petrol" class="chs_series-3 chs_a1 chs_a2 chs_a3 chs_a4 chs_a5 chs_a6 chs_s6 chs_rs6 chs_a8">2.5 petrol</option>
                                            <option value="chs_30-petrol" class="chs_series-3 chs_series-5 series-6 a3 a4 a5">3.0 petrol</option>
                                            <option value="chs_30-diesel" class="chs_series-3\chs_sedan chs_series-5\chs_sedan chs_a5">3.0 diesel</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button id="chs_button" type="button" class="btn btn-primary">Button</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Clock Picker</span></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="dp_component">Default</label>
                                    <div class="input-group clockpicker" data-donetext="Done">
                                        <input type="text" class="form-control" value="09:32">
                                        <span class="input-group-addon">
                                            <span class="icon_clock_alt"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Autoclose</label>
                                    <div class="input-group clockpicker" data-autoclose="true">
                                        <input type="text" class="form-control" value="13:14">
                                        <span class="input-group-addon">
                                            <span class="icon_clock_alt"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Datepicker</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sepH_b">
                                        <label for="dp_basic">Basic</label>
                                        <input type="text" type="text" class="form-control" id="dp_basic">
                                    </div>
                                    <label for="dp_range">Daterange</label>
                                    <div class="input-daterange input-group" id="dp_range">
                                        <input type="text" class="form-control" name="start" />
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="form-control" name="end" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="dp_component">Component</label>
                                    <div class="input-group date" id="dp_component">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><i class="icon_calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Inline</label>
                                    <div id="dp_inline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Date range picker</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon_calendar"></i></span>
                                        <input type="text" name="drp_time" id="drp_time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="drp_predefined" class="btn btn-default">
                                        <i class="icon_calendar"></i>
                                        <span>April 27, 2015 - May 27, 2015</span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Range Slider</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="rS_exm_1" name="rS_exm_1" value="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="rS_exm_2" name="rS_exm_2" value="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="rS_exm_3" name="rS_exm_3" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="rS_exm_4" name="rS_exm_4" value="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="rS_exm_5" name="rS_exm_5" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Switch Buttons</span></div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch" checked />
                                    <span class="help-block">Default</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch mini-switch" checked>
                                    <span class="help-block">Mini switch</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch-success" checked />
                                    <span class="help-block">Sucess</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch-warning" checked>
                                    <span class="help-block">Warning</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch-danger" checked>
                                    <span class="help-block">Danger</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" class="js-switch-info" checked>
                                    <span class="help-block">Info</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Password Strength Metter + Show/Hide</span></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <form role="form">
                                        <div id="pwd-container">
                                            <input type="password" class="form-control sepH_a" id="pwdSt_password" value="password">
                                            <div class="pwstrength_viewport_progress sepH_b"></div>
                                            <span class="help-block pwstrength_viewport_verdict"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Customized checkboxes and radio buttons</span></div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p><input type="checkbox" class="icheck" id="ichbox_1"> <label for="ichbox_1" class="icheck_label">Checkbox 1</label></p>
                                    <p><input type="checkbox" class="icheck" id="ichbox_2"> <label for="ichbox_2" class="icheck_label">Checkbox 2</label></p>
                                    <p><input type="checkbox" class="icheck" id="ichbox_3" checked> <label for="ichbox_3" class="icheck_label">Checkbox 3</label></p>
                                    <p><input type="checkbox" class="icheck" id="ichbox_4" checked disabled> <label for="ichbox_4" class="icheck_label">Checked&amp;Disabled</label></p>
                                    <p><input type="checkbox" class="icheck" id="ichbox_5" disabled> <label for="ichbox_5" class="icheck_label">Disabled</label></p>
                                </div>
                                <div class="col-sm-4">
                                    <p><input type="radio" class="icheck" name="iCheckbox" id="iradio_1"> <label for="iradio_1" class="icheck_label">Radio button 1</label></p>
                                    <p><input type="radio" class="icheck" name="iCheckbox" id="iradio_2" checked> <label for="iradio_2" class="icheck_label">Radio button 2</label></p>
                                    <p><input type="radio" class="icheck" name="iCheckbox" id="iradio_3"> <label for="iradio_3" class="icheck_label">Radio button 3</label></p>
                                    <p><input type="radio" class="icheck" id="iradio_4" checked disabled> <label for="iradio_4" class="icheck_label">Checked&amp;Disabled</label></p>
                                    <p><input type="radio" class="icheck" id="iradio_5" disabled> <label for="iradio_5" class="icheck_label">Disabled</label></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Masked inputs</span></div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_date">
                                    <span class="help-block">showMaskOnHover: false</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_phone">
                                    <span class="help-block">(999) 999-9999</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_plate">
                                    <span class="help-block">[9-]AAA-999</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_numeric">
                                    <span class="help-block">&euro; 999.999,99</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_mac">
                                    <span class="help-block">MAC adress</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="mask_callback">
                                    <span class="help-block">Oncomplete callback</span>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" data-inputmask="'mask': '99-9999999'">
                                    <span class="help-block">data-inputmask="'mask': '99-9999999'"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Multiupload</span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="uploader">
                                        <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Maxlength for Textareas</span></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ml_default">Default</label>
                                    <textarea name="ml_default" id="ml_default" cols="30" rows="4" class="form-control"></textarea>
                                    <span class="help-block" id="ml_default_indicator"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="ml_default">Custom indicator</label>
                                    <textarea name="ml_custom" id="ml_custom" cols="30" rows="4" class="form-control"></textarea>
                                    <span class="help-block" id="ml_custom_indicator"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Textarea autosize</span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="autosize_a" cols="30" rows="4" class="form-control textarea_auto"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">WYSIWG Editor</span></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="wysiwg_editor" id="wysiwg_editor" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main menu -->
            <nav id="main_menu">
                <div class="menu_wrapper">
                    <ul>
                        <li class="first_level">
                            <a href="dashboard.php">
                                <span class="icon_house_alt first_level_icon"></span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_document_alt first_level_icon"></span>
                                <span class="menu-title">Forms</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Forms</li>
                                <li><a href="forms-regular_elements.php">Regular Elements</a></li>
                                <li><a class="act_nav" href="forms-extended_elements.php">Extended Elements</a></li>
                                <li><a href="forms-gridforms.php">Gridforms</a></li>
                                <li><a href="forms-validation.php">Validation</a></li>
                                <li><a href="forms-wizard.php">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_folder-alt first_level_icon"></span>
                                <span class="menu-title">Pages</span>
                                <span class="label label-danger">12</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Pages</li>
                                <li><a href="pages-chat.php">Chat</a></li>
                                <li><a href="pages-contact_list.php">Contact List</a></li>
                                <li><a href="error_404.php">Error 404</a></li>
                                <li><a href="pages-help_faq.php">Help/Faq</a></li>
                                <li><a href="pages-invoices.php">Invoices</a></li>
                                <li><a href="login_page.php">Login Page</a></li>
                                <li><a href="login_page2.php">Login Page 2</a></li>
                                <li><a href="pages-mailbox.php">Mailbox</a></li>
                                <li><a href="pages-mailbox_compose.php">Mailbox (compose)</a></li>
                                <li><a href="pages-mailbox_message.php">Mailbox (details)</a></li>
                                <li><a href="pages-search_page.php">Search Page</a></li>
                                <li><a href="pages-user_list.php">User List</a></li>
                                <li><a href="pages-user_profile.php">User Profile</a></li>
                                <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_puzzle first_level_icon"></span>
                                <span class="menu-title">Components</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Components</li>
                                <li><a href="components-bootstrap.php">Bootstrap</a></li>
                                <li><a href="components-gallery.php">Gallery</a></li>
                                <li><a href="components-grid.php">Grid</a></li>
                                <li><a href="components-icons.php">Icons</a></li>
                                <li><a href="components-notifications_popups.php">Notifications/Popups</a></li>
                                <li><a href="components-typography.php">Typography</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_lightbulb_alt first_level_icon"></span>
                                <span class="menu-title">Plugins</span>
                                <span class="label label-danger">6</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Plugins</li>
                                <li><a href="plugins-ace_editor.php">Ace Editor</a></li>
                                <li><a href="plugins-calendar.php">Calendar</a></li>
                                <li><a href="plugins-charts.php">Charts</a></li>
                                <li><a href="plugins-gantt_chart.php">Gantt Chart</a></li>
                                <li><a href="plugins-google_maps.php">Google Maps</a></li>
                                <li><a href="plugins-tables_footable.php">Tables</a></li>
                                <li><a href="plugins-vector_maps.php">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="first_level has_submenu">
                            <a href="javascript:void(0)">
                                <span class="first_level_icon icon_menu-circle_alt2"></span>
                                <span class="menu-title">Sub menu</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Sub menu</li>
                                <li><a href="javascript:void(0)">01. Lorem ipsum</a></li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">02. Lorem ipsum</a>
                                    <ul>
                                        <li class="has_submenu">
                                            <a href="javascript:void(0)">02.1 Lorem ipsum dolor sit amet</a>
                                            <ul>
                                                <li><a href="javascript:void(0)">02.1.1 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.2 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.3 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.4 Lorem ipsum</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">02.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">03. Lorem ipsum</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">03.1 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">04. Lorem ipsum</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu_toggle">
                    <span class="icon_menu_toggle">
                        <i class="arrow_carrot-2left toggle_left"></i>
                        <i class="arrow_carrot-2right toggle_right" style="display:none"></i>
                    </span>
                </div>
            </nav>

        </div>

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Cookie -->
        <script src="assets/js/jqueryCookie.min.js"></script>
        <!-- Bootstrap Framework -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- retina images -->
        <script src="assets/js/retina.min.js"></script>
        <!-- switchery -->
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <!-- typeahead -->
        <script src="assets/lib/typeahead/typeahead.bundle.min.js"></script>
        <!-- fastclick -->
        <script src="assets/js/fastclick.min.js"></script>
        <!-- match height -->
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <!-- scrollbar -->
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Yukon Admin functions -->
        <script src="assets/js/yukon_all.js"></script>

	    <!-- page specific plugins -->

            <!-- select2 -->
            <script src="assets/lib/select2/select2.min.js"></script>
            <!-- datepicker -->
            <script src="assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
            <!-- date range picker -->
            <script src="assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- rangeSlider -->
            <script src="assets/lib/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
            <!-- autosize -->
            <script src="assets/lib/autosize/jquery.autosize.min.js"></script>
            <!-- inputmask -->
            <script src="assets/lib/jquery.inputmask/jquery.inputmask.bundle.min.js"></script>
            <!-- maxlength for textareas -->
            <script src="assets/lib/stopVerbosity/stopVerbosity.min.js"></script>
            <!-- uplaoder -->
            <script src="assets/lib/plupload/js/plupload.full.min.js"></script>
            <script src="assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
            <!-- wysiwg editor -->
            <script src="assets/lib/ckeditor/ckeditor.js"></script>
            <script src="assets/lib/ckeditor/adapters/jquery.js"></script>
            <!-- 2col multiselect -->
            <script src="assets/lib/lou-multi-select/js/jquery.multi-select.js"></script>
            <!-- quicksearch -->
            <script src="assets/lib/quicksearch/jquery.quicksearch.min.js"></script>
            <!-- clock picker -->
            <script src="assets/lib/clock-picker/bootstrap-clockpicker.min.js"></script>
            <!-- chained selects -->
            <script src="assets/lib/jquery_chained/jquery.chained.min.js"></script>
            <!-- show/hide passwords -->
            <script src="assets/lib/hideShowPassword/hideShowPassword.min.js"></script>
            <!-- password strength metter -->
            <script src="assets/lib/jquery.pwstrength.bootstrap/pwstrength-bootstrap-1.2.2.min.js"></script>
            <!-- icheck -->
            <script src="assets/lib/iCheck/icheck.min.js"></script>
            <!-- selectize.js -->
            <script src="assets/lib/selectize-js/js/standalone/selectize.min.js"></script>

            <script>
                $(function() {
                    // select2
                    yukon_select2.p_forms_extended();
                    // datepicker
                    yukon_datepicker.p_forms_extended();
                    // date range picker
                    yukon_date_range_picker.p_forms_extended();
                    // rangeSlider
                    yukon_rangeSlider.p_forms_extended();
                    // textarea autosize
                    yukon_textarea_autosize.init();
                    // masked inputs
                    yukon_maskedInputs.p_forms_extended();
                    // maxlength for textareas
                    yukon_textarea_maxlength.p_forms_extended();
                    // multiuploader
                    yukon_uploader.p_forms_extended();
                    // 2col multiselect
                    yukon_2col_multiselect.init();
                    // clock picker
                    yukon_clock_picker.init();
                    // chained selects
                    yukon_chained_selects.init();
                    // password show/hide
                    yukon_pwd_show_hide.init();
                    // password strength metter
                    yukon_pwd_strength_metter.init();
                    // checkboxes & radio buttons
                    yukon_icheck.init();
                    // selectize.js
                    yukon_selectize.p_forms_extended();
                    // wysiwg editor
                    yukon_wysiwg.p_forms_extended();
                })
            </script>
        
        <!-- style switcher -->
        <div id="style_switcher">
            <a class="switcher_toggle"><i class="icon_cog"></i></a>
            <div class="style_items">
                <div class="heading_b"><span class="heading_text">Top Bar Color</span></div>
                <ul class="clearfix" id="topBar_style_switch">
                    <li class="sw_tb_style_0 style_active" title=""><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_1" title="topBar_style_1"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_2" title="topBar_style_2"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_3" title="topBar_style_3"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_4" title="topBar_style_4"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_5" title="topBar_style_5"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_6" title="topBar_style_6"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_7" title="topBar_style_7"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_8" title="topBar_style_8"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_9" title="topBar_style_9"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_10" title="topBar_style_10"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_11" title="topBar_style_11"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_12" title="topBar_style_12"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_13" title="topBar_style_13"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_14" title="topBar_style_14"><span class="icon_check_alt2"></span></li>
                </ul>
            </div>
            <hr/>
            <div class="clearfix hidden-sm hidden-md hidden-xs sepH_b">
                <label>Fixed layout</label>
                <div class="pull-right"><input type="checkbox" id="fixed_layout_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="style_items hidden-sm hidden-md hidden-xs" id="fixed_layout_bg_switch">
                <hr/>
                <div class="heading_b"><span class="heading_text">Background</span></div>
                <ul class="clearfix">
                    <li class="sw_bg_0" title="bg_0"></li>
                    <li class="sw_bg_1" title="bg_1"></li>
                    <li class="sw_bg_2" title="bg_2"></li>
                    <li class="sw_bg_3" title="bg_3"></li>
                    <li class="sw_bg_4" title="bg_4"></li>
                    <li class="sw_bg_5" title="bg_5"></li>
                    <li class="sw_bg_6" title="bg_6"></li>
                    <li class="sw_bg_7" title="bg_7"></li>
                </ul>
                <hr/>
            </div>
            <div class="clearfix sepH_b">
                <label>Top Menu</label>
                <div class="pull-right"><input type="checkbox" id="top_menu_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="clearfix sepH_b">
                <label>Hide Breadcrumbs</label>
                <div class="pull-right"><input type="checkbox" id="breadcrumbs_hide" class="js-switch mini-switch"></div>
            </div>
            <div class="text-center sepH_a">
                <button data-toggle="modal" data-target="#showCSSModal" id="showCSS" class="btn btn-default btn-xs btn-outline" type="button">Show CSS</button>
            </div>
        </div>
        <div class="modal fade" id="showCSSModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">CSS Classes</h4>
                    </div>
                    <div class="modal-body">
                        <pre id="showCSSPre"></pre>
                    </div>
                </div>
            </div>
        </div>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
		  
			ga('create', 'UA-54304677-1', 'auto');
			ga('send', 'pageview');
		</script>

    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/forms-extended_elements.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:38:55 GMT -->
</html>
