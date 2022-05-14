<?php

    return [
        'wrappedBy'                => \App\Models\Shop\Set::class,
        'relatedEntityRelation'    => 'products',
        'entity'                   => \App\Models\Shop\Product::class,
        'relatedWrappedByRelation' => 'sets',
        'trainer'                  => \Hans\Lilac\Trainers\AdvancedTrainer::class
    ];
