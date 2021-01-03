<?php

return [
    "items" => (object) array(
        "Membros" => (object) array(
            "label" => "Membros",
            "icon"  => "fas fa-users",
            "dashboard"  => true,
            "subitems" => (object) array(
                "diretoria" => (object) array(
                    "label" => "Diretoria",
                    "icon"  => "fas fa-user-tie",
                    "route" => "diretoria",
                    "dashboard"  => true,
                ),
                "staff" => (object) array(
                    "label" => "Staff",
                    "icon"  => "fas fa-user-graduate",
                    "route" => "staff",
                    "dashboard"  => true,
                ),
                "elenco" => (object) array(
                    "label" => "Elenco",
                    "icon"  => "fas fa-user-friends",
                    "route" => "elenco",
                    "dashboard"  => true,
                ),
            ),
        ),
        "equipes" => (object) array(
            "label" => "Equipes",
            "route" => "equipes",
            "icon"  => "fas fa-sitemap",
            "dashboard"  => true,
        ),
        "adversarios" => (object) array(
            "label" => "Adversários",
            "route" => "adversarios",
            "icon"  => "fas fa-people-arrows",
            "dashboard"  => true,
        ),
    )
];