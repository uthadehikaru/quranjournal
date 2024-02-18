<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::firstOrCreate([
            'key' => 'video_homepage',
        ],[
            'value' => '<iframe width="100%" height="230px" class="p-2 border rounded"
            src="https://www.youtube.com/embed/PdsJhBJIEfg?si=Uc6VmVSkDqUMlfnw" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
            web-share" allowfullscreen></iframe>',
            'group' => 'general'
        ]);
        
        Setting::firstOrCreate([
            'key' => 'about',
        ],[
            'value' => '<p class="font-bold">Jurnal Al-Qur\'an Indonesia</p>
            <p>- Personalise the message of the Quran</p>
            <p>- Pembiasaan Tadabur melalui Quran Journaling</p>
            <p>- Beli produk Jurnal Al-Quran, Planner Harian, dll : <a 
            class="text-blue-500 underline" href="msha.ke/jurnalquranindonesia" target="_blank">msha.ke/jurnalquranindonesia</a></p>',
            'group' => 'general'
        ]);
        
        copy(public_path('assets/bannerjournal1.png'), storage_path('app/public/banner/bannerjournal1.png'));
        Setting::firstOrCreate([
            'key' => 'banner1',
        ],[
            'value' => 'bannerjournal1.png',
            'group' => 'banner'
        ]);
        
        copy(public_path('assets/bannerjournal2.png'), storage_path('app/public/banner/bannerjournal2.png'));
        Setting::firstOrCreate([
            'key' => 'banner2',
        ],[
            'value' => 'bannerjournal2.png',
            'group' => 'banner'
        ]);
        
        copy(public_path('assets/bannerjournal3.png'), storage_path('app/public/banner/bannerjournal3.png'));
        Setting::firstOrCreate([
            'key' => 'banner3',
        ],[
            'value' => 'bannerjournal3.png',
            'group' => 'banner'
        ]);
    }
}
