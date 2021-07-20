<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo form_open("Login/login_check") ?>
    <table align="center">
    <h2 class="form-signin-heading">Nasi Tumpeng App</h2>
    <?php
              // untuk menampilkan informasi login
              if(isset($login_info))
              {
                 echo "<font color='#ff0000';>";
                 echo $login_info;
                 echo '</font>';
              }
            ?>
      <tr>
        <td>NIK</td>
        <td>
          <input type="text" name="id_pegawai" value="" placeholder="ID Pegawai" autofocus>
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input type="password" name="password" value="" placeholder="Password">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Log In" ></td>
      </tr>
    </table>
  </body>
</html>
