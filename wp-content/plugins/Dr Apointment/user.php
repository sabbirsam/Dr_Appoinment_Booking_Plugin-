<?php

/*
Template Name: user
*/



?>
<?php get_header();?>


    
<form action="" method="post">
    <div class="wrap" >
        <h2>Patient Appointment Registration</h2>
                <div id="post-body-content" class="edit-form-section edit-comment-section" style="max-width: 50%; padding: 10px;">
                    <div class="inside">
                        <div id="comment-link-box">

                        </div>
                    </div>
                    <div id="namediv" class="stuffbox">
                        <div class="inside">
                            <h2 style=" padding: 10px;" class="edit-comment-author">Appoinment Registration</h2>
                            <fieldset>
                                <legend class="screen-reader-text">Appoinment Registration</legend>
                                <table class="form-table editcomment" role="presentation">
                                    <tbody>
                                    <tr>
                                        <td class="first"><label for="name">Patient name</label></td>
                                        <td><input type="text" required name="name" size="30" value="" id="title"></td>
                                    </tr>

                                    <tr>
                                        <td class="first"><label for="name">Patient phone</label></td>
                                        <td><input type="text" required name="phone" size="30" value="" id="title"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="first"><label for="name">Patient Email</label></td>
                                        <td><input type="email" required name="email" size="30" value="" id="title"></td>
                                    </tr>

                                    <tr>
                                        <td class="first"><label for="name">Address</label></td>
                                        <td><input type="text" required name="address" size="30" value="" id="title"></td>
                                    </tr>

                                    <tr>
                                        <td class="first"><label for="name">Doctor</label></td>
                                        <td><input type="text" required name="doc" size="30" value="" id="title"></td>
                                    </tr>


                                    <tr>
                                        <td class="first"><label for="name">Type of Disease</label></td>
                                        <td><input type="text" required name="tod" size="30" value="" id="title"></td>
                                    </tr>

                                    <tr>
                                        <?php $nextSunday = date('Y-m-d', strtotime('next sunday')); ?>
                                        <td class="first"><label for="name"> Date </label></td>
                                        <td><input type="date" required name="date" value="<?php echo "$nextSunday" ?>" id="service_day"></td>
                                    </tr>
                                    

                                    <tr>
                                        <td> <button id="newsubmit" name="newsubmit" class="button button-success"  type="submit">Create</button> </td>
                                    </tr>
                                    <tr>
                                        <td> <button id="newsubmit2" name="newsubmitss" class="button button-success"  type="submit">Back</button> </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                    </div>


                </div>


            </form>



<?php 



function DBP_insert_data(){
    global $wpdb;

    $table_name = $wpdb->prefix.'members_registration';

    $patient_name= $_POST['name'];
    $phone_number= $_POST['phone'];
    $patient_email= $_POST['email'];
    $patient_address= $_POST['address'];
    $doctors= $_POST['doc'];
    $type_of_dis= $_POST['tod'];
    $dates= $_POST['date'];



    if(isset($_POST['newsubmit'])){
        $wpdb -> insert($table_name,
                            array(
                                'patient_name'=>$patient_name,
                                'patient_phone'=>$phone_number,
                                'patient_email'=> $patient_email,
                                'address'=>$patient_address,
                                'doctor'=>$doctors,
                                'type_of_disease'=>$type_of_dis,
                                'date'=> $dates
                            ),
                            array(
                                '%s',
                                '%s',
                                '%s',
                                '%s',
                                '%s',
                                '%s',
                                // '%YYYY-MM-DD'
                            )
    
                      );
            }

// $this->setShortcodePage();
// add_shortcode('user-form', array($this, 'user_form'));

}

// public function user_form(){
//     ob_start();
//     require_once("$this->plugin_path/user.php");
//     return ob_get_clean();

// }





?> 
<?php get_footer();?>