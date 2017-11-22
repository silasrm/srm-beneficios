<?php
/**
 * Plugin Name: SRM Benefícios
 * Plugin URI: http://www.silasribas.com.br
 * Description: Plugin que cria um custom post type Benefícios e adiciona no menu
 * Version: 1.0
 * Author: Silas Ribas
 * Author URI: http://www.silasribas.com.br
 * License: MIT License
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Silas Ribas
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

defined('ABSPATH') or die('No script kiddies please!');

// @see https://developer.wordpress.org/reference/functions/plugin_dir_path/
define('SRM_BENEFICIOS_PLUGIN_PATH', plugin_dir_path(__FILE__));

add_action('init', 'srmb_configuracoes');

function srmb_configuracoes()
{
    register_post_type(
        'beneficio',
        array(
            'labels' => array(
                'name' => __('Benefícios'),
                'menu_name' => __('Benefícios'),
                'singular_name' => __('Benefício'),
                'all_items' => __('Todos os Benefícios'),
                'add_new' => __('Novo Benefício'),
                'add_new_item' => __('Criar Novo Benefício'),
                'edit' => __('Editar'),
                'edit_item' => __('Editar Benefício'),
                'new_item' => __('Novo Benefício'),
                'view' => __('Ver Benefício'),
                'view_item' => __('Ver Benefício'),
                'search_items' => __('Buscar Benefícios'),
                'not_found' => __('Nenhum benefício encontrado'),
                'not_found_in_trash' => __('Nenhum benefício encontrado na lixeira')
            ),
            'rewrite' => array(
                'slug' => 'beneficio',
                'with_front' => true
            ),
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'revisions',
            ),
            'description' => __('Benefícios'),
            'public' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'capability_type' => 'page',
            'hierarchical' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'map_meta_cap' => true,
        )
    );
}
