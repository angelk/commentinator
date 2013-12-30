<?php

/*
  Plugin Name: Commentinator
  Plugin URI: https://github.com/angelk/commentinator
  Version: 0.1
  Author: Angel Koilov
  Description: @TODO
 */

function commntinatorCheckComment($commentdata)
{
    if (0 === preg_match('/[а-яА-Я]/imsu', $commentdata['comment_content'])) {
        wp_die('Коментарът трябва да съдържа поне един символ на кирилица');
    }
    return $commentdata;
}

add_action('preprocess_comment', 'commntinatorCheckComment');
