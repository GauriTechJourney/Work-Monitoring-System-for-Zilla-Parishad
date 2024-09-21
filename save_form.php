<?php
// Database connection
$servername = "localhost";
$username = "u432726438_setu"; // Replace with your database username
$password = "Setu@007"; // Replace with your database password
$dbname = "u432726438_setu"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch data from the form
$BenificiaryUID = $_POST['BenificiaryUID'] ?? '';
$ApplicantUID = $_POST['ApplicantUID'] ?? '';
$IncomeCeritificate = $_POST['IncomeCeritificate'] ?? '';
$Salutation = $_POST['Salutation'] ?? '';
$FullNameEnglish = $_POST['FullNameEnglish'] ?? '';
$FullNameMarathi = $_POST['FullNameMarathi'] ?? '';
$SalutationFather = $_POST['SalutationFather'] ?? '';
$FatherNameEnglish = $_POST['FatherNameEnglish'] ?? '';
$FatherNameMarathi = $_POST['FatherNameMarathi'] ?? '';
$DOB = $_POST['DOB'] ?? '';
$age = $_POST['age'] ?? '';
$Gender = $_POST['Gender'] ?? '';
$Occupation = $_POST['Occupation'] ?? '';
$Mobile = $_POST['Mobile'] ?? '';
$Address = $_POST['Address'] ?? '';
$MRAddress = $_POST['MRAddress'] ?? '';
$District = $_POST['District'] ?? '';
$Taluka = $_POST['Taluka'] ?? '';
$Village = $_POST['Village'] ?? '';
$Pincode = $_POST['Pincode'] ?? '';
$Relation = $_POST['Relation'] ?? '';
$BeneficiarySalutation = $_POST['BeneficiarySalutation'] ?? '';
$BeneficiaryNameEnglish = $_POST['BeneficiaryNameEnglish'] ?? '';
$BeneficiaryNameMarathi = $_POST['BeneficiaryNameMarathi'] ?? '';
$Income_2022_2023 = $_POST['Income_2022_2023'] ?? '';
$Income_2023_2024 = $_POST['Income_2023_2024'] ?? '';
$Income_2024_2025 = $_POST['Income_2024_2025'] ?? '';


// Prepare and execute SQL statement to insert data into database
$sql = "INSERT INTO income (BenificiaryUID, ApplicantUID, IncomeCeritificate, Salutation, FullNameEnglish, FullNameMarathi, SalutationFather, FatherNameEnglish, FatherNameMarathi, DOB, age, Gender, Occupation, Mobile, Address, MRAddress, District, Taluka, Village, Pincode, Relation, BeneficiarySalutation, BeneficiaryNameEnglish, BeneficiaryNameMarathi, Income_2022_2023, Income_2023_2024, Income_2024_2025) VALUES ('$BenificiaryUID', '$ApplicantUID', '$IncomeCeritificate', '$Salutation', '$FullNameEnglish', '$FullNameMarathi', '$SalutationFather', '$FatherNameEnglish', '$FatherNameMarathi', '$DOB', '$age', '$Gender', '$Occupation', '$Mobile', '$Address', '$MRAddress', '$District', '$Taluka', '$Village', '$Pincode', '$Relation', '$BeneficiarySalutation', '$BeneficiaryNameEnglish', '$BeneficiaryNameMarathi', '$Income_2022_2023', '$Income_2023_2024', '$Income_2024_2025')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
