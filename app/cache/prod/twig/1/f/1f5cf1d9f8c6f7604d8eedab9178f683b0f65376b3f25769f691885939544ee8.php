<?php

/* TopxiaAdminBundle:Teacher:index.html.twig */
class __TwigTemplate_1f5cf1d9f8c6f7604d8eedab9178f683b0f65376b3f25769f691885939544ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 1);
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
        $context["menu"] = "admin_teacher_manage";
        // line 5
        $context["script_controller"] = "teacher/teacher-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  ";
        // line 9
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "  
  <div class=\"form-group\">
    <input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>

</form>
<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</th>
      ";
        // line 22
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 22)->display($context);
        // line 23
        echo "      <th width=\"30%\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐教师"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近登录"), "html", null, true);
        echo "</th>
      <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 29
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 30
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Teacher:tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 31)->display(array_merge($context, array("user" => $context["user"])));
                // line 32
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无教师记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        // line 36
        echo "  </tbody>
</table>
 ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 38,  130 => 36,  124 => 34,  121 => 33,  107 => 32,  104 => 31,  86 => 30,  84 => 29,  77 => 25,  73 => 24,  68 => 23,  66 => 22,  62 => 21,  53 => 15,  45 => 12,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
