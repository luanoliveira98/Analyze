<?php

use App\Models\Equipe;

return (object) [
    "label" => "Adversários",
    "active" => "adversários",
    "model" => "Equipe",
    "route" => "adversarios",
    "index" => (object)[
        "data" => function(array $select): object 
        {
            return Equipe::select($select)->adversarios()->get();
        },
        "title" => "Lista de Adversários",
        "thead" => ['nome', 'nivel'],
        "select" => ['id','nome', 'nivel']
    ],
    "create" => (object)[
        "title" => "Inserir Adversário",
        "save" => function(array $request): bool
        {
            $request['b_adversario'] = 1;
            return Equipe::insert($request);
        }
    ],
    "edit" => (object)[
        "title" => "Editar Adversário",
        "save" => function(array $request, int $id): bool
        {
            $request['b_adversario'] = 1;
            return Equipe::where('id', $id)->update($request);
        }
    ],
    "fields" => (object)[
        "nome" => (object)[
            "type" => "text",
            "name" => "nome",
            "label" => "Nome",
            "placeholder" => "Nome da Equipe Adversária",
            "class" => "col-md-6",
        ],
        "nivel" => (object)[
            "type" => "select",
            "name" => "nivel",
            "label" => "Nível",
            "placeholder" => "Nível na Empoliga",
            "options" => function (): object
            {
                return (object)[
                    "Major" => "Major",
                    "Minor" => "Minor",
                    "Tradicional" => "Tradicional",
                ];
            },
            "class" => "col-md-6",
        ],
    ],
];