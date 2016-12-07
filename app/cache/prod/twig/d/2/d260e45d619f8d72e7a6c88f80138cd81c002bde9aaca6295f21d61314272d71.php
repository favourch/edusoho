<?php

/* TopxiaAdminBundle:EduCloud:cloud-live-chart.html.twig */
class __TwigTemplate_d260e45d619f8d72e7a6c88f80138cd81c002bde9aaca6295f21d61314272d71 extends Twig_Template
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
        echo "
<div class=\"col-md-6\">
  <input id=\"liveUsedInfo\"  type=\"hidden\" value='";
        // line 3
        if ($this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "liveUsedInfo", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chartInfo"]) ? $context["chartInfo"] : null), "liveUsedInfo", array()), "html", null, true);
        } else {
            echo "[]";
        }
        echo "'> 
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("参与直播人数（最近7天）"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"live-data-tab\" style=\"height: 250px;\"></div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-live-chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  23 => 3,  19 => 1,);
    }
}
