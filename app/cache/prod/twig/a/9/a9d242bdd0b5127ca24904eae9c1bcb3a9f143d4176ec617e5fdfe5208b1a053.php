<?php

/* TopxiaAdminBundle:Course:data.html.twig */
class __TwigTemplate_a9d242bdd0b5127ca24904eae9c1bcb3a9f143d4176ec617e5fdfe5208b1a053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:data.html.twig", 1);
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
        $context["menu"] = "admin_course_data";
        // line 5
        $context["script_controller"] = "course/data";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab-data.html.twig", "TopxiaAdminBundle:Course:data.html.twig", 8)->display($context);
        // line 9
        echo "
    <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
      ";
        // line 11
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:data.html.twig", 11)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 12
        echo "      
      <div class=\"form-group\">
        <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('translator')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建者"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
    </form>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td width=\"30%\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名"), "html", null, true);
        echo "</td>
             ";
        // line 30
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 31
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所在"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "</td>
             ";
        }
        // line 33
        echo "            <td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时数"), "html", null, true);
        echo "</td>
            <td>";
        // line 34
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%user_name%人数", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
        }
        echo "</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课程人数"), "html", null, true);
        echo "</td>
            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习时长(分)"), "html", null, true);
        echo "</td>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程收入(元)"), "html", null, true);
        echo "</td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</td>
          </tr>
          
          ";
        // line 41
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 42
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 43
                echo "            <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" href=\"javascript:\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a></td>
            ";
                // line 45
                if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                    // line 46
                    echo "            <td>
            ";
                    // line 47
                    $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                    // line 48
                    echo "            ";
                    if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                        // line 49
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomId", array()))), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomTitle", array()), "html", null, true);
                        echo "</a>
            ";
                    } elseif ( !                    // line 50
(isset($context["classroom"]) ? $context["classroom"] : null)) {
                        // line 51
                        echo "            <span class=\"label label-danger live-label mls\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未引用"), "html", null, true);
                        echo "</span> 
            ";
                    }
                    // line 53
                    echo "            </td>
            ";
                }
                // line 55
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonCount", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "isLearnedNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["course"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "income", array()), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_lesson_data", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看课时数据"), "html", null, true);
                echo "</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "          ";
        }
        // line 64
        echo "          
         
        </table>
     ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 67,  202 => 64,  199 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  167 => 55,  163 => 53,  157 => 51,  155 => 50,  148 => 49,  145 => 48,  143 => 47,  140 => 46,  138 => 45,  132 => 44,  129 => 43,  124 => 42,  122 => 41,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  98 => 34,  93 => 33,  86 => 31,  84 => 30,  80 => 29,  72 => 24,  65 => 22,  57 => 19,  50 => 15,  45 => 12,  43 => 11,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
