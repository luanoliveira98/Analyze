<?php

return [
    "items" => (object) array(
        "Membros" => (object) array(
            "label" => "Membros",
            "icon"  => "fas fa-users",
            "subitems" => (object) array(
                "Administracao" => (object) array(
                    "label" => "Administração",
                    "route" => "membros.administracao",
                ),
                "Staff" => (object) array(
                    "label" => "Staff",
                    "route" => "membros.staff",
                ),
                "Elenco" => (object) array(
                    "label" => "Elenco",
                    "route" => "membros.elenco",
                ),
            ),
        ),
        "Equipes" => (object) array(
            "label" => "Equipes",
            "route" => "equipes.lista",
            "icon"  => "fas fa-sitemap"
        ),
    )
];