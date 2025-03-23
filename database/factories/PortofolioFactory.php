<?php

namespace Database\Factories;

use App\Models\Portofolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clientName = $this->faker->name;
        $slug = Str::slug($clientName);

        $count = Portofolio::where('slug', 'LIKE', "$slug%")->count();

        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        return [
            'project_name' => $this->faker->company,
            'description'  => $this->faker->paragraph,
            'client_name'  => $clientName,
            'address'      => $this->faker->address,
            'slug'         => $slug,
            'image'        => $this->faker->imageUrl(640, 480, 'business', true, 'portfolio'),
            'date'         => $this->faker->date,
        ];
    }
}
