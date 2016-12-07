<?php

/* TopxiaAdminBundle:Default:unsolved-questions-block.html.twig */
class __TwigTemplate_9f82e62db5e3a3788a481ae3d68e17dc1d924620bb0fc9bf4f4e76e7b900c0d8 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">

           \t<a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
           \t>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>
\t\t\t<h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新未回复问答"), "html", null, true);
        echo "</h3>
\t\t\t 
\t\t</div>

\t";
        // line 12
        if ((isset($context["questions"]) ? $context["questions"] : null)) {
            // line 13
            echo "\t    <table class=\"table table-condensed table-bordered table-striped table-hover\">
\t      <thead>
\t        <tr>
\t          <th width=\"40%\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答标题"), "html", null, true);
            echo "</th>
\t          <th width=\"35%\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属课程"), "html", null, true);
            echo "</th>
\t          <th width=\"10%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提问人"), "html", null, true);
            echo "</th>
\t          <th width=\"15%\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
            echo "</th>
\t        </tr>
\t      </thead>
\t      <tbody class=\"tbody\">
\t        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 24
                echo "\t          ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 25
                echo "\t\t        <tr>
\t\t          <td>
\t              <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
\t                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
                echo "
\t              </a>
\t              <br />
\t              <span class=\"text-muted text-sm\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("次查看"), "html", null, true);
                echo "</span>
\t              <span class=\"text-muted text-sm\">•</span>
\t              <span class=\"text-muted text-sm\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表于"), "html", null, true);
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</span>
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 36
                if ((isset($context["course"]) ? $context["course"] : null)) {
                    // line 37
                    echo "\t\t              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                    echo "</a>
\t\t              <br>
\t\t              <span class=\"text-muted text-sm\">";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("老师："), "html", null, true);
                    echo "
\t\t\t\t            ";
                    // line 40
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "teacherIds", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                        // line 41
                        echo "\t\t\t\t              ";
                        echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $context["teacherId"], array(), "array"), "text-muted text-sm");
                        echo "
\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t          </span>
\t\t\t          ";
                } else {
                    // line 45
                    echo "\t\t\t            --
\t\t\t          ";
                }
                // line 47
                echo "\t\t          </td>
\t\t          <td>
\t\t            ";
                // line 49
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["askers"]) ? $context["askers"] : null), $this->getAttribute($context["question"], "userId", array()), array(), "array"));
                echo "
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 52
                if ((isset($context["course"]) ? $context["course"] : null)) {
                    // line 53
                    echo "\t\t\t\t          <button class=\"btn btn-default btn-sm remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提醒教师"), "html", null, true);
                    echo "</button>
\t\t\t          ";
                }
                // line 55
                echo "\t\t\t        </td>
\t\t        </tr>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t      </tbody>
        </table>
    ";
        } else {
            // line 61
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无最新未回复问答"), "html", null, true);
            echo "</div>
    ";
        }
        // line 63
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  170 => 61,  165 => 58,  157 => 55,  149 => 53,  147 => 52,  141 => 49,  137 => 47,  133 => 45,  129 => 43,  120 => 41,  116 => 40,  112 => 39,  104 => 37,  102 => 36,  95 => 33,  89 => 31,  83 => 28,  79 => 27,  75 => 25,  72 => 24,  68 => 23,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  44 => 13,  42 => 12,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
