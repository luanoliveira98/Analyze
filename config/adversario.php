<?php
return (object) [
    "label" => "Adversários",
    "active" => "adversários",
    "model" => "Equipe",
    "route" => "admin.adversarios",
    "index" => (object)[
        "title" => "Lista de Adversários",
        "thead" => ['nome'],
        "select" => ['id','nome']
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
    ],
];