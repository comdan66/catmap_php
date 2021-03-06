<?php echo render_cell ('admin_frame_cell', 'header');?>

<div id='container'>

<?php
    if (isset ($message) && $message) { ?>
      <div class='error'><?php echo $message;?></div>
<?php
    } ?>

    <form action='<?php echo base_url ('admin', 'likes', 'create');?>' method='post' enctype='multipart/form-data'>
      <table class='table-form'>
        <tbody>
          <tr>
            <th>會員</th>
            <td>
        <?php if ($users = User::all ()) { ?>
                <select name='user_id'>
            <?php foreach ($users as $user) { ?>
                    <option value='<?php echo $user->id;?>'<?php echo $user_id == $user->id ? "selected" : "";?>><?php echo $user->name;?></option>
            <?php } ?>
                </select>
        <?php }?>
            </td>
          </tr>
          <tr>
            <th>照片</th>
            <td>
        <?php if ($pictures = Picture::all ()) { ?>
                <select name='picture_id'>
            <?php foreach ($pictures as $picture) { ?>
                    <option value='<?php echo $picture->id;?>'<?php echo $picture_id == $picture->id ? "selected" : "";?>><?php echo $picture->title;?></option>
            <?php } ?>
                </select>
        <?php }?>
            </td>
          </tr>
          <tr>
            <td colspan='2'>
              <a href='<?php echo base_url ('admin', 'likes');?>'>回列表</a>
              <button type='reset' class='button'>重填</button>
              <button type='submit' class='button'>確定</button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

</div>

<?php echo render_cell ('admin_frame_cell', 'footer');?>
