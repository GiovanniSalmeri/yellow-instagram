Instagram 0.8.6
===============
Embed Instagram photos.

<p align="center"><img src="instagram-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed a photo

Create an `[instagram]` shortcut. 

The following arguments are available, all but the first argument are optional:
 
`Id` = middle part of an [Instagram](https://www.instagram.com) link, e.g. `https://www.instagram.com/p/BISN9ngjV2-/?taken-by=rick_ande`  
`Theme` = photo theme, currently `light` only  
`Style` = photo style, e.g. `left`, `center`, `right`  
`Width` = photo width, pixel or percent  
`Height` = photo height, pixel or percent  

## Examples

Embedding a photo:

    [instagram BISN9ngjV2-]
    [instagram BISN9ngjV2- light - 500]
    [instagram BISN9ngjV2- light right 500]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`InstagramStyle` = photo style, e.g. `left`, `center`, `right`  

## Installation

[Download extension](https://github.com/GiovanniSalmeri/yellow-instagram/archive/master.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Instagram](https://www.instagram.com). The service provider collects personal data and uses cookies.

## Developer

Giovanni Salmeri. [Get help](https://github.com/GiovanniSalmeri/yellow-instagram/issues).
