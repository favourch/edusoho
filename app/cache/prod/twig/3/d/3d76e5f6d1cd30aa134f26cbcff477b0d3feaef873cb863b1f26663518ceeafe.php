<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_3d76e5f6d1cd30aa134f26cbcff477b0d3feaef873cb863b1f26663518ceeafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('permission.permission_extension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : null));
        // line 7
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 14
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 27
        echo "  </title>

  ";
        // line 29
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 30
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 33
        echo "  
  ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 60
        $this->loadTemplate("PermissionBundle:Templates:navigation.html.twig", "TopxiaAdminBundle::layout.html.twig", 60)->display(array_merge($context, array("parentCode" => "admin")));
        // line 61
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回首页"), "html", null, true);
        echo "</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 85
        $context["notifies"] = $this->env->getExtension('topxia_web_twig')->pluginUpdateNotify();
        // line 86
        echo "      ";
        if ( !twig_test_empty((isset($context["notifies"]) ? $context["notifies"] : null))) {
            // line 87
            echo "        <div style=\"margin: 0 15px\">
          <div class=\"alert alert-danger\">
            【重要】网站升级v7.2.0后，为保证正常使用，请务必及时升级插件（";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["notifies"]) ? $context["notifies"] : null), "html", null, true);
            echo "）至最新版！ <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">请立即升级！</a>
          </div>
        </div>
      ";
        }
        // line 93
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "    </div>
  </div>

  ";
        // line 139
        $this->displayBlock('footer', $context, $blocks);
        // line 142
        echo "
  ";
        // line 143
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 143)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 144
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 145
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 146
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 147
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 153
        echo "</body>
</html>

";
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        // line 24
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission($this->getAttribute($this->env->getExtension('permission.permission_extension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : null)), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "        <div class=\"col-md-2\">
          ";
        // line 95
        $this->displayBlock('sidebar', $context, $blocks);
        // line 98
        echo "        </div>

        <div class=\"col-md-10\">
          <div class=\"page-header clearfix\">

            <h1 class=\"pull-left\">
              ";
        // line 104
        $this->displayBlock('page_title', $context, $blocks);
        // line 107
        echo "            </h1>
            <div class=\"pull-right\">

              ";
        // line 110
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 122
        echo "
            </div>
          </div>

          ";
        // line 126
        $this->displayBlock('content_header', $context, $blocks);
        // line 127
        echo "          
          ";
        // line 128
        $this->displayBlock('tabs', $context, $blocks);
        // line 129
        echo "
          ";
        // line 130
        $this->displayBlock('capsule', $context, $blocks);
        // line 131
        echo "
          ";
        // line 132
        $this->displayBlock('main', $context, $blocks);
        // line 133
        echo "        </div>

      ";
    }

    // line 95
    public function block_sidebar($context, array $blocks = array())
    {
        // line 96
        echo "            ";
        $this->loadTemplate("PermissionBundle:Templates:side-bar.html.twig", "TopxiaAdminBundle::layout.html.twig", 96)->display($context);
        // line 97
        echo "          ";
    }

    // line 104
    public function block_page_title($context, array $blocks = array())
    {
        // line 105
        echo "                ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "fullname", array()), $this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array()))) : ($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "name", array()))), "html", null, true);
        echo "
              ";
    }

    // line 110
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 111
        echo "
                ";
        // line 112
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : null), false)) : (false)))) {
            // line 113
            echo "                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('permission.permission_extension')->getSubPermissions($this->getAttribute($this->env->getExtension('permission.permission_extension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : null)), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 114
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                ";
        } else {
            // line 117
            echo "                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('permission.permission_extension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 118
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                ";
        }
        // line 121
        echo "              ";
    }

    // line 126
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 128
    public function block_tabs($context, array $blocks = array())
    {
        $this->loadTemplate("PermissionBundle:Templates:tabs.html.twig", "TopxiaAdminBundle::layout.html.twig", 128)->display($context);
    }

    // line 130
    public function block_capsule($context, array $blocks = array())
    {
    }

    // line 132
    public function block_main($context, array $blocks = array())
    {
    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        // line 140
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 156
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 157
            echo "  <a 
  ";
            // line 158
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 159
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 161
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 162
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 166
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 168
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 169
                echo "    target=\"blank\"
  ";
            }
            // line 171
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array())), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 171,  487 => 169,  484 => 168,  478 => 166,  470 => 162,  467 => 161,  461 => 159,  459 => 158,  456 => 157,  442 => 156,  435 => 140,  432 => 139,  427 => 132,  422 => 130,  416 => 128,  411 => 126,  407 => 121,  404 => 120,  395 => 118,  390 => 117,  387 => 116,  378 => 114,  373 => 113,  371 => 112,  368 => 111,  365 => 110,  358 => 105,  355 => 104,  351 => 97,  348 => 96,  345 => 95,  339 => 133,  337 => 132,  334 => 131,  332 => 130,  329 => 129,  327 => 128,  324 => 127,  322 => 126,  316 => 122,  314 => 110,  309 => 107,  307 => 104,  299 => 98,  297 => 95,  294 => 94,  291 => 93,  286 => 42,  280 => 39,  276 => 38,  272 => 37,  268 => 36,  263 => 35,  260 => 34,  249 => 24,  246 => 23,  239 => 153,  230 => 149,  225 => 147,  222 => 146,  220 => 145,  217 => 144,  215 => 143,  212 => 142,  210 => 139,  205 => 136,  202 => 93,  193 => 89,  189 => 87,  186 => 86,  184 => 85,  168 => 74,  163 => 72,  155 => 69,  149 => 66,  144 => 64,  140 => 63,  136 => 61,  134 => 60,  123 => 57,  108 => 45,  104 => 44,  101 => 43,  99 => 42,  96 => 41,  94 => 34,  91 => 33,  86 => 31,  81 => 30,  79 => 29,  75 => 27,  70 => 26,  68 => 23,  62 => 20,  52 => 14,  44 => 7,  42 => 6,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }
}
