<?php


//global function. No namespace.

/**
 * alias for \codingbootcamp\tinymvc\request::get
 */

function request($name, $default = null)
    {
        return \codingbootcamp\tinymvc\request::get($name, $default);
    }


