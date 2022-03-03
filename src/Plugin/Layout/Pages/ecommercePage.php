<?php

namespace Drupal\ecommercelayouts\Plugin\Layout\Pages;

use Drupal\formatage_models\Plugin\Layout\FormatageModels;

/**
 * E-commerce layout page
 * 
 * @Layout(
 * 
 *  id = "ecommercelayout_page",
 *  label = @Translation("E-commerce Home Page"),
 *  category = @Translation("ecommerce layout"),
 *  path = "layouts/pages",
 *  template = "ecommercelayouts/header",
 *  default_region = "header",
 *  regions = {
 *      "headerSlider" = {
 *          "label" = @Translation("Header Slider"),
 *      }
 * }
 *  
 * )
 */
    class ecommercePage extends FormatageModels
    {

    }
?>