
<?php

/*
Template Name: display

*/

?>
<?php get_header();?>


<?php 



    global $wpdb; 
    $table_name = $wpdb->prefix.'members_registration';
    $DBP_results= $wpdb->get_results("SELECT * FROM $table_name");







?>
<style>
    .display-table table {
  width: 100%;
  border-collapse: collapse;
}
/* Zebra striping */
.display-table tr:nth-of-type(odd) {
  background: #eee;
}
.display-table th {
  background: #333;
  color: white;
  font-weight: bold;
}
.display-table td,
th {
  padding: 6px;
  border: 1px solid #ccc;
  text-align: left;
}

</style>

<div class="display-table">
    <table cellspacing="0">
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
        
        </tr>
        </thead>
<?php foreach($DBP_results as $DEP_row) { 
        $id=$DEP_row ->user_id;  
        $p_name=$DEP_row ->patient_name;  
        $p_number=$DEP_row ->patient_phone;  
        $email=$DEP_row ->patient_email;  
        $addr=$DEP_row ->address;  
        $doc=$DEP_row ->doctor;  
        $dis=$DEP_row ->type_of_disease;  
        $a_date=$DEP_row ->date;  
    
    
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

</div>

<?php get_footer();?>








