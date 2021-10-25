<?php

namespace Ecclesiastical\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;

class Component extends MenuContract {
    public function menus() {
        return [
            'primary'   => esc_html__( 'Primary Sidebar', 'ecclesiastical' ),
            'secondary' => esc_html__( 'Secondary Sidebar', 'ecclesiastical' ),
            'social'    => esc_html__( 'Social Navigation', 'ecclesiastical' )
        ];
    }

	public function enqueue() {
		wp_enqueue_script( 'ecclesiastical-navigation', get_theme_file_uri( 'public/assets/js/app.js' ), [ 'jquery' ], '1.0.0', true );
		wp_localize_script( 'ecclesiastical-navigation', 'ecclesiasticalScreenReaderText', [
            'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'ecclesiastical' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'ecclesiastical' ) . '</span>',
        ] );
	}
}   