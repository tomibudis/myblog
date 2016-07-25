<h3>Form edit</h3>
<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="<?php echo base_url();?>index.php/Admin/create" onsubmit='return cekform();' method="POST">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php echo $username;?>"name="nama"type="text" id="nama" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="6236"><ul class="parsley-errors-list" id="parsley-id-6236"></ul>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php echo $email;?>"name="email"type="text" id="email" name="last-name" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="2597"><ul class="parsley-errors-list" id="parsley-id-2597"></ul>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="<?php echo $password;?>"name="password"id="password" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" data-parsley-id="8098"><ul class="parsley-errors-list" id="parsley-id-8098"></ul>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      	&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>