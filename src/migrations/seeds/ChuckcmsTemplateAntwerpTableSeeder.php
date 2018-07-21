<?php

namespace Chuckbe\ChuckcmsTemplateAntwerp\migrations\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateAntwerpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateAntwerp\\migrations\\seeds\\ChuckcmsTemplateAntwerpTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800';
        
        $css = [];
        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-antwerp/css/bootstrap.css';
        $css['bootstrap']['asset'] = 'true';

        $css['style']['href'] = 'chuckbe/chuckcms-template-antwerp/css/style.css';
        $css['style']['asset'] = 'true';

        $css['dark']['href'] = 'chuckbe/chuckcms-template-antwerp/css/dark.css';
        $css['dark']['asset'] = 'true';

        $css['antwerp']['href'] = 'chuckbe/chuckcms-template-antwerp/css/antwerp.css';
        $css['antwerp']['asset'] = 'true';

        $css['fonticons']['href'] = 'chuckbe/chuckcms-template-antwerp/css/font-icons.css';
        $css['fonticons']['asset'] = 'true';

        $css['animate']['href'] = 'chuckbe/chuckcms-template-antwerp/css/animate.css';
        $css['animate']['asset'] = 'true';

        $css['magnificpopup']['href'] = 'chuckbe/chuckcms-template-antwerp/css/magnific-popup.css';
        $css['magnificpopup']['asset'] = 'true';

        $css['responsive']['href'] = 'chuckbe/chuckcms-template-antwerp/css/responsive.css';
        $css['responsive']['asset'] = 'true';

        $css['colors']['href'] = 'chuckbe/chuckcms-template-antwerp/css/colors.php?color=2196F3';
        $css['colors']['asset'] = 'false';
        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-antwerp/js/jquery.js';
        $js['jquery']['asset'] = 'true';

        $js['plugins']['href'] = 'chuckbe/chuckcms-template-antwerp/js/plugins.js';
        $js['plugins']['asset'] = 'true';

        $js['functions']['href'] = 'chuckbe/chuckcms-template-antwerp/js/functions.js';
        $js['functions']['asset'] = 'true';

        $json = [];

        // create template
        Template::create([
            'name' => 'ChuckCMS Template Antwerp',
            'slug' => 'chuckcms-template-antwerp',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1
        ]);
    }
}
