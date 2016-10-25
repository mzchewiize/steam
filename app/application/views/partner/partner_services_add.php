    <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                      <div class="row" style="margin-top:50px;">
                         <h3 class="page-header" style="margin-top:-10px">สร้างคอนเท้นท์ใหม่<br/>
                         </h3>
                     </div>
                 </div>
            </div>
         <form method="post" action="<?php echo site_url('malongyeradmin/submit_new_services');?>">
               <div class="form-group">
                <label>หัวข้อ </label> <input type="text" class="form-control" name="content_subject"/><br/>
                <label>รูปภาพประกอบ </label> <input type="file" name="content_photo"/><br/>
                 <label>หมวดหมู่ </label> 
                 <select name="content_catergories" class="form-control">
                        <option>เลือกหมวดหมู่</option>
                        <option value="presentations">presentations</option>
                        <option value="pre_wedding">pre_wedding</option>
                        <option value="engagement">engagement</option>
                        <option value="wedding_reception">wedding_reception</option>
                        <option value="wedding_cinema">wedding_cinema</option>
                        <option value="event">event</option>
                 </select>
                 <label>Tags</label><input type="text"  data-role="tagsinput" class="form-control" name="content_tags"/>
                 <br/>
                  <textarea name="content_detail" data-provide="markdown" rows="10"></textarea><br/>
                  <input type="submit" class="btn btn-info" value="บันทึก">
               </div>       
        </form>

        </div>   
   </div>
</div>
    
</body>
</html>
  <script>
    $(document).ready(function(){

  

    });
 </script>