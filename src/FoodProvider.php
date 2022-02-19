<?php

namespace Gbuckingham89\FakerFood;

use Faker\Provider\Base as BaseProvider;

abstract class FoodProvider extends BaseProvider
{
    /**
     * @var array|string[]
     */
    protected static array $beveragesAlcoholic = ['Alcoholic beverage'];

    /**
     * @var array|string[]
     */
    protected static array $beveragesNonAlcoholic = ['Non-alcoholic beverage'];

    /**
     * @var array|string[]
     */
    protected static array $cereals = ['Cereal'];

    /**
     * @var array|string[]
     */
    protected static array $condiments = ['Condiment'];

    /**
     * @var array|string[]
     */
    protected static array $dairyLiquids = ['Dairy liquid'];

    /**
     * @var array|string[]
     */
    protected static array $dairySolids = ['Dairy solid'];

    /**
     * @var array|string[]
     */
    protected static array $fruits = ['Fruit'];

    /**
     * @var array|string[]
     */
    protected static array $herbs = ['Herb'];

    /**
     * @var array|string[]
     */
    protected static array $meats = ['Meat'];

    /**
     * @var array|string[]
     */
    protected static array $noodles = ['Noodles'];

    /**
     * @var array|string[]
     */
    protected static array $oils = ['Oil'];

    /**
     * @var array|string[]
     */
    protected static array $pasta = ['Pasta'];

    /**
     * @var array|string[]
     */
    protected static array $rice = ['Rice'];

    /**
     * @var array|string[]
     */
    protected static array $sugars = ['Sugar'];

    /**
     * @var array|string[]
     */
    protected static array $spices = ['Spice'];

    /**
     * @var array|string[]
     */
    protected static array $vegetables = ['Vegetable'];

    /**
     * @return string
     */
    public function foodIngredient(): string
    {
        return static::randomElement(array_merge(
            static::$beveragesAlcoholic,
            static::$beveragesNonAlcoholic,
            static::$cereals,
            static::$condiments,
            static::$dairyLiquids,
            static::$dairySolids,
            static::$fruits,
            static::$herbs,
            static::$meats,
            static::$noodles,
            static::$oils,
            static::$pasta,
            static::$rice,
            static::$sugars,
            static::$spices,
            static::$vegetables,
        ));
    }

    /**
     * @return string
     */
    public function foodBeverageAlcoholic(): string
    {
        return static::randomElement(static::$beveragesAlcoholic);
    }

    /**
     * @return string
     */
    public function foodBeverageNonAlcoholic(): string
    {
        return static::randomElement(static::$beveragesNonAlcoholic);
    }

    /**
     * @return string
     */
    public function foodCereal(): string
    {
        return static::randomElement(static::$cereals);
    }

    /**
     * @return string
     */
    public function foodCondiment(): string
    {
        return static::randomElement(static::$condiments);
    }

    /**
     * @return string
     */
    public function foodDairyLiquid(): string
    {
        return static::randomElement(static::$dairyLiquids);
    }

    /**
     * @return string
     */
    public function foodDairySolid(): string
    {
        return static::randomElement(static::$dairySolids);
    }

    /**
     * @return string
     */
    public function foodFruit(): string
    {
        return static::randomElement(static::$fruits);
    }

    /**
     * @return string
     */
    public function foodHerb(): string
    {
        return static::randomElement(static::$herbs);
    }

    /**
     * @return string
     */
    public function foodMeat(): string
    {
        return static::randomElement(static::$meats);
    }

    /**
     * @return string
     */
    public function foodNoodle(): string
    {
        return static::randomElement(static::$noodles);
    }

    /**
     * @return string
     */
    public function foodOil(): string
    {
        return static::randomElement(static::$oils);
    }

    /**
     * @return string
     */
    public function foodPasta(): string
    {
        return static::randomElement(static::$pasta);
    }

    /**
     * @return string
     */
    public function foodRice(): string
    {
        return static::randomElement(static::$rice);
    }

    /**
     * @return string
     */
    public function foodSugar(): string
    {
        return static::randomElement(static::$sugars);
    }

    /**
     * @return string
     */
    public function foodSpice(): string
    {
        return static::randomElement(static::$spices);
    }

    /**
     * @return string
     */
    public function foodVegetable(): string
    {
        return static::randomElement(static::$vegetables);
    }
}
