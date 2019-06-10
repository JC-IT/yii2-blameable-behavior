# Blameable behavior for Yii2

This extension provides a package that extends the [Blameable behavior](https://www.yiiframework.com/doc/api/2.0/yii-behaviors-blameablebehavior) with a `deleted_by` field.

```bash
$ composer require jc-it/yii2-blameable-behavior
```

or add

```
"jc-it/yii2-blameable-behavior": "^<latest version>"
```

to the `require` section of your `composer.json` file.

## Configuration

In a model:

```php
/**
 * @return array
 */
public function behaviors(): array
{
    return ArrayHelper::merge(
        parent::behaviors(),
        [
            BlameableBehavior::class => [
                'class' => BlameableBehavior::class
            ],
        ]
    );
}
```

For more detailed configuration, see [Blameable behavior](https://www.yiiframework.com/doc/api/2.0/yii-behaviors-blameablebehavior).

## Credits
- [Joey Claessen](https://github.com/joester89)

## License

The MIT License (MIT). Please see [LICENSE](https://github.com/jc-it/yii2-blameable-behavior/blob/master/LICENSE) for more information.