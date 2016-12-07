<?php

/* TopxiaAdminBundle:Default:system.status.html.twig */
class __TwigTemplate_edaf43b8fe164a20f2a035143063ef051354e37a09b62748ccf0a7d41129a442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"table table-condensed table-bordered table-striped table-hover\">
  ";
        // line 2
        $context["status"] = 0;
        // line 3
        echo "  ";
        if (((isset($context["error"]) ? $context["error"] : null) != "error")) {
            // line 4
            echo "    ";
            if ((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null)) {
                // line 5
                echo "      ";
                $context["status"] = 1;
                // line 6
                echo "      <tr>
        <td>";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主系统"), "html", null, true);
                echo "</td>
        <td>
          <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                // line 9
                echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即更新"), "html", null, true);
                echo "</a>
          <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
          ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前版本"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "&nbsp;
          ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一版本"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null), "package", array()), "toVersion", array()), "html", null, true);
                echo "&nbsp;
          ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新版本"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null), "latestVersion", array()), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            } else {
                // line 17
                echo "      <tr>
        <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主系统"), "html", null, true);
                echo "</td>
        <td>
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已是最新版本"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            }
            // line 25
            echo "
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        if (((isset($context["error"]) ? $context["error"] : null) == "error")) {
            // line 29
            echo "    <tr>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主系统"), "html", null, true);
            echo "</td>
      <td rowspan=\"4\">
        <div class=\"empty\"><span style=\"color:#cc0000;float:left;text-align:left;\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云平台参数设置不正确，会影响到系统正常的运行，"), "html", null, true);
            echo "
            <a
                href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请修改设置。"), "html", null, true);
            echo "</a></span></div>
      </td>
    </tr>
    <tr>
      <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用更新"), "html", null, true);
            echo "</td>
    </tr>

    <tr>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新应用"), "html", null, true);
            echo "</td>
    </tr>

    <tr>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频"), "html", null, true);
            echo "</td>
    </tr>

  ";
        } else {
            // line 50
            echo "    <tr>
      <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用更新"), "html", null, true);
            echo "</td>
      <td>";
            // line 52
            if ((isset($context["app_count"]) ? $context["app_count"] : null)) {
                // line 53
                echo "          ";
                if (((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1) && ((isset($context["app_count"]) ? $context["app_count"] : null) == 1))) {
                    // line 54
                    echo "            <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
            ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有应用都已是最新版本"), "html", null, true);
                    echo "
          ";
                } else {
                    // line 57
                    echo "            <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
            ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还有"), "html", null, true);
                    echo "
            <span class=\"badge\">
              ";
                    // line 60
                    if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1)) {
                        // line 61
                        echo "                ";
                        echo twig_escape_filter($this->env, ((isset($context["app_count"]) ? $context["app_count"] : null) - 1), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 63
                        echo "                ";
                        echo twig_escape_filter($this->env, (isset($context["app_count"]) ? $context["app_count"] : null), "html", null, true);
                        echo "
              ";
                    }
                    // line 65
                    echo "            </span>
            ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个应用没有更新"), "html", null, true);
                    echo "
            <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                    // line 67
                    echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即更新"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 69
                echo "        ";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有应用都已是最新版本"), "html", null, true);
                echo "
        ";
            }
            // line 70
            echo "</td>
    </tr>

    <tr>
      <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新应用"), "html", null, true);
            echo "</td>
      <td>";
            // line 75
            if (((isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null) > 0)) {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还有"), "html", null, true);
                echo "
          <span
              class=\"badge\">";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个应用没有安装"), "html", null, true);
                echo "<a class=\"pull-right\"
                                                                                   href=\"";
                // line 78
                echo $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => "all"));
                echo "\">
          ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                echo "</a>";
            } else {
                echo "<span
            class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已安装了全部应用"), "html", null, true);
                echo "
        ";
            }
            // line 81
            echo "</td>
    </tr>

    <tr>
      <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频"), "html", null, true);
            echo "</td>
      <td>  ";
            // line 86
            if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "accessCloud", array()), 0)) : (0)) != 0)) {
                echo "<span
            class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已开通"), "html", null, true);
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") != "cloud")) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("尚未启用"), "html", null, true);
                    echo ")
          <a class=\"pull-right\" href=\"";
                    // line 88
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                    echo "</a>";
                }
            } else {
                // line 89
                echo "          <span class=\"glyphicon glyphicon-info-sign text-info\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还未开通"), "html", null, true);
                echo "<a class=\"pull-right\"
                                                                                             href=\"";
                // line 90
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                echo "</a>
        ";
            }
            // line 91
            echo "</td>
    </tr>
  ";
        }
        // line 94
        echo "  <tr>
    <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
        echo "</td>
    <td>
      ";
        // line 97
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_student_capacity", 0) > 0)) {
            // line 98
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已开通"), "html", null, true);
            echo "
        ";
            // line 100
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 0)) {
                // line 101
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(尚未启用)"), "html", null, true);
                echo "
          <a class=\"pull-right\" href=\"";
                // line 102
                echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
                echo "#live-course-set\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 104
                echo "          ";
                if ((twig_length_filter($this->env, (isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null)) > 0)) {
                    // line 105
                    echo "            ";
                    if ((((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "normal") && ((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array()), 0)) : (0)) > 0))) {
                        // line 106
                        echo "              (";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期至"), "html", null, true);
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array()), "0")) : ("0")), "Y-m-d"), "html", null, true);
                        echo " )
            ";
                    } elseif (((($this->getAttribute(                    // line 107
(isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "tryOut")) {
                        // line 108
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(体验用户)"), "html", null, true);
                        echo "
            ";
                    }
                    // line 110
                    echo "          ";
                }
                // line 111
                echo "        ";
            }
            // line 112
            echo "
      ";
        } else {
            // line 114
            echo "        <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
        ";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还未开通"), "html", null, true);
            echo "
        <a class=\"pull-right\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
            echo "#live-course-set\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
            echo "</a>
      ";
        }
        // line 118
        echo "    </td>
  </tr>

  <tr>
    <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移动客户端"), "html", null, true);
        echo "</td>
    <td>
      ";
        // line 124
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 125
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已启用"), "html", null, true);
            echo "
      ";
        } else {
            // line 127
            echo "        <span class=\"glyphicon glyphicon-info-sign text-info\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还未启用"), "html", null, true);
            echo "<a class=\"pull-right\"
                                                                                           href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
            echo "</a>
      ";
        }
        // line 130
        echo "    </td>
  </tr>

  ";
        // line 133
        if (((($this->getAttribute((isset($context["mobileCustomization"]) ? $context["mobileCustomization"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobileCustomization"]) ? $context["mobileCustomization"] : null), "status", array()), null)) : (null)) == "ok")) {
            // line 134
            echo "  <tr>
    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移动端定制"), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 137
            $context["currentVersion"] = $this->getAttribute($this->getAttribute((isset($context["mobileCustomization"]) ? $context["mobileCustomization"] : null), "customization", array()), "currentVersion", array());
            // line 138
            echo "      ";
            $context["newestVersion"] = $this->getAttribute((isset($context["mobileCustomization"]) ? $context["mobileCustomization"] : null), "newestVersion", array());
            // line 139
            echo "      <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已定制"), "html", null, true);
            echo "
      (
      ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前版本"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["currentVersion"]) ? $context["currentVersion"] : null), "html", null, true);
            echo "
      ";
            // line 142
            if (((isset($context["newestVersion"]) ? $context["newestVersion"] : null) > (isset($context["currentVersion"]) ? $context["currentVersion"] : null))) {
                // line 143
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新版本"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, (isset($context["newestVersion"]) ? $context["newestVersion"] : null), "html", null, true);
                echo "
      ";
            }
            // line 145
            echo "      )
      ";
            // line 146
            if (((isset($context["newestVersion"]) ? $context["newestVersion"] : null) > (isset($context["currentVersion"]) ? $context["currentVersion"] : null))) {
                // line 147
                echo "        <span class=\"upgrade-status\">
                  ";
                // line 148
                $context["applyStatus"] = $this->getAttribute($this->getAttribute((isset($context["mobileCustomization"]) ? $context["mobileCustomization"] : null), "customization", array()), "applyStatus", array());
                // line 149
                echo "          ";
                if (twig_in_filter((isset($context["applyStatus"]) ? $context["applyStatus"] : null), array(0 => "unsubmit", 1 => "failed"))) {
                    // line 150
                    echo "            ";
                    if (((isset($context["applyStatus"]) ? $context["applyStatus"] : null) == "failed")) {
                        // line 151
                        echo "              <span class=\"label label-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级失败"), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 153
                    echo "                    <a class=\"btn btn-info btn-xs mls\" target=\"_blank\"
                       href=\"http://demo.edusoho.com/mobile/\">";
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("体验"), "html", null, true);
                    echo "</a>
            <a class=\"btn btn-info btn-xs mobile-customization-upgrade-btn\"
               data-url=\"";
                    // line 156
                    echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_customization_upgrade");
                    echo "\"
               data-loading-text=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交中..."), "html", null, true);
                    echo "\"
               data-data=\"";
                    // line 158
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(array("currentVersion" => (isset($context["currentVersion"]) ? $context["currentVersion"] : null), "targetVersion" => (isset($context["newestVersion"]) ? $context["newestVersion"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("申请升级"), "html", null, true);
                    echo "</a>
                  ";
                } elseif ((                // line 159
(isset($context["applyStatus"]) ? $context["applyStatus"] : null) == "submitted")) {
                    // line 160
                    echo "            <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级受理中"), "html", null, true);
                    echo "</span>
          ";
                } elseif ((                // line 161
(isset($context["applyStatus"]) ? $context["applyStatus"] : null) == "accepted")) {
                    // line 162
                    echo "            <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级已受理"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 164
                echo "                </span>
        <div class=\"mls help-block\">";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(如有疑问，请联系客服人员 0571-86819929)"), "html", null, true);
                echo "</div>
      ";
            }
            // line 167
            echo "    </td>
    ";
        }
        // line 169
        echo "
</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system.status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 169,  501 => 167,  496 => 165,  493 => 164,  487 => 162,  485 => 161,  480 => 160,  478 => 159,  472 => 158,  468 => 157,  464 => 156,  459 => 154,  456 => 153,  450 => 151,  447 => 150,  444 => 149,  442 => 148,  439 => 147,  437 => 146,  434 => 145,  426 => 143,  424 => 142,  418 => 141,  412 => 139,  409 => 138,  407 => 137,  402 => 135,  399 => 134,  397 => 133,  392 => 130,  385 => 128,  380 => 127,  374 => 125,  372 => 124,  367 => 122,  361 => 118,  354 => 116,  350 => 115,  347 => 114,  343 => 112,  340 => 111,  337 => 110,  331 => 108,  329 => 107,  323 => 106,  320 => 105,  317 => 104,  310 => 102,  305 => 101,  303 => 100,  299 => 99,  296 => 98,  294 => 97,  289 => 95,  286 => 94,  281 => 91,  274 => 90,  269 => 89,  262 => 88,  255 => 87,  251 => 86,  247 => 85,  241 => 81,  236 => 80,  230 => 79,  226 => 78,  220 => 77,  213 => 75,  209 => 74,  203 => 70,  195 => 69,  188 => 67,  184 => 66,  181 => 65,  175 => 63,  169 => 61,  167 => 60,  162 => 58,  159 => 57,  154 => 55,  151 => 54,  148 => 53,  146 => 52,  142 => 51,  139 => 50,  132 => 46,  125 => 42,  118 => 38,  109 => 34,  104 => 32,  99 => 30,  96 => 29,  94 => 28,  91 => 27,  87 => 25,  78 => 21,  72 => 18,  69 => 17,  60 => 13,  54 => 12,  48 => 11,  41 => 9,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
