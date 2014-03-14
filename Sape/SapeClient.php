<?php

namespace Anh\SapeBundle\Sape;

class SapeClient extends \SAPE_client
{
    public function __construct($sapeUser, $cacheDir, $options = null)
    {
        $this->sapeUser = $sapeUser;
        $this->cacheDir = $cacheDir;

        if (!is_dir($cacheDir)) {
            if (!mkdir($cacheDir, 0777, true)) {
                throw new \Exception(sprintf("Unable to create directory '%s'", $cacheDir));
            }
        }

        if (!defined('_SAPE_USER')) {
            define('_SAPE_USER', $sapeUser);
        }

        parent::SAPE_client($options);
    }

    public function _get_db_file()
    {
        if ($this->_multi_site) {
            return $this->cacheDir . '/' . $this->_host . '.links.db';
        } else {
            return $this->cacheDir . '/links.db';
        }
    }
}
