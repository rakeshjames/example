<?php

namespace Drupal\example\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'youtube_link' formatter.
 *
 * @FieldFormatter(
 *   id = "image_url",
 *   label = @Translation("Image URL"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */
class ImageUrlFormatter extends FormatterBase {
    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
        $elements = array();

        foreach ($items as $delta => $item) {

            $url = $item->uri;
            $elements[$delta] = array(
                '#theme' => 'image_url_formatter',
                '#url' => $url,
            );
        }

        return $elements;
    }
}
