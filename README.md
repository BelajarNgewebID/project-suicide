## Project Suicide
Commit suicide when you so tired with your project, maybe you get stuck or your client didn't pay full as you want. This suicide meaning **delete all your files project** as long as method you chosen for death.

There are 8 ways to committing your project to suicide.

|Method|Extra Attribute|Time to Die (s)|
|--|--|--|
|UseGunToHead|`shotgun`|102|
|UseGunToHead|`handgun`|105|
|BurnIntoFire||3420|
|ConsumeCyanide||108|
|CutThroat||930|
|Drowning||930|
|HitBy|`train`|108|
|HitBy|any vehicle which is not train|1140|
|Hanging||210|
|JumpFromHeight||274|

This datas was got from https://lostallhope.com/suicide-methods/statistics-most-lethal-methods

## How to
```
<?php
include '/vendor/autoload.php';

use BNI\Suicide;

$die = new Suicide();
$die->SetDirectory("/dir/to/yourProject")
    ->WriteLastNote("Hi there! Thank's to be last friend. I love u. But I can't live more longer. I was tired with my life. It's too hard for me.")
    ->BurnIntoFire()
    ->GoodBye();

// WriteLastNote is optional, you can do or do not
```

and your project will be deleted in 57 minutes

Run this script in browser and wait about 5-10 seconds and cancel browser request. It will working in background.

## <div style="background: #e74c3c;color: #fff;padding: 15px 35px;border-radius: 6px;">Attention please!</div>

This repo just for no purpose. Even I don't know why am I made this. I just get idea in my mind and I want to realize it. I am not be responsible for any suicidal attempt if any from this.

Please call for professional help if you have suicidal thought in your mind.

## Contribute
You can add more method and anything else that can relate to suicide and make new pull request.