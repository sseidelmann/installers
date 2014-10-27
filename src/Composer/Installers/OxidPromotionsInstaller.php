<?php
namespace Composer\Installers;

class OxidPromotionsInstaller extends BaseInstaller
{
    protected $locations = array(
        'promotion-bundle' => 'src/Bundle/{$name}/',
    );
}
