<?php

namespace Drupal\example\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'youtube_link' formatter.
 *
 * @FieldFormatter(
 *   id = "youtube",
 *   label = @Translation("YouTube Link"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class YouTubeFormatter extends FormatterBase {
    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
        $elements = array();
        
        foreach ($items as $delta => $item) {

            $url = $item->uri;
            $elements[$delta] = array(
                '#theme' => 'youtube_formatter',
                '#url' => $url,
            );
        }

        return $elements;
    }
}
