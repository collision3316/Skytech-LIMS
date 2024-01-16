<?php include "templates/include/header.html" ?>
<br><br><br><br><br><br>

      <form action="admin.php?action=login" method="post" class="w3-center">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" /><br><br>
          </li>

          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>

        </ul>

        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>

      </form>
      <a href="../dashboard.php" class="w3-button">DASHBOARD</a>

<?php include "templates/include/footer.html" ?>