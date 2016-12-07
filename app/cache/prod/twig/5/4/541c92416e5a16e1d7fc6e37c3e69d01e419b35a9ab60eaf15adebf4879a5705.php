<?php

/* TopxiaAdminBundle:User:approvals.html.twig */
class __TwigTemplate_541c92416e5a16e1d7fc6e37c3e69d01e419b35a9ab60eaf15adebf4879a5705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 1);
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
        $context["script_controller"] = "user/approved";
        // line 5
        $context["menu"] = "admin_approval_approvals";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"btn-group\">
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 9
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approving")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approving"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("审核中"), "html", null, true);
        echo "</a>
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 11
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approved")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approved"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("审核成功"), "html", null, true);
        echo "</a>
  </div>
  <form id=\"user-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
   ";
        // line 15
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 15)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 16
        echo "  
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("" => $this->env->getExtension('translator')->trans("--查询条件--"), "nickname" => $this->env->getExtension('translator')->trans("用户名"), "email" => $this->env->getExtension('translator')->trans("邮箱"), "truename" => $this->env->getExtension('translator')->trans("真实姓名"), "idcard" => $this->env->getExtension('translator')->trans("身份证号码")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("申请时间:"), "html", null, true);
        echo "
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\"
             value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("起始时间"), "html", null, true);
        echo "\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\"
             value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("结束时间"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>

  ";
        // line 37
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 38
            echo "    <table id=\"user-table\" class=\"table table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
            echo "</th>
        ";
            // line 43
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 43)->display($context);
            // line 44
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("真实姓名"), "html", null, true);
            echo "</th>
        <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证号码"), "html", null, true);
            echo "</th>
        <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮件"), "html", null, true);
            echo "</th>
        <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("申请时间"), "html", null, true);
            echo "</th>
        <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
            echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
            // line 52
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
                // line 53
                echo "        <tr id=\"user-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
          <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</td>
          <td><strong>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $context["user"]), "method"), "html", null, true);
                echo "</strong></td>
          ";
                // line 56
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 56)->display(array_merge($context, array("orgCode" => $this->getAttribute($context["user"], "orgCode", array()))));
                // line 57
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"), "truename", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"), "idcard", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "approvalTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 62
                if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approved")) {
                    // line 63
                    echo "              <div class=\"btn-group\">
                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_info_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"
                   class=\"btn btn-default btn-sm\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                    echo "</a>
                ";
                    // line 66
                    $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 66)->display(array_merge($context, array("parentCode" => "admin_approval_approvals", "group" => "groupButton", "user" => $context["user"])));
                    // line 67
                    echo "              </div>
            ";
                } elseif ((                // line 68
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approving")) {
                    // line 69
                    echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"
                 class=\"btn btn-default btn-sm\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("审核"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 72
                echo "          </td>
        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "      </tbody>
    </table>

    ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
  ";
        } else {
            // line 80
            echo "    ";
            if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approved")) {
                // line 81
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无已经审核成功的实名认证用户"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 82
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : null) == "approving")) {
                // line 83
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无需要审核中的实名认证用户"), "html", null, true);
                echo "</div>
    ";
            }
            // line 85
            echo "  ";
        }
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approvals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 86,  275 => 85,  269 => 83,  267 => 82,  262 => 81,  259 => 80,  254 => 78,  249 => 75,  233 => 72,  228 => 70,  223 => 69,  221 => 68,  218 => 67,  216 => 66,  212 => 65,  208 => 64,  205 => 63,  203 => 62,  198 => 60,  194 => 59,  190 => 58,  185 => 57,  183 => 56,  179 => 55,  175 => 54,  170 => 53,  153 => 52,  146 => 48,  142 => 47,  138 => 46,  134 => 45,  129 => 44,  127 => 43,  123 => 42,  117 => 38,  115 => 37,  109 => 34,  102 => 32,  94 => 29,  89 => 27,  83 => 24,  79 => 23,  72 => 19,  67 => 16,  65 => 15,  57 => 12,  51 => 11,  45 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
