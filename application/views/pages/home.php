<h1 class="container center_div">
<?= $title;?>
</h1>


<div>
    <div class="container alert alert-info border border-primary center_div">

        <form action="<?php echo base_url();?>registration/validation">
          
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter your username" name="username" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
          </div>

          <div class="mb-3">
            <label for="lastname" class="form-label">Last name:</label>
            <input type="lastname" class="form-control" id="lastname" placeholder="Enter your lastname" name="lastname" required>
          </div>

          <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="firstname" class="form-control" id="firstname" placeholder="Enter your firstname" name="firstname" required>
          </div>

        <label for="sel1" class="form-label">Select Municipality (select one):</label>
          <?php

          define('DB_SERVER', 'localhost');
          define('DB_USERNAME', 'root');
          define('DB_PASSWORD', '');
          define('DB_NAME', 'registration');

          $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

          if($link === false){
            die("Error: Could not connect." .mysqli_connect_error());
          }


          if(isset($_GET['municipality'])){
            $municipalityAddress = $_GET['municipality'];
          
          $sql = "SELECT * FROM address WHERE id = $municipalityAddress";
          if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
                $dbselected = $row['municipality'];

              }

              mysql_free_result($result);

            } 
            else{
              echo "Something went wrong!";
            }
          }
          else{
            echo "ERROR: Could not execute $sql" .mysql_error($link);
          }
        }

        $options = array('Manila', 'Quezon City', 'Caloocan', 'Las Pinas', 'Makati', 'Malabon', 'Mandaluyong','Marikina','Muntinlupa','Navotas','Paranaque','Pasay','Pasig','San Juan','Taguig','Valenzuela');
        echo "<Select Municipality>";
        foreach($options as $option){
          if($dbselected == $option){
            echo "option selected = 'selected' value = '$option'>$option</option>"; 
          }
          else{
            echo "<option value= '$option'>$option</option>";
          }
        }

        echo "</select>";
          ?>
          <br>

        <label for="sel1" class="form-label">Select Municipality (select one):</label>
          <?php

          if($link === false){
            die("Error: Could not connect." .mysqli_connect_error());
          }

          if(isset($_GET['municipality'])){
            $municipalityAddress = $_GET['municipality'];
          
          $sql = "SELECT * FROM address WHERE id = $municipalityAddress";
          if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
                $dbselected = $row['municipality'];

              }

              mysql_free_result($result);

            } 
            else{
              echo "Something went wrong!";
            }
          }
          else{
            echo "ERROR: Could not execute $sql" .mysql_error($link);
          }
        }

        $options = array('Manila', 'Quezon City', 'Caloocan', 'Las Pinas', 'Makati', 'Malabon', 'Mandaluyong','Marikina','Muntinlupa','Navotas','Paranaque','Pasay','Pasig','San Juan','Taguig','Valenzuela');
        echo "<select>";
        foreach($options as $option){
          if($dbselected == $option){
            echo "option selected = 'selected' value = '$option'>$option</option>"; 
          }
          else{
            echo "<option value= '$option'>$option</option>";
          }
        }

        echo "</select>";
          ?>

          <div class="mb-3 mt-3">
            <label for="housestreetvillage" class="form-label">House, Street & Village:</label>
            <input type="housestreetvillage" class="form-control" id="housestreetvillage" placeholder="Enter your House, Street & Village" name="housestreetvillage" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="mobilenumber" class="form-label">Mobile Number:</label>
            <input type="mobilenumber" class="form-control" id="mobilenumber" placeholder="Enter your mobile number" name="mobilenumber" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="age" class="form-label">Age:</label>
            <input type="age" class="form-control" id="age" placeholder="Enter your age" name="age" required>
          </div>

          <label for="sel3" class="form-label">Select Gender (select one):</label>
          <select class="form-select" id="sel3" name="sellist3" required>
            <option>M</option>
            <option>F</option>
          </select>

          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
          </div>

        <button type="submit"><a href="<?php echo base_url('confirmation'); ?>">Submit</a></button>
      </form>
    </div>
</div>