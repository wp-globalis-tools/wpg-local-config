<?php

function wpg_local($key)
{
    return Globalis\WP\LocalConfig\Vars::get($key);
}
