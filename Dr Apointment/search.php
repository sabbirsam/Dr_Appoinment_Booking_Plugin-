<?php



add_action('admin_enqueue_scripts', 'search_stylesheets'); 

function search_stylesheets(){
    wp_enqueue_style('cover_stylesheet',plugins_url('../css/bootstrap.css',__FILE__));   //1st css link with custome name cover_stylesheet
    wp_enqueue_style('cover_stylesheet2',plugins_url('../css/dataTables.bootstrap4.min.css',__FILE__));//2nd css link with custome name cover_stylesheet
}






add_action('admin_enqueue_scripts', 'reg_scarch');
function reg_scarch(){
    wp_enqueue_script('js_jquery_file',plugins_url('../js/dataTables.bootstrap4.min.js',__FILE__));
    wp_enqueue_script('js_jquery_file',plugins_url('../js/jquery-3.5.1.js',__FILE__));
    wp_enqueue_script('js_jquery_file',plugins_url('../js/jquery.dataTables.min.js',__FILE__));
    wp_enqueue_script('js_jquery_file',plugins_url('../js/sas.js',__FILE__));
    
}

?>




<?php 



    global $wpdb; 
    $table_names = $wpdb->prefix.'members_search';
    $DBP_search= $wpdb->get_results("SELECT * FROM $table_names");



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <link href="" rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/sas.js"></script>
    
  </head>
  <body>
    <h3>Search your Appointment date and doctor with patient information</h3>
    <hr>
    <hr>

    <table id="search" class="table table-striped table-bordered" style="width:100%">
    <thead>
            <tr>
                <th>User ID</th>
                <th>Patient Name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Doctor</th>
                <th>Disease</th>
                <th>Apointment Date</th>
                
        </thead>

        <?php foreach($DBP_search as $DEP_rows) { 
                $id=$DEP_rows ->user_id;  
                $p_name=$DEP_rows ->patient_name;  
                $p_number=$DEP_rows ->patient_phone;  
                $email=$DEP_rows ->patient_email;  
                $addr=$DEP_rows ->address;  
                $doc=$DEP_rows ->doctor;  
                $dis=$DEP_rows ->type_of_disease;  
                $a_date=$DEP_rows ->date;  
            
    
    ?>


        <tbody>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $p_name; ?></td>
                <td><?php echo $p_number; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $addr; ?></td>
                <td><?php echo $doc; ?></td>
                <td><?php echo $dis; ?></td>
                <td><?php echo $a_date; ?></td>
                </tr>
        </tbody>
    

    <?php } ?>
    </table>


   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>