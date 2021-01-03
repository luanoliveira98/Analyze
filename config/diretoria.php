<?php

use Carbon\Carbon;
use App\Models\Usuario;
use App\Models\UsuarioTag;
use Illuminate\Support\Facades\Hash;

return (object) [
    "label" => "Diretoria",
    "active" => "membros",
    "model" => "Usuario",
    "route" => "diretoria",
    "index" => (object)[
        "data" => function(array $select): object 
        {
            return Usuario::select($select)->diretoria()->get();
        },
        "title" => "Lista de Diretores",
        "thead" => ['nome', 'email', 'nick'],
        "select" => ['id','nome', 'email', 'nick']
    ],
    "create" => (object)[
        "title" => "Inserir Diretor",
        "save" => function(array $request): object
        {
            // Coloca hash na senha
            $request['senha'] = Hash::make($request['senha']);
            unset($request['confirmar_senha']);

            // Salva usuário
            $usuarioId = Usuario::create($request)->id;

            // Cria data e salva tag de usuário
            $data = array(
                "usuario_id" => $usuarioId,
                "nivel" => 'Diretoria'
            );
            return UsuarioTag::create($data);
        }
    ],
    "edit" => (object)[
        "title" => "Editar Diretor",
        "data" => function(int $id): object 
        {
            return Usuario::select(['id', 'nome', 'nick', 'email'])->where('id', $id)->first();
        },
        "save" => function(array $request, int $id): bool
        {
            // Verifica se vai ter mudança na senha ou não
            if(isset($request['senha'])) $request['senha'] = Hash::make($request['senha']);
            else unset($request['senha']);
            unset($request['confirmar_senha']);

            // Atualiza usuário
            return Usuario::where('id', $id)->update($request);
        }
    ],
    "fields" => (object)[
        "nome" => (object)[
            "type" => "text",
            "name" => "nome",
            "label" => "Nome",
            "placeholder" => "Nome",
            "class" => "col-md-6",
        ],
        "nick" => (object)[
            "type" => "text",
            "name" => "nick",
            "label" => "Nick",
            "placeholder" => "Nick no League of Legends",
            "class" => "col-md-6",
        ],
        "email" => (object)[
            "type" => "email",
            "name" => "email",
            "label" => "Email",
            "placeholder" => "Email de acesso",
            "class" => "col-md-12",
        ],
        "senha" => (object)[
            "type" => "password",
            "name" => "senha",
            "label" => "Senha",
            "placeholder" => "Senha de acesso",
            "class" => "col-md-6",
        ],
        "confirmar_senha" => (object)[
            "type" => "password",
            "name" => "confirmar_senha",
            "label" => "Confirmar Senha",
            "placeholder" => "Digite novamente a senha",
            "class" => "col-md-6",
        ],
    ],
];