<div class="row main light_blue">
    <div class="container bento">

        <div class="col-md-3"></div>

        <div class="col-md-6">
            <h1>报名</h1>
            <br>

            <div class="sord">
                <a class="left active" id="single">
                    <p>单人报名</p>
                </a>

                <a class="right" id="double">
                    <p>双人报名</p>
                </a>
            </div>

            <?php 
                $attributes = array('class'=>'reg_form', 'id'=>'single');
                echo form_open('lovers/register', $attributes); 
            ?>

                <div>
                    <label class="icon user" for="name_single"></label>
                    <input id="name_single" type="text" maxlength="20" placeholder="<?php $str=form_error('name'); echo ($str)? $str: '名字'; ?>" 
                    class="form-control form_padding" name="name" value="<?php $str=form_error('name'); echo ($str)? "": set_value('name'); ?>" />
                </div>

                <div>
                    <label class="icon major" for="major_single"></label> 
                    <input id="major_single" type="text" maxlength="20" placeholder="<?php $str=form_error('major'); echo ($str)? $str: '专业'; ?>" 
                        class="form-control form_padding" name="major" value="<?php $str=form_error('major'); echo ($str)? "": set_value('major'); ?>" />
                </div>
                
                <div>
                    <label class="icon hobby" for="hobby_single"></label> 
                    <input id="hobby_single" type="text" maxlength="20" placeholder="<?php $str=form_error('hobby'); echo ($str)? $str: '兴趣'; ?>" 
                        class="form-control form_padding" name="hobby" value="<?php $str=form_error('hobby'); echo ($str)? "": set_value('hobby'); ?>" />
                </div>

                <div>
                    <label class="icon phone" for="phone_single"></label> 
                    <input id="major_single" type="text" maxlength="20" placeholder="<?php $str=form_error('phone'); echo ($str)? $str: '手机'; ?>" 
                        class="form-control form_padding" name="phone" value="<?php $str=form_error('phone'); echo ($str)? "": set_value('phone'); ?>" />
                </div>

                <div>
                    <label class="icon mail" for="mail_single"></label> 
                    <input id="mail_single" type="text" maxlength="30" placeholder="<?php $str=form_error('mail'); echo ($str)? $str: '邮箱'; ?>" 
                        class="form-control form_padding" name="mail" value="<?php $str=form_error('mail'); echo ($str)? "": set_value('mail'); ?>" />
                </div>

                <hr>
                <div>

                    <div class="row">

                        <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                            <h5>性别:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="gender">
                                <option value="男" <?php echo set_select('gender', '男'); ?> />男</option>
                                <option value="女" <?php echo set_select('gender', '女'); ?> />女</option>
                            </select>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <h5>年级:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="grade">
                                <option value="1" <?php echo set_select('grade', '1'); ?> />大一</option>
                                <option value="2" <?php echo set_select('grade', '2'); ?> />大二</option>
                                <option value="3" <?php echo set_select('grade', '3'); ?> />大三</option>
                                <option value="4" <?php echo set_select('grade', '4'); ?> />大四</option>
                                <option value="4" <?php echo set_select('grade', '5'); ?> />研一</option>
                                <option value="4" <?php echo set_select('grade', '6'); ?> />研二</option>
                                <option value="4" <?php echo set_select('grade', '7'); ?> />博士</option>
                                <option value="4" <?php echo set_select('grade', '8'); ?> />博士后</option>
                            </select>
                        </div>                      

                    </div> <!-- end of row -->

                    
                    <div class="row" style="margin-top:10px;">

                        <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                            <h5>校区:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker school" data-width="auto" id="single_reg" name="school">
                                <option value="0" <?php echo set_select('school', '0', TRUE); ?> />紫金港</option>
                                <option value="1" <?php echo set_select('school', '1'); ?> />玉泉</option>
                                <option value="2" <?php echo set_select('school', '2'); ?> />西溪</option>
                                <option value="3" <?php echo set_select('school', '3'); ?> />华家池</option>
                                <option value="4" <?php echo set_select('school', '4'); ?> />之江</option>
                            </select>
                        </div>      

                        <div class="col-md-6 col-xs-6 col-md-offset-1 col-xs-offset-1">
                            <h5>(非紫金港不用填写寝室地址)</h5>
                        </div>                                           

                    </div>

                    <div class="room_loc" id="single_reg_loc" style="margin-top:10px;">

                        <div class="row">

                            <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                                <h5>寝室:</h5>
                            </div>
                                        
                            <div class="col-md-2 col-xs-2">
                                <select class="selectpicker" data-width="auto" name="academy">
                                    <option value="蓝田" <?php echo set_select('academy', '蓝田', TRUE); ?> />蓝田</option>
                                    <option value="丹阳" <?php echo set_select('academy', '丹阳'); ?> />丹阳</option>
                                    <option value="青溪" <?php echo set_select('academy', '青溪'); ?> />青溪</option>
                                    <option value="翠柏" <?php echo set_select('academy', '翠柏'); ?> />翠柏</option>
                                    <option value="白沙" <?php echo set_select('academy', '白沙'); ?> />白沙</option>
                                    <option value="碧峰" <?php echo set_select('academy', '碧峰'); ?> />碧峰</option>
                                    <option value="紫云" <?php echo set_select('academy', '紫云'); ?> />紫云</option>
                                </select>
                            </div>
                        

                            <div class="col-md-2 col-xs-2">
                                <select class="selectpicker" data-width="auto" name="build_num">
                                    <option value="1" <?php echo set_select('build_num', '1', TRUE); ?> />一</option>
                                    <option value="2" <?php echo set_select('build_num', '2'); ?> />二</option>
                                    <option value="3" <?php echo set_select('build_num', '3'); ?> />三</option>
                                    <option value="4" <?php echo set_select('build_num', '4'); ?> />四</option>
                                    <option value="5" <?php echo set_select('build_num', '5'); ?> />五</option>
                                    <option value="6" <?php echo set_select('build_num', '6'); ?> />六</option>
                                </select>
                            </div>

                            <div class="col-md-3 col-xs-3">
                                <input type="text" name="room_num" placeholder="<?php $str=form_error('room_num'); echo ($str)? $str: '寝室号'; ?>"
                                class="form-control" value="<?php $str=form_error('room_num'); echo ($str)? "": set_value('room_num'); ?>" />
                            </div>

                        </div> <!--end of row -->

                    </div>

                </div>
                
                <hr> 
                <input type="hidden" name="formname" value="1" />
                <input type="submit" style="width:100%" value="提交" class="btn btn-success" id="submit_button">

                <hr>
                <div>
                    <div class="row">
                        <div style="text-align:center;" class="col-md-12 col-xs-12">
                            <p>PS:由于人(nan)数(sheng)已经超出我们的控制(&gt; &lt;),
                            </p><p>因此我们决定随机抽取单人报名的男生</p>
                            <p>并与女生随机配对。</p>
                        </div>
                    </div>
                </div>

            </form>
            


            <!-- <form class="reg_form" id="double"> -->

            <?php 
                $attributes = array('class'=>'reg_form', 'id'=>'double');
                echo form_open('lovers/register', $attributes); 
            ?>

                <div class="">
                    <label class="icon heart" id="team_name" for="team_name"></label>
                    <input type="text" maxlength="30" placeholder="<?php $str=form_error('team_name'); echo ($str)? $str: '队伍名称'; ?>" 
                    class="form-control form_padding" name="team_name" value="<?php $str=form_error('team_name'); echo ($str)? "": set_value('team_name'); ?>" />
                </div>

                <hr>

                <div>
                    <label class="icon user" for="name_double_1"></label>
                    <input id="name_single_1" type="text" maxlength="20" placeholder="<?php $str=form_error('name_1'); echo ($str)? $str: '姓名'; ?>" 
                        class="form-control form_padding" name="name_1" value="<?php echo $str=form_error('name_1'); echo ($str)? NULL: set_value('name_1'); ?>" />
                </div>

                <div>
                    <label class="icon major" for="major_double_1"></label> 
                    <input id="major_double_1" type="text" maxlength="20" placeholder="<?php $str=form_error('major_1'); echo ($str)? $str: '专业'; ?>" 
                        class="form-control form_padding" name="major_1" value="<?php $str=form_error('major_1'); echo ($str)? "": set_value('major_1'); ?>" />
                </div>
                
                <div>
                    <label class="icon hobby" for="hobby_double_1"></label> 
                    <input id="hobby_double_1" type="text" maxlength="20" placeholder="<?php $str=form_error('hobby_1'); echo ($str)? $str: '兴趣'; ?>" 
                        class="form-control form_padding" name="hobby_1" value="<?php $str=form_error('hobby_1'); echo ($str)? "": set_value('hobby_1'); ?>" />
                </div>

                <div>
                    <label class="icon phone" for="phone_double_1"></label> 
                    <input id="phone_single" type="text" maxlength="20" placeholder="<?php $str=form_error('phone_1'); echo ($str)? $str: '手机'; ?>" 
                        class="form-control form_padding" name="phone_1" value="<?php $str=form_error('phone_1'); echo ($str)? "": set_value('phone_1'); ?>" />
                </div>

                <div>
                    <label class="icon mail" for="mail_double_1"></label> 
                    <input id="mail_double_1" type="text" maxlength="30" placeholder="<?php $str=form_error('mail_1'); echo ($str)? $str: '邮箱'; ?>" 
                        class="form-control form_padding" name="mail_1" value="<?php $str=form_error('mail_1'); echo ($str)? "": set_value('mail_1'); ?>" />
                </div>

                <hr>

                <div class="droplist-wrapper">

                    <div class="row">

                        <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                            <h5>性别:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="gender_1">
                                <option value="男" <?php echo set_select('gender_1', '男'); ?> />男</option>
                                <option value="女" <?php echo set_select('gender_1', '女'); ?> />女</option>
                            </select>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <h5>年级:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="grade_1">
                                <option value="1" <?php echo set_select('grade_1', '1'); ?> />大一</option>
                                <option value="2" <?php echo set_select('grade_1', '2'); ?> />大二</option>
                                <option value="3" <?php echo set_select('grade_1', '3'); ?> />大三</option>
                                <option value="4" <?php echo set_select('grade_1', '4'); ?> />大四</option>
                                <option value="4" <?php echo set_select('grade_1', '5'); ?> />研一</option>
                                <option value="4" <?php echo set_select('grade_1', '6'); ?> />研二</option>
                                <option value="4" <?php echo set_select('grade_1', '7'); ?> />博士</option>
                                <option value="4" <?php echo set_select('grade_1', '8'); ?> />博士后</option>                                
                            </select>
                        </div>                      

                    </div> <!-- end of row -->

                    <div class="row" style="margin-top:10px;">

                        <div class="col-md-2 col-md-offset-1 col-xs-offset-1 col-xs-2">
                            <h5>校区:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker school" data-width="auto" id="first" name="school_1">
                                <option value="0" <?php echo set_select('school_1', '0'); ?> />紫金港</option>
                                <option value="1" <?php echo set_select('school_1', '1'); ?> />玉泉</option>
                                <option value="2" <?php echo set_select('school_1', '2'); ?> />西溪</option>
                                <option value="3" <?php echo set_select('school_1', '3'); ?> />华家池</option>
                                <option value="4" <?php echo set_select('school_1', '4'); ?> />之江</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-xs-6 col-md-offset-1 col-xs-offset-1">
                            <h5>(非紫金港不用填写寝室地址)</h5>
                        </div>                                                 

                    </div>

                    <div class="room_loc" id="first_loc" style="margin-top:10px;">

                        <div class="row">

                            <div class="col-md-2 col-md-offset-1 col-xs-offset-1 col-xs-2">
                                <h5>寝室:</h5>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <label class="form_label sr-only" for="room_loc">寝室地址</label>
                                <select class="selectpicker" data-width="auto" name="academy_1">
                                    <option value="蓝田" <?php echo set_select('academy_1', '蓝田', TRUE); ?> />蓝田</option>
                                    <option value="丹阳" <?php echo set_select('academy_1', '丹阳'); ?> />丹阳</option>
                                    <option value="青溪" <?php echo set_select('academy_1', '青溪'); ?> />青溪</option>
                                    <option value="翠柏" <?php echo set_select('academy_1', '翠柏'); ?> />翠柏</option>
                                    <option value="白沙" <?php echo set_select('academy_1', '白沙'); ?> />白沙</option>
                                    <option value="碧峰" <?php echo set_select('academy_1', '碧峰'); ?> />碧峰</option>
                                    <option value="紫云" <?php echo set_select('academy_1', '紫云'); ?> />紫云</option>
                                </select>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <select class="selectpicker" data-width="auto" name="build_num_1">
                                    <option value="1" <?php echo set_select('build_num_1', '1', TRUE); ?> />一</option>
                                    <option value="2" <?php echo set_select('build_num_1', '2'); ?> />二</option>
                                    <option value="3" <?php echo set_select('build_num_1', '3'); ?> />三</option>
                                    <option value="4" <?php echo set_select('build_num_1', '4'); ?> />四</option>
                                    <option value="5" <?php echo set_select('build_num_1', '5'); ?> />五</option>
                                    <option value="6" <?php echo set_select('build_num_1', '6'); ?> />六</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-xs-2">
                                <input type="text" name="room_num_1" placeholder="<?php $str=form_error('room_num_1'); echo ($str)? $str: '寝室号'; ?>" 
                                class="form-control" maxlength="5" value="<?php $str=form_error('room_num_1'); echo ($str)? "": set_value('room_num_1'); ?>" />
                            </div>

                        </div>
                    </div>

                </div>

                <hr>

                <div>
                    <label class="icon user" for="name_double_2"></label>
                    <input id="name_double_2" type="text" maxlength="20" placeholder="<?php $str=form_error('name_2'); echo ($str)? $str: '姓名'; ?>" 
                        class="form-control form_padding" name="name_2" value="<?php $str=form_error('name_2'); echo ($str)? "": set_value('name_2'); ?>" />
                </div>

                <div>
                    <label class="icon major" for="major_double_2"></label> 
                    <input id="major_double_2" type="text" maxlength="20" placeholder="<?php $str=form_error('major_2'); echo ($str)? $str: '专业'; ?>" 
                        class="form-control form_padding" name="major_2" value="<?php $str=form_error('major_2'); echo ($str)? "": set_value('major_2'); ?>" />
                </div>
                
                <div>
                    <label class="icon hobby" for="hobby_double_2"></label> 
                    <input id="hobby_double_2" type="text" maxlength="20" placeholder="<?php $str=form_error('hobby_2'); echo ($str)? $str: '兴趣'; ?>" 
                        class="form-control form_padding" name="hobby_2" value="<?php $str=form_error('hobby_2'); echo ($str)? "": set_value('hobby_2'); ?>" />
                </div>

                <div>
                    <label class="icon phone" for="major_single"></label> 
                    <input id="major_single" type="text" maxlength="20" placeholder="<?php $str=form_error('phone_2'); echo ($str)? $str: '手机'; ?>" 
                        class="form-control form_padding" name="phone_2" value="<?php $str=form_error('phone_2'); echo ($str)? "": set_value('phone_2'); ?>" />
                </div>

                <div>
                    <label class="icon mail" for="mail_double"></label> 
                    <input id="mail_double_2" type="text" maxlength="30" placeholder="<?php $str=form_error('mail_2'); echo ($str)? $str: '邮箱'; ?>" 
                        class="form-control form_padding" name="mail_2" value="<?php $str=form_error('mail_2'); echo ($str)? "": set_value('mail_2'); ?>" />
                </div>

                <hr>

                <div class="droplist-wrapper">

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                            <h5>性别:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="gender_2">
                                <option value="男" <?php echo set_select('gender_2', '男'); ?> />男</option>
                                <option value="女" <?php echo set_select('gender_2', '女', TRUE); ?> />女</option>
                            </select>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <h5>年级:</h5>
                        </div>

                        <div class="col-md-2 col-xs-2">
                            <select class="selectpicker" data-width="auto" name="grade_2">
                                <option value="1" <?php echo set_select('grade_2', '1'); ?> />大一</option>
                                <option value="2" <?php echo set_select('grade_2', '2'); ?> />大二</option>
                                <option value="3" <?php echo set_select('grade_2', '3'); ?> />大三</option>
                                <option value="4" <?php echo set_select('grade_2', '4'); ?> />大四</option>
                                <option value="4" <?php echo set_select('grade_2', '5'); ?> />研一</option>
                                <option value="4" <?php echo set_select('grade_2', '6'); ?> />研二</option>
                                <option value="4" <?php echo set_select('grade_2', '7'); ?> />博士</option>
                                <option value="4" <?php echo set_select('grade_2', '8'); ?> />博士后</option>                                
                            </select>
                        </div>                   

                    </div> <!-- end of row -->

                    <div style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                                <h5>校区:</h5>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <select class="selectpicker school" data-width="auto" id="second" name="school_2">
                                    <option value="0" <?php echo set_select('school_2', '0', TRUE); ?> />紫金港</option>
                                    <option value="1" <?php echo set_select('school_2', '1'); ?> />玉泉</option>
                                    <option value="2" <?php echo set_select('school_2', '2'); ?> />西溪</option>
                                    <option value="3" <?php echo set_select('school_2', '3'); ?> />华家池</option>
                                    <option value="4" <?php echo set_select('school_2', '4'); ?> />之江</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-xs-6 col-md-offset-1 col-xs-offset-1">
                                <h5>(非紫金港不用填写寝室地址)</h5>
                            </div>   

                        </div>
                    </div>


                    <div class="room_loc" id="second_loc" style="margin-top:10px;">
                        <div class="row">

                            <div class="col-md-2 col-md-offset-1 col-xs-offset-1 col-xs-2">
                                <h5>寝室:</h5>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <label class="form_label sr-only" for="room_loc">寝室地址</label>
                                <select class="selectpicker" data-width="auto" name="academy_2">
                                    <option value="蓝田" <?php echo set_select('academy_2', '蓝田', TRUE); ?> />蓝田</option>
                                    <option value="丹阳" <?php echo set_select('academy_2', '丹阳'); ?> />丹阳</option>
                                    <option value="青溪" <?php echo set_select('academy_2', '青溪'); ?> />青溪</option>
                                    <option value="翠柏" <?php echo set_select('academy_2', '翠柏'); ?> />翠柏</option>
                                    <option value="白沙" <?php echo set_select('academy_2', '白沙'); ?> />白沙</option>
                                    <option value="碧峰" <?php echo set_select('academy_2', '碧峰'); ?> />碧峰</option>
                                    <option value="紫云" <?php echo set_select('academy_2', '紫云'); ?> />紫云</option>
                                </select>
                            </div>

                            <div class="col-md-2 col-xs-2">
                                <select class="selectpicker" data-width="auto" name="build_num_2">
                                    <option value="1" <?php echo set_select('build_num_2', '1', TRUE); ?> />一</option>
                                    <option value="2" <?php echo set_select('build_num_2', '2'); ?> />二</option>
                                    <option value="3" <?php echo set_select('build_num_2', '3'); ?> />三</option>
                                    <option value="4" <?php echo set_select('build_num_2', '4'); ?> />四</option>
                                    <option value="5" <?php echo set_select('build_num_2', '5'); ?> />五</option>
                                    <option value="6" <?php echo set_select('build_num_2', '6'); ?> />六</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-xs-2">
                                <input type="text" name="room_num_2" placeholder="<?php $str=form_error('room_num_2'); echo ($str)? $str: '寝室号'; ?>" 
                                class="form-control" maxlength="5" value="<?php $str=form_error('room_num_2'); echo ($str)? "": set_value('room_num_2'); ?>" />
                            </div>

                        </div>
                    </div>
                
                </div>

                <hr>
                <input type="hidden" name='formname' value="2" />
                <input type="submit" style="width:100%" value="提交" class="btn btn-success" id="submit_button">
                
                <hr> 

                <div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="text-align:center;">
                            <p>PS:如果同性组队报名，但在报名时更改一人性别，</p>
                            <p>到时将无法参与投票评选。</p>
                        </div>
                    </div>
                </div>


            </form>

            <div style="display:none;" id="get_reg_mode"><?php echo $reg_mode ?></div>
            <div style="display:none;" id="check_gender"><?php echo form_error('gender_2') ?></div>
        </div>

        <div class="col-md-3"></div>
    </div>
    <!-- End of .container -->
</div>
<!-- End of .row -->

<!-- Modal -->
<div class="modal fade" id="Modal" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">SORRY</h4>
      </div>

      <div class="modal-body" style="text-align:center;">
        <h3>目前仅支持异性恋噢</h3>
      </div>

    </div>
  </div>
</div>
<!-- end of Modal -->

<script type="text/javascript">

function showSingle()
{
    $("a#single").addClass("active");
    $("a#double").removeClass("active");
    $("form#single").stop().slideDown();
    $("form#double").stop().slideUp();
}

function showDouble()
{
    $("a#double").addClass("active");
    $("a#single").removeClass("active");
    $("form#double").stop().slideDown();
    $("form#single").stop().slideUp();
}


$("a#single").click(function(){
    if (!$("a#single").hasClass("active")) {
        showSingle();
    }
});

$("a#double").click(function(){
    if (!$("a#double").hasClass("active")) {
        showDouble();
    }
});

$(document).ready(function(){

    var reg_mode = $('div#get_reg_mode').text();
    var gender_err = $('div#check_gender').text();

    if(reg_mode == '1')
        showDouble(); 
    else
        showSingle();

    if(gender_err) {
        $("div#Modal").modal('show');
    }

});

/*
$(".selectpicker.school").change(function(){

    var sch = $(this).val();
    var id = "#" + $(this).attr("id") + "_loc";

    if(sch) {
        $(id).find(".selectpicker").attr("disabled",true);
        $(id).find("input").attr("disabled",true);
    }
    else {
        $(id).find(".selectpicker").attr("disabled",false);
        $(id).find("input").attr("disabled",false);
    }

});

$(":submit").click(function(){
    $(":disabled").attr("disabled",false); 
});
 */


$(".selectpicker.school").change(function(){

        var sch = $(this).val();
        var id = "#" + $(this).attr("id") + "_loc";

        if(sch) {
            $(id).find(".row").fadeOut();
         }
        if(sch == 0) {
            $(id).find(".row").fadeIn();
        }
});

</script>

<!--  /main  -->
