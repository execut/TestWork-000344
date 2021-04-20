<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */

namespace App\Faker\Provider;

/**
 * Fake Author provider
 * @package App\Faker\Provider
 */
class Author extends \Faker\Provider\Base
{
    /**
     * Returns fake author name
     * @return string
     */
    public function authorName():string
    {
        return $this->generator->name();
    }
}
