<?php
return (object) [
    "label" => "Adversários",
    "active" => "adversários",
    "model" => "Equipe",
    "route" => "admin.adversarios",
    "index" => (object)[
        "title" => "Lista de Adversários",
        "thead" => ['nome', 'nivel'],
        "select" => ['id','nome', 'nivel']
    ],
    "create" => (object)[
        "title" => "Inserir Adversário",
    ],
    "edit" => (object)[
        "title" => "Editar Adversário",
    ],
    "fields" => (object)[
        "nome" => (object)[
            "type" => "text",
            "name" => "nome",
            "label" => "Nome",
            "placeholder" => "Nome da Equipe Adversária",
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
        ],
    ],
];