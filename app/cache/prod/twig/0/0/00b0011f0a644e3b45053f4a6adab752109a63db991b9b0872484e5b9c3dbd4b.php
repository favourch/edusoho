<?php

/* TopxiaAdminBundle:Group:index.html.twig */
class __TwigTemplate_00b0011f0a644e3b45053f4a6adab752109a63db991b9b0872484e5b9c3dbd4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:index.html.twig", 1);
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
        $context["menu"] = "admin_operation_group_manage";
        // line 5
        $context["script_controller"] = "group/group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">

      <select class=\"form-control\" name=\"status\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('translator')->trans("小组状态"));
        echo "
      </select>

    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组名"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
        echo "\" name=\"ownerName\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "ownerName"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>

  </form>
  ";
        // line 30
        if ((isset($context["groupinfo"]) ? $context["groupinfo"] : null)) {
            // line 31
            echo "  <table class=\"table table-striped table-hover\" id=\"group-table\">
    <thead>
    <tr>
      <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编号"), "html", null, true);
            echo "</th>
      <th width=\"20%\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
            echo "</th>
      <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("组长"), "html", null, true);
            echo "</th>
      <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("成员数"), "html", null, true);
            echo "</th>
      <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题数"), "html", null, true);
            echo "</th>
      <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复数"), "html", null, true);
            echo "</th>
      <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
            echo "</th>
      <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupinfo"]) ? $context["groupinfo"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 47
                echo "
      ";
                // line 48
                $this->loadTemplate("TopxiaAdminBundle:Group:table-tr.html.twig", "TopxiaAdminBundle:Group:index.html.twig", 48)->display(array_merge($context, array("group" => $context["group"])));
                // line 49
                echo "
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 56
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息!"), "html", null, true);
            echo "</div>
  ";
        }
        // line 58
        echo "  <div class=\"pull-right\">
 ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
</div><div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入用户名"), "html", null, true);
        echo "</h4>
      </div>          
      <form  class=\"form-horizontal\" method=\"post\" id=\"transfer-group-form\" >
        <div class=\"modal-body\">
              <div class=\"form-group\">
                <label class=\"col-xs-2 control-label\" for=\"user_nickname\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("转移给"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-7 controls\">
                  <input type=\"text\"  id=\"username\" name=\"user[nickname]\" class=\"form-control\"
                  data-url=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("group_thread_check_user");
        echo "\" data-display=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "\"  placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入用户名"), "html", null, true);
        echo "\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
              </div>
        </div>
        <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</button>
              <button type=\"submit\" class=\"btn btn-primary\" >";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确认转移小组"), "html", null, true);
        echo "</button>
        </div>   
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 81,  212 => 80,  205 => 76,  195 => 73,  189 => 70,  181 => 65,  172 => 59,  169 => 58,  163 => 56,  156 => 51,  141 => 49,  139 => 48,  136 => 47,  119 => 46,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  78 => 31,  76 => 30,  70 => 27,  62 => 24,  53 => 20,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
