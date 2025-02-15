
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  <style>
    .error { color: red; font-size: 0.875rem; }
  </style>
</head>
<body class="bg-blue-100">
  <div class="max-w-4xl mx-auto mt-10 p-8 bg-white shadow-md rounded-xl">
    <h1 class="text-2xl font-bold text-center">Personal Information</h1>
    <form id="registrationForm" action="submitted.php" method="POST" class="mt-6">  


    
      <!-- Personal Information -->
<fieldset class="mb-4">
  <legend class=" font-bold text-lg mb-4">Personal Data</legend>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    
 
    <!-- Last Name -->
    <div>
      <label for="lastName" class="block font-semibold">Last Name</label>
      <input type="text" id="lastName" name="lastName" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="" oninput="validate(this)">
      <p class="error text-red-500 text-sm" id="lastNameError"></p>
    </div>
  
    <!-- First Name -->
    <div>
      <label for="firstName" class="block font-semibold">First Name</label>
      <input type="text" id="firstName" name="firstName" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="firstNameError"></p>
    </div>
  
    <!-- Middle Initial -->
    <div>
      <label for="middleInitial" class="block font-semibold">Middle Initial</label>
      <input type="text" id="middleInitial" name="middleInitial" maxlength="1" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="middleInitialError"></p>
    </div>
  
    <div>
  <label for="dob" class="block font-semibold">Date of Birth</label>
  <input type="date" id="dob" name="dob" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required onchange="calculateAge()">
  <label for="age" class="block font-semibold"></label>

  <input type="text" id="age" name="age" class="hidden" readonly>
  <p class="error text-red-500 text-sm" id="ageError"></p>
  <p class="error text-red-500 text-sm" id="dobError"></p>
</div>


<script>
  function calculateAge() {
    const dobInput = document.getElementById('dob').value;
    const ageInput = document.getElementById('age');

    if (dobInput) {
      const dob = new Date(dobInput);
      const today = new Date();
      let age = today.getFullYear() - dob.getFullYear();
      const monthDifference = today.getMonth() - dob.getMonth();

      // Check if the birthday hasn't occurred this year yet
      if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dob.getDate())) {
        age--;
      }

      ageInput.value = age >= 0 ? age : 'Invalid DOB';
    } else {
      ageInput.value = '';
    }
  }
</script>
    <!-- Sex -->
    <div>
      <label class="block font-semibold">Sex</label>
      <div class="flex items-center gap-4">
        <div>
          <input type="radio" id="male" name="sex" value="Male" required>
          <label for="male">Male</label>
        </div>
        <div>
          <input type="radio" id="female" name="sex" value="Female" required>
          <label for="female">Female</label>
        </div>
      </div>
    </div>
    <!-- Civil Status -->
    <div>
      <label for="status" class="block font-semibold">Civil Status:</label>
      <select name="status" id="status" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2">
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Widowed">Widowed</option>
        <option value="Legally Separated">Legally Separated</option>
        <option value="Others">Others</option>
      </select>
    </div>
  </div>
     <!-- TIN -->
<div class="mt-6">
  <label for="tin" class="block font-semibold">Tax Identification Number (TIN)</label>
  <input type="text" id="tin" name="tin" maxlength="9" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="" oninput="validateTIN(this)">
  <p class="error" id="tinError"></p>
</div>
     <!-- Nationality -->
<div class="mt-6">
  <label for="nationality" class="block font-semibold">Nationality</label>
  <select id="nationality" name="nationality" class="border-gray-300 rounded-md p-2 w-200 mt-1 block  border  shadow-sm " required>
  <option value="">Select your nationality</option>
    <option value="Afghan">Afghan</option><option value="Albanian">Albanian</option><option value="American">American</option><option value="Argentine">Argentine</option> <option value="Australian">Australian</option><option value="Bangladeshi">Bangladeshi</option>
    <option value="Brazilian">Brazilian</option><option value="British">British</option><option value="Canadian">Canadian</option><option value="Chinese">Chinese</option><option value="Egyptian">Egyptian</option>
    <option value="Filipino">Filipino</option><option value="French">French</option> <option value="German">German</option><option value="Indian">Indian</option><option value="Indonesian">Indonesian</option>
    <option value="Japanese">Japanese</option><option value="Korean">Korean</option><option value="Mexican">Mexican</option><option value="Nigerian">Nigerian</option><option value="Pakistani">Pakistani</option>
    <option value="Russian">Russian</option><option value="Saudi">Saudi</option><option value="South African">South African</option><option value="Spanish">Spanish</option><option value="Thai">Thai</option><option value="Turkish">Turkish</option>
    <option value="Vietnamese">Vietnamese</option><option value="Zambian">Zambian</option>
  </select>
  <p class="error" id="nationalityError"></p>
</div>
     <!-- Religion -->
  <label for="religion" class="block font-semibold">Religion</label>
  <input type="text" id="religion" name="religion" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder=""><br>
  <p class="error text-red-500 text-sm" id="religionError"></p>

    <legend class="font-bold text-lg mb-4">Place Of Birth</legend>
     <!-- Place of Birth Section -->
    <label for="ub" class=" font-semibold" >RM/FLR/Unit No. & Bldg. Name:</label><br>
    <input type="text" id="ub" name="ub" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2  " required placeholder="">
    <label for="hlb" class=" font-semibold" >House/Lot & Blk. No:</label><br>
    <input type="text" id="hlb" name="hlb" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="">
    <label for="sn" class=" font-semibold" >Street Name:</label><br>
    <input type="text" id="sn" name="sn" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="">
    <label for="sd" class=" font-semibold" >Subdivision:</label><br>
    <input type="text" id="sd" name="sd" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
    <label for="dbl" class=" font-semibold" >Barangay/District/Locality:</label><br>
    <input type="text" id="dbl" name="dbl" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
    <label for="cm" class=" font-semibold" >City/Municipality:</label><br>
    <input type="text" id="cm" name="cm" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
    <label for="pv" class=" font-semibold" >Province:</label><br>
    <input type="text" id="pv" name="pv" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
     
       <!-- Countries ct -->
    <label for="ct" class=" font-semibold">Country:</label>
    <select id="ct" name="ct"class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2  " required placeholder=""><br>
           <?php
            $countries = [
                "Select Country","Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Brazzaville)", "Congo (Kinshasa)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", 
                "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", 
                "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis","Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",  "Somalia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga",  "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu",  "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",  "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",  "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
            ];foreach ($countries as $ct) {
                echo "<option value=\"$ct\">$ct</option>";
            }
            ?>
             </select>
       <!-- Zipcode -->
      <label for="zc" class="font-semibold">Zip Code:</label><br>
      <input type="text" id="zc" name="zc" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="" oninput="validateNumberInput('zc', 'zc-error')">
      <span id="zc-error" class="text-red-500 text-sm"></span><br>

             <!-- Home Address section -->
    <legend class="font-bold text-lg mb-4">Home Address</legend>

    <label for="unit_bldg" class=" font-semibold" >RM/FLR/Unit No. & Bldg. Name:</label><br>
    <input type="text" id="unit_bldg" name="unit_bldg" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2 " required placeholder="">
    <label for="house_lot_blk" class=" font-semibold" >House/Lot & Blk. No:</label><br>
    <input type="text" id="house_lot_blk" name="house_lot_blk" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="">
    <label for="street_name" class=" font-semibold" >Street Name:</label><br>
    <input type="text" id="street_name" name="street_name" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="">
    <label for="subdivision" class=" font-semibold" >Subdivision:</label><br>
    <input type="text" id="subdivision" name="subdivision" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
    <label for="district" class="block mb-2 font-semibold">Barangay/District/Locality:</label>
    <input type="text" id="district" name="district" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">

    <!-- Province -->
    <div>
        <label for="province" class="block mb-2 block font-semibold">Province</label>
        <select id="province" name="province" class="border-gray-300 rounded-md p-2 w-200 mt-1 block  border  shadow-sm " required >
          <option value="">Select Province</option>
          <option value="Cebu">Cebu</option>
          <option value="Bohol">Bohol</option>
          <option value="NegrosOccidental">NegrosOccidental</option>
          <option value="NegrosOriental">NegrosOriental</option>
          <option value="Siquijor">Siquijor</option>
        </select>
        </div>

      <!-- Municipality -->
       <div>
        <label for="municipality" class="block mb-1 block font-semibold">City/Municipality</label>
        <select id="municipality" name="municipality" class="border-gray-300 rounded-md p-2 w-200 mt-1 block  border  shadow-sm " required>
          <option value="">Select City/Municipality</option>
        </select>
        </div>
        <!-- Barangay -->
         <div>
        <label for="city" class="block mb-2 block font-semibold">Barangay</label>
        <select id="city" name="city" class="border-gray-300 rounded-md p-2 w-200 mt-1 block  border  shadow-sm " required>
          <option value="">Select Barangay</option>
        </select>
        </div>
          <!-- Country-->
    <label for="country" class=" font-semibold">Country:</label>
    <select id="country" name="country"class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2  " required placeholder=""><br>
           <?php
            $countries = [
                "Select Country","Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Brazzaville)", "Congo (Kinshasa)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", 
                "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", 
                "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis","Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",  "Somalia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga",  "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu",  "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",  "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",  "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
            ];
            foreach ($countries as $country) {
                echo "<option value=\"$country\">$country</option>";
            }
            ?>
             </select>
      <label for="zipcode" class="font-semibold">Zip Code:</label><br>
      <input type="text" id="zipcode" name="zipcode" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="" oninput="validateNumberInput('zipcode', 'zipcode-error')">
      <span id="zipcode-error" class="text-red-500 text-sm"></span><br>
      <label for="cell" class="font-semibold">Cellphone Number:</label><br>
      <input type="text" id="cell" name="cell" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="" oninput="validateNumberInput('cell', 'cell-error')">
      <span id="cell-error" class="text-red-500 text-sm"></span>
      <br><label for="email" class="font-semibold">E-mail Address:</label><br>
      <input type="text" id="email" name="email" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="" oninput="validateEmail()">
      <span id="email-error" class="text-red-500 text-sm"></span><br>
      <label for="tel" class="font-semibold">Telephone Number:</label><br>
      <input type="text" id="tel" name="tel" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2"required placeholder="" oninput="validateNumberInput('tel', 'tel-error')">
      <span id="tel-error" class="text-red-500 text-sm"></span><br>
    <legend class=" font-bold text-lg mb-4">Father's Name</legend>
      <label for="lname" class="block font-semibold">Last Name:</label>
      <input type="text" id="lname" name="lname" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="lnameError"></p>
      <label for="fname" class="block font-semibold">First Name:</label>
      <input type="text" id="fname" name="fname" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="fnameError"></p>
      <label for="mi" class="block font-semibold">Middle Initial:</label>
      <input type="text" id="mi" name="mi" maxlength="1" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="miError"></p><br>
     <legend class=" font-bold text-lg mb-4">Mother's Name</legend>
      <label for="ln" class="block font-semibold">Last Name:</label>
      <input type="text" id="ln" name="ln" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="lnError"></p>
      <label for="fn" class="block font-semibold">First Name:</label>
      <input type="text" id="fn" name="fn" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="fnError"></p>
      <label for="mid" class="block font-semibold">Middle Initial:</label>
      <input type="text" id="mid" name="mid" maxlength="1" class="mt-1 block w-200 border border-gray-300 rounded-md shadow-sm p-2" required placeholder="">
      <p class="error text-red-500 text-sm" id="midError"></p>
  <br>
     <!--Submit-->
         <div class="text-center">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Submit
        </button>
      </div>


         <!--ALL VALIDATION--> 
      <script>
    // Validation and Event Listeners
    function validateInput(id, errorId, pattern, errorMessage) {
      const input = document.getElementById(id);
      const error = document.getElementById(errorId);
  
      input.addEventListener('input', () => {
        if (!pattern.test(input.value)) {
          error.textContent = errorMessage;
          input.classList.add('border-red-500');
        } else {
          error.textContent = '';
          input.classList.remove('border-red-500');
        }
      });
    }
  
    window.onload = function () {
  // Function to validate capitalization of the first letter
  function validateCapitalization(inputId, errorId) {
    const inputElement = document.getElementById(inputId);
    const errorElement = document.getElementById(errorId);

    inputElement.addEventListener('input', function () {
      const pattern = /^[A-Z][a-zA-Z\s]*$/;
      if (!pattern.test(inputElement.value)) {
        errorElement.textContent = "First letter must be capitalized, and only letters are allowed!";
        

        inputElement.classList.add('border-red-500');
      } else {
        errorElement.textContent = "";
        inputElement.classList.remove('border-red-500');
      }
    });
  }

  // Name validations with first-letter capitalization check
          validateCapitalization('lastName', 'lastNameError');
          validateCapitalization('firstName', 'firstNameError');
          validateCapitalization('lname', 'lnameError');
          validateCapitalization('fname', 'fnameError');
          validateCapitalization('ln', 'lnError');
          validateCapitalization('fn', 'fnError');
  
  // Middle initial validation remains unchanged
          validateInput('middleInitial', 'middleInitialError', /^[A-Z]?$/, "Please enter only one uppercase letter.");
          validateInput('mi', 'miError', /^[A-Z]?$/, "Please enter only one uppercase letter.");
          validateInput('mid', 'midError', /^[A-Z]?$/, "Please enter only one uppercase letter.");

          
};
</script>
<script>

    // Validate Date of Birth
    document.getElementById('dob').addEventListener('change', function () {
      const dob = new Date(this.value);
      const today = new Date();
      const age = today.getFullYear() - dob.getFullYear();
      const month = today.getMonth() - dob.getMonth();
  
      if (age < 18 || (age === 18 && month < 0)) {
        document.getElementById('dobError').textContent = "You must be 18 years or older.";
      } else {
        document.getElementById('dobError').textContent = "";
      }
    });
  </script>

  <script>
     // Validation of TIN
  function validateTIN(input) {
    const numericValue = input.value.replace(/\D/g, '');
    input.value = numericValue;

    if (!/^\d{9}$/.test(numericValue)) {
      document.getElementById('tinError').textContent = 'TIN must contain exactly 9 numbers only.';
    } else {
      document.getElementById('tinError').textContent = '';
    }
  }
</script>

<script>
  // Validation of Zipcode1
  function validateNumberInput(inputId, errorId) {
    const inputElement = document.getElementById(inputId);
    const errorMessage = document.getElementById(errorId);

    // Regex for numbers only
    const numberPattern = /^[0-9]*$/;

    // Check if the input value matches the number pattern
    if (!numberPattern.test(inputElement.value)) {
      errorMessage.textContent = "Please enter numbers only.";
      inputElement.value = inputElement.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
    } else {
      errorMessage.textContent = ''; // Clear the error message if input is valid
    }
  }
</script>
<script>
  // Validation of Zipcode2
  function validateNumberInput(inputId, errorId) {
    const inputElement = document.getElementById(inputId);
    const errorMessage = document.getElementById(errorId);

    // Regex for numbers only
    const numberPattern = /^[0-9]*$/;

    // Check if the input value matches the number pattern
    if (!numberPattern.test(inputElement.value)) {
      errorMessage.textContent = "Please enter numbers only.";
      inputElement.value = inputElement.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
    } else {
      errorMessage.textContent = ''; // Clear the error message if input is valid
    }
  }
  
</script>
  <!--VALIDATION OF EMAIL-->
  <script>
  function validateEmail() {
    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('email-error');

    // Strict regex pattern for email validation
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Check if input is empty
    if (!emailInput.value.trim()) {
      errorMessage.textContent = "Email address is required.";
      errorMessage.style.color = "red";
      return;
    }

    // Check if the email follows the correct format
    if (!emailPattern.test(emailInput.value.trim())) {
      errorMessage.textContent = "Please enter a valid email address (e.g., user@example.com).";
      errorMessage.style.color = "red";
    } else {
      errorMessage.textContent = "";
      
    }
  }
</script>   
</form>
  <script>
    const provinceSelect = document.getElementById('province');
    const municipalitySelect = document.getElementById('municipality');
    const citySelect = document.getElementById('city');
    const data = {
      Cebu: {
        municipalities: {
          Alcantara: ['Cabadiangan', 'Cabil-isan', 'Candabong', 'Lawaan', 'Manga', 'Palanas', 'Poblacion', 'Polo', 'Salagmaya'],
          Aloguinsan: ['Angilan', 'Bojo', 'Bonbon', 'Esperanza', 'Kandingan', 'Kantabogon', 'Kawasan', 'Olango', 'Poblacion', 'Punay', 'Rosario', 'Saksak', 'Tampa-an', 'Toyokon', 'Zaragosa'],
          Asturias: ['Agtugop', 'Agbanga', 'Bairan', 'Baye', 'Bog-o', 'Banban', 'Bogo', 'Kaluangan', 'Langub', 'Lanao', 'Looc Norte', 'Lunas', 'Magcalape', 'Manguiao', 'New Bago', 'Owak', 'Poblacion', 'Punay', 'Rosario', 'Saksak', 'San Isidro', 'San Roque', 'Santa Lucia', 'Santa Rita', 'Santo Niño', 'Santo Tomas', 'Tubigagmanok'],
          Argao: ['Alambijud', 'Anajao', 'Apo', 'Balaas', 'Balisong', 'Binlod', 'Bogo', 'Butong', 'Bug-ot', 'Bulasa', 'Calagasan', 'Canbantug', 'Canbanua', 'Cansuje', 'Capio-an', 'Casay', 'Catang', 'Colawin', 'Conalum', 'Guiwanon', 'Gutlang', 'Jampang', 'Jomgao', 'Lamacan', 'Langtad', 'Langub', 'Lapay', 'Lengigon', 'Linut-od', 'Mabasa', 'Magsico', 'Magsanghan', 'Magsaysay', 'Mantalongon', 'Mantalungon', 'Mantalungon Proper', 'Mantalungon Sur', 'Mantalungon Norte', 'Mantalungon Sur', 'Mantalungon Norte', 'Mantalungon Sur', 'Mantalungon Norte', 'Mantalungon Sur'],
          Balamban: ['Abucayan', 'Aliwanay', 'Arpili', 'Baliwagan', 'Bayong', 'Biasong', 'Buanoy', 'Cabagdalan', 'Cabasiangan', 'Cambuhawe', 'Cansomoroy', 'Cantibas', 'Cantu-od', 'Duangan', 'Gaas', 'Ginatilan', 'Hingatmonan', 'Lamesa', 'Liki', 'Luca', 'Matun-og', 'Nangka', 'Pondol', 'Prenza', 'Singsing', 'Sta. Cruz – Sto. Niño', 'Sunog', 'Vito'],
          Barili: ['Azucena', 'Bagakay', 'Balao', 'Bolocboloc', 'Budbud', 'Bugtong Kawayan', 'Cabcaban', 'Campangga', 'Dakit', 'Giloctog', 'Guibuangan', 'Giwanon', 'Gunting', 'Hilasgasan', 'Japitan', 'Cagay', 'Kalubihan', 'Kangdampas', 'Candugay', 'Luhod', 'Lupo', 'Luyo', 'Maghanoy', 'Maigang', 'Malolos', 'Mantalongon', 'Mantayupan', 'Mayana', 'Minolos', 'Nabunturan', 'Nasipit', 'Pancil', 'Pangpang', 'Paril', 'Poblacion', 'Punta', 'San Isidro', 'San Juan', 'San Vicente'],
          Bogo: ['Anonang Norte', 'Anonang Sur', 'Banban', 'Binabag', 'Bungtod', 'Carbon', 'Cayang', 'Cogon', 'Dakit', 'Dumlog', 'Luray I', 'Luray II', 'Luyong Baybay', 'Malingin', 'Marangog', 'Nailon', 'Odlot', 'Pandan', 'Polambato', 'Poblacion', 'San Vicente', 'San Isidro', 'San Juan', 'San Jose', 'San Pedro', 'San Roque', 'San Sebastian', 'San Vicente', 'Siocon', 'Sudlonon'],
          Boljoon: ['Poblacion', 'El Pardo', 'Baclayan', 'Arbor', 'Granada', 'South Granada', 'Lower Becerril', 'Upper Becerril', 'San Antonio', 'Lunop', 'Nangka'],
          Borbon: ['Bagacay', 'Bili', 'Bingay', 'Bongdo', 'Bongdo Gua', 'Bongoyan', 'Cadaruhan', 'Cajel', 'Campusong', 'Clavera', 'Don Gregorio Antigua (Taytayan)', 'Laaw', 'Lugo', 'Managase', 'Poblacion', 'Sagay', 'San Jose', 'Tabunan', 'Tagnucan'],
          Carcar: ['Bolinawan', 'Buenavista', 'Calidngan', 'Can-asujan', 'Guadalupe', 'Liburon', 'Napo', 'Ocana', 'Perrelos', 'Poblacion I', 'Poblacion II', 'Poblacion III', 'Tuyom', 'Valencia', 'Valladolid'],
          Carmen: ['Baring', 'Cantipay', 'Cantukong', 'Cantumog', 'Caurasan', 'Cogon East', 'Cogon West', 'Corte', 'Dawis Norte', 'Dawis Sur', 'Hagnaya', 'Ipil', 'Lanipga', 'Liboron', 'Lower Natimao-an', 'Luyang', 'Poblacion', 'Puente', 'Sac-on', 'Triumfo', 'Upper Natimao-an'],
          Compostela: ['Bagalnga', 'Basak', 'Buluang', 'Cabadiangan', 'Cambayog', 'Canamucan', 'Cogon', 'Dapdap', 'Estaca', 'Lupa', 'Magay', 'Mulao', 'Panangban', 'Poblacion', 'Tag-ube', 'Tamiao', 'Tubigan'],
          Consolacion: ['Cabangahan', 'Cansaga', 'Casili', 'Danglag', 'Garing', 'Jugan', 'Lamac', 'Lanipga', 'Nangka', 'Panas', 'Panoypoy', 'Pitogo', 'Poblacion Occidental', 'Poblacion Oriental', 'Polog', 'Pulpogan', 'Sacsac', 'Tayud', 'Tilhaong', 'Tolotolo', 'Tugbongan'],
          Cordova: ['Alegria', 'Bangbang', 'Buagsong', 'Catarman', 'Cogon', 'Dapitan', 'Day-as', 'Gabi', 'Ibabao', 'Pilipog', 'Poblacion', 'San Miguel', 'San Vicente'],
          Daanbantayan: ['Aguho', 'Bagay', 'Bakhawan', 'Bateria', 'Bitoon', 'Calape', 'Carnaza', 'Dalingding', 'Lanao', 'Logon', 'Malbago', 'Malingin', 'Maya', 'Pajo', 'Paypay', 'Poblacion', 'Talisay', 'Tapilon', 'Tinubdan', 'Tominjao'],
          Dalaguete: ['Adlaon', 'Alang-alang', 'Alegria', 'Apas', 'Bacong', 'Badian', 'Bantayan', 'Bato', 'Bungtod', 'Cawayan', 'Cawit', 'Cebuano', 'Culipapa', 'Daan Lungsod', 'Daan Lungsod Proper', 'Daan Lungsod Sur', 'Daan Lungsod Norte', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West'],
          Danao: ['Adela', 'Alang-alang', 'Anislag', 'Apas', 'Bagacay', 'Bagumbayan', 'Bacayan', 'Badiang', 'Bantayan', 'Bato', 'Bungtod', 'Calape', 'Calidngan', 'Canjulao', 'Cantabaco', 'Cantipla', 'Cansumoroy', 'Carmen', 'Catarman', 'Cawayan', 'Cogon', 'Consolacion', 'Daan Lungsod', 'Daan Lungsod Proper', 'Daan Lungsod Sur', 'Daan Lungsod Norte', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West'],
          Dumanjug: ['Bitoon', 'Calaboon', 'Camboang', 'Kanyuko', 'Li-ong', 'Looc', 'Paculob', 'Poblacion', 'Pugalo', 'Sima', 'Tangil', 'Tapon', 'Tubod-Duguan', 'Balaygtiki', 'Balitbiton', 'Balungag', 'Bantayan', 'Bato', 'Bungtod', 'Calangcang', 'Calidngan', 'Cansalonoy', 'Cogon', 'Daan Lungsod', 'Daan Lungsod Proper', 'Daan Lungsod Sur', 'Daan Lungsod Norte', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South', 'Daan Lungsod North', 'Daan Lungsod East', 'Daan Lungsod West', 'Daan Lungsod South'],
          Ginatilan: ['Anao', 'Cagsing', 'Calabawan', 'Cambagte', 'Campisong', 'Canorong', 'Guiwanon', 'Looc', 'Malatbo', 'Mangaco', 'Palanas', 'Poblacion', 'Salamanca', 'San Roque'],
          LapuLapu: ['Agus', 'Babag', 'Bankal', 'Baring', 'Basak', 'Buaya', 'Calawisan', 'Canjulao', 'Caw-oy', 'Cawhagan', 'Caubian', 'Gun-ob', 'Ibo', 'Looc', 'Mactan', 'Maribago', 'Marigondon', 'Pajac', 'Pajo', 'Pangan-an', 'Población (Opon)', 'Punta Engaño', 'Pusok', 'Sabang', 'Santa Rosa', 'Subabasbas', 'Talima', 'Tingo', 'Tungasan', 'San Vicente'],
          Liloan: ['Cabadiangan', 'Calero', 'Catarman', 'Cotcot', 'Jubay', 'Lataban', 'Mulao', 'Poblacion', 'San Roque', 'San Vicente', 'Santa Cruz', 'Tabla', 'Tayud', 'Yati'],
          Madridejos: ['Bunakan', 'Kaongkod', 'Kangwayan', 'Kodia', 'Maalat', 'Malbago', 'Mancilang', 'Pili', 'Poblacion', 'San Agustin', 'Tabagak', 'Talangnan', 'Tarong', 'Tugas'],
          Malabuyoc: ['Armeña', 'Barangay I', 'Barangay II', 'Cerdeña', 'Labrador', 'Lombo', 'Looc', 'Mahanlud', 'Mindanao', 'Montañeza', 'Salmeron', 'Santo Niño', 'Sorsogon', 'Tolosa'],
          MandaueCity: ['Alang-alang', 'Bakilid', 'Banilad', 'Basak', 'Cabancalan', 'Cambaro', 'Canduman', 'Casili', 'Casuntingan', 'Centro', 'Cubacub', 'Guizo', 'Ibabao-Estancia', 'Jagobiao', 'Labogon', 'Looc', 'Maguikay', 'Mantuyong', 'Opao', 'Pakna-an', 'Pagsabungan', 'Subangdaku', 'Tabok', 'Tawason', 'Tingub', 'Tipolo', 'Umapad'],
          Medellin: ['Antipolo', 'Canhabagat', 'Caputatan Norte', 'Caputatan Sur', 'Curva', 'Daanlungsod', 'Dalingding Sur', 'Dayhagon', 'Don Virgilio Gonzales', 'Gibitngil', 'Kawit', 'Lamintak Norte', 'Lamintak Sur', 'Luy-a', 'Maharuhay', 'Mahawak', 'Panugnawan', 'Poblacion', 'Tindog'],
          Minglanilla: [ 'Cadulawan','Calajo-an','Camp 7','Camp 8','Guindaruhan',  'Linao', 'Linao-Lipata', 'Pakigne','Manduang', 'Minglanilla', 'Poblacion Ward I', 'Poblacion Ward II', 'Poblacion Ward III', 'Poblacion Ward IV', 'Tubod', 'Tulay', 'Tunghaan', 'Tungkil','Tungkop', 'Vito'],
          Moalboal: ['Agbalanga', 'Bala', 'Balabagon', 'Basdiot', 'Batadbatad', 'Bugho', 'Buguil', 'Busay', 'Lanao', 'Poblacion East', 'Poblacion West', 'Saavedra', 'Tomonoy', 'Tuble', 'Tunga'],
          Naga: ['Balirong', 'Balungag', 'Bairan', 'Bato', 'Cabungahan', 'Cantao-an', 'Cogon', 'Colon', 'Inayagan', 'Inoburan', 'Langtad', 'Lanas', 'Lutac', 'Mainit', 'Mayana', 'Na-alad', 'Pangdan', 'Patag', 'Poblacion East', 'Poblacion North', 'Poblacion South', 'Poblacion West', 'San Isidro', 'San Jose', 'San Juan', 'San Nicolas', 'San Roque', 'San Vicente', 'South Poblacion', 'Tina-an', 'Tuyan'],
          Oslob: ['Alo', 'Bangcogon', 'Bonbon', 'Calumpang', 'Canang', 'Canangca-an', 'Cansalo-ay', 'Can-ukban', 'Daanlungsod', 'Gawi', 'Hagdan', 'Lagunde', 'Looc', 'Luka', 'Mainit', 'Manlum', 'Nueva Caceres', 'Poblacion', 'Pungtod', 'Tan-awan', 'Tumalog'],
          Pinamungajan: ['Anislag', 'Anopog', 'Binabag', 'Buhingtubig', 'Busay', 'Butong', 'Cabiangon', 'Camugao', 'Duangan', 'Guimbawian', 'Lamac', 'Lut-od', 'Mangoto', 'Opao', 'Pandacan', 'Poblacion', 'Punod', 'Rizal', 'Sacsac', 'Sambagon', 'Sibago', 'Tajao', 'Tangub', 'Tanibag', 'Tupas', 'Tutay'],
          Ronda: ['Butong', 'Can-abuhon', 'Canduling', 'Cansalonoy', 'Cansayahon', 'Ilaya', 'Langin', 'Libo-o', 'Madanglog', 'Palanas', 'Poblacion', 'Sta. Cruz', 'Tupas', 'Vive'],
          SanFernando: ['Balud', 'Balungag', 'Basak', 'Bugho', 'Cabatbatan', 'Greenhills', 'Lantawan', 'Liburon', 'Magsico', 'Poblacion North', 'Panadtaran', 'Pitalo', 'San Isidro', 'Sangat', 'Poblacion South', 'Tabionan', 'Tañanas', 'Tinubdan', 'Tonggo', 'Tubod', 'Ilaya'],
          SanFrancisco: ['Cabunga-an', 'Campo', 'Consuelo', 'Esperanza', 'Himensulan', 'Montealegre', 'Northern Poblacion', 'San Isidro', 'Santa Cruz', 'Santiago', 'Sonog', 'Southern Poblacion', 'Unidos', 'Union', 'Western Poblacion'],
          SanRemigio: ['Anapog', 'Argawanon', 'Bagtic', 'Bancasan', 'Batad', 'Busogon', 'Calambua', 'Canagahan', 'Canang', 'Canangca-an', 'Cansalonoy', 'Cansumoroy', 'Cansumoroy Proper', 'Catmon', 'Daanlungsod', 'Dumlog', 'Hagna', 'Himaya', 'Lambusan', 'Lambusan Norte', 'Lambusan Sur', 'Lantawan', 'Lut-od', 'Magsico', 'Poblacion', 'Punta', 'San Isidro'],
          SantaFe: ['Balidbid', 'Hagdan', 'Hilantagaan', 'Kinatarkan', 'Langub', 'Maricaban', 'Okoy', 'Poblacion', 'Pooc', 'Talisay'],
          Santander: ['Bunlan', 'Cabutongan', 'Candamiang', 'Canlumacad', 'Liloan', 'Lip-tong', 'Looc', 'Pasil', 'Poblacion'],
          Sibonga: ['Abugon', 'Bae', 'Bagacay', 'Bahay', 'Banlot', 'Basak', 'Bato', 'Cagay', 'Can-aga', 'Candaguit', 'Cantolaroy', 'Dugoan', 'Guimbangco-an', 'Lamacan', 'Libo', 'Lindogon', 'Magcagong', 'Manatad', 'Mangyan', 'Papan', 'Sabang', 'Sayao', 'Simala', 'Tubod'],
          Sogod: ['Ampongol', 'Bagakay', 'Bagatayam', 'Bawo', 'Cabalawan', 'Cabangahan', 'Calumboyan', 'Dakit', 'Damolog', 'Ibabao', 'Liki', 'Lubo', 'Mohon', 'Nahus-an', 'Pansoy', 'Poblacion', 'Tabunok', 'Takay'],
          Tabogon: ['Alang-alang', 'Caduawan', 'Camoboan', 'Canaocanao', 'Combado', 'Daantabogon', 'Ilihan', 'Kal-anan', 'Labangon', 'Libjo', 'Loong', 'Mabuli', 'Managase', 'Manlagtang', 'Maslog', 'Muabog', 'Pio', 'Poblacion', 'Salag', 'Sambag', 'San Isidro', 'San Vicente', 'Somosa', 'Taba-ao', 'Tapul'],
          Tabuelan: ['Bongon', 'Kanlim-ao', 'Maravilla', 'Kantubaon', 'Dalid', 'Mabunao', 'Kanluhagon', 'Olivo', 'Villahermosa', 'Tabunok', 'Tigbawan', 'Poblacion'],
          Talisay: ['Bulacao', 'Cadulawan', 'Cansojong', 'Dumlog', 'Jaclupan', 'Lagtang', 'Lawaan I', 'Lawaan II', 'Lawaan III', 'Linao', 'Maghaway', 'Manipis', 'Mohon', 'Pooc', 'San Isidro', 'San Roque', 'Tabunok', 'Tapul', 'Biasong', 'Camp IV', 'Tangke', 'Poblacion'],
          Toledo: ['Awihao', 'Bagakay', 'Bato', 'Biga', 'Bulongan', 'Bunga', 'Cabitoonan', 'Calongcalong', 'Cambang-ug', 'Camp 8', 'Canlumampao', 'Cantabaco', 'Capitan Claudio', 'Carmen', 'Daanglungsod', 'Don Andres Soriano (Lutopan)', 'Dumlog', 'Gen. Climaco (Malubog)', 'Ibo', 'Ilihan', 'Juan Climaco, Sr. (Magdugo)', 'Landahan', 'Loay', 'Luray II', 'Matab-ang', 'Media Once', 'Pangamihan', 'Poblacion', 'Poog', 'Putingbato', 'Sagay', 'Sam-ang', 'Sangi', 'Santo Niño (Mainggit)', 'Subayon', 'Talavera', 'Tubod', 'Tungkay'],
          Tuburan: ['Alegria', 'Amatugan', 'Antipolo', 'Apalan', 'Bagasawe', 'Bakyawan', 'Bangkito', 'Bulwang', 'Kabangkalan', 'Kalangahan', 'Kamansi', 'Kan-an', 'Kanlunsing', 'Kansi', 'Caridad', 'Carmelo', 'Cogon', 'Colonia', 'Daan Lungsod', 'Fortaliza', 'Ga-ang', 'Gimama-a', 'Jagbuaya', 'Kabkaban', 'Kagba-o', 'Kampoot', 'Kaorasan', 'Libo', 'Lusong', 'Macupa', 'Mag-alwa', 'Mag-antoy', 'Mag-atubang', 'Maghan-ay', 'Mangga', 'Marmol', 'Molobolo', 'Montealegre', 'Putat', 'San Juan', 'Sandayong', 'Santo Niño', 'Siotes', 'Sumon', 'Tominjao', 'Tomugpa', 'Barangay I (Pob.)', 'Barangay II (Pob.)', 'Barangay III (Pob.)', 'Barangay IV (Pob.)', 'Barangay V (Pob.)', 'Barangay VI (Pob.)', 'Barangay VII (Pob.)', 'Barangay VIII (Pob.)'],
          Tudela: ['Balon', 'Barra', 'Basirang', 'Bongabong', 'Buenavista', 'Cabol-anonan', 'Cahayag', 'Camating', 'Canibungan Proper', 'General', 'Villahermosa'],
        }
      },
      Bohol: {
        municipalities: {
          Alburquerque: ['Bahi', 'Basacdacu', 'Cantiguib', 'Dangay', 'East Poblacion', 'Ponong', 'San Agustin', 'Santa Filomena', 'Tagbuane', 'Toril', 'West Poblacion'],
          Alicia: ['Cabatang', 'Cagongcagong', 'Cambaol', 'Cayacay', 'Del Monte', 'Katipunan', 'La Hacienda', 'Mahayag', 'Napo', 'Pagahat', 'Poblacion (Calingganay)', 'Progreso', 'Putlongcam', 'Sudlon', 'Untaga'],
          Antequera: ['Angilan', 'Bantolinao', 'Bicahan', 'Bitaugan', 'Bungahan', 'Canlaas', 'Cansibuan', 'Can-omay', 'Celing', 'Danao', 'Danicop', 'Mag-aso', 'Poblacion', 'Quinapon-an', 'Santo Rosario', 'Tabuan', 'Tagubaas', 'Tupas', 'Ubojan', 'Viga', 'Villa Aurora (Canoc-oc)'],
          Baclayon: ['Buenaventura', 'Cambanac', 'Dasitam', 'Guiwanon', 'Landican', 'Laya', 'Libertad', 'Montana', 'Pamilacan', 'Payahan', 'Poblacion', 'San Isidro', 'San Roque', 'San Vicente', 'Santa Cruz', 'Taguihon', 'Tanday'],
          Balilihan: ['Baucan Norte', 'Baucan Sur', 'Boctol', 'Boyog Norte', 'Boyog Proper', 'Boyog Sur', 'Cabad', 'Candasig', 'Cantalid', 'Cogon', 'Datag Norte', 'Datag Sur', 'Del Carmen Este', 'Del Carmen Norte', 'Del Carmen Sur', 'Del Carmen Weste', 'Del Rosario', 'Hanopol Este', 'Hanopol Norte', 'Hanopol Weste', 'Magsija', 'Maslog', 'Sagasa', 'Sal-ing', 'San Isidro', 'San Roque', 'Santo Niño', 'Tagustusan', 'Tinangnan', 'Tontunan', 'Ubujan'],
          Batuan: ['Aloja', 'Behind the Clouds (San Jose)', 'Cabacnitan', 'Cambacay', 'Cantigdas', 'Garcia', 'Janlud', 'Poblacion Norte', 'Poblacion Sur', 'Poblacion Vieja', 'Quezon', 'Quirino', 'Rizal', 'Rosariohan', 'Santa Cruz'],
          Buenavista: ['Anonang', 'Asinan', 'Bago', 'Baluarte', 'Bantuan', 'Bato', 'Bonotbonot', 'Bugaong', 'Cambuhat', 'Cambus-oc', 'Cangawa', 'Cantomugcad', 'Cantores', 'Cantuba', 'Catigbian', 'Cawag', 'Cruz', 'Dait', 'Eastern Cabul-an', 'Hunan', 'Lapacan Norte', 'Lapacan Sur', 'Lubang', 'Lusong (Plateau)', 'Magkaya', 'Merryland', 'Nueva Granada', 'Nueva Montana', 'Overland', 'Panghagban', 'Poblacion', 'Puting Bato', 'Rufo Hill', 'Sweetland', 'Western Cabul-an'],
          Calape: ['Abucayan Norte', 'Abucayan Sur', 'Banlasan', 'Bentig', 'Binogawan', 'Bonbon', 'Cabayugan', 'Cabudburan', 'Calunasan', 'Camias', 'Canguha', 'Catmonan', 'Desamparados (Poblacion)', 'Kahayag', 'Kinabag-an', 'Labuon', 'Lawis', 'Liboron', 'Lo-oc', 'Lomboy', 'Lucob', 'Madangog', 'Magtongtong', 'Mandaug', 'Mantatao', 'Sampoangon', 'San Isidro', 'Santa Cruz (Poblacion)', 'Sohoton', 'Talisay', 'Tinibgan', 'Tultugan', 'Ulbujan'],
          Carmen: ['Alegria', 'Bicao', 'Buenavista', 'Buenos Aires', 'Calatrava', 'El Progreso', 'El Salvador', 'Guadalupe', 'Katipunan', 'La Libertad', 'La Paz', 'La Salvacion', 'La Victoria', 'Matin-ao', 'Montehermoso', 'Montesuerte', 'Montesunting', 'Poblacion Norte', 'Poblacion Sur', 'Rizal', 'Sagbayan Sur', 'San Isidro', 'Santo Niño', 'Tambo-an', 'Villaflor', 'Villarcayo', 'Nueva Vida Este', 'Nueva Vida Norte', 'Nueva Vida Sur'],
          Catigbian: ['Alegria', 'Ambuan', 'Baang', 'Bagtic', 'Bongbong', 'Cambailan', 'Candumayao', 'Kang-iras', 'Causwagan Norte', 'Hagbuaya', 'Libertad Norte', 'Libertad Sur', 'Mahayag Norte', 'Mahayag Sur', 'Mantasida', 'Masonoy', 'Poblacion', 'Poblacion Weste', 'Triple Union', 'Causwagan Sur', 'Haguilanan Grande', 'San Isidro'],
          Clarin: ['Bacani', 'Bogtongbod', 'Bonbon', 'Bontud', 'Buacao', 'Buangan', 'Cabog', 'Caboy', 'Caluwasan', 'Candajec', 'Cantoyoc', 'Comaang', 'Danahao', 'Katipunan', 'Lajog', 'Mataub', 'Nahawan', 'Poblacion Centro', 'Poblacion Norte', 'Poblacion Sur', 'Tangaran', 'Tontunan', 'Tubod', 'Villaflor'],
          Corella: ['Anislag', 'Canangca-an', 'Canapnapan', 'Cancatac', 'Pandol', 'Poblacion', 'Sambog', 'Tanday'],
          Cortes: ['De la Paz', 'Fatima', 'Loreto', 'Lourdes', 'Malayo Norte', 'Malayo Sur', 'Montserrat', 'New Lourdes', 'Patrocinio', 'Poblacion', 'Rosario', 'Salvador', 'San Roque', 'Upper de la Paz'],
          Dagohoy: ['Babag', 'Can-oling', 'Candelaria', 'Estaca', 'Cagawasan', 'Cagawitan', 'Caluasan', 'La Esperanza', 'Danao', 'Fatima', 'Loreto', 'Lourdes', 'Malayo Norte', 'Malayo Sur', 'Monserrat'],
          Talibon: ['Bagacay', 'Balintawak', 'Burgos', 'Busalian', 'Calituban', 'Cataban', 'Guindacpan', 'Mahanay', 'Nocnocan', 'Poblacion', 'San Agustin', 'San Francisco', 'San Isidro', 'San Jose', 'San Roque', 'Santo Niño', 'Tanghaligue', 'Anibongan', 'Bagumbayan', 'Bungahan', 'Cagawasan', 'Cagawasan Norte', 'Cagawasan Sur', 'Cagawasan Weste', 'Cagawasan Este'],
          Trinidad: ['Banlasan', 'Bongbong', 'Catoogan', 'Guinobatan', 'Hinlayagan Ilaud', 'Hinlayagan Ilaya', 'Kauswagan', 'Kinan-oan', 'La Union', 'La Victoria', 'Mabuhay Cabiguhan', 'Mahagbu', 'Manuel A. Roxas', 'Poblacion', 'San Isidro', 'San Vicente', 'Santo Tomas', 'Soom', 'Tagum Norte', 'Tagum Sur'],
          Tubigon: ['Bagongbanwa', 'Bunacan', 'Banlasan', 'Batasan', 'Bilangbilangan', 'Bosongon', 'Buenos Aires', 'Cabulihan', 'Cahayag', 'Can-uba', 'Cansague', 'Cansibuan', 'Cansojong', 'Cansumangcay', 'Catagbacan', 'Catangnan', 'Cawayan', 'Cawit', 'Cawit Norte', 'Cawit Sur', 'Cawit Weste', 'Cawit Este', 'Cawit Norte', 'Cawit Sur', 'Cawit Weste', 'Cawit Este', 'Cawit Norte', 'Cawit Sur', 'Cawit Weste', 'Cawit Este', 'Cawit Norte', 'Cawit Sur'],
        }
      },
      NegrosOccidental: {
        municipalities: {
          Bago: ['Abuanan', 'Alianza', 'Atipuluan', 'Bacong-Montilla', 'Bagroy', 'Balingasag', 'Binubuhan', 'Busay', 'Calumangan', 'Caridad', 'Don Jorge L. Araneta', 'Dulao', 'Ilijan', 'Lag-asan', 'Ma-ao', 'Mailum', 'Malingin', 'Napoles', 'Pacol', 'Poblacion', 'Sagasa', 'Tabunan', 'Taloc', 'Sampinit'],
          Bacolod_City: ['Alangilan', 'Alijis', 'Banago', 'Bata', 'Cabug', 'Estefanía', 'Felisa', 'Granada', 'Handumanan', 'Mandalagan', 'Mansilingan', 'Montevista', 'Pahanocoy', 'Punta Taytay', 'Singcang-Airport', 'Sum-ag', 'Taculing', 'Tangub', 'Villamonte', 'Vista Alegre', 'Barangay 1', 'Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 8', 'Barangay 9', 'Barangay 10', 'Barangay 11', 'Barangay 12', 'Barangay 13', 'Barangay 14', 'Barangay 15', 'Barangay 16', 'Barangay 17', 'Barangay 18', 'Barangay 19', 'Barangay 20', 'Barangay 21', 'Barangay 22', 'Barangay 23', 'Barangay 24', 'Barangay 25', 'Barangay 26', 'Barangay 27', 'Barangay 28', 'Barangay 29', 'Barangay 30', 'Barangay 31', 'Barangay 32', 'Barangay 33', 'Barangay 34', 'Barangay 35', 'Barangay 36', 'Barangay 37', 'Barangay 38', 'Barangay 39', 'Barangay 40', 'Barangay 41'],
          Cauayan: ['Abaca', 'Baclao', 'Basak', 'Bulata', 'Caliling', 'Camalanda-an', 'Camindangan', 'Elihan', 'Guiljungan', 'Inayawan', 'Isio', 'Linantuyan', 'Lumbia', 'Mambugsay', 'Masaling', 'Poblacion', 'Sagua Banua', 'Salvacion', 'San Jose', 'Si-alay', 'Talacdan', 'Tiling', 'Tocoy', 'Tuyom', 'Yao-yao'],
          Enrique_B_Magalona: ['Alacaygan', 'Alicante', 'Poblacion I (Barangay 1)', 'Poblacion II (Barangay 2)', 'Poblacion III (Barangay 3)', 'Batea', 'Consing', 'Cudangdang', 'Damgo', 'Gahit', 'Canlusong', 'Latasan', 'Madalag', 'Manta-angan', 'Nanca', 'Pasil', 'San Isidro', 'San Jose', 'Santo Niño', 'Tabigue', 'Tanza', 'Tuburan', 'Tomongtong'],
          Escalante: ['Alimango', 'Balintawak', 'Binaguiohan', 'Buenavista', 'Cervantes', 'Dian-ay', 'Hacienda Fe', 'Japitan', 'Jonobjonob', 'Langub', 'Libertad', 'Mabini', 'Magsaysay', 'Malasibog', 'Old Poblacion', 'Paitan', 'Pinapugasan', 'Rizal', 'Tamlang', 'Udtongan', 'Washington'],
          Himamaylan: ['Aguisan', 'Barangay I (Poblacion)', 'Barangay II (Poblacion)', 'Barangay III (Poblacion)', 'Barangay IV (Poblacion)', 'Buenavista', 'Cabadiangan', 'Cabanbanan', 'Carabalan', 'Caradio-an', 'Libacao', 'Mahalang', 'Mambagaton', 'Nabali-an', 'San Antonio', 'Sara-et', 'Su-ay', 'Talaban', 'To-oy'],
          Cauayan: ['Abaca', 'Baclao', 'Basak', 'Bulata', 'Caliling', 'Camalanda-an', 'Camindangan', 'Elihan', 'Guiljungan', 'Inayawan', 'Isio', 'Linantuyan', 'Lumbia', 'Mambugsay', 'Masaling', 'Poblacion', 'Sagua Banua', 'Salvacion', 'San Jose', 'Si-alay', 'Talacdan', 'Tiling', 'Tocoy', 'Tuyom', 'Yao-yao'],
        }
      },
      NegrosOriental: {
        municipalities: {
          Amlan: ['Bio-os', 'Jantianon', 'Jugno', 'Mag-abo', 'Poblacion', 'Silab', 'Tambojangin', 'Tandayag'],
          Bacong: ['Balayagmanok', 'Banilad', 'Buntis', 'Buntod', 'Calangag', 'Combado', 'Doldol', 'Isugan', 'Liptong', 'Lutao', 'Magsuhot', 'Malabago', 'Mampas', 'North Poblacion', 'Sacsac', 'San Miguel', 'South Poblacion', 'Sulodpan', 'Timbanga', 'Timbao', 'Tubod', 'West Poblacion'],
          Bayawan: ['Ali-is', 'Banaybanay', 'Banga', 'Villasol', 'Boyco', 'Bugay', 'Cansumalig', 'Dawis', 'Kalamtukan', 'Kalumboyan', 'Malabugas', 'Mandu-ao', 'Maninihon', 'Minaba', 'Nangka', 'Narra', 'Pagatban', 'Poblacion', 'San Isidro', 'San Jose', 'San Miguel', 'San Roque', 'Suba', 'Tabuan', 'Tayawan', 'Tinago', 'Ubos', 'Villareal'],
          Bindoy: ['Atotes', 'Batangan', 'Bulod', 'Cabcaban', 'Cabugan', 'Camudlas', 'Canluto', 'Danao', 'Danawan', 'Domolog', 'Malaga', 'Manseje', 'Matobato', 'Nagcasunog', 'Nalundan', 'Pangalaycayan', 'Peñahan', 'Poblacion (Payabon)', 'Salong', 'Tagaytay', 'Tinaogan', 'Tubod'],
          Canlaon: ['Bayog', 'Binalbagan', 'Bucalan', 'Budlasan', 'Mabigo', 'Pula', 'Aquino', 'Linothangan', 'Lumapao', 'Malaiba', 'Masulog', 'Panubigan'],
          Dauin: ['Anahawan', 'Apo Island', 'Bagacay', 'Baslay', 'Batuhon Dacu', 'Boloc-boloc', 'Bulak', 'Bunga', 'Casile', 'Libjo', 'Lipayo', 'Maayongtubig', 'Mag-aso', 'Magsaysay', 'Malongcay Dacu', 'Masaplod Norte', 'Masaplod Sur', 'Panubtuban', 'Poblacion I', 'Poblacion II', 'Poblacion III', 'Tugawe', 'Tunga-tunga'],
          Dumaguete_City: ['Bagacay', 'Bajumpandan', 'Balugo', 'Banilad', 'Bantayan', 'Batinguel', 'Bunao', 'Cadawinonan', 'Calindagan', 'Camanjac', 'Candau-ay', 'Cantil-e', 'Daro', 'Junob', 'Looc', 'Mangnao', 'Piapi', 'Polangui', 'Pulantubig', 'Puhagan', 'Pulangbato', 'Pulangyuta', 'Taclobo', 'Talay', 'Tigbauan', 'Tugas', 'Tudtud', 'Tugas', 'Tudtud', 'Tudtud'],
          Jimalalud: ['Aglahug', 'Agutayon', 'Ampanangon', 'Bae', 'Bala-as', 'Bangcal', 'Banog', 'Buto', 'Cabang', 'Camandayon', 'Cangharay', 'Canlahao', 'Dayoyo', 'Yli', 'Lacaon', 'Mahanlud', 'Malabago', 'Mambaid', 'Mongpong', 'Owacan', 'Pacuan', 'Panglaya-an', 'North Poblacion', 'South Poblacion', 'Polopantao', 'Sampiniton', 'Talamban', 'Tamao'],
          Mabinay: ['Abis', 'Arebasore', 'Bagtic', 'Banban', 'Barras', 'Bato', 'Bugnay', 'Bulibulihan', 'Bulwang', 'Campanun-an', 'Canggohob', 'Cansal-ing', 'Dagbasan', 'Dahile', 'Himocdongon', 'Hagtu', 'Inapoy', 'Lamdas', 'Lumbangan', 'Luyang', 'Manlingay', 'Mayaposi', 'Napasu-an', 'New Namangka', 'Old Namangka', 'Pandanon', 'Paniabonan', 'Pantao', 'Poblacion', 'Samac', 'Tadlong'],
          Manjuyod: ['Alangilanan', 'Bagtic', 'Balaas', 'Bantolinao', 'Bolisong', 'Butong', 'Campuyo', 'Candabong', 'Concepcion', 'Dungo-an', 'Kauswagan', 'Libjo', 'Lamogong', 'Maaslum', 'Mandalupang', 'Panciao', 'Poblacion', 'Sac-sac', 'Salvacion', 'San Isidro', 'San Jose', 'Santa Monica', 'Suba', 'Sundo-an', 'Tanglad', 'Tubod', 'Tupas'],
          Pamplona: ['Abante', 'Balayong', 'Banawe', 'Calicanan', 'Datagon', 'Fatima', 'Inawasan', 'Magsusunog', 'Malalangsi', 'Mamburao', 'Mangoto', 'Poblacion', 'San Isidro', 'Santa Agueda', 'Simborio', 'Yupisan'],
        }
      },
      Sequijor: {
        municipalities: {
          Enrique_Villanueva: ['Bitaug', 'Bolot', 'Camogao', 'Cangmangki', 'Libo', 'Lomangcapan', 'Manan-ao', 'Mansanghan', 'Mantalip', 'Mantalip-Ilaya', 'Poblacion', 'San Isidro', 'San Juan', 'Tulapos'],
          Lazi: ['Campalanas', 'Cangclaran', 'Cangomantong', 'Capalasanan', 'Catamboan', 'Gabayan', 'Kimba', 'Kinamandagan', 'Lower Cabangcalan', 'Nagerong', 'Po-o', 'Simacolong', 'Tagmanocan', 'Talayong', 'Tigbawan', 'Tignao', 'Upper Cabangcalan', 'Ytaya'],
          Maria: ['Bogo', 'Bonga', 'Cabal-asan', 'Calunasan', 'Candaping A', 'Candaping B', 'Cantaroc A', 'Cantaroc B', 'Cantugbas', 'Lico-an', 'Lilo-an', 'Looc', 'Logucan', 'Minalulan', 'Nabutay', 'Olang', 'Pisong A', 'Pisong B', 'Poblacion Norte', 'Poblacion Sur', 'Saguing', 'Sawang'],
          San_Juan: ['Canasagan', 'Candura', 'Cangmunag', 'Cansayang', 'Catulayan', 'Lala-o', 'Maite', 'Napo', 'Paliton', 'Poblacion', 'San Isidro', 'San Juan', 'San Vicente', 'Solangon', 'Timbaon'],  
        }  
      }
    };
    provinceSelect.addEventListener('change', function () {
      const selectedProvince = provinceSelect.value;
      municipalitySelect.innerHTML = '<option value="">Select Municipality</option>';
      citySelect.innerHTML = '<option value="">Select City</option>';
      if (data[selectedProvince]) {
        for (const municipality in data[selectedProvince].municipalities) {
          const option = document.createElement('option');
          option.value = municipality;
          option.textContent = municipality;
          municipalitySelect.appendChild(option);
        }
      }
    });

    municipalitySelect.addEventListener('change', function () {
      const selectedProvince = provinceSelect.value;
      const selectedMunicipality = municipalitySelect.value;
      citySelect.innerHTML = '<option value="">Select City</option>';
      if (
        data[selectedProvince] &&
        data[selectedProvince].municipalities[selectedMunicipality]
      ) {
        for (const city of data[selectedProvince].municipalities[selectedMunicipality]) {
          const option = document.createElement('option');
          option.value = city;
          option.textContent = city;
          citySelect.appendChild(option);
        }
      }
    });
  </script>
  
</div>
</body>
</html>"