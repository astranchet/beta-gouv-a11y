<?php

return [
    'html' => function($tag) {
        $html = Html::tag(
            'p',
            $tag->value,
            [
                'class' => 'fr-badge',
            ],
        );
        return $html;
    }
];