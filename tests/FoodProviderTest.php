<?php

namespace Tests;

use Faker\Factory;
use Faker\Generator;
use Gbuckingham89\FakerFood\en_GB\FoodProvider;

class FoodProviderTest extends TestCase
{
    private function faker(): Generator
    {
        $faker = Factory::create();
        $faker->addProvider(new FoodProvider($faker));

        return $faker;
    }

    public function test_provides_ingredient(): void
    {
        $value = $this->faker()->foodIngredient();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_beverage_alcoholic()
    {
        $value = $this->faker()->foodBeverageAlcoholic();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_beverage_non_alcoholic()
    {
        $value = $this->faker()->foodBeverageNonAlcoholic();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_cereal()
    {
        $value = $this->faker()->foodCereal();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_condiment()
    {
        $value = $this->faker()->foodCondiment();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_dairy_liquid()
    {
        $value = $this->faker()->foodDairyLiquid();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_dairy_solid()
    {
        $value = $this->faker()->foodDairySolid();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_fruit()
    {
        $value = $this->faker()->foodFruit();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_herb()
    {
        $value = $this->faker()->foodHerb();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_meat()
    {
        $value = $this->faker()->foodMeat();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_noodle()
    {
        $value = $this->faker()->foodNoodle();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_oil()
    {
        $value = $this->faker()->foodOil();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_pasta()
    {
        $value = $this->faker()->foodPasta();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_rice()
    {
        $value = $this->faker()->foodRice();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_sugar()
    {
        $value = $this->faker()->foodSugar();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_spice()
    {
        $value = $this->faker()->foodSpice();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }

    public function test_provides_vegetable()
    {
        $value = $this->faker()->foodVegetable();

        $this->assertIsString($value);
        $this->assertNotEmpty($value);
    }
}
