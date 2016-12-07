<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_f29c43ff1e6d02831c38b240732d72bca08fb8f69cd176836be7b613a715215e extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属组织机构"), "html", null, true);
            echo "</th>
";
        }
    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
