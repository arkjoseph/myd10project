<?php

use \Drupal\Core\Form\FormStateInterface;

function sample_subtheme_form_system_theme_settings_alter(&$form,$form_state, $form_id = NULL) {
  $form['sample_subtheme_example'] = [
    '#type' => 'textfield',
    '#title' => t('Widget'),
    '#default_value' => theme_get_settings('sample_subtheme_example'),
    '#description' => t('Place this text in the widget spot on your site.'),
  ];
}
