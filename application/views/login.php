<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nasi Tumpeng Resto</title>
  </head>
  <body>
  <div class="container">
      <div id="form-middle">
      <form method="POST" class="form-signin" action=""><?php echo form_open("Login/login_check") ?>
    <table align="center">
      <center>
    <h2 class="form-signin-heading">Login</h2>
      </center>
      <br>
      <tr>
        <td>
          <label for="id_pegawai" class="sr-only">ID Pegawai &nbsp;</label>
          <input type="text" name="id_pegawai" value="" placeholder="ID Pegawai" autofocus>
        </td>
      </tr>
      <tr>
        <td>
          <label for="password" class="sr-only">Password &nbsp; &nbsp; &nbsp;</label>
          <input type="password" name="password" value="" placeholder="Password" required>
        </td>
      </tr>
      <tr>
        <td>
      <button input type="submit" name="submit" value="Log In" >Log In</button>
      </tr>
    </table>
  </body>
</html>
