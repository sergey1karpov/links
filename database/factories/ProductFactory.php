<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    protected static $position = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'New Title',
            'description' => 'New Description',
            'full_description' => 'New full Description',
            'price' => 100,
            'visible' => 1,
            'position' => self::$position++,
            'main_photo' => UploadedFile::fake()->image('avatar.jpg', 500, 500)->size(100),
            'link_to_shop' => 'link',
            'link_to_shop_text' => 'text',
            'link_to_order_text' => 'text',
            'product_categories_id' => 1,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
