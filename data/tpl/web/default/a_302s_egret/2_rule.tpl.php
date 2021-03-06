<?php defined('IN_IA') or exit('Access Denied');?>
<div class="clearfix">
        <div class="panel panel-default">
            <div class="panel-heading">
                配置信息
            </div>
            <div class="panel-body">
                <div class="form-group" id="degree" >
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">游戏难易程度：</label>
                    <div class="col-sm-9 col-xs-12">
                    	<select name="degree" class="form-control">
                        <option <?php  if($act['degree']==0) { ?> selected="selected" <?php  } ?> value="0">简单</option>
                        <option <?php  if($act['degree']==1) { ?> selected="selected" <?php  } ?> value="1">一般</option>
                        <option <?php  if($act['degree']==2) { ?> selected="selected" <?php  } ?> value="2">困难</option>
                        </select>
                        <span class="help-block"></span>
                    </div>
                </div>
            </div>
        </div>
 <!--图文样式设置-->
<div class="panel panel-default">
    <div class="panel-heading">
        图文设置
    </div>
    <div class="panel-body">

        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">图文标题：</label>

            <div class="col-sm-9 col-xs-12">
                <input type="text" id="new_title" class="form-control span7" placeholder="" name="new_title"
                       value="<?php  echo $act['new_title'];?>">

            </div>
        </div>


        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">图文 图标：</label>

            <div class="col-sm-9 col-xs-12">
                <?php  echo tpl_form_field_image('new_icon',$act['new_icon']);?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">图文描述：</label>

            <div class="col-sm-9 col-xs-12">
            <textarea style="height: 60px;" name="new_content"
                      class="form-control span7" cols="60"><?php  echo $act['new_content'];?></textarea>
            </div>
        </div>


    </div>
</div>

<!--分享设置-->
<div class="panel panel-default">
    <div class="panel-heading">
        分享设置
    </div>
    <div class="panel-body">

        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享标题：</label>

            <div class="col-sm-9 col-xs-12">
                <input type="text" id="share_title" class="form-control span7" placeholder="" name="share_title"
                       value="<?php  echo $act['share_title'];?>">
                <div class="help-block"></div>
            </div>
        </div>


        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享图标：</label>

            <div class="col-sm-9 col-xs-12">
                <?php  echo tpl_form_field_image('share_icon',$act['share_icon']);?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享描述：</label>

            <div class="col-sm-9 col-xs-12">
            <textarea style="height: 60px;" name="share_content"
                      class="form-control span7" cols="60"><?php  echo $act['share_content'];?></textarea>
                <div class="help-block"></div>
            </div>
        </div>


    </div>
</div>
</div>

