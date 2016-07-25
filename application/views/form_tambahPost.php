<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Form Tambah Artikel</h2>
                   
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
              <form enctype='multipart/form-data' action="<?php echo base_url();?>index.php/form_tambahPost/simpan" method="POST">
              <label for="fullname">Judul artikel</label>
                <input type="text" id="fullname" class="form-control" name="judul" required="" data-parsley-id="1318" value="<?php echo $judul;?>">
                 <label for="fullname">tag</label>
                 <input type="hidden" id="fullname" class="form-control" name="id_post"  data-parsley-id="1318" value="<?php echo $id_post;?>">
                
                 <input type="text" id="fullname" class="form-control" name="tag" required="" data-parsley-id="1318"value="<?php echo $tag;?>">
                 <label for="fullname">gambar artikel</label>

                 <?php
                      date_default_timezone_set("Asia/Jakarta");
                      $tanggal = date('d-M-Y');
                 ?>
                 <input type="text" id="fullname" class="form-control" name="tanggal"  style="display:none;"value="<?php echo $tanggal;?>" data-parsley-id="1318">
              <div class="row">
                    
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="ui segment">
                          <div class="fileUpload btn btn-primary "id="dua">  
                            <span  ><i class="fa fa-folder-open"></i></span>
                            <input type="file" id="files" class="upload" name="gambar">
                          </div>
                          <img src="<?php echo base_url();echo $gambar;?>"class="img-thumbnail" style="width:250px;min-height:120px;background-color:#f9ffe5 "id="gambar">
                          <br>
                        </div>
                      </div>
                   </div>
                <div id="alerts"></div>
                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a data-edit="fontSize 5">
                          <p style="font-size:17px">Huge</p>
                        </a>
                      </li>
                      <li>
                        <a data-edit="fontSize 3">
                          <p style="font-size:14px">Normal</p>
                        </a>
                      </li>
                      <li>
                        <a data-edit="fontSize 1">
                          <p style="font-size:11px">Small</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                  </div>
                  <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                    <div class="dropdown-menu input-append">
                      <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                      <button class="btn" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                  </div>

                  <div class="btn-group">
                    <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                  </div>
                  <div class="btn-group">
                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                  </div>
                </div>

                <div id="editor" >
                <?php echo $descr;?>
                </div>
                <textarea type="text" name="descr" id="descr" style="display:none;"></textarea>
                <br />

                <div class="ln_solid"></div>

                <button type="submit" name="submit" class="btn btn-success huge xcxc">Submit</button>

              </div>
              </form>
            </div>
          </div>
<script>
    $(document).ready(function() {
      $('.xcxc').click(function() {
        $('#descr').val($('#editor').html());
      });
    });
  </script>
  <!--image preview-->
<script>
document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("gambar").src = e.target.result;
    
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>