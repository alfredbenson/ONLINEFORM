<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $middleInitial = htmlspecialchars($_POST['middleInitial']);
    $dob = htmlspecialchars($_POST['dob']);
    $sex = htmlspecialchars($_POST['sex']);
    $age = htmlspecialchars($_POST['age']);
   
    $status = htmlspecialchars($_POST['status']);  
    $tin = htmlspecialchars($_POST['tin']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $religion = htmlspecialchars($_POST['religion']);
    
   //<!-- Place Of Birth section -->//
    $ub= htmlspecialchars($_POST['ub']);
    $hlb = htmlspecialchars($_POST['hlb']);
    $sn = htmlspecialchars($_POST['sn']);
    $sd = htmlspecialchars($_POST['sd']);
    $dbl = htmlspecialchars($_POST['dbl']);
    $cm = htmlspecialchars($_POST['cm']);
    $pv = htmlspecialchars($_POST['pv']);
    $zc = htmlspecialchars($_POST['zc']);
    $ct = htmlspecialchars($_POST['ct']);
   
    //<!-- Home Address section -->//
  
  $unit_bldg = htmlspecialchars($_POST['unit_bldg']);
  $house_lot_blk = htmlspecialchars($_POST['house_lot_blk']);
  $street_name = htmlspecialchars($_POST['street_name']);
  $subdivision = htmlspecialchars($_POST['subdivision']);
  $district = htmlspecialchars($_POST['district']);
  $municipality = htmlspecialchars($_POST['municipality']);
  $province = htmlspecialchars($_POST['province']);
  $country = htmlspecialchars($_POST['country']);
  $zipcode = htmlspecialchars($_POST['zipcode']);
  $cell= htmlspecialchars($_POST['cell']);
  $email= htmlspecialchars($_POST['email']);
  $tel= htmlspecialchars($_POST['tel']);

  //<!-- Fathers section -->//
  $lname= htmlspecialchars($_POST['lname']);
  $fname= htmlspecialchars($_POST['fname']);
  $mi= htmlspecialchars($_POST['mi']);
  //<!-- Mothers section -->//
  $ln= htmlspecialchars($_POST['ln']);
  $fn= htmlspecialchars($_POST['fn']);
  $mid= htmlspecialchars($_POST['mid']);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submitted Form Data</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
  <div class="max-w-4xl mx-auto mt-10 p-8 bg-white shadow-md rounded-xl">
    <h1 class="text-2xl font-bold text-center">Submitted Information</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      
    <table class="table-auto w-full mt-6 border-collapse border border-gray-400">
      <thead>
        <tr class="bg-gray-200">
          <th class="border border-gray-400 px-4 py-2">Personal Data</th>
          
        </tr>
      </thead>
      <tbody>
        
        <tr><td class="border px-4 py-2">Full Name</td><td class="border px-4 py-2"><?php echo "$lastName, $firstName $middleInitial."; ?></td></tr>
        <tr><td class="border px-4 py-2">Date of Birth</td><td class="border px-4 py-2"><?php echo $dob; ?></td></tr>
        <tr><td class="border px-4 py-2">Sex</td><td class="border px-4 py-2"><?php echo $sex; ?></td></tr>
        <tr><td class="border px-4 py-2">Age</td><td class="border px-4 py-2"><?php echo $age; ?></td></tr>
        
        <tr><td class="border px-4 py-2">Civil Status</td><td class="border px-4 py-2"><?php echo $status; ?></td></tr>
        <tr><td class="border px-4 py-2">Tax Identification Number</td><td class="border px-4 py-2"><?php echo $tin; ?></td></tr>
        <tr><td class="border px-4 py-2">Nationality</td><td class="border px-4 py-2"><?php echo $nationality; ?></td></tr>
        <tr><td class="border px-4 py-2">Religion</td><td class="border px-4 py-2"><?php echo $religion; ?></td></tr>
        <tr class="bg-gray-200"><th class="border border-gray-400  py-2"> Place of Birth</th></tr>
        <tr><td class="border px-4 py-2">Place of Birth - Unit/Bldg</td><td class="border px-4 py-2"><?php echo $ub; ?></td></tr>
        <tr><td class="border px-4 py-2">House/Lot & Blk</td><td class="border px-4 py-2"><?php echo $hlb; ?></td></tr>
        <tr><td class="border px-4 py-2">Street Name</td><td class="border px-4 py-2"><?php echo $sn; ?></td></tr>
        <tr><td class="border px-4 py-2">Subdivision</td><td class="border px-4 py-2"><?php echo $sd; ?></td></tr>
        <tr><td class="border px-4 py-2">Barangay/District/Locality</td><td class="border px-4 py-2"><?php echo $dbl; ?></td></tr>
        <tr><td class="border px-4 py-2">City/Municipality</td><td class="border px-4 py-2"><?php echo $cm; ?></td></tr>
        <tr><td class="border px-4 py-2">Province</td><td class="border px-4 py-2"><?php echo $pv; ?></td></tr>
        <tr><td class="border px-4 py-2">Country</td><td class="border px-4 py-2"><?php echo $ct; ?></td></tr>
        <tr><td class="border px-4 py-2">Zip Code</td><td class="border px-4 py-2"><?php echo $zc; ?></td></tr>
        <tr class="bg-gray-200"><th class="border border-gray-400  py-2">Home Address</th></tr>
        <tr><td class="border px-4 py-2">Unit/Bldg</td><td class="border px-4 py-2"><?php echo $unit_bldg; ?></td></tr>
        <tr><td class="border px-4 py-2">House/Lot & Blk</td><td class="border px-4 py-2"><?php echo $house_lot_blk; ?></td></tr>
        <tr><td class="border px-4 py-2">Street Name</td><td class="border px-4 py-2"><?php echo $street_name; ?></td></tr>
        <tr><td class="border px-4 py-2">Subdivision</td><td class="border px-4 py-2"><?php echo $subdivision; ?></td></tr>
        <tr><td class="border px-4 py-2">Barangay/District/Locality</td><td class="border px-4 py-2"><?php echo $district; ?></td></tr>
        <tr><td class="border px-4 py-2">City/Municipality</td><td class="border px-4 py-2"><?php echo $municipality; ?></td></tr>
        <tr><td class="border px-4 py-2">Province</td><td class="border px-4 py-2"><?php echo $province; ?></td></tr>
        <tr><td class="border px-4 py-2">Country</td><td class="border px-4 py-2"><?php echo $country; ?></td></tr>
        <tr><td class="border px-4 py-2">Zip Code</td><td class="border px-4 py-2"><?php echo $zipcode; ?></td></tr>
        <tr><td class="border px-4 py-2">Cellphone</td><td class="border px-4 py-2"><?php echo $cell; ?></td></tr>
        <tr><td class="border px-4 py-2">Email</td><td class="border px-4 py-2"><?php echo $email; ?></td></tr>
        <tr><td class="border px-4 py-2">Telephone</td><td class="border px-4 py-2"><?php echo $tel; ?></td></tr>
        <tr class="bg-gray-200"><th class="border border-gray-400  py-2">Father's Name</th></tr>
        <tr><td class="border px-4 py-2">Full Name</td><td class="border px-4 py-2"><?php echo "$lname, $fname $mi."; ?></td></tr>
        <tr class="bg-gray-200"><th class="border border-gray-400  py-2">Mother's Name</th></tr>
        <tr><td class="border px-4 py-2">Full Name</td><td class="border px-4 py-2"><?php echo "$ln, $fn $mid."; ?></td></tr>
        
      </tbody>
    </table>
    <?php else: ?>
      <p class="text-red-500  text-center">No form data submitted yet.Please Go to SignForm and Run kung dli mo run,ay ikaw ang mo dagan!!!</p>
    <?php endif; ?>
  </div>
</body>
</html>
