<?php
return (object) [
    "label" => "Equipes",
    "active" => "equipes",
    "model" => "Equipe",
    "controller" => "EquipeController",
    "route" => "equipes",
    "index" => (object)[
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
            "options" => (object)[
                "Major" => "Major",
                "Minor" => "Minor",
                "Tradicional" => "Tradicional",
            ],
            "class" => "col-md-6",
        ],
    ],
];