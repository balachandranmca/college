<table class="datatable  table table-striped table-bordered table-list" id="myTable">
  <thead>
    <tr>
        <th>Branch Name</th>
        <th>Recieved</th>
        <th>Review</th>
        <th>Accept</th>
        <th>Reject</th> 
        <th>Suggest</th>
        <th>Author Resubmitted</th>   
        <th>Author Transaction Submitted</th>
        <th>Payment Paid</th>
        <th>Published</th>
    </tr>
  </thead>
  <?php $norows = true;?>
  <tbody id="myTable">
    <?php foreach ($issueStatusCount as $key => $value) { ?>
          <tr>
            <?php $norows = false;?>
            <td><?php echo $key;?></td>
            <td><?php echo $value['status']['recieved'];?></td>
            <td><?php echo $value['status']['review'];?></td>
            <td><?php echo $value['status']['accept'];?></td>
            <td><?php echo $value['status']['reject'];?></td>
            <td><?php echo $value['status']['modify'];?></td>
            <td><?php echo $value['status']['resubmitted'];?></td>
            <td><?php echo $value['status']['transactionSubmitted'];?></td>
            <td><?php echo $value['status']['paid'];?></td>
            <td><?php echo $value['status']['published'];?></td>
          </tr>
        <?php } ?>
            <?php 
             if ($norows) { ?>
                <tr><td colspan='9'>No Records Found</td></tr>
             <?php } ?>
        </tbody>
</table>
<?php
function findKey($keySearch, $array)
{
    foreach ($array as $key => $item) {
        if ($key == $keySearch) {
            echo 'yes, it exists';
            return true;
        }
        else {
            if (is_array($item) && findKey($item, $keySearch)) {
               return true;
            }
        }
    }

    return false;
}
?>