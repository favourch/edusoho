<?php

/* TopxiaWebBundle:Settings:approval.html.twig */
class __TwigTemplate_458fd1d315e7bfa158e526bf21e5723c2ff6f7c58fe26f502117d6884a553d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "approval";
        // line 5
        $context["script_controller"] = "settings/approval";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Settings:approval.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 9, "1640394655")->display(array_merge($context, array("class" => "panel-col")));
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:approval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 123,  48 => 9,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:approval.html.twig */
class __TwigTemplate_458fd1d315e7bfa158e526bf21e5723c2ff6f7c58fe26f502117d6884a553d47_1640394655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 9);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证"), "html", null, true);
        echo "
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
            ";
        // line 16
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approved", 1 => "unapprove", 2 => "approve_fail", 3 => "approving"))) {
            // line 17
            echo "                    <form id=\"approval-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
                            <div class=\"help-block approval\">
                                <label class=\"col-md-2 control-label\" ></label>
                                ";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")) {
                // line 23
                echo "                                    <div class=\"alert alert-info\" role=\"alert\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在实名认证中，管理员会尽快答复您。"), "html", null, true);
                echo "
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 25
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved")) {
                // line 26
                echo "                                    <div class=\"alert alert-success\" role=\"alert\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("恭喜您，已通过实名认证！"), "html", null, true);
                echo "
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 28
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "unapprove")) {
                // line 29
                echo "                                    <div class=\"alert alert-warning\" role=\"alert\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您尚未实名认证"), "html", null, true);
                echo "
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 31
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approve_fail")) {
                // line 32
                echo "                                    <p class=\"text-danger\" >
                                        ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证审核尚未通过，请参照通知中的信息，修改后重新认证。"), "html", null, true);
                echo "
                                    </p>
                                ";
            }
            // line 36
            echo "                            </div>

                        ";
            // line 38
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approving")) {
                // line 39
                echo "
                            <div class=\"form-group\">
                                <div class=\"col-md-2 control-label\">
                                    <label for=\"truename\">";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("真实姓名"), "html", null, true);
                echo "</label>
                                </div>
                                <div class=\"col-md-8 controls\">
                                    ";
                // line 45
                if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approved"))) {
                    // line 46
                    echo "                                         <input disabled=\"true\" type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
                    echo "\"  disabled=\"\">
                                    ";
                } else {
                    // line 48
                    echo "                                         <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"\" >
                                    ";
                }
                // line 50
                echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                            <div class=\"col-md-2 control-label\">
                                <label for=\"idcard\">";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证号"), "html", null, true);
                echo "</label>
                            </div>
                            <div class=\"col-md-8 controls\">
                                ";
                // line 58
                if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approved"))) {
                    // line 59
                    echo "                                    <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "html", null, true);
                    echo "\"disabled=\"true\">
                                ";
                } else {
                    // line 61
                    echo "                                    <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"\">
                                ";
                }
                // line 63
                echo "                            </div>
                            </div>
                            ";
                // line 65
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved")) {
                    // line 66
                    echo "                            <div class=\"form-group\">
                                <div class=\"col-md-2 control-label\">
                                        <label>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("照片要求"), "html", null, true);
                    echo "</label>
                                </div>
                                <div class=\"controls col-md-8 controls\">
                                    ";
                    // line 71
                    echo $this->env->getExtension('translator')->trans("<p class=\"text-warning\">证件必须是清晰彩色原件电子版，可以是扫描或者数码相机拍摄照片。<br />图片格式支持jpg、gif、png，每张图片文件大小不能超过2M。</p>");
                    echo "
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-md-2 control-label\">
                                    <label for=\"faceImg\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证正面照"), "html", null, true);
                    echo "</label>
                                </div>
                                <div class=\"controls col-md-8 controls\">
                                    ";
                    // line 80
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approving", 1 => "approved"))) {
                        // line 81
                        echo "                                        <input type=\"file\" id=\"faceImg\" name=\"faceImg\" accept=\"image/bmp,image/jpeg,image/png\" disabled=\"true\">
                                    ";
                    } else {
                        // line 83
                        echo "                                        <input type=\"file\" id=\"faceImg\" name=\"faceImg\" accept=\"image/bmp,image/jpeg,image/png\" >
                                    ";
                    }
                    // line 85
                    echo "                                </div>
                            </div>

                             <div class=\"form-group\">
                                <div class=\"col-md-2 control-label\">
                                    <label for=\"backImg\">";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证反面照"), "html", null, true);
                    echo "</label>
                                </div>
                                <div class=\"controls col-md-8 controls\">
                                    ";
                    // line 93
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approving", 1 => "approved"))) {
                        // line 94
                        echo "                                        <input type=\"file\" id=\"backImg\" name=\"backImg\" accept=\"image/bmp,image/jpeg,image/png\" disabled=\"true\">
                                    ";
                    } else {
                        // line 96
                        echo "                                        <input type=\"file\" id=\"backImg\" name=\"backImg\" accept=\"image/bmp,image/jpeg,image/png\">
                                    ";
                    }
                    // line 98
                    echo "                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-7 col-md-offset-2\">
                                    ";
                    // line 103
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approving", 1 => "approved"))) {
                        // line 104
                        echo "                                        <button type=\"submit\" class=\"btn btn-primary\" disabled=\"true\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已提交"), "html", null, true);
                        echo "</button>
                                    ";
                    } else {
                        // line 106
                        echo "                                        <button type=\"submit\" class=\"btn btn-primary\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
                        echo "</button>
                                    ";
                    }
                    // line 108
                    echo "                                </div>
                            </div>

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                    echo "\">
                    </form>

                    ";
                }
                // line 115
                echo "
                 ";
            }
            // line 117
            echo "
            ";
        }
        // line 119
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:approval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 119,  314 => 117,  310 => 115,  303 => 111,  298 => 108,  292 => 106,  286 => 104,  284 => 103,  277 => 98,  273 => 96,  269 => 94,  267 => 93,  261 => 90,  254 => 85,  250 => 83,  246 => 81,  244 => 80,  238 => 77,  229 => 71,  223 => 68,  219 => 66,  217 => 65,  213 => 63,  209 => 61,  203 => 59,  201 => 58,  195 => 55,  188 => 50,  184 => 48,  178 => 46,  176 => 45,  170 => 42,  165 => 39,  163 => 38,  159 => 36,  153 => 33,  150 => 32,  148 => 31,  142 => 29,  140 => 28,  134 => 26,  132 => 25,  126 => 23,  124 => 22,  118 => 19,  114 => 17,  112 => 16,  109 => 15,  106 => 14,  97 => 11,  79 => 9,  50 => 123,  48 => 9,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
