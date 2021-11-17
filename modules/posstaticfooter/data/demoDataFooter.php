<?php

class demoDataFooter
{
    public function initData()
    {
        $return = true;
        $languages = Language::getLanguages(true);
        $id_shop = Context::getContext()->shop->id;
        $id_hook_footer = (int)Hook::getIdByName('displayFooter');
        $id_hook_footerafter = (int)Hook::getIdByName('displayFooterAfter');
        $queries = [
            'INSERT INTO `'._DB_PREFIX_.'posstaticfooter` (`id_posstaticfooter`, `id_hook`, `position`, `width`, `type_content`, `name_module`, `content`,`active_title`) VALUES
				(1, '.$id_hook_footer.', 1, 3, 1, \'ps_socialfollow\', \'{"cms":[false],"product":[false],"static":[false]}\', 1),
                (2, '.$id_hook_footer.', 2, 3, 0, 0, \'{"cms":["1","4","5"],"product":[false],"static":["contact","sitemap"]}\', 1),
				(3, '.$id_hook_footer.', 3, 3, 0, 0, \'{"cms":["2"],"product":["prices-drop","new-products","best-sales"],"static":["authentication"]}\', 1),
				(4, '.$id_hook_footer.', 4, 3, 1, \'ps_emailsubscription\', \'{"cms":[false],"product":[false],"static":[false]}\', 1),
				(5, '.$id_hook_footerafter.', 5, 12, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 0),
				(6, '.$id_hook_footerafter.', 6, 12, 1, 0, \'{"cms":[false],"product":[false],"static":[false]}\', 0);'
        ];

        foreach (Language::getLanguages(true, Context::getContext()->shop->id) as $lang) {
            $queries[] = 'INSERT INTO `'._DB_PREFIX_.'posstaticfooter_lang` (`id_posstaticfooter`, `id_lang`, `name`, `html_content`, `custom_content`) VALUES
				(1, '.(int)$lang['id_lang'].', "Opening hours", \'<div class="open-hours">
					<p>Monday – Friday: 8am – 4pm</p>
					<p>Saturday: 9am – 5pm</p>
				</div>\', ""),
                (2, '.(int)$lang['id_lang'].', "Information", "", ""),
                (3, '.(int)$lang['id_lang'].', "Custom Links", "", ""),
				(4, '.(int)$lang['id_lang'].', "Newsletter", "", ""),				
				(5, '.(int)$lang['id_lang'].', "Payment Block", \'<div class="payment">
					<img src="/pos_ecolife_fastfood/img/cms/payment.png" alt=""></div>\', ""),
				(6, '.(int)$lang['id_lang'].', "Copyright Block", \'<div class="copyright">Copyright © <a href="http://posthemes.com/">Posthemes</a>. All Rights Reserved</div>\', "")'
				
            ;
        }

        $queries[] = 'INSERT INTO `'._DB_PREFIX_.'posstaticfooter_shop` (`id_posstaticfooter`, `id_shop`) VALUES
                (1, 1),
                (2, 1),
                (3, 1),
                (4, 1),
                (5, 1),
                (6, 1)';

        foreach ($queries as $query) {
            $return &= Db::getInstance()->execute($query);
        }

        return $return;
    }
}
?>