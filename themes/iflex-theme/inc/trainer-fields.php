<?php 


/*
*
 Purpose: Show a dropdown for trainer user that admin can use to choose a 
 trainer level during registing or editing a trainer role

 - Admin editing  another trainer role 
 - Admin adding Anoter trainer Role
*/ 


function iflex_trainer_level($user){ ?>
   <h3>Trainer Level</h3>
   <table class="form-table">
    <tr>
        <th><Label for="trainer_level">Trainer Level</Label></th>
        <td>
            <select name="trainer_level" id="trainer_level">
                <?php 
                
                  $levels = array('Level 1 - Functional','Level 2 - Advanced','Level 3 - Expert', 'In progress');
                  $saved_level = ($user) ? get_user_meta( $user->ID, 'trainer_level', true ) : '';

                  foreach($levels as $level){ ?>
                        <option value="<?php echo esc_attr($level)?>" <?php selected( $saved_level, $level, true )?>>
                            <?php echo ucfirst($level) ?>
                        </option>
                  <?php }
                ?>
            </select>
        </td>
    </tr>
   </table>

<?php }

add_action( 'edit_user_profile', 'iflex_trainer_level'); // when an admin a trainer role 
add_action( 'user_new_form', 'iflex_trainer_level' ); // when an admin add a new trainer role

// save the data
function iflex_trainer_level_save($user_id){
   if(!current_user_can( 'edit_user', $user_id)) return;

   if(isset($_POST['trainer_level'])){
     update_user_meta( $user_id, 'trainer_level', sanitize_text_field( $_POST['trainer_level'] ));
   }
}

add_action( 'edit_user_profile_update', 'iflex_trainer_level_save');
add_action('user_register', 'iflex_trainer_level_save');
