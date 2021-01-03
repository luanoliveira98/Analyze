<?php

use App\Models\Equipe;

return (object) [
    "label" => "Equipes",
    "active" => "equipes",
    "model" => "Equipe",
    "route" => "equipes",
    "index" => (object)[
        "data" => function(array $select): object 
        {
            return Equipe::select($select)->lines()->get();
        },
        "title" => "Lista de Equipes",
        "thead" => ['nome', 'nivel'],
        "select" => ['id','nome', 'nivel']
    ],
    "create" => (object)[
        "title" => "Inserir Equipe",
    ],
    "edit" => (object)[
        "title" => "Editar Equipe",
    ],
    "fields" => (object)[
        "nome" => (object)[
            "type" => "text",
            "name" => "nome",
            "label" => "Nome",
            "placeholder" => "Nome da Equipe",
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