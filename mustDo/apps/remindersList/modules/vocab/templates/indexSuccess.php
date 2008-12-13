<form action="<?php echo url_for('vocab/index') ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input name="add" value="Add" type="submit" />
      </td>
    </tr>
  </table>
</form>
