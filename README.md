BBCode Cards Extension

Add cards to your Flarum post.

Install:

`composer require oe800/flarum-ext-bbcode-cards`


Usage:

For small card: (better viewed on mobile, uses 50% of post width)

`[CARD]{COLOR},{IMGURL},{TAG},{TITLE},{SUBTITLE},{TEXT}[/CARD]`


For medium card (not sure why I made a medium size, uses 75% of post.)

`[CARD2]{COLOR},{IMGURL},{TAG},{TITLE},{SUBTITLE},{TEXT}[/CARD2]`


For larger card (uses 100% of post)

`[CARD3]{COLOR},{IMGURL},{TAG},{TITLE},{SUBTITLE},{TEXT}[/CARD3]`




Examples:


Smaller Card: (better viewed on mobile, uses 50% of post width)

`[CARD]teal,https://unsplash.it/500,Hardware,Gigabyte Brix hit by UEFI vulnerabilities,Published on 4th April 2017 by Gareth Halfacree,Security researchers have discovered serious flaws in the firmware of Gigabyte's Brix small form factor (SFF) systems that allow malicious code to be written into firmware and stored even if you replace the system's storage device.[/CARD]`

![Imgur](http://i.imgur.com/S3f1c6Q.gif)


Medium Card: (not sure why I made a medium size, uses 75% of post.)

`[CARD2]brown,https://unsplash.it/600,Health,New Studies Showcase Key Health Benefits of Strawberries,Strawberries may help improve vascular health in at-risk adolescents,This is the first study to test the impact of freeze-dried strawberry powder (FDSP) on markers of vascular health in at-risk adolescents. Previous research in adults found a promising inverse relationship between FDSP consumption and the risk of cardiovascular disease.In a randomized, double-blind, crossover study, 25 overweight or obese males between ages 14-18 consumed 50 grams of FDSP or a calorically equivalent amount of control powder every day for a week. Before and after each test period, measures of vascular health were collected at baseline and one hour after FDSP intake.[/CARD2]`

![Imgur](http://i.imgur.com/LTeIb1u.gif)


Larger Card: (uses 100% of post)

`[CARD3]bROWN,https://unsplash.it/800,Hardware,Gigabyte Brix hit by UEFI vulnerabilities,Published on 4th April 2017 by Gareth Halfacree,Security researchers have discovered serious flaws in the firmware of Gigabyte's Brix small form factor (SFF) systems that allow malicious code to be written into firmware and stored even if you replace the system's storage device.[/CARD3]`

![Imgur](http://i.imgur.com/oiv3zgl.gif)


Todos:

Make cards more responsive.
Try to fit 2 or 3 cards in a row.
Add more styles.


