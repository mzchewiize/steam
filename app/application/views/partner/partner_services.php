    <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการคอนเท้นท์<br/>
                    <button class="btn btn-primary" onclick="javascript:load_newservice();">[+] สร้างคอนเท้นท์ใหม่ </button> 
                </div>
            </div>

       
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อหัวข้อ</th>
                        <th>หมวดหมู่</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($content_services as $content) {?>
                    <tr>
                        <td><?php echo $content['id'];?></td>
                        <td><?php echo $content['subject'];?></td>
                        <td><?php echo $content['catergories'];?></td>
                        <td>
                            <button class="btn btn-info" onclick="javascript:content_edit(<?php echo $content['id'];?>)">แก้ไขเนื้อหา</button>
                            <button class="btn btn-danger" onclick="javascript:content_remove(<?php echo $content['id'];?>)">ลบรายการ</button></td>
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
function load_newservice()
{
    window.location='<?php echo base_url();?>index.php/malongyeradmin/new_services_add';
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