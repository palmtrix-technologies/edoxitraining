<style>
   .no-padding{
   padding-left:0!important;
   padding-right:0!important;
   }
   .customcontrol{
   min-height: 125px;
   }
   .page-header {
   padding-bottom: 9px;
   margin: 10px 0 10px;
   border-bottom: 1px solid #eee;
   }
   .child{
   padding-bottom:20px;
   }

   
</style>
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/select2.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h3>Edit Courses</h3>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Edit Course</li>
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
               <div class="row">
               <div class="col-md-6 form-group hidden">
                     <label>Category</label>
                      <select name="category_id" id="catselectid" class="form-control">
                                        <option value="">Select</option>
                                        <?php
                                foreach($category as $post)
                                {
                                ?> 
                                        <option value="<?php echo $post->category_id;?>">
                                            <?php echo $post->category_name;?></option>
                                        <?php
                                }
                                ?>
                                    </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <label>Sub Category</label> 
                     <div id="selectedcatss" class="hidden"><?php echo json_encode($Coursecategory); ?></div>
                     <select name="subcategory_id" id="subcatid"  class="form-control  select2" multiple="multiple" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                       
                                foreach($subcategory as $post1)
                                { 
                                ?> 
                                        <option cat="<?php echo $post1->categ;?>" value="<?php  echo $post1->categ;?>">
                                            <?php echo $post1->catname; echo "->"; echo $post1->subcategory_name;?></option>
                                        <?php
                                }
                                ?>
                                    </select>
                  </div>
                  <div class="col-md-6 form-group">
                     <label>Course Name</label>
                     <input type="hidden" id="txtcourseid" value="<?= $coursedata->course_id; ?>" />
                     <input id="txt_course_name" class="form-control" value="<?= $coursedata->course_name; ?>" />
                  </div>
                  <div class="col-md-6 form-group">
                     <label>Slug</label>
                     <input id="txt_slug" class="form-control" value="<?= $coursedata->course_slug; ?>" />
                  </div>
                  <div class="col-md-6 no-padding form-group">
                        <label>Seo Tittle</label>
                        <input id="txt_seotittle" class="form-control" value="<?= $coursedata->course_seo_title; ?>" />
                     </div>
                  <div class="col-md-4">
                  
                  <div class="col-md-12 no-padding form-group">
                        <label>Accreditation</label>
                        <div id="selectedAccrediations" class="hidden"><?php echo json_encode($courseaccrediations); ?></div>
                        <select name="Accrediations" id="Accrediations" class="form-control select2" multiple="multiple" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                foreach($Accrediations as $Accrediation)
                                {
                                ?> 
                                        <option value="<?php echo $Accrediation->accreditation_id;?>">
                                            <?php echo $Accrediation->accreditation_name;?></option>
                                        <?php
                                }
                                ?>
                                    </select>
                     </div>
                     <div class="col-md-12 no-padding form-group">
                        <label>Meta Keywords</label>
                        <input id="txt_metakeyword" class="form-control" value="<?= $coursedata->course_meta_keywords; ?>" />
                     </div>
                  </div>
                  <div class="col-md-8 form-group">
                     <label>Meta Description <span id="charNum"></span></label>
                     <textarea id="txtMetadesctiption"  class="form-control customcontrol" ><?= $coursedata->course_meta_description; ?></textarea>
                  </div>
               </div>
   <!-- <form enctype="multipart/form-data"  id="submitimage"> -->
   <?php
                echo form_open_multipart('controller', array('id' => 'submitimage'));

               ?>
              <div class="row">
              
              <div class="col-md-12 page-header"></div>
              <div class="col-md-4">
                 <div class="form-group">
                    <label>Image (1358 x363)</label>
                    <input type="file" id="file" name="file" class="form-control">
                    <input type="hidden" id="imgid" name="imgid" value="<?= $categoryimage->ImageID;  ?>">
                   
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group">
                    <label>Image Alt Text</label>
                    <input type="text" name="img_alttext" class="form-control" value="<?= $categoryimage->Image_alt_text;  ?>">
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="form-group">
                    <label>Image Meta Tag</label>
                    <input type="text" name="img_metatag" class="form-control" value="<?= $categoryimage->Image_metatag;  ?>">

                 </div>
              </div>
              <div class="col-md-6">
                 <div class="col-md-12 form-group">
                    <label>Banner Caption</label>
                    <input type="text" name="banner_caption" class="form-control" value="<?= $categoryimage->Banner_caption;  ?>">
                 </div>
                 <div class="col-md-12 form-group">
                    <label>Banner  Short Description</label>
                    <input type="text" name="banner_shortdesc" class="form-control" value="<?= $categoryimage->Banner_description;  ?>">
                 </div>
              </div>
              <div class="col-md-6">
              <div class=" form-group">
                    <label>Banner  Bullet Description</label>
                    <textarea class="tynimces" name="banner_bullet" id="bannerbullet"><?= $categoryimage->BannerData;  ?></textarea>
                   
                   
                 </div>
              </div>
           
           </div>
               </form>
                <div class="row">
                  
              <div class="col-md-12 page-header"></div>
                <div class="col-md-4 form-group">
                <label>Course Title</label>
                <input id="txt_coursetittle" type="text" class="form-control" value="<?= $coursedata->course_title; ?>" />
                </div>
                <div class="col-md-4 form-group">
                <label>Caption</label>
                <input id="txt_courseCaption" type="text" class="form-control" value="<?= $coursedata->course_caption; ?>" />
                </div>
                <div class="col-md-4 form-group">
                <label>Course Duaration</label>
                <input id="txt_courseduration" type="text" class="form-control" value="<?= $coursedata->course_duration; ?>" />
                </div>

                <div class="col-md-4 form-group">
                <label>Course Location</label>
                <input id="txt_courseLocation" type="text" class="form-control" value="<?= $coursedata->course_location; ?>" />
                </div>

                <div class="col-md-8 form-group">
                <label> Related Courses</label>
                <div id="selectedrelatedcourses" class="hidden"><?php echo json_encode($relatedcourses); ?></div>
                <select class="form-control select2" id="relatedcourses" multiple="multiple" style="width: 100%;">
                

                <?php
                                foreach($courses as $course)
                                {
                                ?>
                                        <option value="<?php echo $course->course_id;?>">
                                            <?php echo $course->course_name;?></option>
                                        <?php
                                }
                                ?>
                    <!-- <option selected="selected">Alabama</option> -->
                   
                  </select>
                </div>
                </div>

               <div class="row">
                 
              <div class="col-md-12 page-header"></div>
                  <div class="col-md-8">
                     <h5>Content Sections</h5>
                  </div>
                 
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="page-header"></div>
                     
                     <div class="parent" >
                     <?php 
                     $count=0;
                  foreach($categorysections as $key=>$value)
                  {
                     $count= $count+1;      
                    
                    ?>


                     <div class="child" sortno="<?= $value->SortOrder; ?>">
                            <a onClick="deletes(this);"> <span class="badge pull-right bg-warning">X</span></a>
                            <select name="boxtyle" selectedval="<?=$value->Classname;?>" class="form-control boxtyle" id="boxtyle"><option value="Normal">Normal</option><option value="bullet-box-with-bg">bullet-box-with-bg</option><option value="bullet-box-list">bullet-box-list</option><option value="bullet-box-without-bg">bullet-box-without-bg</option><option value="bullet-box-most-popular">bullet-box-most-popular</option></select>
                     
                     <textarea class="tynimce" id="section<?= $value->SortOrder; ?>"><?= $value->Content; ?></textarea>
                     
                     </div>

                  <?php } ?>

               
                     </div>
                     <input id="hdnCount" type="hidden" value="<?php echo $count;?>"/>
                     
                  </div>
               </div>
               <div class="row">
               <div class="col-md-12"><input type="button" class="btn btn-sm pull-right " id="btnadd" onclick="addnewrow();" value="Add Section"/></div>
               </div>
               <!-- /.row -->
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

<script src="<?= base_url() ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/userscripts/Course/editcourse.js"></script>