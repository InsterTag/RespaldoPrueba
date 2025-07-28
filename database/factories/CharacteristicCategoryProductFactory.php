<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CharacteristicCategoryProduct;

class CharacteristicCategoryProductFactory extends Factory
{
    protected $model = CharacteristicCategoryProduct::class;
    public function definition(): array {
        return [
            'product_id' => 1,
            'category_id' => 1,
            'characteristic_id' => 1,
        ];
    }
}
