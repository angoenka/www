<table border="1"> 
<tr>
<?php
    if($query_str['order'] == 1)
        $order = 0;
    else
        $order = 1;                                                                                                
?>
<td><a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => 'taskString', 'order' => $order, 'startNum' => $query_str['startNum']))) ?>">Task Name</a></td>
<td><a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => 'taskpriority',  'order' => $order, 'startNum' => $query_str['startNum']))) ?>">Priority</a></td>
<td><a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => 'creationDate',  'order' => $order, 'startNum' => $query_str['startNum']))) ?>">Created Date</a></td>
<td><a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => 'updateDate',  'order' => $order, 'startNum' => $query_str['startNum']))) ?>">Last Updated Date</a></td>
<td><a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => 'active',  'order' => $order, 'startNum' => $query_str['startNum']))) ?>">Status</a></td>
<td></td>
</tr>
<?php
    for($i=0; $i < sizeof($final); $i++){
        $temp = new Tasks();
        $temp = $final["$i"];
?>
<tr><td> <?php echo $temp->getTaskstring() ?> </td>
    <td> <?php echo $temp->getTaskpriority() ?> </td>
    <td> <?php 
        $createdt = $temp->getCreationdate();
        echo substr($createdt,0, strpos($createdt,' ')); ?> </td>
    <td> <?php 
        $updatedt = $temp->getUpdatedate();
        echo substr($updatedt,0, strpos($updatedt,' ')); ?> </td>
    <td> <?php echo $temp->getActive() ?>
    <?php if($temp->getActive() != 1){ ?>
        &nbsp;&nbsp;(<a href="<?php echo url_for('task/statechange?'.http_build_query(array_merge(array('activate' => $temp->getTaskid()), $query_str))) ?>">Activate</a>)&nbsp;</td>
    <?php }else{ ?>
        &nbsp;&nbsp;(<a href="<?php echo url_for('task/statechange?'.http_build_query(array_merge(array('deactivate' => $temp->getTaskid()), $query_str))) ?>">De-Activate</a>)&nbsp;</td>
    <?php } ?>
    <td><a href="<?php echo url_for('task/edit?'.http_build_query(array('edittask' => $temp->getTaskid()))) ?>">Edit</a>&nbsp;&nbsp;<a href="<?php echo url_for('task/delete?'.http_build_query(array_merge(array('delete' => $temp->getTaskid()), $query_str))) ?>">Delete</a></td> 
<?php        
    }
?>
</tr> <tr>
<td colspan="7" align="right">
    <?php if(sizeof($result) > sfConfig::get('app_max_task_table_size') && $query_str['startNum'] != 0){ ?>
        <a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => $query_str['sort'], 'order' => $query_str['order'], 'startNum' => 0))) ?>">
     [&lt;]</a>&nbsp;&nbsp;
    <?php }if($query_str['startNum'] + sizeof($final) > sfConfig::get('app_max_task_table_size')){ ?>
        <a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => $query_str['sort'], 'order' => $query_str['order'], 'startNum' => $query_str['startNum'] - sfConfig::get('app_max_task_table_size')))) ?>">
            &lt;&lt;Previous</a>&nbsp;&nbsp;
    <?php } echo ($query_str['startNum'] + 1).' to '.($query_str['startNum'] + sizeof($final)).' of '.sizeof($result);
        if($query_str['startNum'] + sizeof($final) < sizeof($result)){ ?>&nbsp;&nbsp; 
        <a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => $query_str['sort'], 'order' => $query_str['order'], 'startNum' => $query_str['startNum'] + sfConfig::get('app_max_task_table_size')))) ?>">
           Next&gt;&gt;</a>&nbsp;&nbsp;
    <?php }if($query_str['startNum'] + sfConfig::get('app_max_task_table_size') < sizeof($result)){ ?>
        <a href="<?php echo url_for('task/show?'.http_build_query(array('sort' => $query_str['sort'], 'order' => $query_str['order'], 'startNum' => sizeof($result) - sfConfig::get('app_max_task_table_size')))) ?>">
     [&gt;]</a>&nbsp;&nbsp;
    <?php } ?>
</td></tr>
</table>