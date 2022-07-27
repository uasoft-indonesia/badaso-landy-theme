<?php

namespace Database\Seeders\Badaso\JayaTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class JayaThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $contents = [
                0 => [
                    'slug'  => 'jaya-theme-social-media',
                    'label' => 'Jaya Theme Social Media',
                    'value' => '{"facebook":
                        {"name":"facebook","label":"Facebook","type":"group",
                        "data":{"image":{"name":"image","label":"Image","type":"image",  "data":"photos/shares/facebook.svg"},
                        "url":{"name":"url","label":"URL","type":"url","data":{"url":"https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1","text":"Facebook Logo"}}}},
                        "twitter":{"name":"twitter","label":"Twitter","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"photos/shares/twitter.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"https://twitter.com/i/flow/login","text":"Twitter Logo"}}}},"instagram":{"name":"instagram","label":"Instagram","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"photos/shares/instagram.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"https://www.instagram.com/accounts/login/","text":"Instagram Logo"}}}},
                        "youtube":{"name":"youtube","label":"Youtube","type":"group","data":{"image":{"name":"image","label":"Image","type":"image","data":"photos/shares/youtube.svg"},"url":{"name":"url","label":"URL","type":"url","data":{"url":"https://www.youtube.com/","text":"Youtube Logo"}}}}}',
                ],
                1 => [
                    'slug' => 'jaya-theme-footer',
                    'label' => 'Jaya Theme Footer',
                    'value' => '{"first":{"name":"first","label":"First ","type":"group","data":{"services":{"name":"services","label":"Services","type":"text","data":""},"news":{"name":"news","label":"News","type":"text","data":""}}},"second":{"name":"second","label":"Second","type":"group","data":{"ourservice":{"name":"ourservice","label":"OurService","type":"text","data":""},"ourteam":{"name":"ourteam","label":"OurTeam","type":"text","data":""}}},"third":{"name":"third","label":"Third","type":"group","data":{"aboutus":{"name":"aboutus","label":"AboutUs","type":"text","data":""},"testimonials":{"name":"testimonials","label":"Testimonials","type":"text","data":""}}}}',
                ],
                2 => [
                    'slug' => 'jaya-ads',
                    'label' => 'Jaya Theme Ads',
                    'value' => '{"navbarAds":{"name":"navbarAds","label":"Navbar Ads","type":"group","data":{"topAds":{"name":"topAds","label":"Top Ads","type":"text","data":"<img id=\"billboard-img\" src=\"https://tpc.googlesyndication.com/simgad/10430981275726163964?\" width=\"996\" height=\"200\">"},"bottomAds":{"name":"bottomAds","label":"Bottom Ads","type":"text","data":"<img id=\"billboard-img\" src=\"https://tpc.googlesyndication.com/simgad/14892396972438422041?\" width=\"996\" height=\"200\">"}}}}',
                ],
                3 => [
                    'slug' => 'sidebar-ads',
                    'label' => 'Sidebar Ads',
                    'value' => '{"sidebarAds":{"name":"sidebarAds","label":"Sidebar Ads","type":"group","data":{"sidebarRightAds":{"name":"sidebarRightAds","label":"Sidebar Right Ads","type":"text","data":"<img id=\"billboard-img\" src=\"https://tpc.googlesyndication.com/simgad/9097751638568454686?\" width=\"996\" height=\"200\">"}}}}',
                ],
            ];

            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}
