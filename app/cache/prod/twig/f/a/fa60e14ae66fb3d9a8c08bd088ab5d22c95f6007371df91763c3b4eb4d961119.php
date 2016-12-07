<?php

/* TopxiaAdminBundle:Default:popular-courses-table.html.twig */
class __TwigTemplate_fa60e14ae66fb3d9a8c08bd088ab5d22c95f6007371df91763c3b4eb4d961119 extends Twig_Template
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
        if ((isset($context["sortedCourses"]) ? $context["sortedCourses"] : null)) {
            // line 2
            echo "\t<table class=\"table table-condensed table-striped table-hover\" style=\"word-break: break-all;\">
\t  <thead>
\t    <tr>
\t      <th>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名称"), "html", null, true);
            echo "</th>
\t      <th>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增学生人数"), "html", null, true);
            echo "</th>
\t      <th>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("总学生人数"), "html", null, true);
            echo "</th>
\t      <th>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增收入"), "html", null, true);
            echo "</th>
\t    </tr>
\t  </thead>
\t\t<tbody>
\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedCourses"]) ? $context["sortedCourses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sortedcourse"]) {
                // line 13
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["sortedcourse"], "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "addedStudentNum", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
                echo " </td>
\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "studentNum", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"money-text\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "addedMoney", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                echo " </td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortedcourse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 25
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无受欢迎课程"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:popular-courses-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  83 => 22,  72 => 19,  66 => 18,  60 => 17,  53 => 15,  49 => 13,  45 => 12,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
