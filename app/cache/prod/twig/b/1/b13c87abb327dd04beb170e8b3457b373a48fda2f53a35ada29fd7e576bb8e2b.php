<?php

/* TopxiaAdminBundle:CloudFile:error.html.twig */
class __TwigTemplate_b13c87abb327dd04beb170e8b3457b373a48fda2f53a35ada29fd7e576bb8e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CloudFile:error.html.twig", 1);
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
        $context["menu"] = "admin_cloud_file";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"text-center\">
  <div class=\"error-content\" style=\"padding: 100px 100px\">
    ";
        // line 9
        echo $this->env->getExtension('translator')->trans("尚未开通云视频提示", array("%settingCloudVideoUrl%" => $this->env->getExtension('routing')->getPath("admin_setting_cloud_video"), "%showCloudVideoUrl%" => "http://open.edusoho.com/show/cloud/video"));
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudFile:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
