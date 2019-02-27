# Graphic Editor

Service for Graphic Editor to make different types of shapes. 

## Setup
To setup, we need to have `composer` and run `composer install`. Composer is only being used for auto-loading purpose and installing one dependency that is `phpunit`.

## Usage

You can get shapes details using the following code, please note that `index.php` is an example of this API's usage.

```php
$shapes = [
   [
       'type' => 'circle', 'params' => ['radius' => 3]
   ],
   [
        'type' => 'square', 'params' => ['length' => 5]
   ]
];

foreach($shapes as $shape) {
    $shapeObj = ShapeFactory::create($shape['type'], $shape['params']);
    $shapeObj->draw();
}
```

## Adding more Shape Types

Any type of Shape implementation must implement `ShapeInterface` interface and you have to add possible shapes types in `ShapeFactory` class like the following;

`private static $possibleTypes = ['circle', 'square'];`

## Tests
We are using `phpunit` for testing purpose which was installed with composer. To run tests use following command:
`vendor/bin/phpunit tests`
 and it will run all tests in `tests` directory. As tests are unit tests so dependencies are mocked.

## Further More
Other than that code can be found in `src` directory and Tests can be found in `tests` directory.
