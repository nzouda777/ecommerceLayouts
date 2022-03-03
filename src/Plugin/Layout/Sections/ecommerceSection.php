<?php

namespace Drupal\ecommercelayouts\Plugin\Layout\Sections;

use Drupal\formatage_models\Plugin\Layout\Pages\FormatageModelsPages;

/**
 * E-commerce layout section
 * 
 * @Layout(
 * 
 *  id = "ecommercelayout_section",
 *  label = @Translation("E-commerce Home Page section"),
 *  category = @Translation("ecommerce section"),
 *  path = "layouts/Sections",
 *  template = "section",
 *  default_region = "deal_section ",
 *  regions = {
 *      "section_deal" = {
 *          "label" = @Translation("add product with best deal"),
 *      }
 * }
 *  
 * )
 */
    class ecommerceSection extends FormatageModelsPages
    {

    }
?>