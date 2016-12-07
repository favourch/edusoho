<?php

/* TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig */
class __TwigTemplate_051da137ad2b21c5d18a6554e7f0950bcd690e24af3191d57b52db6221a1fe46 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t <h3 class=\"panel-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新购买记录"), "html", null, true);
        echo "</h3>
\t\t</div>
    ";
        // line 7
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 8
            echo "      <table class=\"table table-condensed table-bordered table-striped table-hover\">
  \t    <thead>
  \t      <tr>
  \t        <th width=\"50%\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单名称"), "html", null, true);
            echo "</th>
  \t        <th width=\"10%\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("金额"), "html", null, true);
            echo "</th>
  \t        <th width=\"10%\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买人"), "html", null, true);
            echo "</th>
  \t        <th width=\"20%\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
            echo "</th>
  \t      </tr>
  \t    </thead>
        <tbody>
          ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "            <tr>
            \t<td>
  \t\t          ";
                // line 21
                if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                    // line 22
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "</a>
                ";
                } elseif (($this->getAttribute(                // line 23
$context["order"], "targetType", array()) == "vip")) {
                    // line 24
                    echo "              \t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "</a>
              \t";
                } else {
                    // line 26
                    echo "  \t            \t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "
              \t";
                }
                // line 28
                echo "            \t</td>
              <td class=\"money-text\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                echo "</td>
              <td>
              \t";
                // line 31
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 34
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "  / ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 41
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无最新购买记录"), "html", null, true);
            echo "</div>
    ";
        }
        // line 43
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  123 => 41,  118 => 38,  106 => 34,  100 => 31,  93 => 29,  90 => 28,  84 => 26,  76 => 24,  74 => 23,  67 => 22,  65 => 21,  61 => 19,  57 => 18,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 8,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }
}
