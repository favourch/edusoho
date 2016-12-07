<?php

/* TopxiaAdminBundle:EduCloud:app-im-setting.html.twig */
class __TwigTemplate_850e5af497fe1502371e562df99e6d33615c82a3db2c6333b080194d198d8bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:app-im-setting.html.twig", 1);
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
        $context["menu"] = "admin_app_im_setting";
        // line 4
        $context["script_controller"] = "setting/app-im";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  ";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 11
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <p style=\"text-align:center;font-size:16px\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("即时聊天服务由EduSoho教育云提供"), "html", null, true);
            echo " 
          <a href=\"http://open.edusoho.com/educloud\" target=\"_blank\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("了解详情"), "html", null, true);
            echo "</a>
        </p>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 22
            echo "    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

      ";
            // line 25
            echo "      
      <div class=\"row form-group search-button\">
        ";
            // line 27
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == "unconnect")) {
                // line 28
                echo "          <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"upload_mode\" value=\"cloud\" disabled=\"disabled\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启即时聊天"), "html", null, true);
                echo "
            </button>
          </div>
          <div class=\"col-md-10\">
            <span class=\"text-danger text-sm\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("抱歉，您尚未接入教育云，不能使用即时聊天服务！"), "html", null, true);
                echo "</span>
            <p><a href=\"http://open.edusoho.com/educloud\" target=\"_blank\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即接入"), "html", null, true);
                echo "</a></p>
          </div>
        ";
            } elseif (($this->getAttribute(            // line 36
(isset($context["data"]) ? $context["data"] : null), "status", array()) == "unbinded")) {
                // line 37
                echo "          <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"upload_mode\" value=\"cloud\" disabled=\"disabled\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启即时聊天"), "html", null, true);
                echo "
            </button>
          </div>
          <div class=\"col-md-10\">
            <span class=\"text-danger text-sm\">";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未绑定授权域名不能开通即时聊天！"), "html", null, true);
                echo "</span>
            <p><a href=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即设置"), "html", null, true);
                echo "</a></p>
          </div>
        ";
            } elseif (($this->getAttribute(            // line 45
(isset($context["data"]) ? $context["data"] : null), "status", array()) == "binded_error")) {
                // line 46
                echo "          <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-default\" name=\"upload_mode\" value=\"cloud\" disabled=\"disabled\">";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启即时聊天"), "html", null, true);
                echo "
            </button>
          </div>
          <div class=\"col-md-10\">
            <span class=\"text-danger text-sm\">";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前域名与授权域名不符，不能开通即时聊天！"), "html", null, true);
                echo "</span>
            <p><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即设置"), "html", null, true);
                echo "</a></p>
          </div>
        ";
            } else {
                // line 55
                echo "          ";
                if ( !$this->env->getExtension('topxia_web_twig')->getSetting("app_im.enabled")) {
                    // line 56
                    echo "            <div class=\"col-md-2 control-cloud\">
              <button class=\"btn btn-primary mhs app-im-open\" type=\"submit\" data-loading-text=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在启动..."), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_im_update");
                    echo "\" data-status=\"1\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启即时聊天"), "html", null, true);
                    echo "</button>
            </div>
          ";
                } else {
                    // line 60
                    echo "            <div class=\"col-md-2 control-cloud success\">
              <span class=\"text-success\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已开启"), "html", null, true);
                    echo "</span>
            </div>
            <div class=\"controls col-md-8 cloud-warning\">
              <button class=\"btn btn-primary mhs app-im-close\" type=\"submit\" data-loading-text=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在关闭..."), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_im_update");
                    echo "\" data-status=\"0\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
                    echo "</button>
            </div>
          ";
                }
                // line 67
                echo "        ";
            }
            // line 68
            echo "      </div>

      <h4>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("IM功能说明"), "html", null, true);
            echo "</h4>

      ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前功能仅支持阔知学堂3.6及以上版本；"), "html", null, true);
            echo "<br>
      ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启后，课程和班级会生成相应即时聊天讨论组和使用个人聊天功能；"), "html", null, true);
            echo "<br>
      ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("利于老师发布课程、班级的相关信息并且及时、有效的通知到学生；"), "html", null, true);
            echo "<br>
      ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("利于师生无障碍的针对课程、班级的内容进行沟通和交流；"), "html", null, true);
            echo "<br>
      ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("利于促进学生之间的交流，提高网校活跃度；"), "html", null, true);
            echo "<br>


    </form>
  ";
        }
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:app-im-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 81,  204 => 76,  200 => 75,  196 => 74,  192 => 73,  188 => 72,  183 => 70,  179 => 68,  176 => 67,  166 => 64,  160 => 61,  157 => 60,  147 => 57,  144 => 56,  141 => 55,  133 => 52,  129 => 51,  122 => 47,  119 => 46,  117 => 45,  110 => 43,  106 => 42,  99 => 38,  96 => 37,  94 => 36,  89 => 34,  85 => 33,  78 => 29,  75 => 28,  73 => 27,  69 => 25,  65 => 22,  55 => 15,  51 => 14,  46 => 11,  44 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
