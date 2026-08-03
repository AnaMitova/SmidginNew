<?php

use App\Models\Gin;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Copies what the five hand-built pages currently say into the gins table,
     * so switching those pages over to the admin panel changes nothing on
     * screen. Only empty fields are filled — anything already edited in the
     * panel is left alone.
     *
     * In headings and body text, *word* paints a word in the gin's colour and
     * **word** makes it bold.
     */
    public function up(): void
    {
        foreach ($this->content() as $slug => $fields) {
            $gin = Gin::where('slug', $slug)->first();

            if (! $gin) {
                continue;
            }

            $gin->fill(array_filter(
                $fields,
                fn ($value, $key) => filled($value) && blank($gin->{$key}),
                ARRAY_FILTER_USE_BOTH
            ))->save();
        }

        // Orient's page moved to a new bottle shot after the table was seeded,
        // so this one needs replacing rather than filling.
        Gin::where('slug', 'orient')
            ->where('bottle_image', 'sliki/orient.webp')
            ->update(['bottle_image' => 'img/orient2.jpeg']);
    }

    public function down(): void
    {
        // Nothing to undo: the pages keep rendering whatever the table holds.
    }

    protected function content(): array
    {
        return [
            'classic' => [
                'bottle_image'  => 'img/classic.webp',
                'heading_one'   => 'Distilled to *Perfection*',
                'body_one'      => 'Distilled in small batches using the London Dry method, Smidgin is pure, precise, and never blended. We use only fresh, handpicked botanicals no additives, no shortcuts. Every drop reflects the richness of the land it comes from.',
                'heading_two'   => 'Flavor & Botanicals',
                'body_two'      => 'Bright juniper leads the nose, followed by herbal mountain tea and zesty citrus. Notes of black pepper and mint round out a clean, complex finish. Made with 14 botanicals, including juniper, citrus peels, wild sage, almond, ginger, and black pepper, each chosen for purity and aroma.',
                'heading_three' => 'How To *Enjoy* It',
                'body_three'    => 'Smidgin Classic was made to shine in your favorite cocktail, from the classic G&T to your own signature mix.',
                'image_three'   => 'sliki/lightNesto.webp',
            ],

            'velvet' => [
                'bottle_image'  => 'sliki/velvett.webp',
                'heading_one'   => 'Not Just a *Pretty Color*',
                'body_one'      => 'Velvet is our smoothest gin yet, triple-distilled in small copper stills in Skopje for a soft, balanced texture. Its vibrant lavender-blue color comes from Butterfly Pea flowers, while a touch of honey in the distillation brings just enough natural sweetness. No sugar, no shortcuts — just a velvety gin with a floral twist.',
                'heading_two'   => 'Flavor & Botanicals',
                'body_two'      => "Velvet opens with fresh notes of blueberry and cranberry, layered with floral hints of lavender and rosehip. Citrus and mountain tea bring a zesty lift to the middle, rounded out by soft almond, ginger, and a touch of warm spice. The finish is silky and refreshing with a tangy twist that defines Velvet.\n\nCrafted with 19 botanicals—from blueberries and butterfly pea to mountain tea and Mediterranean spices—Velvet is a masterful blend of flavor, aroma, and elegance.",
                'heading_three' => 'How To *Enjoy* It',
                'body_three'    => 'Smidgin Velvet was made to shine in your favorite cocktail, from the classic G&T to your own signature mix.',
            ],

            'orient' => [
                'bottle_image'  => 'img/orient2.jpeg',
                'heading_one'   => '*Aromatic* Fire',
                'body_one'      => 'Orient is distilled in small copper stills using a meticulous method that includes slow heat application and extended maceration of ingredients. The result is a warm, multi-layered gin that balances Eastern spices with a traditional juniper backbone.',
                'heading_two'   => 'Flavor & Botanicals',
                'body_two'      => 'Bright juniper leads the nose, followed by herbal mountain tea and zesty citrus. Notes of black pepper and mint round out a clean, complex finish. Made with 14 botanicals, including juniper, citrus peels, wild sage, almond, ginger, and black pepper, each chosen for purity and aroma.',
                'heading_three' => 'How To *Enjoy* It',
                'body_three'    => 'Smidgin Orient shines best when paired with a crisp tonic or bold ginger soda. Add a cinnamon stick and a twist of orange peel to unlock its warm, spicy soul.',
                'image_three'   => 'sliki/orientNesto.webp',
            ],

            'light' => [
                'bottle_image'  => 'sliki/light.webp',
                'heading_one'   => '*A Lighter* Expression',
                'body_one'      => 'Smidgin Light is a low-alcohol expression of our signature gin, designed for those who seek balance without compromise. At just **18% ABV**, it delivers all the flavor, with a gentler touch.',
                'heading_two'   => 'Flavor & Botanicals',
                'body_two'      => 'Bright and crystal-clear, Smidgin Light opens with fresh juniper and zesty citrus on the nose, followed by a delicate floral finish from wild Macedonian mountain tea.',
                'heading_three' => 'How To *Enjoy* It',
                'body_three'    => 'Serve chilled, over ice, or in a simple tonic for a bright and effortless drink. Smidgin Light shines when mixed into spritzes or low-ABV cocktails.',
                'image_three'   => 'sliki/lightNesto.webp',
            ],

            'xo' => [
                'bottle_image'  => 'sliki/xoPola.webp',
                'heading_one'   => 'Aged to *Impress*',
                'body_one'      => 'Smidgin XO is where craftsmanship meets patience. Rested in oak barrels previously used for Macedonian Cabernet Sauvignon, resulting in a golden-hued spirit with deeper complexity and a soft, rounded mouthfeel.',
                'heading_two'   => 'Tasting Notes & Barrel Influence',
                'body_two'      => 'XO opens with a harmony of fresh juniper and oak spice. Layers of red fruit, warm vanilla, and soft herbal notes unfold. The finish is long, refined, and slightly sweet from the wine-soaked wood.',
                'heading_three' => 'How To *Enjoy* It',
                'body_three'    => 'Smidgin XO shines when served neat or over a big cube of ice. To bring out its wine-barrel character, garnish with a twist of orange peel or a dried grape.',
                'image_three'   => 'sliki/xoNesto.webp',
            ],
        ];
    }
};
