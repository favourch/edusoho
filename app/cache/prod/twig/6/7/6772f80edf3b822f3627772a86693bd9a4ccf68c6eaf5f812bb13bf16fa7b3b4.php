<?php

/* TopxiaWebBundle:Settings:avatar-crop-modal.html.twig */
class __TwigTemplate_6772f80edf3b822f3627772a86693bd9a4ccf68c6eaf5f812bb13bf16fa7b3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Settings:avatar-crop-modal.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头像图片"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <form id=\"avatar-crop-form\" method=\"post\">
    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <img class=\"img-responsive\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\"
             id=\"avatar-crop\"
             width=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\"
             data-natural-width=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\"/>
        <div class=\"help-block\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </form>
";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "  <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"upload-avatar-btn\"
          data-url=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("settings_avatar_crop_modal");
        echo "\" data-toggle=\"form-submit\"
          data-target=\"#avatar-crop-form\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
  <script>app.load('settings/avatar-crop-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar-crop-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 21,  79 => 20,  76 => 19,  73 => 18,  64 => 12,  58 => 11,  52 => 10,  47 => 8,  42 => 5,  39 => 4,  33 => 2,  29 => 1,  27 => 3,  11 => 1,);
    }
}
