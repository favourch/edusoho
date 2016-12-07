<?php

/* TopxiaWebBundle:CourseManage:index.html.twig */
class __TwigTemplate_d93a45e3ed52d9e8a07087b0bc19e9881de3d3bf51f9ad0e39f2fb754a2dfe83 extends Twig_Template
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
";
        // line 2
        $context["_context"] = $context;
        // line 3
        echo "<script type=\"text/javascript\">
document.location.href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('permission.permission_extension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
        echo "';
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
