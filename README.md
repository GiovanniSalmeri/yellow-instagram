# Instagram 0.8.7

Embed Instagram photos.

<p align="SCREENSHOT.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-instagram/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to embed a photo

Create an `[instagram]` shortcut. 

The following arguments are available, all but the first argument are optional:
 
`Id` = middle part of an [Instagram](https://www.instagram.com) link, e.g. `https://www.instagram.com/p/BISN9ngjV2-/?taken-by=rick_ande`  
`Theme` = photo theme, currently `light` only  
`Style` = photo style, e.g. `left`, `center`, `right`  
`Width` = photo width, pixel or percent  
`Height` = photo height, pixel or percent  

You should know that the service provider collects personal data and uses cookies.

## Examples

Embedding a photo:

    [instagram BISN9ngjV2-]
    [instagram BISN9ngjV2- light - 500]
    [instagram BISN9ngjV2- light right 500]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`InstagramStyle` = photo style, e.g. `left`, `center`, `right`  

## Acknowledgements

This extension was previously maintained by Mark Seuffert. Thank you for the good work. This extension uses [Instagram](https://www.instagram.com) by Meta. Thank you for the free service.

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
