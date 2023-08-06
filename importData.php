<?php
 require '../head/header.php';
// Load the database configuration file
include_once '../class/db_config.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $name       = $line[0];
                $lastname   = $line[1];
                $age        = $line[2];
                $bday       = $line[3];
                $email      = $line[4];
                $mobile     = $line[5];
                $address    = $line[6];
            
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM tbl_admin WHERE email = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $db->query("UPDATE tbl_admin SET name = '".$name."', lastname = '".$lastname."', age = '".$age."', bday = '".$bday."', email = '".$email."', 
                    mobile = '".$mobile."', address = '".$address."' WHERE email = '".$email."'");
                }else{
                    // Insert member data in the database
                    $db->query("INSERT INTO tbl_admin (name, lastname, age, bday, email, mobile, address) VALUES
                     ('".$name."', '".$lastname."', '".$age."', '".$bday."', '".$email."', '".$mobile."','".$address."')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = "<script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'File Added Successfully',
            showConfirmButton: false,
            timer: 1000
            }).then(function() {
            window.location.href = '../admin_page.php#portfolio';
            })
            </script>";
        }else{
            $qstring = "<script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Unsuccessfull ',
            showConfirmButton: false,
            timer: 1000
            }).then(function() {
            window.location.href = '../admin_page.php#portfolio';
            })
            </script>";
        }
    }else{
        $qstring = "<script>
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Please upload a valid CSV file',
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
        window.location.href = '../admin_page.php#portfolio';
        })
        </script>";
    }
}

// Redirect to the listing page

echo $qstring;


