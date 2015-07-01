<script type="text/javascript">
//Script to dynamically allow user to select cities based on particulr state
var country_arr=new Array("Jammu and Kashmir","Delhi","Uttar Pradesh","Tamil nadu","Maharashtra","Karnataka","West Bengal","Punjab","Haryana");
var s_a = new Array();
s_a[0]="";
s_a[1]="Srinagar|Jammu";
s_a[2]="New Delhi";
s_a[3]="Lucknow|Kanpur|Ghaziabad|Noida|Varanasi";
s_a[4]="Chennai";
s_a[5]="Mumbai|Pune|Aurangabad|Thane";
s_a[6]="Bangalore|Mysore";
s_a[7]="Kolkata";
s_a[8]="Chandigarh|Mohali";
s_a[9]="Gurgaon|Chandigarh";
function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select State', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}