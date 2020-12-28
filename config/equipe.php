<?php
return (object) [
    "label" => "Equipes",
    "active" => "equipes",
    "route" => "admin.equipes",
    "index" => (object)[
        "title" => "Lista de Equipes",
        "thead" => ['id', 'nome']
    ],
    "create" => (object)[
        "title" => "Inserir Equipe",
        "fields" => (object)[
            "nome" => (object)[
                "type" => "text",
                "name" => "nome",
                "label" => "Nome",
                "placeholder" => "Nome da Equipe",
            ],
        ],
    ],
];