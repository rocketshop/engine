<?php

namespace Rocket\Engine\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

abstract class ServiceProvider extends BaseServiceProvider
{

    /**
     * [arrayMergeRecursive description]
     * @param  array   $original        [description]
     * @param  array   $array           [description]
     * @param  boolean $keepScalarTypes [description]
     * @return [type]                   [description]
     */
    function arrayMergeRecursive(array $original, array $array, $keepScalarTypes = false)
    {
        if ($keepScalarTypes) {
            $merged = $original;

            foreach ($array as $key => $value) {

                if (is_numeric($key)) {

                     if (!in_array($value, $merged)) {
                        $merged[] = $value;

                     }

                } elseif (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                    $merged[$key] = $this->arrayMergeRecursive($merged[$key], $value, $keepScalarTypes);

                } else {
                    $merged[$key] = $value;

                }

            }

        } else {
            $merged = array_merge_recursive($original, $array);

        }

        return $merged;
    }
}