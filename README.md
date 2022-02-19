# gbuckingham89/faker-food v0.1

A [FakerPHP](https://github.com/FakerPHP/Faker/) data provider for food and beverage ingredient names.

## Installation

You can install the package via composer:

```bash
composer require gbuckingham89/faker-food
```

## Usage

To start, you will need to register the provider with your Faker instance:

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \Gbuckingham89\FakerFood\en_GB\FoodProvider($faker));
```

You can then generate a fake ingredient from your Faker instance:

```php
$faker->foodIngredient();
```

If required, you can also generate a fake ingredient of a specific type:

```php
$faker->foodBeverageAlcoholic();
$faker->foodBeverageNonAlcoholic();
$faker->foodCereal();
$faker->foodCondiment();
$faker->foodDairyLiquid();
$faker->foodDairySolid();
$faker->foodFruit();
$faker->foodHerb();
$faker->foodMeat();
$faker->foodNoodle();
$faker->foodOil();
$faker->foodPasta();
$faker->foodRice();
$faker->foodSugar();
$faker->foodSpice();
$faker->foodVegetable();
```

### Languages

The only currently supported language is English (GB), but pull requests supporting additional languages are encouraged.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Pull requests are always welcome, but please:

- Ensure your code meets PSR-12 - [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) config is included
- Ensure there are no static analysis errors - you can run `./vendor/bin/phpstan analyse`
- Ensure you add tests and that the test suite is passing - you can run `./vendor/bin/phpunit`

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
