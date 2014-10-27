<?php
namespace Composer\Installers;

class OxidPromotionsInstaller extends BaseInstaller
{
    protected $locations = array(
        'bundle' => 'src/Bundle/{$name}/',
    );
}
