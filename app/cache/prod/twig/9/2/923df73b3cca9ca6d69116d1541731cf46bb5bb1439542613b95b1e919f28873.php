<?php

/* TopxiaAdminBundle:Course:tab-data.html.twig */
class __TwigTemplate_923df73b3cca9ca6d69116d1541731cf46bb5bb1439542613b95b1e919f28873 extends Twig_Template
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
        echo "<div class=\"btn-group\">

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_course_data", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("普通课程"), "html", null, true);
        echo "</a>


\t<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_course_data", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  23 => 3,  19 => 1,);
    }
}
