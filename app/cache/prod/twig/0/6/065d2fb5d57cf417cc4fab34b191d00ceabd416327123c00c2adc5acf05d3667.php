<?php

/* TopxiaAdminBundle:Invite:index.html.twig */
class __TwigTemplate_065d2fb5d57cf417cc4fab34b191d00ceabd416327123c00c2adc5acf05d3667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Invite:index.html.twig", 1);
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
        $context["menu"] = "admin_operation_invite_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t<form  class=\"form-inline well well-sm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_invite");
        echo "\" method=\"get\" novalidate>
    <input class=\"form-control\" type=\"text\" name=\"nickname\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
\t</form>

  <table class=\"table table-hover table-striped\" >
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"10%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邀请人数"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("付费用户数"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"20%\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单消费总额"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单虚拟币总额"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"15%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单现金总额"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"10%\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        if ((isset($context["inviteInformations"]) ? $context["inviteInformations"] : null)) {
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inviteInformations"]) ? $context["inviteInformations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inviteInformation"]) {
                // line 26
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["inviteInformation"], "nickname", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["inviteInformation"], "count", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "payingUserCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "payingUserCount", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "payingUserTotalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "payingUserTotalPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "coinAmountPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "coinAmountPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "amountPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "amountPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td><a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default\" data-url=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_invite_detail", array("inviteUserId" => $this->getAttribute($context["inviteInformation"], "id", array()), "payingUserCount" => $this->getAttribute($context["inviteInformation"], "payingUserCount", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详细"), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inviteInformation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无页面记录"), "html", null, true);
            echo "</div></td></tr>
\t\t\t";
        }
        // line 40
        echo "\t\t</tbody>
\t</table>

";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  140 => 40,  134 => 38,  131 => 37,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  92 => 26,  87 => 25,  85 => 24,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  45 => 8,  39 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
