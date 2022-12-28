<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pensia</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <form method="post" action="/pensia.php">
      <input required class="fi" placeholder="Name" name="name" type="text">
      <input required class="fi" placeholder="Group" name="group" type="text">
      <select required class="fi" name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <select required class="fi" name="year" >
        <option label>Year</option>
        <?php 
                
                for($i = 1900; $i <= 2022; $i++){?>
            <option  value="<?php echo $i?>"?>
                    <?php echo $i?>
            </option>
        <?php }?>   
        </select>
        <select required class="fi" name="month" >
        <option label>Month</option>
        <?php for($i = 1; $i <= 12; $i++){?>
            <option  value="<?php echo $i?>"?>
                    <?php echo $i?>
            </option>
        <?php }?>   
        </select>
        <select required class="fi" name="dayz" >
        <option label>Day</option>
        <?php for($i = 1; $i <= 31; $i++){?>
            <option  value="<?php echo $i?>"?>
                    <?php echo $i?>
            </option>
        <?php }?>     
        </select>
        <div class="drivers">
          <label for="driver">У вас есть права?</label>
          <input type="checkbox" name="driver" id="driver">
        </div>
        <input class="fi btn" type="submit" value="Go" name="done">
        <div class="pensia">
          <?= $_SESSION['message'] ?>
        </div>
    </form>
  </div>
</body>
</html>