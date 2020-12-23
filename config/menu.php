<?php

return [
    "items" => (object) array(
        "Membros" => (object) array(
            "label" => "Membros",
            "icon"  => "fas fa-users",
            "subitems" => (object) array(
                "Administracao" => (object) array(
                    "label" => "Administração",
                    "route" => "admin.membros.administracao",
                ),
                "Staff" => (object) array(
                    "label" => "Staff",
                    "route" => "admin.membros.staff",
                ),
                "Elenco" => (object) array(
                    "label" => "Elenco",
                    "route" => "admin.membros.elenco",
                ),
            ),
        ),
        "Equipes" => (object) array(
            "label" => "Equipes",
            "route" => "admin.equipes.listar",
            "icon"  => "fas fa-sitemap"
        ),
    )
];