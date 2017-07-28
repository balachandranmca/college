<table class="datatable  table table-striped table-bordered table-list" id="myTable">
  <thead
    <tr>
        <th>Branch Name</th>
        <th align="center">Status</th>
        <!-- <th>Recieved</th>
        <th>Review</th>
        <th>Accept</th>
        <th>Reject</th> 
        <th>Suggest</th>
        <th>Author Resubmitted</th>   
        <th>Author Transaction Submitted</th>
        <th>Payment Paid</th>
        <th>Published</th> -->
    </tr>
  </thead>
  <?php $norows = true;?>
  <tbody id="myTable">
    <?php foreach ($issueStatusCount as $key => $value) { ?>
          <tr>
            <?php $norows = false;?>
            <td><?php echo $key;?></td>
            <td>
                <button class="btn status_box new_receivedpaper" type="button">
                Recieved <span class="badge"><?php echo $value['status']['recieved'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box reviewing_paper" type="button">
                Review <span class="badge"><?php echo $value['status']['review'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box accept_paper" type="button">
                Accept <span class="badge"><?php echo $value['status']['accept'];?></span>
                </button>
                
            </td>
            <td>
                <button class="btn status_box rejected_paper" type="button">
                Reject <span class="badge"><?php echo $value['status']['reject'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box modified_paper" type="button">
                Suggest <span class="badge"><?php echo $value['status']['modify'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box resubmitted_paper" type="button">
                Author Resubmitted <span class="badge"><?php echo $value['status']['resubmitted'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box transactionsubmit_paper" type="button">
                Author Transaction Submitted <span class="badge"><?php echo $value['status']['transactionSubmitted'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box paid_paper" type="button">
                Payment Paid <span class="badge"><?php echo $value['status']['paid'];?></span>
                </button>
            </td>
            <td>
                <button class="btn status_box published_paper" type="button">
                Published <span class="badge"><?php echo $value['status']['published'];?></span>
                </button>
            </td>
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