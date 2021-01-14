
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h3>Edit Casestudy</h3>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Casestudy</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- SELECT2 EXAMPLE -->
         <div class="card card-default">
            <!-- /.card-header -->
            <div class="card-body">
            <?php
                echo form_open_multipart('controller', array('id' => 'submitheaders'));

               ?>
               <div class="row">
               <div class="col-md-12">
               <hr><h5>Page Headers</h5><hr>
            
               </div>
               </div>

               <div class="row">

               <div class="col-md-4 form-group">
               <label>Company Name</label>
               <input type="text" id="txtCompanyname" value="<?= $case->CompanyName;?>" class="form-control">

               <input type="hidden" id="hdnid" value="<?= $case->ci_casestudy_id;?>">
               </div>


               <div class="col-md-4 form-group">
               <label>Slug</label>
               <input type="text" id="txt_slug" value="<?= $case->slug;?>" class="form-control">
               </div>
               <div class="col-md-4 form-group">
               <label>Meta Tittle</label>
               <input type="text" id="txt_metatittle" value="<?= $case->Meta_tittle;?>" class="form-control">
               </div>
               <div class="col-md-6">
              

              
               <div class="col-md-12 form-group">
               <label>Logo</label>
               <input type="file" id="Logo" name="Logo" class="form-control">
               <input type="hidden" id="hdnlogo" name="hdnlogo"  value="<?= $case->Logo;?>"/>
               </div>

               <div class="col-md-12 form-group">
                    
                        <label>Banner Image</label>
                        <input type="file" id="Banner" name="Banner" class="form-control">
                        <input type="hidden" id="hdnbanner" name="hdnbanner"  value="<?= $case->BannerImage;?>"/>
                  
                  </div>

                  </div>
               <div class="col-md-6 form-group">
               <label>Meta Description</label>
               <textarea type="text" id="txt_metadescription" rows="5"  class="form-control"><?= $case->Metadescription;?></textarea>
               </div>

             
               <div class="col-md-4">
                     <div class="form-group">
                        <label>Image Alt Text</label>
                        <input type="text" id="img_alttext" class="form-control" value="<?= $case->Banner_image_alt;?>">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Image Meta Tag</label>
                        <input type="text" id="img_metatag" class="form-control" value="<?= $case->Banner_image_meta;?>">
                     </div>
                  </div> 
               </div>
               <div class="row">
               <div class="col-md-12">
               <hr>
               <h5>Case Study Overview</h5><hr>
              
               </div>
               </div>    

               <div class="row">
               <div class="col-md-6 form-group">
               <label>Case Study Tittle</label>
               <textarea id="txttittle"  rows="3"  class="form-control"><?= $case->Case_study_tittle;?></textarea>
               </div>
               <div class="col-md-6 form-group">
               <label>short Description</label>
               <textarea id="txtshortdescription"  rows="3"  class="form-control"><?= $case->Casestudy_shortDesc;?></textarea>
               </div>


               <div class="col-md-4">
                     <div class="form-group">
                        <label>Industry</label>
                        <input type="text" id="txt_industry" value="<?= $case->Industry;?>" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Training Used</label>
                        <input type="text" id="txt_trainingused" value="<?= $case->Training_used;?>" class="form-control">
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Region</label>
                        <input type="text" id="txt_Region" value="<?= $case->Region;?>" class="form-control">
                     </div>
                  </div>
             
                  <div class="col-md-4 form-group">
               <label>Goal</label>
               <textarea id="txt_goal"  rows="3"  class="form-control"><?= $case->Goal;?></textarea>
               </div>
               <div class="col-md-4 form-group">
               <label>Obstracle</label>
               <textarea id="txt_obstracle"  rows="3"  class="form-control"><?= $case->Obstacle;?></textarea>
               </div>

               <div class="col-md-4 form-group">
               <label>Result</label>
               <textarea id="txt_overviewResult"  rows="3"  class="form-control"><?= $case->Result_overview;?></textarea>
               </div>


               </div>

               <div class="row">
               <div class="col-md-12">
               <hr>
               <h5>Coorporate Testimonal</h5><hr>
              
               </div>
               </div>

               <div class="row">
               <div class="col-md-6 form-group">
               <label>Message</label>
               <textarea id="txt_message"  rows="5"  class="form-control"><?= $case->testi_message;?></textarea>
               </div>
               <div class="col-md-6">
               <div class="row">
               <div class="col-md-6">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="txt_testi_name" value="<?= $case->testi_name;?>" class="form-control">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Designation</label>
                        <input type="text" id="txt_testi_desig" value="<?= $case->testi_desig;?>" class="form-control">
                     </div>
                  </div>

                 
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Profile Image</label>
                        <input type="file" id="profileimage" name="Profileimage" class="form-control">
                       <input type="hidden" id="hdnprofile" name="hdnprofile"  value="<?= $case->testi_Image;?>"/>
                     </div>
                  </div>
               </div>
               </div>
               </div>
               <div class="row">
               <div class="col-md-12">
               <hr>
               <h5>Casestudy Details</h5><hr>
              
               </div>
               </div>

               <div class="row">
               <div class="col-md-12 form-group">
               <label>Result</label>
               <textarea id="txt_Result"  rows="3"  class="form-control"><?= $case->result;?></textarea>
               </div>

               <div class="col-md-12 form-group">
               <label>Section Data</label>
               <textarea id="txt_casestudy" class="form-control section1"><?= $case->Sectiondata;?></textarea>
               </div>
               </div>
             </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
 

               <button type="button" id="btn_submit" class="btn btn-primary pull-right">Submit</button>
            </div>
         </div>
         <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>
<script src="<?= base_url() ?>assets/userscripts/Casestudy/editcasestudy.js"></script>