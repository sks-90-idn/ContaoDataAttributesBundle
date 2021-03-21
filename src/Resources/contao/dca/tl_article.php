<?php

/*
 * This file is part of the contao data-attributes bundle.
 *
 * Copyright (c) 2017 Janosch Oltmanns
 *
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('Data-Attribut-Einstellungen', 'date_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('joDataAttributes', 'Attributes', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_article') 
;

PaletteManipulator::create()
    ->addField('joDataAttributesDisableAutomatic', 'Disable Attributes')
    ->applyToPalette('default', 'tl_article') 
;

$GLOBALS['TL_DCA']['tl_article']['fields']['joDataAttributes'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['joDataAttributes'],
    'inputType'               => 'keyValueWizard',
    'exclude'                 => true,
    'sql'                     => "text NULL"
];

$GLOBALS['TL_DCA']['tl_article']['fields']['joDataAttributesDisableAutomatic'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_article']['joDataAttributesDisableAutomatic'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>false, 'tl_class'=>'clr m12'),
    'sql'                     => "char(1) NOT NULL default ''"
];
