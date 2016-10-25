    <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการอัลบัม<br/>
                    <button class="btn btn-primary" onclick="javascript:load_addItem();">[+] สร้างชื่ออัลบัม </button> 
                      <button class="btn btn-primary" onclick="javascript:update_ig();"> Update Instrgram</button>
                    <label><input type="text" onchange="add_item_submit();" placeholder="สร้างชื่ออัลบัม" name="add_item" id="add_item" style="display:none"/></label> </h1>

                </div>
            </div>

       
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่ออัลบัม</th>
                        <th>หมวดหมู่</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($partner_content as $content) {?>
                    <tr>
                        <td><?php echo $content['item_id'];?></td>
                        <td><a href="<?php echo base_url();?>index.php/malongyeradmin/add_photo_album/<?php echo $content['item_id'];?>"><?php echo $content['item_name'];?></a></td>
                        <td>
                            <select class="form-control" id="catergories" onchange="update_catergories('<?php echo $content['item_id'];?>',this.value)">
                                    <option>select catergories</option>
                                    <option <?php echo ($content['catergories']== 'pre_wedding') ? "selected" : '' ; ?> value="pre_wedding">Pre-wedding</option>
                                    <option <?php echo ($content['catergories']== 'wedding_presentation') ? "selected" : '' ; ?> value="wedding_presentation">Wedding-Presentation</option>
                                    <option <?php echo ($content['catergories']== 'engagement') ? "selected" : '' ; ?> value="engagement">Engagement</option>
                                    <option <?php echo ($content['catergories']== 'wedding_reception') ? "selected" : '' ; ?> value="wedding_reception">Wedding-reception</option>
                                    <option <?php echo ($content['catergories']== 'wedding_cinema') ? "selected" : '' ; ?> value="wedding_cinema">Wedding-cinema</option>
                                    <option <?php echo ($content['catergories']== 'event_video') ? "selected" : '' ; ?> value="event_video">Party Event (video) </option>
                                    <option <?php echo ($content['catergories']== 'event_photo') ? "selected" : '' ; ?> value="event_photo">Party Event (photo)</option>
                                    <option <?php echo ($content['catergories']== 'presentation') ? "selected" : '' ; ?> value="presentation">Presentation</option>
                                    <option <?php echo ($content['catergories']== 'graphic_design') ? "selected" : '' ; ?> value="graphic_design">Graphic design</option>
                            </select>
                       </td>
                        <td><button class="btn btn-danger" onclick="javascript:content_remove(<?php echo $content['item_id'];?>)">Delete album</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
          <br/>
          <hr/>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<style>
table.dataTable thead .sorting {background: white;}
</style> 

<script>
$(document).ready( function () {
    $('#example').DataTable( {
        searchHighlight: true
    } );
} );
function load_addItem()
{
    $('#add_item').show();
}

function add_item_submit()
{
     var add_item = $('#add_item').val();
     $.ajax({
        method: "GET",
        url: '<?php echo base_url();?>index.php/malongyeradmin/add_item_new',
        data: { 
            'table': 'item_type', 
            'pcode_value' : add_item , 
            'key' : 'item_id',
            'reload_page' : 'main_content'
        },
    }) 
    .done(function() {
        alert('completed !!');
        window.location.reload();
    });
}

function update_ig()
{
    alert('กำลังทำงาน');
     $.ajax({
        method: "POST",
        url: '<?php echo base_url();?>index.php/malongyeradmin/update_instagram'
    }) 
    .done(function() {
        alert('completed !!');
        window.location.reload();
    });
}

function update_catergories(item_id,catergories)
{   
    $.ajax({
        method: "GET",
        url: '<?php echo base_url();?>index.php/malongyeradmin/set_catergories',
        data: { 
            'item_id': item_id, 
            'catergories' : catergories
        },
    }) 
    .done(function() {
        alert('completed !!');
        window.location.reload();
    });

}

function content_remove(id)
{
     var r = confirm('Confirm to removed this content?');
    if(r)
    {
        $.ajax({
            method: "GET",
            url: '<?php echo base_url();?>index.php/malongyeradmin/submit_removed_content',
            data: { 'id' : id},
        }) 
        .done(function() {
            alert('Content has been removed');
            window.location.reload();
        });
    }
}

</script>