<?php

namespace Gbuckingham89\FakerFood\en_GB;

use Gbuckingham89\FakerFood\FoodProvider as BaseProvider;

class FoodProvider extends BaseProvider
{
    /**
     * @var array|string[]
     */
    protected static array $beveragesAlcoholic = [
        'Absinthe',
        'Amber ale',
        'American whiskey',
        'Beer',
        'Best bitter',
        'Brandy',
        'Brown ale',
        'Champagne',
        'Cider',
        'Craft beer',
        'Dark rum',
        'Gin',
        'Golden ale',
        'IPA',
        'Irish whiskey',
        'Japanese whisky',
        'Lager',
        'Light rum',
        'Pale ale',
        'Port',
        'Porter',
        'Prosecco',
        'Red wine',
        'Rose wine',
        'Rum',
        'Scoth whisky',
        'Sherry',
        'Single malt whisky',
        'Soju',
        'Sparking wine',
        'Spiced rum',
        'Stout',
        'Tequilla',
        'Vodka',
        'Whisky',
        'White wine',
        'Wine',
    ];

    /**
     * @var array|string[]
     */
    protected static array $beveragesNonAlcoholic = [
        'Apple juice',
        'Blackcurrant squash',
        'Bottled spring water',
        'Cola',
        'Cranberry juice',
        'English tea',
        'Fruit flavoured water',
        'Herbal tea',
        'Lemonade',
        'Mango juice',
        'Milk',
        'Orange juice',
        'Orange squash',
        'Pineapple juice',
        'Soda water',
        'Sparking water',
        'Still water',
        'Tomato juice',
        'Tonic water',
        'Water',
    ];

    /**
     * @var array|string[]
     */
    protected static array $cereals = [
        'Bran flakes',
        'Cornflakes',
        'Granola',
        'Muesli',
        'Porridge',
        'Rolled oats',
        'Shredded wheat',
        'Sugar coated cornflakes',
        'Wheat biscuits',
    ];

    /**
     * @var array|string[]
     */
    protected static array $condiments = [
        'American mustard',
        'Balsamic vinegar',
        'Brown sauce',
        'Brown sauce',
        'English mustard',
        'HP sauce',
        'Low-fat mayonnaise',
        'Malt vinegar',
        'Mayonnaise',
        'Tomato ketchup',
        'White vinegar',
    ];

    /**
     * @var array|string[]
     */
    protected static array $dairyLiquids = [
        'Buttermilk',
        'Cream',
        'Double cream',
        'Milk',
        'Semi-skimmed milk',
        'Single cream',
        'Skimmed milk',
        'Soured cream',
        'Whole milk',
    ];

    /**
     * @var array|string[]
     */
    protected static array $dairySolids = [
        'Brie',
        'Burger cheese',
        'Butter',
        'Camembert',
        'Cheddar',
        'Cheddar cheese',
        'Cheese',
        'Cream cheese',
        'Gorgonzola',
        'Gouda',
        'Mozzarella',
        'Salted butter',
        'Soft spread cheese',
        'Soft spread garlic cheese',
        'Stilton',
        'Unsalted butter',
    ];

    /**
     * @var array|string[]
     */
    protected static array $fruits = [
        'Apple',
        'Apricot',
        'Asian pear',
        'Baby tomatoes',
        'Banana',
        'Beef potatoes',
        'Blackberries',
        'Blueberries',
        'Cherries',
        'Cherry tomatoes',
        'Coconut',
        'Dragon fruit',
        'Durion',
        'Gooseberries',
        'Grapefruit',
        'Grapes',
        'Green grapes',
        'Guava',
        'Kiwi',
        'Lemon',
        'Lime',
        'Melon',
        'Orange',
        'Papaya',
        'Peaches',
        'Pear',
        'Plums',
        'Raspberries',
        'Red grapes',
        'Strawberries',
        'Tomato',
        'Watermelon',
    ];

    /**
     * @var array|string[]
     */
    protected static array $herbs = [
        'Basil',
        'Bay leaves',
        'Chives',
        'Coriander',
        'Dill',
        'Garlic',
        'Lemongrass',
        'Mint',
        'Oregano',
        'Parsley',
        'Rosemary',
        'Sage',
        'Taragon',
        'Thyme',
    ];

    /**
     * @var array|string[]
     */
    protected static array $meats = [
        'Back bacon',
        'Bacon',
        'Beef',
        'Beef brisket',
        'Beef mince',
        'Chicken breasts',
        'Chicken thigh',
        'Chicken wings',
        'Chipolatas',
        'Duck breast',
        'Farmhouse sausages',
        'Fillet steak',
        'Lamb',
        'Lamb chops',
        'Lamb mince',
        'Lamb shanks',
        'Low fat beef mince',
        'Pheasant breast',
        'Pigeon breast',
        'Pork',
        'Pork chops',
        'Pork loin',
        'Pork mice',
        'Pork ribs',
        'Pork steak',
        'Rabbit',
        'Ribeye steak',
        'Ribs',
        'Sausages',
        'Sirloin steak',
        'Smoked bacon',
        'Steak',
        'Streaky bacon',
        'T-bone steak',
        'Turkey breast',
        'Turkey mince',
        'Whole chicken',
        'Whole turkey',
    ];

    /**
     * @var array|string[]
     */
    protected static array $noodles = [
        'Egg noodles',
        'Instant noodles',
        'Noodles',
        'Ramen noodles',
        'Rice noodles',
        'Sobe noodles',
        'Udon noodles',
    ];

    /**
     * @var array|string[]
     */
    protected static array $oils = [
        'Chili oil',
        'Extra virgin olive oil',
        'Olive oil',
        'Peanut oil',
        'Rapeseed oil',
        'Sunflower oil',
        'Vegetable oil',
    ];

    /**
     * @var array|string[]
     */
    protected static array $pasta = [
        'Conchiglie pasta',
        'Fusilli pasta',
        'Gnocchi',
        'Lasagne sheets',
        'Linguine',
        'Macaroni',
        'Orzo',
        'Pasta',
        'Pasta shells',
        'Penne pasta',
        'Spaghetti',
        'Tagliatelle',
        'Tortellini',
        'Wholemeal Spaghetti',
        'Wholemeal fusilli',
        'Wholemeal pasta',
        'Wholemeal penne',
    ];

    /**
     * @var array|string[]
     */
    protected static array $rice = [
        'Basmati rice',
        'Brown rice',
        'Glutinous rice',
        'Jasmine rice',
        'Long grain rice',
        'Medium grain rice',
        'Rice',
        'Short grain rice',
        'Sushi rice',
        'White rice',
    ];

    /**
     * @var array|string[]
     */
    protected static array $sugars = [
        'Brown sugar',
        'Caster sugar',
        'Golden caster sugar',
        'Granulated sugar',
        'Icing sugar',
        'Muscavado sugar',
        'Soft brown sugar',
        'Sugar',
        'Sweetener',
    ];

    /**
     * @var array|string[]
     */
    protected static array $spices = [
        'Allspice',
        'Cayenne pepper',
        'Chilli flakes',
        'Chilli power',
        'Cinnamon sticks',
        'Cloves',
        'Cumin',
        'Curry powder',
        'Dried basic',
        'Dried oregano',
        'Dried sage',
        'Dried tarragon',
        'Dried thyme',
        'Dried thyme',
        'Ground cardamon',
        'Ground cinnamon',
        'Ground coriander',
        'Ground ginger',
        'Ground pepper',
        'Mild chilli powder',
        'Mild curry powder',
        'Mustard powder',
        'Nutmeg',
        'Paprika',
        'Pepper',
        'Peppercorns',
        'Saffron',
        'Salt',
        'Sea slat',
        'Smoked paprika',
        'Star anise',
        'Tumeric',
    ];

    /**
     * @var array|string[]
     */
    protected static array $vegetables = [
        'Asparagus',
        'Aubergine',
        'Baking potatoes',
        'Broccoli',
        'Brown onions',
        'Brussels sprouts',
        'Butternut squash',
        'Cabbage',
        'Carrots',
        'Cauliflower',
        'Celery',
        'Chestnut mushrooms',
        'Corn on the cob',
        'Courgette',
        'Cucumber',
        'Fennel',
        'Green pepper',
        'Greens',
        'Kale',
        'Leeks',
        'Lettuce',
        'Maris piper potatoes',
        'Mushrooms',
        'Okra',
        'Onions',
        'Orange pepper',
        'Parsnips',
        'Potatoes',
        'Pumpkin',
        'Radish',
        'Red cabbage',
        'Red pepper',
        'Rhubarb',
        'Salad potatoes',
        'Savoy cabbage',
        'Shallots',
        'Spinach',
        'Spring onions',
        'Sweet potatoes',
        'Sweetcorn',
        'Wasabi',
        'Watercress',
        'Waxy potatoes',
        'Yellow pepper',
    ];
}
