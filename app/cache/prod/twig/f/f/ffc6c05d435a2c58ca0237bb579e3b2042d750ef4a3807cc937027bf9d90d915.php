<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_ffc6c05d435a2c58ca0237bb579e3b2042d750ef4a3807cc937027bf9d90d915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:inspect"));
        echo "
  <div class=\"page-header\">
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理中心"), "html", null, true);
        echo "  </h1>
  </div>
  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
            // line 12
            echo "
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div id=\"app-upgrade-alert\" class=\"alert alert-info alert-dismissable hide\"
             data-url=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades_count");
            echo "\" data-upgrade-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        </div>
      </div>

      ";
            // line 21
            if ( !(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
                // line 22
                echo "        <div class=\"col-md-12\">
          ";
                // line 23
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
                echo "
        </div>
      ";
            }
            // line 26
            echo "

      <div class=\"col-md-6\">
        <div class=\"panel panel-default\">

          <div class=\"panel-heading clearfix\">
            <span class=\"pull-right\" style=\"display:block\">
              <span id=\"onlineNum\" data-url=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("admin_online_count");
            echo "\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入在线人数..."), "html", null, true);
            echo "
              </span>
              （<span id=\"loginNum\" data-url=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("admin_login_count");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入登录人数..."), "html", null, true);
            echo "</span>）
            </span>
            <h3 class=\"panel-title pull-left\" id=\"operation-analysis-title\"
                data-url=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("admin_operation_analysis");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("数据统计"), "html", null, true);
            echo "

            </h3>
          </div>
          <div id=\"operation-analysis-table\">
            <div class=\"empty\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入数据，请稍等。"), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
      ";
            // line 58
            echo "      ";
            if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), null) != 1)) {
                // line 59
                echo "        <div class=\"col-md-6\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\" id=\"system-status-title\"
                  data-url=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("admin_system_status");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("系统状态"), "html", null, true);
                echo "</h3>
            </div>
            <div id=\"system-status\">
              <div class=\"empty\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入数据，请稍等。"), "html", null, true);
                echo "</div>
            </div>
          </div>
        </div>
      ";
            }
            // line 71
            echo "      <div id=\"popular-courses-panel\" class=\"col-md-6\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <select id=\"popular-courses-type\" class=\"pull-right\" data-url=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("admin_popular_courses");
            echo "\">
              ";
            // line 75
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("dateType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "dateType"), "method"));
            echo "
            </select>
            <h3 class=\"panel-title\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("受欢迎课程"), "html", null, true);
            echo "</h3>
          </div>
          <div id=\"popular-courses-table\">
            <div class=\"empty\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入数据，请稍等。"), "html", null, true);
            echo "</div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      ";
            // line 87
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:userCoinsRecordsBlock"));
            echo "
    </div>

    <div class=\"row\">
      ";
            // line 91
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
            echo "
    </div>

    <div class=\"row\">
      ";
            // line 95
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:latestPaidOrdersBlock"));
            echo "
    </div>

  ";
        } else {
            // line 99
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        <h4>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("欢迎来到%name%管理后台", array("%name%" => $this->env->getExtension('topxia_web_twig')->getSetting("site.name"))), "html", null, true);
            echo "</h4>
      </div>
    </div>
  ";
        }
        // line 105
        echo "
  <input type=\"hidden\" id=\"admin-notice\" value=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("admin_notice_modal");
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 106,  215 => 105,  208 => 101,  204 => 99,  197 => 95,  190 => 91,  183 => 87,  173 => 80,  167 => 77,  162 => 75,  158 => 74,  153 => 71,  145 => 66,  137 => 63,  131 => 59,  128 => 58,  121 => 44,  111 => 39,  103 => 36,  98 => 34,  94 => 33,  85 => 26,  79 => 23,  76 => 22,  74 => 21,  64 => 16,  58 => 12,  56 => 11,  51 => 9,  46 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
