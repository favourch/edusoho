<?php

/* TopxiaAdminBundle:System:live-course-setting.html.twig */
class __TwigTemplate_4e97efe9ef555d395826b9596f1e4b258dbe79e0abc4cff391f7b1e0b4817593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:live-course-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_live_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启状态"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->radios("live_course_enabled", array(1 => $this->env->getExtension('translator')->trans("开启"), 0 => $this->env->getExtension('translator')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_course_enabled", array()));
        echo "
      </div>
    </div>
    
    ";
        // line 24
        if (((($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["capacity"]) ? $context["capacity"] : null), "code", array()), 0)) : (0)) == 2)) {
            // line 25
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"logo\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播LOGO"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"live-course-logo-container\">";
            // line 30
            if ((($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
        <a class=\"btn btn-default btn-sm\" id=\"live-course-logo-upload\"
        data-upload-token=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
        data-url=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_upload");
            echo "\"
        >";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传"), "html", null, true);
            echo "</a>
        <button class=\"btn btn-default btn-sm\" id=\"live-course-logo-remove\" type=\"button\" data-url=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_logo_remove");
            echo "\" ";
            if ( !(($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), false)) : (false))) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
        <p class=\"help-block\">
          <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只针对直播新方案。"), "html", null, true);
            echo "</b><br>
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过100*23。"), "html", null, true);
            echo "</p>
        <input type=\"hidden\" name=\"live_logo\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_logo", array()), "")) : ("")), "html", null, true);
            echo "\">
      </div>
    </div>
    ";
        }
        // line 43
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("同时在线人数上限"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"mts text-muted\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
        echo "</div>
        <input class=\"form-control\" name=\"live_student_capacity\" type=\"hidden\" data-value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "live_student_capacity", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扩充在线人数，请联系客服："), "html", null, true);
        echo "0571-86819929</p>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:live-course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 62,  154 => 59,  143 => 51,  139 => 50,  134 => 49,  128 => 46,  123 => 43,  116 => 39,  112 => 38,  108 => 37,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  76 => 30,  70 => 27,  66 => 25,  64 => 24,  57 => 20,  51 => 17,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
