<?php

/* TopxiaAdminBundle:Course:course-recommend-list.html.twig */
class __TwigTemplate_85e33bde4087a2162092ef90280ac79e31a023c3e2db80e6e5dbd82c7bae0837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 1);
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
        $context["script_controller"] = "course/recommend-list";
        // line 5
        $context["menu"] = "admin_course_recommend_list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 10
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 11
        echo "    <div class=\"form-group\">
      <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('translator')->trans("课程分类"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建者"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>

  </form>
  
  <table class=\"table table-striped table-hover mtl\" id=\"course-recommend-table\">
    <thead>
    <tr>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("顺序号"), "html", null, true);
        echo "</th>
      <th width=\"35%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程名称"), "html", null, true);
        echo "</th>
      ";
        // line 31
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 31)->display($context);
        // line 32
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建者"), "html", null, true);
        echo "</th>
      <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 40
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 41
            echo "            ";
            $this->loadTemplate("TopxiaAdminBundle:Course:course-recommend-tr.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 41)->display($context);
            // line 42
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无推荐课程"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
  </table>

  ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 48,  153 => 45,  144 => 43,  131 => 42,  128 => 41,  125 => 40,  122 => 39,  104 => 38,  97 => 34,  93 => 33,  88 => 32,  86 => 31,  82 => 30,  78 => 29,  68 => 22,  61 => 20,  53 => 17,  46 => 13,  42 => 11,  40 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
