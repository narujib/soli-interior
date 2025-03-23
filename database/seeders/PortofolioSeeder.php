<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 50) as $index) {
            $clientName = 'Client ' . $index;
            $slug = Str::slug($clientName);

            $count = DB::table('portfolios')->where('slug', 'LIKE', "$slug%")->count();
            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }

            DB::table('portfolios')->insert([
                'project_name' => 'Project ' . $index,
                'description'  => 'This is the description for project ' . $index,
                'client_name'  => $clientName,
                'address'      => '123 Example St, City ' . $index . ', Country',
                'slug'         => $slug,
                'image'        => 'https://via.placeholder.com/640x480.png?text=Project+' . $index,
                'date'         => now(),
            ]);
        }
    }
}
