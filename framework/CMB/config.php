<?php
    add_action( 'cmb2_init','zitalian_cmb2');
    function zitalian_cmb2(){
        $sidebar_position = new_cmb2_box([
            'title'         => 'Sidebar Position',
            'id'            => 'sp',
            'object_types'  => 'page', 
        ]);

        $sidebar_position->add_field([
            'name'      => 'Sidebar Position',
            'id'        => 'sp',
            'type'      => 'select',
            'options'   => [
                'left'       => 'Left Sidebar',
                'right'      => 'Right Sidebar',
                'full'       => 'Full Width',
            ],
            'default'   => 'right',
        ]);

        $menu_info = new_cmb2_box([
            'title'         => 'Menu Item',
            'id'            => 'mi',
            'object_types'  => 'menu',
        ]);
        $menu_info->add_field([
            'name'      => 'Menu Image',
            'id'        => 'image',
            'type'      => 'file',
        ]);
        $menu_info->add_field([
            'name'          => 'Min Price',
            'id'            => 'mp',
            'type'          => 'text_money'
        ]);
        $menu_info->add_field([
            'name'          => 'Max Price',
            'id'            => 'mx',
            'type'          => 'text_money'
        ]);

    }







































