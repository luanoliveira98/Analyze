<?php
return (object) [
    "label" => "Equipes",
    "active" => "equipes",
    "model" => "Equipe",
    "route" => "admin.equipes",
    "index" => (object)[
        "title" => "Lista de Equipes",
        "thead" => ['nome'],
        "select" => ['id','nome']
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
        ],
    ],
];