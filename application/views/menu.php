<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    List Menu
    <table>
      <?php foreach ($data as $value): ?>
        <tr>
          <td><?php echo $value->nama_menu ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <?php if ($this->session->userdata('jabatan')=='Pelayan'): ?>
      
    <?php endif; ?>
  </body>
</html>
