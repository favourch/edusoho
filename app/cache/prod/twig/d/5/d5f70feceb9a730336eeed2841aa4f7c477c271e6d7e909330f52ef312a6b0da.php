<?php

/* TopxiaAdminBundle:EduCloud:video.html.twig */
class __TwigTemplate_d5f70feceb9a730336eeed2841aa4f7c477c271e6d7e909330f52ef312a6b0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:video.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_cloud_video";
        // line 4
        $context["script_controller"] = "setting/cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <style>
    .webuploader-container {
      position: relative;
    }

    .webuploader-element-invisible {
      position: absolute !important;
      clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
      clip: rect(1px, 1px, 1px, 1px);
    }

    .webuploader-pick {
      position: relative;
      display: inline-block;
      cursor: pointer;
      background: #fff;
      padding: 5px 10px;
      color: #333;
      text-align: center;
      border-radius: 3px;
      border: 1px solid #ccc;
      overflow: hidden;
    }

    .webuploader-pick-hover {
      background: #e6e6e6;
      border-color: #adadad;
    }

    .webuploader-pick-disable {
      opacity: 0.6;
      pointer-events: none;
    }

    .balloon-uploader {
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .balloon-uploader-heading {
      background-color: #f5f5f5;
      color: #333;
      padding: 10px 15px;
      border-bottom: 1px solid #ddd;
      display: none;
    }

    .balloon-uploader-footer {
      background-color: #f5f5f5;
      color: #333;
      padding: 10px 15px;
      border-top: 1px solid #ddd;
      text-align: right;
    }

    .balloon-filelist {
      width: 100%;
    }

    .balloon-filelist-heading {
      position: relative;
      font-weight: bold;
      border-bottom: 2px solid #ddd;
    }

    .balloon-uploader-body {
      position: relative;

    }

    .balloon-filelist .file-name,
    .balloon-filelist .file-size,
    .balloon-filelist .file-status,
    .balloon-filelist .file-manage {
      position: relative;
      z-index: 1;
    }

    .balloon-filelist .file-name {
      margin-right: 250px;
      padding: 8px;
    }

    .balloon-filelist .file-size {
      position: absolute;
      top: 0px;
      right: 150px;
      width: 100px;
      text-align: right;
      padding: 8px;
    }

    .balloon-filelist .file-status {
      position: absolute;
      top: 0px;
      right: 0px;
      width: 120px;
      text-align: left;
      padding: 8px;

    }

    .balloon-filelist ul {
      list-style: none;
      margin: 0;
      padding: 0;
      min-height: 100px;
      max-height: 300px;
      overflow-y: scroll;
    }

    .balloon-filelist ul li {
      position: relative;
      border-bottom: 1px solid #ddd;
    }

    .balloon-dnd {
      visibility: hidden;
    }

    .balloon-uploader-none .balloon-uploader-footer,
    .balloon-uploader-none .balloon-uploader-body {
      visibility: hidden;
    }

    .balloon-uploader-none .balloon-dnd {
      visibility: visible;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      text-align: center;
      vertical-align: middle;
    }

    .balloon-nofile {
      position: absolute;
      top: 40px;
      left: 0;
      right: 0;
      bottom: 0;
      line-height: 100px;
      text-align: center;
      color: #999;
    }

    .balloon-uploader .file-pick-btn {
      display: inline-block;
    }

    .balloon-uploader .start-upload-btn {
      position: relative;
      display: inline-block;
      cursor: pointer;
      background: #5bc0de;
      padding: 5px 10px;
      color: #fff;
      text-align: center;
      border-radius: 3px;
      border: 1px solid #46b8da;
      overflow: hidden;
    }

    .balloon-uploader .start-upload-btn:hover {
      background: #31b0d5;
      border-color: #269abc;
    }

    .balloon-filelist .file-progress {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .balloon-filelist .file-progress-bar {
      background: rgb(219, 242, 215);
      background: rgba(59, 181, 33, 0.18);
      float: left;
      height: 100%;
    }

  </style>

  ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  ";
        // line 196
        if (((((($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "enableBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "enableBuyVideo", array()), 0)) : (0)) == 1) && ((($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array()), 0)) : (0)) <= 30)) && ((($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array()), 0)) : (0)) > 0))) {
            // line 197
            echo "    <div class=\"alert alert-warning\"
         role=\"alert\">";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频包将于%remaining%天后到期，请尽快续费。", array("%remaining%" => (($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array()), 0)) : (0)))), "html", null, true);
            echo "</div>
  ";
        }
        // line 200
        echo "  ";
        if ((((($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "enableBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "enableBuyVideo", array()), 0)) : (0)) == 1) && ((($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoInfo"]) ? $context["videoInfo"] : null), "remaining", array()), 0)) : (0)) <= 0))) {
            // line 201
            echo "    <div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频包已到期，请尽快续费。"), "html", null, true);
            echo "</div>
  ";
        }
        // line 203
        echo "  ";
        if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 204
            echo "    <div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频已被锁定，请联系客服人员："), "html", null, true);
            echo "0571-86819929。</div>
  ";
        }
        // line 206
        echo "  ";
        if ((((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "enabled", array()), 1)) : (1)) == 0) || ((($this->getAttribute((isset($context["videoStatus"]) ? $context["videoStatus"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoStatus"]) ? $context["videoStatus"] : null), "status", array()), null)) : (null)) == "stoped"))) {
            // line 207
            echo "    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的云视频已被禁用，请联系客服人员："), "html", null, true);
            echo "0571-86819929。</div>
  ";
        }
        // line 209
        echo "
  ";
        // line 210
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 211
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <p style=\"text-align:center;font-size:16px\">";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频托管服务由EduSoho教育云提供"), "html", null, true);
            echo " <a
              href=\"http://open.edusoho.com/educloud\" target=\"_blank\">";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情"), "html", null, true);
            echo "</a></p>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 221
            echo "    <div class=\"eduyun-main\">
    ";
            // line 222
            if ((((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "enabled", array()), 1)) : (1)) == 0) || ((($this->getAttribute((isset($context["videoStatus"]) ? $context["videoStatus"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["videoStatus"]) ? $context["videoStatus"] : null), "status", array()), null)) : (null)) == "stoped"))) {
                // line 223
                echo "      <div class=\"mask\"></div>
    ";
            }
            // line 225
            echo "
    <div class=\"controls radios\">
      <form class=\"form-horizontal\" id=\"cloud-video-form\" method=\"post\" novalidate>
        ";
            // line 228
            if ((((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "local") || ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array()), 0)) : (0)) == 0))) {
                // line 229
                echo "          <div class=\"row\">
            <div class=\"col-md-2\">
              <button type=\"submit\" class=\"btn btn-primary\" name=\"upload_mode\"
                      value=\"cloud\" ";
                // line 232
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array()), 0)) : (0)) == 0)) {
                    echo " disabled=\"disabled\"";
                }
                echo " >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("启用云视频"), "html", null, true);
                echo "</button>
            </div>
            ";
                // line 234
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array()), 0)) : (0)) == 0)) {
                    // line 235
                    echo "              <div class=\"col-md-10\">
                <span class=\"text-danger text-sm\">";
                    // line 236
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("抱歉，您尚未接入教育云，不能使用云视频服务！"), "html", null, true);
                    echo "</span>
                <p><a href=\"http://open.edusoho.com/educloud\" target=\"_blank\">";
                    // line 237
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即接入"), "html", null, true);
                    echo "</a></p>
              </div>
            ";
                }
                // line 240
                echo "          </div>
        ";
            } elseif (((($this->getAttribute(            // line 241
(isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "cloud")) : ("cloud")) == "cloud")) {
                // line 242
                echo "          <div>
            <span class=\"text-success\">";
                // line 243
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已启用"), "html", null, true);
                echo "</span>
            <button type=\"submit\" class=\"btn btn-default btn-sm mlm\" name=\"upload_mode\" value=\"local\"><span
                  class=\"text-muted\">";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
                echo "</span></button>
          </div>
        ";
            }
            // line 248
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
      </form>
      ";
            // line 250
            if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "cloud")) : ("cloud")) == "local")) {
                // line 251
                echo "        <div class=\"help-block\">
          ";
                // line 252
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("EduSoho云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击"), "html", null, true);
                echo "<a
              href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("这里"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情。"), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 256
            echo "    </div>

    ";
            // line 258
            if ((((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array()), 0)) : (0)) != 0) && ((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "cloud")) : ("cloud")) == "cloud"))) {
                // line 259
                echo "      <div class=\"page-header clearfix\">
        <h1 class=\"pull-left\">";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频功能设置"), "html", null, true);
                echo "</h1>
      </div>

      <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

      <div class=\"row form-group\">
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"support_mobile\">";
                // line 268
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机浏览器MP4视频"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 271
                echo $this->env->getExtension('topxia_html_twig')->radios("support_mobile", array("1" => "开启", "0" => "关闭"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "support_mobile", array()));
                echo "
            <div class=\"help-block\">
              ";
                // line 273
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("MP4文件较适合在不同手机机型下使用不同手机浏览器进行视频播放；"), "html", null, true);
                echo "<br/>
              ";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，新上传视频文件会生成一个MP4格式视频，并且在手机浏览器下默认使用MP4播放；"), "html", null, true);
                echo "<br/>
              <span style=\"color: red\">";
                // line 275
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注：MP4视频防盗性较差，且已生成MP4的文件关闭后也会存在，请慎重考虑。"), "html", null, true);
                echo "</span>
            </div>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 281
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频转码类型"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            <p>
              <span class=\"form-control-static text-info\">";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("画质"), "html", null, true);
                echo "</span>
              ";
                // line 286
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => $this->env->getExtension('translator')->trans("流畅 %<span class=\"text-muted\">%(适合PPT讲解)%</span>%", array("%<span class=\"text-muted\">%" => "<span class=\"text-danger\">", "%</span>%" => "</span>")), "normal" => $this->env->getExtension('translator')->trans("标准 %<span class=\"text-muted\">%(适合屏幕录制、摄像头拍摄)%</span>%", array("%<span class=\"text-muted\">%" => "<span class=\"text-danger\">", "%</span>%" => "</span>")), "high" => $this->env->getExtension('translator')->trans("精细 %<span class=\"text-muted\">%(适合动态电影)%</span>%", array("%<span class=\"text-muted\">%" => "<span class=\"text-danger\">", "%</span>%" => "</span>"))), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()));
                echo "
            </p>
            <p>
              <span class=\"form-control-static text-info\">";
                // line 289
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音质"), "html", null, true);
                echo "</span>
              ";
                // line 290
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => $this->env->getExtension('translator')->trans("流畅"), "normal" => $this->env->getExtension('translator')->trans("标准"), "high" => $this->env->getExtension('translator')->trans("高品")), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()));
                echo "
            </p>

          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"enable_playback_rates\">倍速播放</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 300
                echo $this->env->getExtension('topxia_html_twig')->radios("enable_playback_rates", array("1" => "开启", "0" => "关闭"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "enable_playback_rates", array()));
                echo "
            <div class=\"help-block\">
              开启后，云视频课时支持倍速播放；<br/>
              <span style=\"color: red\">注：仅支持高版本谷歌浏览器，火狐浏览器以及QQ浏览器（极速模式）。</span>
            </div>
          </div>
        </div>


        <hr>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 313
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频水印"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios \" data-content=\"123\">
            ";
                // line 317
                echo "
            <label>
              <input type=\"radio\" name=\"video_watermark\" value=\"0\"
                     ";
                // line 320
                if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
                echo "
            </label>
            <label class=\"video-watermark-property-tips\" data-content=\"
        ";
                // line 323
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("播放时水印将会覆盖在视频上，可随时更换；"), "html", null, true);
                echo "
        ";
                // line 324
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已经通过系统使用了内嵌水印的视频，将不会显示播放器水印。"), "html", null, true);
                echo "
        \">
              <input type=\"radio\" name=\"video_watermark\" value=\"1\"
                     ";
                // line 327
                if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 1)) {
                    echo "checked=\"checked\"";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启播放器水印"), "html", null, true);
                echo "
            </label>
            <label class=\"video-watermark-property-tips\" data-content=\"
        ";
                // line 330
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("能够更好的保护视频版权；"), "html", null, true);
                echo "
        ";
                // line 331
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传时将水印嵌入视频编码中，不可删改；"), "html", null, true);
                echo "
        ";
                // line 332
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未嵌入水印的视频在播放时将会显示播放器水印。"), "html", null, true);
                echo "
        \">
              <input type=\"radio\" name=\"video_watermark\" value=\"2\"
                     ";
                // line 335
                if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 2)) {
                    echo "checked=\"checked\"";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启内嵌水印"), "html", null, true);
                echo "
            </label>
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 342
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置播放器水印图片"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">

            <div id=\"cloud-video-watermark-container\">";
                // line 346
                if ($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())) {
                    echo "<img
                src=\"";
                    // line 347
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())), "html", null, true);
                    echo "\">";
                }
                echo "</div>
            <button class=\"btn btn-default\" id=\"cloud-video-watermark-upload\" type=\"button\"
                    data-url=\"";
                // line 349
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_upload");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
                echo "</button>
            <button class=\"btn btn-default\" id=\"cloud-video-watermark-remove\" type=\"button\"
                    data-url=\"";
                // line 351
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_remove");
                echo "\"
                    ";
                // line 352
                if ( !$this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())) {
                    echo "style=\"display:none;\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                echo "</button>

            <div class=\"help-block\">";
                // line 354
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持png/gif/jpg格式图片，建议使用半透明的png图片。（推荐图片大小为150×50）"), "html", null, true);
                echo "</div>
            <input type=\"hidden\" name=\"video_watermark_image\" value=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array()), "html", null, true);
                echo "\">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 361
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置内嵌水印图片"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">

            <div id=\"cloud-video-embed-watermark-container\">";
                // line 365
                if ($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())) {
                    echo "<img
                src=\"";
                    // line 366
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())), "html", null, true);
                    echo "\">";
                }
                echo "</div>
            <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-upload\" type=\"button\"
                    data-url=\"";
                // line 368
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_upload");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
                echo "</button>
            <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-remove\" type=\"button\"
                    data-url=\"";
                // line 370
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_remove");
                echo "\"
                    ";
                // line 371
                if ( !$this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())) {
                    echo "style=\"display:none;\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
                echo "</button>

            <div class=\"help-block\">";
                // line 373
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持png/gif/jpg格式图片，建议使用半透明的png图片（推荐图片大小为270×90）。"), "html", null, true);
                echo "</div>
            <input type=\"hidden\" name=\"video_embed_watermark_image\"
                   value=\"";
                // line 375
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array()), "html", null, true);
                echo "\">
          </div>
        </div>

        <hr>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
                // line 383
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频指纹"), "html", null, true);
                echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
                // line 386
                echo $this->env->getExtension('topxia_html_twig')->radios("video_fingerprint", array("0" => $this->env->getExtension('translator')->trans("关闭"), "1" => $this->env->getExtension('translator')->trans("开启")), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_fingerprint", array()));
                echo "
            <div
                class=\"help-block\">";
                // line 388
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，将在视频播放中随机时间、随机位置显示当前网站域名及"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%的用户名", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
                }
                // line 389
                echo "              。
            </div>
          </div>
        </div>
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label>云视频指纹显示时长</label>
          </div>
          <div class=\"controls col-md-8\">
            <input type=\"text\" id=\"video_fingerprint_time\" class=\"form-control width-input width-input-small\"
                   name=\"video_fingerprint_time\" value=\"";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_fingerprint_time", array()), "html", null, true);
                echo "\"> 秒
            <div class=\"help-block\">建议时长在0.5 - 1.5秒之间</div>
          </div>
        </div>
        ";
                // line 403
                if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                    // line 404
                    echo "
          <hr>
          <div class=\"upload-mode\">
          </div>

          <div class=\"row form-group\">
            <div class=\"col-md-3 control-label\">
              <label>";
                    // line 411
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频片头"), "html", null, true);
                    echo "</label>
            </div>

            <div class=\"controls col-md-8 radios\">
              ";
                    // line 415
                    echo $this->env->getExtension('topxia_html_twig')->radios("video_header", array("0" => $this->env->getExtension('translator')->trans("关闭"), "1" => $this->env->getExtension('translator')->trans("开启")), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array()), 0)) : (0)));
                    echo "
            </div>
          </div>
          <div class=\"row form-group\" id=\"upload-panel\"
               data-params-url=\"";
                    // line 419
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_uploadfile_head_leader_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()))), "html", null, true);
                    echo "\"
               data-hls-encrypted=\"1\"
          >
            <div class=\"col-md-3\">
            </div>
            <div class=\"controls col-md-8\">


              <div class=\"head-leader-edit\"
                  ";
                    // line 428
                    if ( !((array_key_exists("headLeader", $context)) ? (_twig_default_filter((isset($context["headLeader"]) ? $context["headLeader"] : null), null)) : (null))) {
                        // line 429
                        echo "                    style=\"display:none;\"
                  ";
                    }
                    // line 431
                    echo "              >
                <span data-role=\"placeholder\">";
                    // line 432
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "filename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "filename", array()), "")) : ("")), "html", null, true);
                    echo "</span>
                <button class=\"btn btn-link btn-sm edit-btn\" type=\"button\"><i
                      class=\"glyphicon glyphicon-edit\"></i> ";
                    // line 434
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
                    echo "</button>
                ";
                    // line 435
                    if (((($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "convertStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "convertStatus", array()), null)) : (null)) != "success")) {
                        // line 436
                        echo "                  <div class=\"alert alert-warning\" data-role=\"waiting-tip\">
                    ";
                        // line 437
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。"), "html", null, true);
                        echo "<br/>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("转换完成后将以站内消息通知您。"), "html", null, true);
                        echo "
                  </div>
                ";
                    }
                    // line 440
                    echo "
              </div>

              <div class=\"file-chooser-main\"
                  ";
                    // line 444
                    if (((array_key_exists("headLeader", $context)) ? (_twig_default_filter((isset($context["headLeader"]) ? $context["headLeader"] : null), null)) : (null))) {
                        // line 445
                        echo "                    style=\"display:none;\"
                  ";
                    }
                    // line 447
                    echo "              >
                ";
                    // line 448
                    $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken("headLeader", 0, "private");
                    // line 449
                    echo "                <div id=\"balloon-uploader\"
                     data-init-url=\"";
                    // line 450
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
                    echo "\"
                     data-finish-url=\"";
                    // line 451
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
                    echo "\"
                     data-upload-auth-url=\"";
                    // line 452
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
                    echo "\"
                     data-accept=\"";
                    // line 453
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept("attachment", "video")), "html", null, true);
                    echo "\"
                     data-process=\"";
                    // line 454
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode("headLeader"), "html", null, true);
                    echo "\">
                </div>

                <div class=\"alert alert-info\">
                  <ul>
                    <li>";
                    // line 459
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
                    echo "<strong>mp4, avi, flv, f4v, wmv, mov, rmvb, mkv,
                        m4v</strong>";
                    // line 460
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("格式的视频文件上传，文件大小不能超过"), "html", null, true);
                    echo "<strong>10 MB</strong>。
                    </li>
                    <li>";
                    // line 462
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支持"), "html", null, true);
                    echo "<strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("断点续传"), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（仅支持HTML5浏览器）。"), "html", null, true);
                    echo "</li>
                    <li>";
                    // line 463
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频将上传到"), "html", null, true);
                    echo "
                      <strong>";
                    // line 464
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频服务器"), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("，上传后会对视频进行格式转换，转换过程需要一定的时间。"), "html", null, true);
                    echo "</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        ";
                }
                // line 471
                echo "
        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"controls col-md-8\">
            <button type=\"submit\" id=\"cloud-video-form-btn\" class=\"btn btn-primary\"
                    data-submiting-text=\"";
                // line 476
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
                echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 480
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
      </form>
    ";
            }
            // line 483
            echo "  ";
        }
        // line 484
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  855 => 484,  852 => 483,  846 => 480,  837 => 476,  830 => 471,  818 => 464,  814 => 463,  806 => 462,  801 => 460,  797 => 459,  789 => 454,  785 => 453,  781 => 452,  777 => 451,  773 => 450,  770 => 449,  768 => 448,  765 => 447,  761 => 445,  759 => 444,  753 => 440,  745 => 437,  742 => 436,  740 => 435,  736 => 434,  731 => 432,  728 => 431,  724 => 429,  722 => 428,  710 => 419,  703 => 415,  696 => 411,  687 => 404,  685 => 403,  678 => 399,  666 => 389,  661 => 388,  656 => 386,  650 => 383,  639 => 375,  634 => 373,  625 => 371,  621 => 370,  614 => 368,  607 => 366,  603 => 365,  596 => 361,  587 => 355,  583 => 354,  574 => 352,  570 => 351,  563 => 349,  556 => 347,  552 => 346,  545 => 342,  531 => 335,  525 => 332,  521 => 331,  517 => 330,  507 => 327,  501 => 324,  497 => 323,  487 => 320,  482 => 317,  476 => 313,  460 => 300,  447 => 290,  443 => 289,  437 => 286,  433 => 285,  426 => 281,  417 => 275,  413 => 274,  409 => 273,  404 => 271,  398 => 268,  387 => 260,  384 => 259,  382 => 258,  378 => 256,  370 => 253,  365 => 252,  362 => 251,  360 => 250,  354 => 248,  348 => 245,  343 => 243,  340 => 242,  338 => 241,  335 => 240,  329 => 237,  325 => 236,  322 => 235,  320 => 234,  311 => 232,  306 => 229,  304 => 228,  299 => 225,  295 => 223,  293 => 222,  290 => 221,  281 => 215,  277 => 214,  272 => 211,  270 => 210,  267 => 209,  261 => 207,  258 => 206,  252 => 204,  249 => 203,  243 => 201,  240 => 200,  235 => 198,  232 => 197,  230 => 196,  225 => 194,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
