<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */

// ex: http://yourdomain.com WITH TRAILING SLASH
@$config['base_url'] = "http://" .  $_SERVER['HTTP_HOST'].'/';

// ex: /sub_dir --> http://yourdomain.com/sub_dir/ WITH TRAILING SLASH
$config['url_extension'] = 'foundation_php/';

// leave blank for mod_rewrite.
// otherwise, include trailing slash
$config['index_page'] = '';

