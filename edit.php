    
    
    <?php
        $title = 'Edit Record'; 

        require_once 'includes/header.php';
        require_once 'db/conn.php';

        $results = $crud->getSpecialties();

        if(!isset($_GET['id'])){
            echo 'error';
        }
        else{
            $id=$_GET['id'];
            $attendee = $crud->getAttendeeDetails($id);
        


    ?>
           
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="success.php">

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty">Area Of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value= "<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] ==
                    $attendee['specialty_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php }?>    
               
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $attendee['emailaddress'] ?>" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="email" value="<?php echo $attendee['contactnumber'] ?>" name="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
        </div>
   
    </form>

         <?php } ?>
        <br>
        <br>
        <br>
        <br>
        <br>

    <?php require_once 'includes/footer.php'; ?>
    