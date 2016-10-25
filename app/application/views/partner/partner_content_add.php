    <div id="wrapper">
   <?php $this->load->view('subview/sidebar'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                      <div class="row" style="margin-top:50px;">
                         <h3 class="page-header" style="margin-top:-10px">อัพโหลดรูปภาพ<br/>
                         </h3>
                     </div>
                 </div>
            </div>
        <form method="post" action="#" role="form" id="infoProfile"  enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="ref_code" name="ref_code" value="<?php echo $this->uri->segment(3); ?>">
 
        <div class="row">
            <div class="form-group">
                <label for="Title" style="text-decoration: underline;">อัพโหลดรูปภาพ :</label> <br/>
                <div class="row" style="margin-left:10px;">
                  <div class="parent-wrapper">
                    <div class="parent">
                        <?php foreach($photos as $photo) { ?>
                        <div class="child" style="display:inline-block"><img  src="<?php echo base_url();?>webroot/timthumb.php?src=<?php echo base_url();?>webroot/files/<?php echo @$photo['uuid'].'/'.@$photo['image'];?>&w=200&h=200&a=c" />
                          <p> <input type="checkbox" name="cover" value="<?php echo $photo['item_image_id'];?>" <?php echo (@$photo['cover'] == 1) ? 'checked=checked' : ''; ?> onclick="set_cover('<?php echo $photo['item_image_id'];?>','<?php echo $photo['ref_code'];?>')" class="btn btn-default">ตั้งเป็นรูปหน้าแรก</p>
                          <p> <i class="fa fa-trash-o" onclick="unset_cover('<?php echo $photo['item_image_id'];?>','<?php echo $photo['ref_code'];?>')"> ลบออกจากหน้าแรก</i></p>
                          <p> <i class="fa fa-times" onclick="manual_delete_image('<?php echo $photo['item_image_id'];?>','<?php echo $photo['uuid'];?>','<?php echo $photo['image'];?>')" style="cursor:pointer;"> ลบรูป</i></p>
                         <p>  <i class="fa fa-youtube-play"></i><input type="text" onchange="seturl_youtube('<?php echo $photo['item_image_id'];?>','<?php echo $photo['ref_code'];?>')" name="url_youtube" id="url_youtube" placeholder="Media url" value="<?php echo $photo['url_youtube'];?>" style="width:190px"/></p>
                        </div>
                        <?php } ?>
                      </br/>
                    </div>
                </div>
                </div>
            </div>
           </div>

        <div class="row">
            <label>เพิ่มรูปตรงนี้</label>
            <div class="col-lg-12">
        <script type="text/template" id="qq-simple-thumbnails-template">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <div class="qq-thumbnail-wrapper">
                        <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                    </div>
                    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                        <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                        Retry
                    </button>

                    <div class="qq-file-info">
                        <div class="qq-file-name">
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                        </div>
                        <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                        <span class="qq-upload-size-selector qq-upload-size"></span>
                        <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                            <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                            <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                            <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                        </button>
                    </div>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>
     <div id="fine-uploader-gallery"></div>
            </div>
        </div>   
        <br/><br/>
            
        <div class="clearfix"></div>
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="button" class="btn btn-danger" value="Cancel">
        <br/><br/>
        </form>

        </div>   
   </div>
</div>
    
</body>
</html>
  <script>
    $(document).ready(function(){

    var ref_code = $('#ref_code').val();
    var galleryUploader = new qq.FineUploader({
        element: document.getElementById("fine-uploader-gallery"),      
        template: 'qq-simple-thumbnails-template',
        request: {
            endpoint: '../../../webroot/endpoint.php?ref_code='+ref_code
        },
        thumbnails: {
            placeholders: {
                waitingPath: '../../../webroot/placeholders/waiting-generic.png',
                notAvailablePath: '../../../webroot/placeholders/not_available-generic.png'
            }
        },
        deleteFile: {
            enabled: true,
            method: "DELETE",
            endpoint: '../../../webroot/endpoint.php'
        },
        cors: {
            expected: true
        },
        chunking: {
            enabled: true
        },
        resume: {
            enabled: true
        },
        validation: {
            itemLimit: 5,
            sizeLimit: 55000000
        },
        forceMultipart: {
            enabled: true
        },
        validation: {
            allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
        },
        failedUploadTextDisplay: {
            mode: 'default',
            responseProperty: 'error',
        }
    });
});

    function seturl_youtube(id,ref_code)
    {
        var youtube = $('#url_youtube').val();
        console.log(youtube);
        $.ajax({
            method: "GET",
            url: '<?php echo base_url();?>index.php/malongyeradmin/seturl_youtube',
            data: { 'id' : id, 'ref_code': ref_code, 'url_youtube' : youtube},
        }) 
        .done(function() {
            alert('เพิ่ม url สำเร็จ');
            window.location.reload();
        });
    }

    function set_cover(id,ref_code)
    {
        $.ajax({
            method: "GET",
            url: '<?php echo base_url();?>index.php/malongyeradmin/set_cover',
            data: { 'id' : id, 'ref_code': ref_code},
        }) 
        .done(function() {
            alert('ใส่รูปหน้าแรกสำเร็จ');
            window.location.reload();
        });
    }
   
   function manual_delete_image(id, uuid, image)
   {
      $.ajax({
            method: "GET",
            url: '<?php echo base_url();?>index.php/malongyeradmin/manual_delete_photo',
            data: { 'id' : id, 'uuid': uuid,'image' : image},
        }) 
        .done(function() {
            alert('ลบรูปเรียบร้อย');
            window.location.reload();
        });
   }
   
   function unset_cover(id,ref_code)
    {
        $.ajax({
            method: "GET",
            url: '<?php echo base_url();?>index.php/malongyeradmin/unset_cover',
            data: { 'id' : id, 'ref_code': ref_code},
        }) 
        .done(function() {
            alert('ลบรูปจากหน้าแรกสำเร็จ');
            window.location.reload();
        });
    }
 </script>