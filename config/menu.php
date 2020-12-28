<?php

return [
    "items" => (object) array(
        "Membros" => (object) array(
            "label" => "Membros",
            "icon"  => "fas fa-users",
            "dashboard"  => true,
            "subitems" => (object) array(
                "administracao" => (object) array(
                    "label" => "Administração",
                    "icon"  => "fas fa-user-tie",
                    "route" => "admin.membros.administracao",
                    "dashboard"  => true,
                ),
                "staff" => (object) array(
                    "label" => "Staff",
                    "icon"  => "fas fa-user-graduate",
                    "route" => "admin.membros.staff",
                    "dashboard"  => true,
                ),
                "elenco" => (object) array(
                    "label" => "Elenco",
                    "icon"  => "fas fa-user-friends",
                    "route" => "admin.membros.elenco",
                    "dashboard"  => true,
                ),
            ),
        ),
        "equipes" => (object) array(
            "label" => "Equipes",
            "route" => "admin.equipes.listar",
            "icon"  => "fas fa-sitemap",
            "dashboard"  => true,
        ),
        "adversarios" => (object) array(
            "label" => "Adversários",
            "route" => "admin.adversarios.listar",
            "icon"  => "fas fa-people-arrows",
            "dashboard"  => true,
        ),
    )
];