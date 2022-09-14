    
    
    <?php
        $title = 'Index'; 

        require_once 'includes/header.php';
        require_once 'db/conn.php';
        

        $results = $crud->getSpecialties();
        
    ?>
        <!--
            - First name
            - Last name
            - Date of birth (use datepicker)
            - Speciality (Database admin, Software Developer, Web Admistrator, Other)
            - Email Address
            - Contact Number
        -->    
    <h1 class="text-center">Registration for IT conference</h1>

    <form method="post" action="success.php">

        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input required type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty">Area Of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value= "<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>    
               
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="email" name="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
   

    </form>
        <br>
        <br>
        <br>
        <br>
        <br>

    <?php require_once 'includes/footer.php'; ?>
    