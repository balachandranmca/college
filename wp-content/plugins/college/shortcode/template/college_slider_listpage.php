<div class="container demo slider-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Slider Creator</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="<?php echo get_buzz_url('college_slider');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="datatable  table table-striped table-bordered table-list" id="myTable">
                  <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th> 
                        <th>Edit</th>
                        <th>Delete</th>   
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                    <?php foreach ($sliderList as $key => $value) { ?>
                          <tr>
                              <?php 
                                  $image =  json_decode($value['image'],1);
                              ?>
                            <td><img class="slider-list-img" src="<?php echo $image['url'];?>" alt="List-img"></td>
                            <td><?php echo $value['slidername'];?></td>
                            <td><?php echo $value['description'];?></td>
                            <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php echo get_buzz_url('college_slider').'?id='.$value['id'];?>"><button class="btn btn-primary" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td> 
                            <td style="vertical-align: middle;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="delete btn btn-danger" data-title="Delete" data-toggle="modal" data-id="<?php echo $value['id'];?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                              <th>Slider Creator Image</th>
                              <th>Slider Creator Name</th>
                              <th>Slider Creator Description</th> 
                              <th>Slider Creator Edit</th>
                              <th>Slider Creator Delete</th>  
                          </tr>
                        </tfoot> 
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
     jQuery(document).on('click', '.delete', function(e){
        e.preventDefault();
        var result = confirm("Are you sure to delete?");
        if(result) {
            var sliderid = jQuery(this).attr('data-id');
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    'action':'college_slider_delete',
                    'sliderid' : sliderid,
                },
                success:function(response) {
                    window.location = "<?php echo get_buzz_url('college_slider_list');?>";
                }
            });
        }
     });

    //  jQuery(function($){
    //           /*		=================================
    //     **		==== Simple Table Controller ====
    //     **		=================================
    //     **
    //     **
    //     **			With Pure JavaScript .. 
    //     **	 
    //     **
    //     **		No Libraries or Frameworks needed!
    //     **
    //     **
    //     **				fb.com/bastony
    //     **	
    //     */



    //     // get the table element
    //     var $table = document.getElementById("myTable"),
    //     // number of rows per page
    //     $n = 2,
    //     // number of rows of the table
    //     $rowCount = $table.rows.length,
    //     // get the first cell's tag name (in the first row)
    //     $firstRow = $table.rows[0].firstElementChild.tagName,
    //     // boolean var to check if table has a head row
    //     $hasHead = ($firstRow === "TH"),
    //     // an array to hold each row
    //     $tr = [],
    //     // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
    //     $i,$ii,$j = ($hasHead)?1:0,
    //     // holds the first row if it has a (<TH>) & nothing if (<TD>)
    //     $th = ($hasHead?$table.rows[(0)].outerHTML:"");
    //     // count the number of pages
    //     var $pageCount = Math.ceil($rowCount / $n);
    //     // if we had one page only, then we have nothing to do ..
    //     if ($pageCount > 1) {
    //       // assign each row outHTML (tag name & innerHTML) to the array
    //       for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
    //         $tr[$ii] = $table.rows[$i].outerHTML;
    //       // create a div block to hold the buttons
    //       $table.insertAdjacentHTML("afterend","<div id='buttons'></div");
    //       // the first sort, default page is the first one
    //       sort(1);
    //     }

    //     // ($p) is the selected page number. it will be generated when a user clicks a button
    //     function sort($p) {
    //       /* create ($rows) a variable to hold the group of rows
    //       ** to be displayed on the selected page,
    //       ** ($s) the start point .. the first row in each page, Do The Math
    //       */
    //       var $rows = $th,$s = (($n * $p)-$n);
    //       for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
    //         $rows += $tr[$i];
          
    //       // now the table has a processed group of rows ..
    //       $table.innerHTML = $rows;
    //       // create the pagination buttons
    //       document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
    //       // CSS Stuff
    //       document.getElementById("id"+$p).setAttribute("class","active");
    //     }


    //     // ($pCount) : number of pages,($cur) : current page, the selected one ..
    //     function pageButtons($pCount,$cur) {
    //       /* this variables will disable the "Prev" button on 1st page
    //         and "next" button on the last one */
    //       var	$prevDis = ($cur == 1)?"disabled":"",
    //         $nextDis = ($cur == $pCount)?"disabled":"",
    //         /* this ($buttons) will hold every single button needed
    //         ** it will creates each button and sets the onclick attribute
    //         ** to the "sort" function with a special ($p) number..
    //         */
    //         $buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
    //       for ($i=1; $i<=$pCount;$i++)
    //         $buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
    //       $buttons += "<input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
    //       return $buttons;
    //     }
    //  });
</script>