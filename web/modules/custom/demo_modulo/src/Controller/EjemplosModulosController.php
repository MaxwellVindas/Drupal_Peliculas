<?php
/**
 * Created by PhpStorm.
 * User: Gollo
 * Date: 28/5/2018
 * Time: 08:35
 */
namespace Drupal\demo_modulo\Controller;
use Drupal\Core\Controller\ControllerBase;

class EjemplosModulosController extends ControllerBase{

    public function testDemo(){

        $items = [
            [
                'title' => 'Holas',
                'description' => 'soy una descripcion',
                'hola' => 'soy una variable'
            ],
            [
                'title' => 'Holas 2',
                'description' => 'soy una descripcion 2',
                'hola' => 'soy una variable 2'
            ],
            [
                'title' => 'Holas 3',
                'description' => 'soy una descripcion 3',
                'hola' => 'soy una variable 3'
            ],
        ];

        $build = [
            'items' => [],
            '#prefix' => '<div id="accordion" class="container">',
            '#sufix' => '</div>',
            '#attached' => [
                'library' => [
                    'core/jquery.ui.accordion',
                    'demo_modulo/demo_modulo.accordion',
                ]
            ],
        ];

        foreach ($items as $item){
            $build['items'][] = [
                '#theme' => 'demo_modulo',
                '#title' => $item['title'],
                '#description' => $item['description']
            ];
        }
        return $build;
    }
}