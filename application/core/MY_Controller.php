<?php
/**
 * @package なりきりサイト
 * @since 2018/6/28
 * @category controller
 * @author otoka.japanesedrum@gmail.com
 */
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->smarty->template_dir = APPPATH.'views/';
        $this->smarty->compile_dir  = APPPATH.'cache/';
        $this->smarty->auto_literal = TRUE;
        $this->assign('base_url', base_url());
    }

    /**
     * テンプレートにassign
     * @param string テンプレートのassign先の名前
     * @param variant 値
     * @return void
     */
    public function assign($name, $value)
    {
        $this->smarty->assign($name, $value);
    }

    /**
     * テンプレート呼び出し
     * @param string テンプレートのファイル名
     * @return void
     */
    public function tpl($sTemplete)
    {
        $this->smarty->display("$sTemplete.tpl");
    }
}
