<?php

namespace Drupal\ecommercelayouts\Plugin\Layout\Pages;

use Drupal\formatage_models\Plugin\Layout\Pages\FormatageModelsPages;


/**
 * E-commerce layout page header
 * 
 * @Layout(
 * 
 *  id = "ecommercelayout_page",
 *  label = @Translation("E-commerce Home Page"),
 *  category = @Translation("ecommerce layout"),
 *  path = "layouts/header",
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
    class ecommercePage extends FormatageModelsPages
    {

    }
?>