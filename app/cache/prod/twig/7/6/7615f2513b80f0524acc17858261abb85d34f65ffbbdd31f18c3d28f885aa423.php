<?php

/* TopxiaAdminBundle:Content:content-modal.html.twig */
class __TwigTemplate_7615f2513b80f0524acc17858261abb85d34f65ffbbdd31f18c3d28f885aa423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Content:content-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 144
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name", array()), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context["content"] = ((array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) ? $context["content"] : null), null)) : (null));
        // line 10
        echo "
<form class=\"two-col-form\" id=\"content-form\" method=\"post\" enctype=\"multipart/form-data\"
  ";
        // line 12
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 13
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 15
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "alias", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 17
        echo "  >
  <div class=\"row\">
    <div class=\"col-md-8 two-col-main\">
      ";
        // line 20
        if (twig_in_filter("title", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 21
            echo "        <div class=\"form-group\">
          <label for=\"content-title-field\" class=\"control-label\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"content-title-field\" type=\"text\" name=\"title\" value=\"";
            // line 24
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "title");
            echo "\">
          </div>
        </div>
      ";
        }
        // line 28
        echo "
      <div class=\"form-group\">
        <label for=\"editor-field\" class=\"control-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑器类型"), "html", null, true);
        echo "</label>
        <div class=\"controls radios\">
          <label><input type=\"radio\" name=\"editor\" value=\"richeditor\" 
            ";
        // line 33
        if (twig_test_empty((isset($context["content"]) ? $context["content"] : null))) {
            // line 34
            echo "             checked=\"checked\" 
            ";
        } elseif (($this->getAttribute(        // line 35
(isset($context["content"]) ? $context["content"] : null), "editor", array()) == "richeditor")) {
            // line 36
            echo "             checked=\"checked\"
            ";
        }
        // line 37
        echo ">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("可视化编辑器"), "html", null, true);
        echo "</label>
        <label><input type=\"radio\" name=\"editor\" value=\"none\"
          ";
        // line 40
        if (((isset($context["content"]) ? $context["content"] : null) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "editor", array()) == "none"))) {
            echo " checked=\"checked\" ";
        }
        // line 41
        echo "          >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("HTML编辑器"), "html", null, true);
        echo "</label>
        </div>
      </div>

      ";
        // line 45
        if (twig_in_filter("body", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 46
            echo "        <label for=\"content-body-field\" class=\"control-label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正文"), "html", null, true);
            echo "</label>

        <div class=\"form-group\" 
        ";
            // line 49
            if (((isset($context["content"]) ? $context["content"] : null) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "editor", array()) == "none"))) {
                // line 50
                echo "          style=\"display:none\"
        ";
            }
            // line 52
            echo "        >
          <div class=\"controls\">
            <textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"richeditor-body\"
              data-image-upload-url=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"
              data-flash-upload-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
            echo "\"
            >";
            // line 57
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "body");
            echo "</textarea>
          </div>
        </div>

        <div class=\"form-group\" 
        ";
            // line 62
            if (twig_test_empty((isset($context["content"]) ? $context["content"] : null))) {
                // line 63
                echo "               style=\"display:none\" 
              ";
            } elseif (($this->getAttribute(            // line 64
(isset($context["content"]) ? $context["content"] : null), "editor", array()) == "richeditor")) {
                // line 65
                echo "               style=\"display:none\"
              ";
            }
            // line 66
            echo ">
          <div class=\"controls\">
            <textarea class=\"form-control\" id=\"noneeditor-body-field\" rows=\"16\" name=\"noneeditor-body\">";
            // line 68
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "body");
            echo "</textarea>
          </div>
        </div> 
      ";
        }
        // line 72
        echo "
      ";
        // line 73
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : null), "extendedFields", array())) {
            // line 74
            echo "        ";
            $this->loadTemplate((("TopxiaAdminBundle:Content:" . $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "alias", array())) . "-extended-fields.html.twig"), "TopxiaAdminBundle:Content:content-modal.html.twig", 74)->display($context);
            // line 75
            echo "      ";
        }
        // line 76
        echo "    </div>
    <div class=\"col-md-4 two-col-side\">
      ";
        // line 78
        if (twig_in_filter("alias", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 79
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("URL路径"), "html", null, true);
            echo "</div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <div class=\"controls\">
                <input class=\"form-control width-input width-input-large\" type=\"text\" name=\"alias\" value=\"";
            // line 84
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "alias");
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_alias_check", array("that" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), "")) : ("")))), "html", null, true);
            echo "\">

                <i class=\"glyphicon glyphicon-question-sign text-muted\" data-toggle=\"tooltip\" data-placement=\"top\" data-trigger=\"hover\" data-html=\"false\" data-content=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("页面地址：域名/page/URL路径（编号）"), "html", null, true);
            echo "\"></i>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 92
        echo "
      ";
        // line 93
        if (twig_in_filter("categoryId", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 94
            echo "        <div class=\"panel\">
          <div class=\"panel-heading\">";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
            echo "</div>
          <select name=\"categoryId\">
            ";
            // line 97
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("default"), $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "categoryId"), $this->env->getExtension('translator')->trans("请选择分类"));
            echo "
          </select>
        </div>
      ";
        }
        // line 101
        echo "
      ";
        // line 102
        if (twig_in_filter("tagIds", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 103
            echo "        <div class=\"panel\">
          <div class=\"panel-heading\">";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签"), "html", null, true);
            echo "</div>
          <div class=\"form-group\">
            <div class=\"controls\" style=\"width:100%;\">
              <input class=\"width-full\" id=\"content-tags-field\" type=\"text\" name=\"tags\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->tagsJoinFilter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "tagIds")), "html", null, true);
            echo "\">
            </div>
          </div>
        </div>
      ";
        }
        // line 112
        echo "
      ";
        // line 113
        if (twig_in_filter("template", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 114
            echo "        <div class=\"panel panel-default\" >
          <div class=\"panel-heading\">";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("模版"), "html", null, true);
            echo "</div>
          <div class=\"panel-body\">
            ";
            // line 117
            $context["templates"] = array("default" => $this->env->getExtension('translator')->trans("默认模版"), "blank" => $this->env->getExtension('translator')->trans("无导航栏"));
            // line 118
            echo "
            <select class=\"form-control\" name=\"template\">
              ";
            // line 120
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["templates"]) ? $context["templates"] : null), $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "template"));
            echo "
            </select>
          </div>
        </div>
      ";
        }
        // line 124
        echo " 

      <input type=\"hidden\" name=\"publishedTime\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">


    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

<script> app.load('content/content-modal') </script>

";
    }

    // line 138
    public function block_footer($context, array $blocks = array())
    {
        // line 139
        echo "
    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"content-save-btn\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#content-form\" data-loading-text=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存..."), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 141,  328 => 140,  325 => 139,  322 => 138,  312 => 131,  304 => 126,  300 => 124,  292 => 120,  288 => 118,  286 => 117,  281 => 115,  278 => 114,  276 => 113,  273 => 112,  265 => 107,  259 => 104,  256 => 103,  254 => 102,  251 => 101,  244 => 97,  239 => 95,  236 => 94,  234 => 93,  231 => 92,  222 => 86,  215 => 84,  208 => 80,  205 => 79,  203 => 78,  199 => 76,  196 => 75,  193 => 74,  191 => 73,  188 => 72,  181 => 68,  177 => 66,  173 => 65,  171 => 64,  168 => 63,  166 => 62,  158 => 57,  154 => 56,  150 => 55,  145 => 52,  141 => 50,  139 => 49,  132 => 46,  130 => 45,  122 => 41,  118 => 40,  113 => 38,  110 => 37,  106 => 36,  104 => 35,  101 => 34,  99 => 33,  93 => 30,  89 => 28,  82 => 24,  77 => 22,  74 => 21,  72 => 20,  67 => 17,  61 => 15,  55 => 13,  53 => 12,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  35 => 6,  31 => 1,  29 => 144,  27 => 3,  11 => 1,);
    }
}
