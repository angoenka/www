<form action="<?php echo url_for('task/edit?'.http_build_query(array('edittask' => $sf_request->getParameter('edittask')))) ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>