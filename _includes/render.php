<?php

/**
 * Render button
 *
 * @param [type] $url
 * @param string $text
 * @param string $class
 * @return void
 */
function ee_mph_render__btn($url, $text = 'Find out more', $class = '')
{

    return '<a href="' . $url . '" class="transition-shadow duration-500 ease-in-out z-0 inline-block shadow-none hover:shadow-lg text-white rounded-2xl border-x w-full sm:w-auto text-center sm:text-left focus:outline-none focus:shadow-outline"><span class="pt-4 pb-3 px-8 inline-block ' . $class . '">' . $text . '</span></a>';
}

/**
 * Render input label for forms
 *
 * @param string $text
 * @param string $slug
 * @param string $class
 * @return string
 */

function ee_mph_render__label($text, $slug, $class = 'block text-gray-lightest uppercase mb-3')
{

    return '<label class="' . $class . '" for="' . $slug . '">' . $text . '</label>';
}

/**
 * Render input for forms
 *
 * @param string $type
 * @param string $slug
 * @param string $class
 * @return string
 */

function ee_mph_render__input($type, $slug, $placeholder = false, $class = 'bg-gray-200 text-lg appearance-none rounded-xl w-full pt-4 pb-4 px-6 leading-tight focus:outline-none focus:bg-white focus:border-black placeholder-gray')
{

    $placeholder = ($placeholder) ? 'placeholder="' . $placeholder . '"' : false;

    return '<input class="' . $class . ' gradient-border" name="' . $slug . '" type="' . $type . '" ' . $placeholder . '>';
}

/**
 * Render textarea for forms
 *
 * @param [type] $slug
 * @param boolean $placeholder
 * @param integer $rows
 * @param string $class
 * @return void
 */
function ee_mph_render__textarea($slug, $placeholder = false, $rows = 8, $class = 'bg-gray-200 text-lg appearance-none rounded-xl w-full pt-4 pb-4 px-8 leading-tight focus:outline-none focus:bg-white focus:border-black placeholder-gray')
{

    return '<textarea name="' . $slug . '" class="' . $class . ' gradient-border" rows=' . $rows . ' ></textarea>';
}


function ee_mph_render__submit($text = "Send your enquiry", $class = '')
{
    return '<button class="transition-shadow duration-500 ease-in-out z-0 inline-block shadow-none hover:shadow-lg text-white rounded-2xl border-x w-full sm:w-auto text-center sm:text-left focus:outline-none focus:shadow-outline"><span class="pt-4 pb-3 px-8 inline-block ' . $class . '">' . $text . '</span></button>';
}

/**
 * Renders the tags for a particular post
 *
 * @return string
 */
function ee_mph_render__tags()
{

    return '<span>Law</span> / <span>Health</span> / <span>Tech</span> / <span>Webcasting</span>';
}


/**
 * Renders text with media sidebar
 *
 * @param string $media_type
 * @param string $alignment
 * @return string
 */
function render__text_media($media_type = 'none', $alignment)
{
    switch ($media_type) {

        case 'quote':
            $text = get_field('quote');
            $class = '-ml-56 left-0';
            if ($alignment == 'right')
                $class = '-mr-56 right-0';
            $name = (!empty(get_field('name_or_ref'))) ? get_field('name_or_ref') : false; ?>

            <div class="lg:w-4/12 lg:px-10 pb-5 relative z-0">
                <hr class="h-4 bg-gradient-red-to-blue border-0">
                <img src="https://fakeimg.pl/335x200" class="absolute bottom-0 -z-10 <?= $class; ?>">

                <div class="p-10 xl:p-12">
                    <blockquote class="mb-5 xl:mb-0 text-xl lg:text-2xl xl:text-3xl font-bold leading-tight text-red"><?= $text; ?></blockquote>
                    <?= ($name) ? '- ' . $name : ''; ?>
                </div>
            </div>

        <?php break;

        case 'image':

            $image = wp_get_attachment_image_url(get_field('image'), 'full');

            // dd($image);
        ?>
            <div class="lg:w-4/12 px-10 pb-5">
                <img src="<?= $image; ?>" class="rounded-2xl shadow-xl">
            </div>
<?php break;
    }
}

function render__video($iframe, $image)
{

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    $playbtn = "<div class='absolute w-16 h-16 z-10 inset-0 m-auto'><img src='http://fakeimg.pl/50x50' width='50' height='50' class='transform duration-300 ease-in-out group-hover:scale-125' /></div>";

    // Add extra parameters to src and replcae HTML.
    $params = array(
        'controls'  => 0,
        'rel'        => 0,
        'autoplay'  => 1
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
    $image = wp_get_attachment_image_url($image, 'video-inline');
    // Display customized HTML.
    echo '<a href="#" class="video--inline relative block bg-black group rounded-2xl shadow-2xl">' . $playbtn . '<img src="' . $image . '" class="opacity-50 rounded-2xl"><!-- ' . $iframe . '--></a>';
}


function ee_mph_render__cta_panel()
{
    $title = get_field('cta')['title'] ?? '';
    $link = get_field('cta')['link'] ?? '';

    $item = array(
        'title' =>  $title,
        'link'  =>  $link

    );

    // dd($item);

    include(locate_template('parts/elements/cta-panel.php'));
}
