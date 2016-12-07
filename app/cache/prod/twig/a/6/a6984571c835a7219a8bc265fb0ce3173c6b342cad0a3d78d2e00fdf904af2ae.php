<?php

/* TopxiaWebBundle:MyTeaching:tab.html.twig */
class __TwigTemplate_a6984571c835a7219a8bc265fb0ce3173c6b342cad0a3d78d2e00fdf904af2ae extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
\t<li class=\"";
        // line 2
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "course")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程%user_name%话题", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        echo "</a></li>
\t<li class=\"";
        // line 3
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_classroom_threads", array("type" => "discussion"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%classroom.name% %user_name%话题", array("%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        echo "</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  22 => 2,  19 => 1,);
    }
}
